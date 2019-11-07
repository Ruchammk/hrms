<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Workingday extends Model
{
  public $table = "workingdays";  


  protected $fillable = [
        'company_id',
        'admin_id',
        'working_days_group_name',
        'is_company_defaults',
        'working_days',
        'employees_listing'
        // 'created_at',
        // 'updated_at'
        
      
        
    ];

}
