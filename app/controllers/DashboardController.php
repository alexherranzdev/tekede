<?php

class DashboardController extends BaseController {
	public function index()
	{
		if(Auth::check())
		{
			$data = array();

			$data['title'] = Lang::get('common.default_title');

			return View::make('common/dashboard', $data);
		}
		else{
			return Redirect::to('login');
		}
	}
}