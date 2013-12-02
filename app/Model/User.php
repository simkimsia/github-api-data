<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Contributor $Contributor
 * @property Stargazer $Stargazer
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'login';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Contributor' => array(
			'className' => 'Contributor',
			'foreignKey' => 'user_id',
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
	);

}
