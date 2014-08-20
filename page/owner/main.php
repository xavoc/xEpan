<?php

class page_xEpan_page_owner_main extends page_componentBase_page_owner_main {
	function initMainPage(){

		$this->toolbar->addButton( 'Agency Management' )->js( 'click', $this->js()->univ()->redirect('xEpan_page_owner_agency') );
		$this->toolbar->addButton( 'Epan Management' )->js( 'click', $this->js()->univ()->redirect('xEpan_page_owner_epan') );

		// $tabs= $this->add('Tabs');
		// $tabs->addTabURL('xEpan_page_owner_agency','Agency Management');
		// $tabs->addTabURL('xEpan_page_owner_epan','Epan Management');

		
	}


	function page_config(){
		$this->add('H1')->set('Default Config Page');
	}
}