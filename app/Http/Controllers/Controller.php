<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Category;
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
	//hl get ALL CLIENTS
	public function getAllClients()
	{
		return Client::all();
	}

	//hl get CLIENT
	public function getClient($id)
	{
		return Client::where(['id' => $id])->first();
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	//hl get ALL EMAILS
	public function getAllEmails()
	{
		return Email::all();
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	//hl get ALL ACTIONS
	public function getAllActions()
	{
		return Action::all();
	}

	//hl get ACTION
	public function getAction($id)
	{
		return Action::find($id);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	//hl get ALL CATEGORIES
	public function getAllCategories()
	{
		return Category::all();
	}
}
