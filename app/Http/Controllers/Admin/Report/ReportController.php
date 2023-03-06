<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;


use Carbon\Carbon;


class ReportController extends Controller
{
    
    public function todayreport(){
    	$date=Carbon::now()->format('Y-m-d');

      // dd($date);
    	
    	return view('admin/report/today_order',[
    		'orders'=>Order::where('status',0)->where('date',$date)->get(),

    	]);
    }
     public function todaydelivary(){
    	$date=Carbon::now()->format('Y-m-d');
    	
    	return view('admin/report/today_delivary',[
    		'orders'=>Order::where('status',3)->where('date', $date)->get(),
    		'year_sum'=>Order::where('status',3)->where('date', $date)->sum('paying_amount'),

    	]);
    }
     public function thismonth(){
    	$month=date('F');
    	$data=Order::where('status',3)->where('month',$month)->get();
    	
    	
    	return view('admin/report/this_month_delivary',[
    		'orders'=>Order::where('status',3)->where('month',$month)->get(),
    		'month_sum'=>Order::where('status',3)->where('month',$month)->sum('paying_amount'),

    	]);
    }
     public function thisyear(){
    	$year=Carbon::now()->year;

    
    
    	
    	return view('admin/report/this_year_delivary',[
    		'orders'=>Order::where('status',3)->where('year',$year)->get(),
    		'year_sum'=>Order::where('status',3)->where('year',$year)->sum('paying_amount'),


    	]);
    }








    
    public function reportsearch(){
    	return view('admin/report/report_search');
    }
    public function monthsearch(Request $Request){
    	$month=$Request->month;
    	$data=Order::where('status',3)->where('month',$month)->get();

    	return view('admin/report/this_month_delivary',[
    			'orders'=>Order::where('status',3)->where('month',$month)->get(),
    			'month_sum'=>Order::where('status',3)->where('month',$month)->sum('paying_amount'),
    	]);
    }
      public function yearsearch(Request $Request){
    	$year=$Request->year;
    	$data=Order::where('status',3)->where('year',$year)->get();

    	return view('admin/report/this_year_delivary',[
    			'orders'=>Order::where('status',3)->where('year',$year)->get(),
    			'year_sum'=>Order::where('status',3)->where('year',$year)->sum('paying_amount'),
    	]);
    }

     public function datesearch(Request $Request){

    

     $date=$Request->date;

   


 
    	return view('admin/report/today_delivary',[
    			'orders'=>Order::where('status',3)->where('date',$date)->get(),
    			'year_sum'=>Order::where('status',3)->where('date',$date)->sum('paying_amount'),
    	]);
    }
}
