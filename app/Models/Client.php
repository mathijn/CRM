<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 29 Sep 2017 09:49:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Client
 * 
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $company
 * @property int $event_id
 * @property int $category_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Category $category
 * @property \App\Models\Event $event
 * @property \Illuminate\Database\Eloquent\Collection $actions
 *
 * @package App\Models
 */
class Client extends Eloquent
{
	protected $casts = [
		'event_id' => 'int',
		'category_id' => 'int'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'email',
		'phone',
		'company',
		'event_id',
		'category_id'
	];

	public function category()
	{
		return $this->belongsTo(\App\Models\Category::class);
	}

	public function event()
	{
		return $this->belongsTo(\App\Models\Event::class);
	}

	public function actions()
	{
		return $this->hasMany(\App\Models\Action::class);
	}

	public function getFullNameAttribute()
	{
		return $this->first_name . ' ' . $this->last_name;
	}
}
