<?php
App::uses('AppModel', 'Model');
require_once(ROOT . DS . 'vendor/simkimsia/github-api-php-sdk/src/search.php');
require_once(APP . DS . 'Config/github.php');
/**
 * Repository Model
 *
 * @property Contributor $Contributor
 * @property Stargazer $Stargazer
 */
class Repository extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Contributor' => array(
			'className' => 'Contributor',
			'foreignKey' => 'repository_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Stargazer' => array(
			'className' => 'Stargazer',
			'foreignKey' => 'repository_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	public function store_contributors($id) {
		$this->id = $id;
		$contributorsUrl = $this->field('contributors_url');
		set_time_limit(120);
		// grab all the records of primary_model in page
		$github = new GITHUB_CONFIG();
		$apiResult = json_decode(execute_curl($contributorsUrl, [
			'username' => $github->default['login'],
			'password' => $github->default['password']
			]),true
		);

		foreach ($apiResult as $contributor) {
			$this->Contributor->User->save($contributor);
			$this->Contributor->findXORCreate([
				'user_id' => $contributor['id'],
				'repository_id' => $id
			]);
		}
		return true;
	}

}
