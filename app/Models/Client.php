<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 26 Sep 2017 11:24:09 +0000.
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
 * @property int $event_id
 * @property int $company_id
 * @property int $category_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Category $category
 * @property \App\Models\Company $company
 * @property \App\Models\Event $event
 *
 * @package App\Models
 */
class Client extends Eloquent
{
	protected $casts = [
		'event_id' => 'int',
		'company_id' => 'int',
		'category_id' => 'int'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'email',
		'phone',
		'event_id',
		'company_id',
		'category_id'
	];

	public function category()
	{
		return $this->belongsTo(\App\Models\Category::class);
	}

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class);
	}

	public function event()
	{
		return $this->belongsTo(\App\Models\Event::class);
	}
}
