<?php
/**
 * Created by PhpStorm.
 * User: Mathijn
 * Date: 28-Sep-17
 * Time: 14:20
 */

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Validator;

/**
 * Class ClientsController
 * @package App\Http\Controllers
 */
class ClientController extends Controller
{

	protected $rules = [
		'first_name'	=> 'required',
		'last_name'		=> 'required',
		'email'			=> 'email',
	];

	/**
	 * @return $this
	 */
	public function index()
	{
		return view('pages.admin.clients.index')->with('data', [
			'menuItems' => $this->getMenuItems(),
			'clients' 	=> $this->getAllClients()
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('pages.admin.clients.create')->with('data', [
			'menuItems' 			=> $this->getMenuItems(),
			'client_categories'		=> $this->getAllCategories()
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$validator = Validator::make(Input::all(), $this->rules);

		if($validator->fails())
		{
			return Redirect::to('clients/create')
				->withErrors($validator)
				->withInput(Input::all());
		}
		else
		{
			$client = new Client();

			$client->first_name 	= Input::get('first_name');
			$client->last_name 		= Input::get('last_name');
			$client->email 			= Input::get('email');
			$client->phone 			= Input::get('phone');
			$client->category_id 	= Input::get('category');
			$client->company		= Input::get('company');

			$client->save();

			Session::flash('message', 'Successfully added a new client.');
			return Redirect::to('clients');
		}


	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
}