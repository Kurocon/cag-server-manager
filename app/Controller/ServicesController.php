<?php

class ServicesController extends AppController{

	public function index(){
		$this->set('services', $this->Service->find('all'));
	}

	public function service($id){

	}

	public function add(){

	}

	public function edit($id){
		$this->request->data = $this->Service->findById($id);
	}

	public function delete($id){
		$this->set('server', $this->Service->findById($id));
		if($this->request->is('post')){
			if($this->request->data('Service.you_sure') === "1"){
				
				$this->Service->delete($this->request->data('Service.id'));

				$this->Session->setFlash("Service deleted.");
			}else{
				$this->Session->setFlash("Service NOT deleted.");
			}
			return $this->redirect('/services');
		}else{
			$this->request->data = $this->Service->findById($id);
		}
	}

	public function save(){
		if ($this->request->is('post')) {
	        // If the form data can be validated and saved...
	        if ($this->Service->save($this->request->data)) {
	            // Set a session flash message and redirect.
	            $this->Session->setFlash('Service Saved!');
	            return $this->redirect('/services');
	        }
    	}else{
    		$this->Session->setFlash('No post req?!');
    		return $this->redirect('/');
    	}
	}

}

?>