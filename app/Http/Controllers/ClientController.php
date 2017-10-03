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
		return view('pages.admin.clients.index')
			->with('data', [
				'actions'	=> $this->getAllActions(),
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
		return view('pages.admin.clients.create')
			->with('data', [
				'actions'				=> $this->getAllActions(),
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

			$this->save(Input::all(), $client);

			return Redirect::to('clients');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return ResponseN
	 */
	public function show($id)
	{
		return view('pages.admin.clients.show')
			->with('client', $this->getClient($id));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$client = Client::find($id);

		return view('pages.admin.clients.edit')
			->with('data', [
				'actions'				=> $this->getAllActions(),
				'client_categories'		=> $this->getAllCategories(),
				'client'				=> $client
			]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), $this->rules);

		if($validator->fails())
		{
			return Redirect::to('clients/' . $id . '/edit')
				->withErros($validator)
				->withInput(Input::all());
		}
		else
		{
			$clientToEdit = Client::find($id);

			$this->save(Input::all(), $clientToEdit);

			return Redirect::to('clients');
		}
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

	private function save($input, $client)
	{
		$client->first_name 	= $input['first_name'];
		$client->last_name 		= $input['last_name'];
		$client->email 			= $input['email'];
		$client->phone 			= $input['phone'];
		$client->category_id 	= $input['category_id'];
		$client->company		= $input['company'];

		$client->save();

		Session::flash('message', 'Successfully added a new client.');
	}
}