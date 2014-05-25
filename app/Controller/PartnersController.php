<?php

	class PartnersController extends AppController
	{

		public function index()
		{
			$partners = $this->Partner->find('all');

			$this->set(compact('partners'));
		}

		public function view($id = null)
		{
			if($id == null)
			{
				throw new NotFoundException("Sin informacion del cliente");
				
			}

			$partner = $this->Partner->findById($id);
			if($partner == null)
			{
				throw new NotFoundException();
			}

			$this->set(compact('partner'));
		}

		public function add()
		{
			if($this->request->is('post'))
			{
				if($this->Partner->save($this->request->data))
				{
					$this->redirect(array('action'=>'index'));
				}
			}
		}
	}

 ?>