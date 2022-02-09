<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $table= "report";
    protected $fillable=["customer","title","desc","date","created_at","updated_at","start_date","end_date"];
}
