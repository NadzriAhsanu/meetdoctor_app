<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
     // use HasFactory;
     use SoftDeletes;

     // decleare tabel
     public  $table = "consultation";

     // this field  must type date
     protected $dates = [
            'created_at',
            'updated_at',
            'deleted_at'
     ];

     // declare fillable
     protected $fillable = [
            'name',
            'created_at',
            'updated_at',
            'deleted_at'
     ];

     public function appointment()
     {
        return  $this->hasMany('App\Models\Operational\Appointment', 'consulation_id');
     }
}
