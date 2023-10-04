<?php

namespace App\Models;

class CrosswordObjectBuilder
{
	private $answer;
	private $clue;
	private $length;
	private $date;
	private $direction;

	public function setAnswer(string $answer) {
		$this->answer = $answer;
		return $this;
	}

	public function setClue(string $clue) {
		$this->clue = $clue;
		return $this;
	}

	public function setLength(int $length) {
		$this->length = $length;
		return $this;
	}

	public function setDate(string $date) {
		$this->date = $date;
		return $this;
	}

	public function setDirection(string $direction) {
		$this->direction = $direction;
		return $this;
	}

	public function getObject() {
		return [
			'answer' => $this->answer,
			'clue' => $this->clue,
			'length' => $this->length,
			'date' => $this->date,
			'direction' => $this->direction,
		];
	}
}
