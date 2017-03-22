<?php

namespace Bookstore\Domain\Customer;

use Bookstore\Domain\Customer;

class Basic extends Customer{
	public function getMonthlyFee():float {
		return 5.0;
	}
	public function getAmoutToBorrow():int {
		return 3;
	}
	public function getType():string {
		return 'Basic';
	}
}
