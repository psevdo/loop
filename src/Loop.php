<?php

namespace psevdo\loop;

class Loop {
	private $amount = 0;

	public function amountSet($amount) {
		$this->amount = $amount;
	}

	public function amountGet() {
		return $this->amount;
	}

	public function startLoop() {
		if($this->amount <= 0)
			return;

		for($i = 0; $i< $this->amount; $i++)
			echo $i.'<br />';
	}
}
