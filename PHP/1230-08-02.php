<?php
	class classWithAFinalFunction {
		// I don't need a constructor here because I do not want to automatically launch any functions
		final public function test() {
			echo __CLASS__ . ': It is okay to call test from its source class' . nl2br(PHP_EOL);
		}

	}

	class classWithAPublicFunction extends classWithAFinalFunction {
		public function __construct() {
		// built a constructor here so that instantiating $b calls newTest automatically
			$this->newTest();
		}
		public function newTest() {
			echo __CLASS__ . ': Could not override test() so made newTest()' . nl2br(PHP_EOL);
		}

	}

	$a = new classWithAFinalFunction();
	$a->test();

	$b = new classWithAPublicFunction();