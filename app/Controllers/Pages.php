<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		echo "This is a pages controller";
	}
	function showme($page = 'home'){
		if( !is_file(APPPATH.'/Views/pages/'.$page.'.php')){
			// Whoops, we don't have a page for that
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}
		echo view('templates/header');
		echo view('pages/'.$page);
		echo view('templates/footer');
	}
}
