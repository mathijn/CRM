<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 26 Sep 2017 11:24:09 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Company
 * 
 * @property int $id
 * @property string $name
 * @property string $website
 * @property string $street
 * @property int $number
 * @property string $zipcode
 * @property string $place
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $clients
 *
 * @package App\Models
 */
class Company extends Eloquent
{
	protected $casts = [
		'number' => 'int'
	];

	protected $fillable = [
		'name',
		'website',
		'street',
		'number',
		'zipcode',
		'place'
	];

	public function clients()
	{
		return $this->hasMany(\App\Models\Client::class);
	}
}
