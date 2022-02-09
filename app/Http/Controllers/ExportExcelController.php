<?php

namespace App\Http\Controllers;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use DB;

class ExportExcelController extends Controller
{
   

    public function exporte(Request $request) 
    {
        $customer=$request->customer;
        $startDate=$request->start_date;
        $endDate=$request->end_date;
        $request->all();
        return Excel::download((new UsersExport())
        ->setCustomer($customer)
        ->setStartDate($startDate)
        ->setEndDate($endDate), 'reports.xlsx');
    }
}


?>
