<?php
App::uses('RepositoriesController', 'Controller');

/**
 * RepositoriesController Test Case
 *
 */
class RepositoriesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.repository',
		'app.contributor',
		'app.user',
		'app.stargazer'
	);

}
