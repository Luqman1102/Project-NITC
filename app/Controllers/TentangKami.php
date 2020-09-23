<?php

namespace App\Controllers;

class TentangKami extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "Tentang Kami"
		];
		return view('tentang_kami/tentang_kami', $data);
	}
}