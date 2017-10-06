<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 05 Oct 2017 19:35:07 +0000.
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
 * @property string $number
 * @property string $zipcode
 * @property string $place
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $clients
 * @property \Illuminate\Database\Eloquent\Collection $experiences
 *
 * @package App\Models
 */
class Company extends Eloquent
{
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

	public function experiences()
	{
		return $this->hasMany(\App\Models\Experience::class);
	}
}
