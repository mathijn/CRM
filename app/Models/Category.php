<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 05 Oct 2017 19:35:07 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $clients
 *
 * @package App\Models
 */
class Category extends Eloquent
{
	protected $fillable = [
		'name'
	];

	public function clients()
	{
		return $this->hasMany(\App\Models\Client::class);
	}
}
