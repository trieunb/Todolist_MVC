<?php
require_once('controllers/BaseController.php');
require_once('models/Todolist.php');

class TodolistController extends BaseController
{
  function __construct()
  {
    $this->folder = 'posts';
  }

  public function index()
  {
    $posts = Todolist::all();
    $data = array('todolists' => $posts);
    $this->render('index', $data);
  }
}