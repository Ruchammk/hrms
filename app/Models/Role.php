<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  public $table = "roles";  


  protected $fillable = [
        'company_id',
        'created_by',
        'name',
        'description',
        'employees_listing'
        
      
        
    ];

}
