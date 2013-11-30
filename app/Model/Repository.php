<?php
App::uses('AppModel', 'Model');
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

}
