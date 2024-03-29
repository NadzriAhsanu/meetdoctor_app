<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
      // use HasFactory;
  use SoftDeletes;

  // decleare tabel
  public  $table = "transaction";

  // this field  must type date
  protected $dates = [
         'created_at',
         'updated_at',
         'deleted_at'
  ];

  // declare fillable
  protected $fillable = [
         'appointment_id',
         'config_payment',
         'fee_doctor',
         'fee_specialist',
         'fee_hospital',
         'sub_total',
         'vat',
         'total',
         'created_at',
         'updated_at',
         'deleted_at'
  ];

  public function appointment()
  {
     return $this->belongsTo('App\Models\MasterData\Appointment','appointment_id', 'id');
  }

}
