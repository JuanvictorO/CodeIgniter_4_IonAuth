<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Home extends BaseController
{
	public function index()
	{
		$model = new UsersModel();

		$data['query'] = $model->getUsers();
		return view('welcome_message', $data);
	}

	//--------------------------------------------------------------------

}
