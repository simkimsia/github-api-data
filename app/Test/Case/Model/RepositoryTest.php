<?php
App::uses('Repository', 'Model');

/**
 * Repository Test Case
 *
 */
class RepositoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.repository',
		'app.contributor',
		'app.stargazer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Repository = ClassRegistry::init('Repository');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Repository);

		parent::tearDown();
	}

}
