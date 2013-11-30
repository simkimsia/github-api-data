<?php
App::uses('AppController', 'Controller');
/**
 * Searches Controller
 *
 * @property Search $Search
 * @property PaginatorComponent $Paginator
 */
class SearchesController extends AppController {

/**
 *
 * store into database based on searches
 */
	public function store($id = null) {
		$this->Search->store($id);
	}

}
