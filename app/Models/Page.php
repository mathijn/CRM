<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 29 Sep 2017 09:49:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Page
 * 
 * @property int $id
 * @property string $name
 * @property string $icon
 * @property string $url
 * @property int $level
 * @property string $color
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Page extends Eloquent
{
	protected $casts = [
		'level' => 'int'
	];

	protected $fillable = [
		'name',
		'icon',
		'url',
		'level',
		'color'
	];
}
