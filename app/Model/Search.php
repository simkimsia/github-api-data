<?php
App::uses('AppModel', 'Model');
require_once(ROOT . DS . 'vendor/simkimsia/github-api-php-sdk/src/search.php');
require_once(APP . DS . 'Config/github.php');
/**
 * Search Model
 *
 */
class Search extends AppModel {

/**
 *
 * store the search results into the respective datatable
 *
 */
	public function store($id = null) {
		// find out start page, last page, and primary_model
		$pages = $this->find('first', [
				'conditions' => ['id' => $id],
				'fields' => [
					'primary_model', 'result_count'
				]
			]
		);

		// find out last page by dividing result_count / 100 + 1
		$resultCount = $pages['Search']['result_count'];

		$range = range(1, 11);

		$repository = ClassRegistry::init('Repository');

		// iterate all the pages
		foreach ($range as $number) {
			set_time_limit(120);
			// grab all the records of primary_model in page
			$github = new GITHUB_CONFIG();
			$apiResult = json_decode(search_repositories('q=php+language:php&per_page=99&page=' . $number, [
				'username' => $github->default['login'],
				'password' => $github->default['password']
				]),true
			);

			// format records into $data
			// do a saveAll on the $data
			$result = $repository->saveMany($apiResult['items']);
		} // end iteration

		return true;
	}

}
