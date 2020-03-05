 <?php

class testClassController
{
	const test_CONSTANT=true;

	public $_publicProperty=true;
	protected $_protectedProperty=true;
	private $privateProperty=true;

	public function public_method() {

		if (true) return true;

		else return false;

		while(true) return true;

		for(true;true;true) return true;

		foreach(array(true) as $var) return true;

		if (true) {
			$test = true;
			$test = true;
		}
		else if (false) {
			$test = false;
		}
		else {
			$test = false;
		}

		while (false) {
			return true;
		}

		for ($i = 0; $i < 10; $i++) {
			$test = true;
			$test = false;
		}

		foreach (array(true) as $var) {
			return true;
		}

		return true;
    }
}