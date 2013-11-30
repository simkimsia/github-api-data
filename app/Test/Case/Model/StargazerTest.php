<?php
App::uses('Stargazer', 'Model');

/**
 * Stargazer Test Case
 *
 */
class StargazerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.stargazer',
		'app.user',
		'app.contributor',
		'app.repository'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Stargazer = ClassRegistry::init('Stargazer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Stargazer);

		parent::tearDown();
	}

}
