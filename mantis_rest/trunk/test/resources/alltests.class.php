<?php

require_once 'test/resources/bugnotetest.class.php';
require_once 'test/resources/bugnotelisttest.class.php';

class resources_AllTests
{
	public static function suite()
	{
		$suite = new PHPUnit_Framework_TestSuite('resources tests');
		$suite->addTestSuite('resources_BugnoteTest');
		$suite->addTestSuite('resources_BugnoteListTest');
		return $suite;
	}
}