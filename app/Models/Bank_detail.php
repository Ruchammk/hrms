<?php

namespace App\Models;

/**
 * Class Bank_detail
 * @package App\Models
 */
class Bank_detail extends \Eloquent
{
    protected $fillable = ['
		employee_id', 
		'account_name', 
		'account_number', 
		'bank', 
		'tax_payer_id',
		'bin',
		'employee_rate_of_pay',
		'employee_currency',
		'pan',
		'ifsc',
		'branch',
		'employee_bank_branch_code',
		'employee_bank_swift_code',




  ];
    protected $guarded = [''];

    /**
     * @return mixed
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
