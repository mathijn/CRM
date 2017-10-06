<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 05 Oct 2017 19:35:08 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Experience
 * 
 * @property int $id
 * @property int $employee_id
 * @property int $company_id
 * @property \Carbon\Carbon $period_from
 * @property \Carbon\Carbon $period_to
 * @property string $description
 * @property string $experiences
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Company $company
 * @property \App\Models\Employee $employee
 *
 * @package App\Models
 */
class Experience extends Eloquent
{
	protected $casts = [
		'employee_id' => 'int',
		'company_id' => 'int'
	];

	protected $dates = [
		'period_from',
		'period_to'
	];

	protected $fillable = [
		'employee_id',
		'company_id',
		'period_from',
		'period_to',
		'description',
		'experiences'
	];

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class);
	}

	public function employee()
	{
		return $this->belongsTo(\App\Models\Employee::class);
	}
}
