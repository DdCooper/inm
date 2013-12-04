<?php
	class PropertysController extends AppController {
		public $helpers = array( 'Html','Form' ) ;
	
		function index() {
        	$this->set('propertys', $this->Property->find('all'));
    	}

		public function view( $id = null )	{
			$this->Property->id = $id ;
			$this->set('property', $this->Property->read() ) ;
		}

		public function getProperties( $url = null ){
			$properties = $this->Property->find('all', array('conditions' => array( 'Property.url = ' => $url, 'Property.publish = 0' ))) ;
			$this->set('publish', $properties );
			$this->render( 'xmlview/yakaz' ) ;
		}
	}
		
?>