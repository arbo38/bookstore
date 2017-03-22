<?php

namespace Bookstore\Domain\Customer;

use Bookstore\Domain\Customer;

class Premium extends Customer{
	public function getMonthlyFee():float {
		return 10.0;
	}
	public function getAmoutToBorrow():int {
		return 10;
	}
	public function getType():string {
		return 'Premium';
	}
}