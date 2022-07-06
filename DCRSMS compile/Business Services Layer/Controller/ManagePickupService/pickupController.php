<?php

class Index extends pickupController {

  function __construct() {
    parent::__construct();
  }
  
  function index() {
  
    $this->view->allrecords = $this->model->getAllrecords();
    $this->view->render('index/index');
    
  }
  function view_index() 
  {
  /* Auth::handleLogin(); */
    $data = $_GET;
    if($data['account_id']=='')
        {
        $this->view->pick='';
        $this->view->data=$data;
      } 
    else 
      {
        $this->view->pick=$data['account_id'];
        $this->view->content= $this->model->viewOnerecord($data['account_id']);
              }

  $this->view->render('index/view_index');
  }
  }