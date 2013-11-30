<?php

class ServersController extends AppController{

	public $uses = array('Server', 'Service');
	public $helpers = array("Html", "Form");

	public function index(){
		$this->set('servers', $this->Server->find('all'));
	}

	public function detail($id){
		$this->set('server', $this->Server->findById($id));
		$this->set('services', $this->Service->findByServerId($id));
	}

	public function add(){

	}

	public function edit($id){
		$this->request->data = $this->Server->findById($id);
	}

	public function delete($id){
		$this->set('server', $this->Server->findById($id));
		if($this->request->is('post')){
			if($this->request->data('Server.you_sure') === "1"){
				
				$this->Server->delete($this->request->data('Server.id'));

				$this->Session->setFlash("Server deleted.");
			}else{
				$this->Session->setFlash("Server NOT deleted.");
			}
			return $this->redirect('/servers');
		}else{
			$this->request->data = $this->Server->findById($id);
		}
	}

	public function save(){
		if ($this->request->is('post')) {
	        // If the form data can be validated and saved...
	        if ($this->Server->save($this->request->data)) {
	            // Set a session flash message and redirect.
	            $this->Session->setFlash('Server Saved!');
	            return $this->redirect('/servers');
	        }
    	}else{
    		$this->Session->setFlash('No post req?!');
    		return $this->redirect('/');
    	}
	}

}

?>