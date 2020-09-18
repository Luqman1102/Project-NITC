<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "Jasain"
		];
		return view('Home', $data);
	}

	public function about()
	{
		$data = [
			'title' => 'Tentang Jasain'
		];
		return view('about', $data);
	}

	public function service()
	{
		$data = [
			'title' => 'Layanan Jasain'
		];
		return view('Services', $data);
	}
}
