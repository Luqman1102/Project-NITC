<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "Marketplace Jasa Indonesia | Jasain"
		];
		return view('beranda/beranda', $data);
	}
}
