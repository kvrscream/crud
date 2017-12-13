<?php

App::uses('AppController', 'Controller');


class UsersController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array("Session", "Auth", "Paginator", "Email");
	public $uses = array("User");
	//Paginete vai dar uma paginação quando cheagar a 10 itens listados 
	public $paginate = ["User" => ["limit" => 10], "order" => ["User.name" => "asc"] ];

	public function login(){
		$this->layout = "login";

		if($this->request->is("post")){
			$dados = $this->request->data;
			if($this->Auth->login($dados)){
				$user = $this->User->Find("first", ["conditions" => ["User.username" => $dados["User"]["username"]  ] ]);
				$this->redirect($this->Auth->redirectUrl());
			} else {
				$this->Session->setFlash(__("Usuários ou senha incorretos!"), "default", array("class" => "danger"));
				$this->redirect("/users/login");
			}
		}

	}

	public function logout(){
  	$this->redirect($this->Auth->logout());
  }


	public function add(){
		if(CakeSession::read("Auth.User") == null ){
			$this->layout = "add";
		}

		if($this->request->is("post")){
			$this->User->validates();
			$this->User->create();
			if($this->User->save($this->request->data)){
				if(CakeSession::read("Auth.User.id") == null){
        	$this->Session->setFlash(__("Usuário salvo com sucesso!"), "default", array("class" => "success"));
					$this->redirect(["action" => "index"]);
				} else {
					$this->Session->setFlash(__("Usuário não pode ser cadastradado!"), "default", array("class" => "danger"));
        	$this->redirect(["action" => "/users/login"]);
        }
			}
		}

		$form_action = "add";

		$this->set(compact("form_action"));

	}

	public function index(){
		//Para Ver a session descomentar o código abaixo.
		//debug(CakeSession::read("Auth.User"));die;
		$this->Paginator->settings = $this->paginate;

		$dados = $this->Paginator->paginate("User");

		$this->set(compact("dados"));

	}


	public function edit($id = null)
	{
		$this->User->id = $id;
		
		$form_action = "edit";

		if($this->request->data){
			$this->User->validates();
			if($this->User->save($this->request->data)){
				$this->Session->setFlash(__("Usuário alterado com sucesso"), "default", array("class" => "success"));
			} else {
				$this->Session->setFlash(__("Ops :(. Ocorreu um erro. Tente novamente!"), "default", array("class" => "danger"));
			}
		}

		$this->request->data = $this->User->read();

		$this->set(compact("form_action", "id"));
		$this->render("add");
	}

	public function view($id = null){
		$this->User->id = $id;
		$dados = $this->User->read();

		$this->set(compact("id", "dados"));

	}


	public function delete($id = null){
		if($this->User->delete($id)){
			$this->Session->setFlash(__("Usuário deletado com sucesso!"), "default", array("class" => "success"));
			$this->redirect("index");
		}
	}


}
