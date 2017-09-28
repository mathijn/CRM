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

	public function index()
	{
		return view('pages.admin.dashboard')->with('menuItems', $this->getMenuItems());
	}

	public function clients()
	{
		return view('pages.admin.dashboard')->with('menuItems', $this->getMenuItems());
	}

	public function emails()
	{
		return view('pages.admin.dashboard')->with('menuItems', $this->getMenuItems());
	}

	public function actions()
	{
		return view('pages.admin.dashboard')->with('menuItems', $this->getMenuItems());
	}
}