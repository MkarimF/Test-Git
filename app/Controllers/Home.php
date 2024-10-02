<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home/index');
	}

	public function materi()
	{
		return view('materi/index');
	}

	public function latihan()
	{
		return view('latihan/index');
	}
}
