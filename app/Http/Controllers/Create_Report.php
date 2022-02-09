<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
class Create_Report extends Controller
{
    public function index(){
        return view("create_report");
    }
    public function get_report(){
        return view("get_report");
    }
    public function create_report(Request $request)
    {
        $customer=$request->customer;
        $title=$request->title;
        $desc=$request->desc;
        $date=$request->date;
        echo  $customer ."<br>";
        echo  $title ."<br>";
        echo  $desc ."<br>";
        echo  $date ."<br>";
        Report::create([
            "customer"=>$customer,
            "title"=>$title,
            "desc"=>$desc,
            "date"=>$date,
        ]);
echo "Verileriniz eklenmiştir.";
header("Refresh: 3; url=http://localhost:8000");
    }
    public function reports(Request $request){
        $customer=$request->customer;
        $startDate=$request->start_date;
        $endDate=$request->end_date;
        return view('ornek',['raporlar'=>Report::where('date', '>=', $startDate)->where('date', '<=', $endDate)->whereCustomer($customer)->get()]);
        
    }
  
  
    
}
