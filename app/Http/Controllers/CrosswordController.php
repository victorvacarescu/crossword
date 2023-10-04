<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\CrosswordObjectBuilder;

class CrosswordController extends Controller
{
	public function show(): View
	{
		// only API found so far
		$response = Http::get("https://www.nytimes.com/svc/crosswords/v6/puzzle/mini.json");

        if ($response->status() !== 200) {
            return null;
        }

        $rawResponse = $response->json();
		$decoded = json_decode(json_encode($rawResponse), FALSE);

		// view data structure
		echo '<pre>';
		print_r($decoded->body[0]->clueLists);
		print_r($decoded->body[0]->clues);
		print_r($decoded->body[0]->cells);
		echo '</pre>';

		// test object builder and template
		$data  = (new CrosswordObjectBuilder())
			->setAnswer('SNOB')
			->setClue('Haughty person')
			->setLength(4)
			->setDate('2023-10-04')
			->setDirection('across')
			->getObject();

		return view('crossword', ['data' => $data]);
	}
}
