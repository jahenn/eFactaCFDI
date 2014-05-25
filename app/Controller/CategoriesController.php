<?php 
	class CategoriesController extends AppController
	{
		public function getCategoryByControllerAction($controller, $action)
		{
			//$this->autoRender = false;
			$this->response->type('json');	

			$this->loadModel('Category');
			$cat = $this->Category->find('first', array(
					'conditions' => array(
							'controller' => $controller,
							'action' => $action
						)
				));
			$this->set(compact('cat'));
					
		}
	}

 ?>