<?php
require_once('controllers/base_controller.php');
require_once('models/work.php');

class WorksController extends BaseController
{
  function __construct()
  {
    $this->folder = 'works';
  }

  public function index()
  {
    $works  = Work::all();
    $data   = array('works' => $works);
    $this->render('index', $data);
  }

  public function create()
  {
    $this->render('create', ['message' => '']);
  }

  public function edit()
  {
    //get data by id
    $work = Work::find($_GET['id']);
    $data = array('work' => $work);
    $this->render('edit', $data);
  }

  public function postCreate()
  {
    $data = [
      'work_name'    => $_POST['work_name'],
      'start_date'   => $_POST['start_date'],
      'end_date'     => $_POST['end_date'],
      'status'       => $_POST['status']
    ];
    //insert data
    Work::create($data);
    $this->render('create', ['message' => 'success']);
  }

  public function delete()
  {
    //delete
    Work::delete($_GET['id']);
    //get all data
    $works  = Work::all();
    $data   = array('works' => $works);
    $this->render('index', $data);
  }

}