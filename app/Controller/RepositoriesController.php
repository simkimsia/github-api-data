<?php
App::uses('AppController', 'Controller');
/**
 * Repositories Controller
 *
 * @property Repository $Repository
 * @property PaginatorComponent $Paginator
 */
class RepositoriesController extends AppController {


	public function store_contributors() {
		$results = $this->Repository->find('all', [
			'fields' => ['id'],
			'conditions' => ['id >=' => 3048127 ]
		]);
		foreach ($results as $result) {
			$id = $result['Repository']['id'];
			$this->Repository->store_contributors($id);
		}
	}
}
