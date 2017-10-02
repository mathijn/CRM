<?php
/**
 * Created by PhpStorm.
 * User: Mathijn
 * Date: 28-Sep-17
 * Time: 14:20
 */

namespace App\Http\Controllers;

use App\Models\Action;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Validator;

/**
 * Class ActionsController
 * @package App\Http\Controllers
 */
class ActionController extends Controller
{

	protected $rules = [
		'subject'	=> 'required|min:3',
		'client_id'	=> 'required'
	];

	/**
	 * @return $this
	 */
	public function index()
	{
		return view('pages.admin.actions.index')
			->with('actions', $this->getAllActions());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('pages.admin.actions.create');
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
			return Redirect::to('actions/create')
				->withErrors($validator)
				->withInput(Input::all());
		}
		else
		{
			$action = new Action();

			$this->save(Input::all(), $action);

			return Redirect::to('actions');
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
		return view('pages.admin.actions.show')
			->with('data', [
				'action'	=> $this->getAction($id)
			]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$action = Action::find($id);
		return view('pages.admin.actions.edit')
			->with('action', $action);
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
			return Redirect::to('actions/' . $id . '/edit')
				->withErros($validator)
				->withInput(Input::all());
		}
		else
		{
			$actionToEdit = Action::find($id);

			$this->save(Input::all(), $actionToEdit);

			return Redirect::to('actions');
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
		dd($id);
		return $id;
	}

	private function save($input, $action)
	{
		$action->subject	= $input['subject'];
		$action->body		= $input['body'];
		$action->client_id	= $input['client_id'];

		$action->save();

		Session::flash('message', 'Successfully added a new client.');
	}
}