<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Client;
use App\Models\Email;
use App\Models\Page;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Collection;

/**
 * Class Controller
 * @package App\Http\Controllers
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	/**
	 * @return static
	 */
	public function getMenuItems() : Collection
	{
		return Page::all()->sortBy('level');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function getAllClients()
	{
		return Client::all();
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function getAllEmails()
	{
		return Email::all();
	}

	public function getAllActions()
	{
		return Action::all();
	}
}
