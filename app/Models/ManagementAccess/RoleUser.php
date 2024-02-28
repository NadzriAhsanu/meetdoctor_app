<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class RoleUser extends Model
{
  // use HasFactory;
  use SoftDeletes;

  // decleare tabel
  public  $table = "role_user";

  // this field  must type date
  protected $dates = [
         'created_at',
         'updated_at',
         'deleted_at'
  ];

  // declare fillable
  protected $fillable = [
         'role_id',
         'user_id',
         'created_at',
         'updated_at',
         'deleted_at'
  ];

  public function user()
  {
     return $this->belongsTo('App\Models\User','role_id', 'id');
  }

}
