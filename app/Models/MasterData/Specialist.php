<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialist extends Model
{
      // use HasFactory;
      use SoftDeletes;

      // decleare tabel
      public  $table = "specialist";

      // this field  must type date
      protected $dates = [
             'created_at',
             'updated_at',
             'deleted_at'
      ];

      // declare fillable
      protected $fillable = [
             'name',
             'price',
             'created_at',
             'updated_at',
             'deleted_at'
      ];

      public function doctor()
     {
        return  $this->hasMany('App\Models\Operational\Doctor', 'specialist_id');
     }
}
