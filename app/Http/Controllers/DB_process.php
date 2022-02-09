<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Report;

class DB_process extends Controller
{
    public function add(){

        DB::table("report")->insert([
            "customer"=>"Müşteri 3"
        ]);
    }

    public function update(){

        DB::table("report")->where("id",1)->update([
            "customer"=>"Bu Müşteri Adı Güncellenmiştir."
        ]);
    }
    public function delete(){

        DB::table("report")->where("id",1)->delete();
    }

    public function get_data(){

       /* $datas=DB::table("report")->get();   
        foreach ($datas as $key => $value) {
            echo $value->customer;
            echo "</br> ";
        } */

        $data=DB::table("report")->where("id",3)->first();
        echo $data->customer;
    }

    public function list(){

        $list=Report::find(2);
        echo $list->customer;

    }

    public function add_model(){

        Report::create([
            "customer"=>"Model Dosyasından eklenmiştir.",
        ]);

    }
    public function update_model(){

        Report::whereId(4)->update([
            "customer"=>"Model Dosyası ile güncellenmiştir.",
        ]);

    }
    public function delete_model(Request $request,$id){

        Report::whereId($request->id)->delete();
        echo "Silme işlemi başarılı";
        $geldigi_sayfa = $_SERVER['HTTP_REFERER']; 
        header("Refresh: 3; url=$geldigi_sayfa");

    }



}
