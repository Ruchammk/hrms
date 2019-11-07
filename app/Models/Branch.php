<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
  public $table = "branches";  


  protected $fillable = [
        'company_id',
        'created_by',
        'name',
        'address',
        'branch_head',
        'post_code',
        'employees_listing'
        
    ];

}
