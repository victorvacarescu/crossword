<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CrosswordController extends Controller
{
	public function show(): View
	{
		$json = '[{"name": "John","age": 30,"city": "New York"}]';
		$data = json_decode($json);

		return view('crossword', ['data' => $data]);
	}
}
