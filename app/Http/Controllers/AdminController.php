<?php
/**
 * Created by PhpStorm.
 * User: Mathijn
 * Date: 26-Sep-17
 * Time: 16:08
 */

namespace App\Http\Controllers;


/**
 * Class AdminController
 * @package App\Http\Controllers
 */
class AdminController extends Controller
{

	/**
	 * @return $this
	 */
	public function index()
	{
		return view('pages.admin.dashboard')->with('data', [
			'menuItems' => $this->getMenuItems(),
			'clients'	=> $this->getAllClients(),
			'actions'	=> $this->getAllActions(),
			'emails'	=> $this->getAllEmails()
		]);
	}

	/**
	 * @return $this
	 */
	public function clients()
	{
		return view('pages.admin.clients')->with('data', [
			'menuItems' => $this->getMenuItems(),
			'clients' 	=> $this->getAllClients()
		]);
	}

	/**
	 * @return $this
	 */
	public function emails()
	{
		return view('pages.admin.emails')->with('data', [
			'menuItems' => $this->getMenuItems(),
		]);
	}

	/**
	 * @return $this
	 */
	public function actions()
	{
		return view('pages.admin.actions')->with('data', [
			'menuItems' => $this->getMenuItems(),
		]);
	}
}