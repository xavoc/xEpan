<?php


class page_xEpan_page_owner_agency extends page_xEpan_page_owner_main {
	function init(){
		parent::init();

		$this->h1->setHtml('Epan Management <small>Agency Management</small>');

		$crud = $this->add('CRUD');
		$crud->setModel('Branch');

	}
}