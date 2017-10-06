<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Validator;

/**
 * Class ExperienceController
 * @package App\Http\Controllers
 */
class ExperienceController extends Controller
{

	protected $rules = [];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('pages.admin.experiences.index')->with('experiences', $experiences);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('pages.admin.experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$validator = Validator::make(Input::all(), $this->rules);
		if($validator->fails())
		{
			return Redirect::to('experienes.create')
				->withErrors()
				->withInput(Input::all());
		}
		else
		{
			$experience = new Experience();


			$this->save(Input::all(), $experience);

			return Redirect::to('employees/'.Input::get('employee_id'));
		}
    }

	/**
	 * @param $input
	 * @param $action
	 */
	private function save($input, $experience)
	{
		$experience->employee_id	= $input['employee_id'];
		$experience->company_id		= $input['company_id'];
		$experience->subject		= $input['subject'];
		$experience->period_from		= $input['date_from'];
		$experience->period_to		= $input['date_to'];
		$experience->description	= $input['description'];
		$experience->experiences	= $input['experiences'];

		$experience->save();

		Session::flash('message', 'Successfully added a new employee.');
	}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        //
    }
}
