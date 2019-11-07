<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Workinghour extends Model
{
  public $table = "workinghours";  


  protected $fillable = [
        'company_id',
        'admin_id',
        'working_hours_group_name',
        'is_company_defaults',
        'working_hours',
        'employees_listing'
        
      
    ];

}
