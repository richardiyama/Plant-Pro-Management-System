<?php

namespace App\Http\Controllers;

use App\JobCard;
use App\RepairJobCard;
use App\PartWorkedOn;
use App\Personnel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Imports\ExcelImport;
use App\Imports\EquipmentMasterListImport;
use App\Imports\PdsdrsImport;
use App\Imports\PdsdrDateReportImport;

use App\Imports\PartWorkedOnImport;
use App\Imports\RowSeveenteen;
use App\Imports\RowTwentySeven;
use App\Imports\RowTwentySix;
use App\Imports\RowTwentyFive;
use App\Imports\RepairJobCardTenImport;
use App\Imports\RepairJobCardNineImport;
use App\Imports\RepairJobCardEightImport;
use App\Imports\RepairJobCardSevenImport;
use App\Imports\RepairJobCardSixImport;
use App\Imports\RepairJobCardFiveImport;
use App\Imports\RepairJobCardFourImport;
use App\Imports\RepairJobCardThreeImport;
use App\Imports\RepairJobCardTwoImport;
use App\Imports\JobCardMaster;
use App\Imports\Labour;
use App\Imports\RepairJobCardImport;
use Maatwebsite\Excel\Facades\Excel;


class JobCardInformation
{

    public $date;
    public $description;
    public $serial_no;
    public $qty;
    public $hours;
    public $repair_code;
    public $unit_price;
    public $job_cards;
}


class JobCardController extends Controller 
{


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$jobCards = DB::table('part_worked_ons')->where('job_date',$start_date)->where('job_date',$end_date)->get();
        return view('jobcard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jobcard()
    {
           
        $parts = DB::table('repair_job_cards')->orderby('repair_job_cards.job_cards')->get();

        // $outside = DB::table('outside_repairs')->orderby('outside_repairs.job_cards')->get();
        

        return view('jobcard.jobcard', compact('parts'))->with('success','Excel Data Imported successfully.');
    }

    public function equipmentMasterList()
    {

        $equipment = DB::table('equipmentmasterlist')->orderby('equipmentmasterlist.fleet_no')->paginate(20);
        return view('jobcard.equipmentlist', compact('equipment'))->with('success','Excel Data Imported successfully.');
    }

    public function pdsdr()
    {

        $pdsdr = DB::table('pdsdrs')->orderby('pdsdrs.fleet_no')->paginate(10);
        return view('jobcard.pdsdr', compact('pdsdr'))->with('success','Excel Data Imported successfully.');
    }


    public function fuelConsumption(Request $request)
    {
    //$pdsdr = DB::table('pdsdrs')->join('pdsdr_date_reports','pdsdrs.created_at','=','pdsdr_date_reports.created_at')->whereBetween('pdsdr_date_reports.date_entry', [$request->get('start_date'), $request->get('end_date')])->where('pdsdr_date_reports.location','=', $request->get('location'))->Where('pdsdrs.fleet_no','=', $request->get('fleet_no'))->sum('pdsdrs.fuel_quantity');
//dd(  $pdsdr);

$start = $request->get('start_date');
$end  = $request->get('end_date');
$fleet = $request->get('fleet_no');
$location = $request->get('location');



$allpdsdrs = DB::table('pdsdrs')
->whereBetween('pdsdrs.date_entry', [$request->get('start_date'), $request->get('end_date')])
->orderby('pdsdrs.fleet_no')->get();

$result = array_column($allpdsdrs->toArray(), 'id');
$results = DB::table('pdsdrs')
->whereNotIn('id',$result)->get();

//$equipment = DB::table('pdsdr_date_reports')->join('pdsdr_date_reports','pdsdrs.date_entry','=','pdsdr_date_reports.date_entry')->get();

//dd($results);

$allpdsdr = $results;







//$first = DB::table('pdsdrs')->join('pdsdr_date_reports','pdsdrs.created_at','=','pdsdr_date_reports.created_at')->where('pdsdr_date_reports.date_entry','=', $request->get('start_date'))->get();

//$second =  $pdsdr = DB::table('pdsdrs')->join('pdsdr_date_reports','pdsdrs.created_at','=','pdsdr_date_reports.created_at')->where('pdsdr_date_reports.date_entry','=', $request->get('end_date'))->select('pdsdrs.hour_meter_reading');

//$fuelConsumption = $pdsdr / ($second - $first);
//dd($first);
      
      return view('jobcard.allpdsdrs')->with(compact('allpdsdr'))->with(compact('start'))->with(compact('end'))->with(compact('fleet'))->with(compact('location'));
      

     
     
    }

  
    
    public function CalculateFuelConsumption()
    {
       

      return view('jobcard.calculateFuelConsumption');

    }


    public function uploadPdsdr(Request $request)
    {
        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx'
        ]);

       
        $check_file_name = $request->file('select_file')->getClientOriginalName();

        $find_file =  DB::table('excel_file_names')->where('file_name',$check_file_name)->first();

      
        if( $find_file == null){
        Excel::import(new PdsdrDateReportImport, request()->file('select_file'));
        Excel::import(new PdsdrsImport, request()->file('select_file'));
       
     
        //$job = JobCard::all();
        //$part = PartWorkedOn::all();
        //$outside = OutsideRepairs::all();
        

      
        DB::table('excel_file_names')->insert([
            'file_name'=> $check_file_name,
         ]); 
     } 

     if( $find_file != null){
         return back()->withErrors('This Excel File has been uploaded before.');
     }
      

        //return view('site.index', compact('sites'));
        return back()->with('success','Excel Data Imported successfully.');
    }


    public function uploadEquipmentMasterList(Request $request)
    {
        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx'
        ]);

       
      
       
        Excel::import(new EquipmentMasterListImport, request()->file('select_file'));
       

        //$job = JobCard::all();
        //$part = PartWorkedOn::all();
        //$outside = OutsideRepairs::all();
        

      
      

        //return view('site.index', compact('sites'));
        return back()->with('success','Excel Data Imported successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx'
        ]);

        $check_file_name = $request->file('select_file')->getClientOriginalName();

        $find_file =  DB::table('excel_file_names')->where('file_name',$check_file_name)->first();

      
        if( $find_file == null){
        //Excel::import(new ExcelImport, request()->file('select_file'));
       // Excel::import(new PartWorkedOnImport, request()->file('select_file'));
       // Excel::import(new RowFifteen, request()->file('select_file'));
       // Excel::import(new RowSixteen, request()->file('select_file'));
        //Excel::import(new RowSeveenteen, request()->file('select_file'));
       // Excel::import(new RowEigthteen, request()->file('select_file'));
        
       
        
        
        
        
        
        
       
        Excel::import(new RepairJobCardImport, request()->file('select_file'));
        Excel::import(new RepairJobCardTwoImport, request()->file('select_file'));
        Excel::import(new RepairJobCardThreeImport, request()->file('select_file'));
        Excel::import(new RepairJobCardFourImport, request()->file('select_file'));
        Excel::import(new RepairJobCardFiveImport, request()->file('select_file'));
        Excel::import(new RepairJobCardSixImport, request()->file('select_file'));
        Excel::import(new RepairJobCardSevenImport, request()->file('select_file'));
        Excel::import(new RepairJobCardEightImport, request()->file('select_file'));
        Excel::import(new RepairJobCardNineImport, request()->file('select_file'));
        Excel::import(new RepairJobCardTenImport, request()->file('select_file'));

        //Excel::import(new Labour, request()->file('select_file'));
        Excel::import(new JobCardMaster, request()->file('select_file'));

        //$job = JobCard::all();
        //$part = PartWorkedOn::all();
        //$outside = OutsideRepairs::all();
        

      
      
      
        
    
            DB::table('excel_file_names')->insert([
               'file_name'=> $check_file_name,
            ]); 
        } 

        if( $find_file != null){
            return back()->withErrors('This Excel File has been uploaded before.');
        }
        //return view('site.index', compact('sites'));
        return back()->with('success','Excel Data Imported successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobCard  $jobCard
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $outside_parts = DB::table('repair_job_cards')
        // ->whereDate('date_of_repair', $request->get('start_date'))
        // ->whereDate('job_date', $request->get('start_date'))
         //->whereDate('date_of_repair', $request->get('end_date'))
        // ->whereDate('job_date', $request->get('end_date'))
        ->whereBetween('date_of_repair', [$request->get('start_date'), $request->get('end_date')])
            //->whereColumn('date_of_repair', 'job_date')
            // ->whereBetween('job_date', [$request->get('start_date'), $request->get('end_date')])
             
            ->select('repair_job_cards.cost','repair_job_cards.outside_cost','repair_job_cards.amount','repair_job_cards.quantity','repair_job_cards.unit_price','repair_job_cards.date_of_repair','repair_job_cards.job_date','repair_job_cards.job_cards');

        $parts = DB::table('repair_job_cards')
       // ->whereDate('date_of_repair', $request->get('start_date'))
       // ->whereDate('job_date', $request->get('start_date'))
        //->whereDate('date_of_repair', $request->get('end_date'))
       // ->whereDate('job_date', $request->get('end_date'))
       ->whereBetween('job_date', [$request->get('start_date'), $request->get('end_date')])
           //->whereColumn('date_of_repair', 'job_date')
           // ->whereBetween('job_date', [$request->get('start_date'), $request->get('end_date')])
            
           ->select('repair_job_cards.cost','repair_job_cards.outside_cost','repair_job_cards.amount','repair_job_cards.quantity','repair_job_cards.unit_price','repair_job_cards.date_of_repair','repair_job_cards.job_date','repair_job_cards.job_cards')->unionAll($outside_parts)->get();
           
           // $parts = DB::table('repair_job_cards')
            
            //->whereBetween('job_date', [$request->get('start_date'), $request->get('end_date')])
            //->select('repair_job_cards.amount','repair_job_cards.date_of_repair','repair_job_cards.job_cards','repair_job_cards.job_date')->orderby('repair_job_cards.job_cards')->get();
            //dd($parts);
            $sum_cost = DB::table('repair_job_cards')->whereBetween('job_date', [$request->get('start_date'), $request->get('end_date')])->sum('repair_job_cards.cost');
           $sum_outside_cost = DB::table('repair_job_cards')->whereBetween('date_of_repair', [$request->get('start_date'), $request->get('end_date')])->sum('repair_job_cards.amount');
            $sum_price_per_part = DB::table('repair_job_cards')->whereBetween('job_date', [$request->get('start_date'), $request->get('end_date')])->selectRaw('SUM(repair_job_cards.quantity * repair_job_cards.unit_price) as total')->pluck('total');
          //dd($sum_price_per_part->first());
           $grand_total = $sum_cost + $sum_outside_cost + $sum_price_per_part->first();
            
          // $grand_total = $sum_outside_cost;

          // $singlefleet = DB::table('part_worked_ons')
          // ->where('job_cards','LIKE', $request->get('fleet_no'))
          // ->select('part_worked_ons.cost','part_worked_ons.outside_cost','part_worked_ons.quantity','part_worked_ons.unit_price','part_worked_ons.job_date','part_worked_ons.job_cards')->orderby('part_worked_ons.job_cards')->paginate(10);
          
           $singlefleet = DB::table('repair_job_cards')
           ->where('job_cards','LIKE', $request->get('fleet_no'))
           ->select('repair_job_cards.amount','repair_job_cards.date_of_repair','repair_job_cards.job_cards')->orderby('repair_job_cards.job_cards')->get();

          $sum_cost_singlefleet = DB::table('repair_job_cards')->where('job_cards','LIKE', $request->get('fleet_no'))->sum('repair_job_cards.cost');
          $sum_outside_cost_singlefleet = DB::table('repair_job_cards')->where('job_cards','LIKE', $request->get('fleet_no'))->sum('repair_job_cards.amount');
          $sum_price_per_part_singlefleet = DB::table('repair_job_cards')->where('job_cards','LIKE', $request->get('fleet_no'))->selectRaw('SUM(repair_job_cards.quantity * repair_job_cards.unit_price) as total')->pluck('total');
        // dd($sum_price_per_part->first());
         $grand_total__singlefleet =  $sum_outside_cost_singlefleet;
           
         //$grand_total__singlefleet =  $sum_cost_singlefleet +  $sum_outside_cost_singlefleet + $sum_price_per_part_singlefleet->first();
           
//dd($parts);
                return view('jobcard.total_repair',compact('parts','grand_total','singlefleet','grand_total__singlefleet'));
         
      // dd( $jobCards = DB::table('part_worked_ons')->where('job_date',$request->get('start_date'))->where('job_date',$request->get('end_date'))->get());
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobCard  $jobCard
     * @return \Illuminate\Http\Response
     */
    public function edit(JobCard $jobCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobCard  $jobCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobCard $jobCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobCard  $jobCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobCard $jobCard)
    {
        //
    }
}
