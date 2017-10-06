<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Validator;

/**
 * Class EmployeeController
 * @package App\Http\Controllers
 */
class EmployeeController extends Controller
{

	protected $rules = [
		'first_name'	=> 'required'
	];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		return view('pages.admin.employees.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('pages.admin.employees.create');
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
			return Redirect::to('employees/create')
				->withErrors($validator)
				->withInput(Input::all());
		}
		else
		{
			$employee = new Employee();

			$this->save(Input::all(), $employee);

			return Redirect::to('employees');
		}
    }

	/**
	 * @param $input
	 * @param $action
	 */
	private function save($input, $employee)
	{
		$employee->first_name		= $input['first_name'];
		$employee->last_name		= $input['last_name'];
		$employee->place			= $input['place'];
		$employee->birth_date		= Carbon::createFromFormat('d-m-Y', $input['birth_date']);
		$employee->driver_license	= $input['driver_license'];
		$employee->job_title		= $input['job_title'];
		$employee->description	= $input['description'];

		$employee->save();

		Session::flash('message', 'Successfully added a new employee.');
	}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
		return view('pages.admin.employees.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
		$employee = Employee::find($employee->id);

		return view('pages.admin.employees.edit')
			->with('employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
    	$validator = Validator::make(Input::all(), $this->rules);
    	
    	if($validator->fails())
		{
			return Redirect::to('employees/' . $employee->id . '/edit')
				->withErros($validator)
				->withInput(Input::all());
		}
		else
		{
			$employeeToEdit = Employee::find($employee->id);

			$this->save(Input::all(), $employeeToEdit);

			return Redirect::to('employees');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
		$action = Employee::find($employee->id);
		$action->delete();

		Session::flash('message', 'Successfully deleted the employees!');
		return Redirect::to('employees');
    }
}
