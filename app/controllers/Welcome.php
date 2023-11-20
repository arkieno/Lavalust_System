<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Welcome extends Controller {
	public function index() {
		$this->call->view('welcome_page');
	}

	public function room() {
		$this->call->view('rooms');
	}

	public function single() {
		$this->call->view('single-blog');
	}

	public function about() {
		$this->call->view('about');
	}

	public function blog() {
		$this->call->view('blog');
	}  	

	public function contact() {
		$this->call->view('contact');
	}  	
	public function elements() {
		$this->call->view('elements');
	}  	
	public function Admin() {
		$this->call->view('Admin');
	}  	
	public function Form() {
		$this->call->view('Form');
	}  
	
	public function Widget() {
		$this->call->view('Widget');
	} 
	
	public function Charts() {
		$this->call->view('Charts');
	} 
	public function Table() {
		$this->call->view('Table');
	}  	
	public function Signin() {
		$this->call->view('Signin');
	}  		
}

