<?php
App::uses('Contributor', 'Model');

/**
 * Contributor Test Case
 *
 */
class ContributorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contributor',
		'app.user',
		'app.stargazer',
		'app.repository'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Contributor = ClassRegistry::init('Contributor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contributor);

		parent::tearDown();
	}

}
