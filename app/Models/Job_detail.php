<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job_detail extends Model
{
     protected $table ='job_details';

     protected $fillable = [
				'employee_id',
				'job_title',
				'department',
				'joining_date',
				'end_date'
}
