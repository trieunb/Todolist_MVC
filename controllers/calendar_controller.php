<?php
require_once('controllers/base_controller.php');
require_once('models/work.php');

class CalendarController extends BaseController
{
  function __construct()
  {
    $this->folder = 'calender';
  }

  public function index()
  {
    $this->render('index');
  }
  public function getDataCalendar()
  {
    $works  	= 	Work::all();
    $data   	= 	array('works' => $works);
    $calender 	=	[];
   	foreach ($works as $work) {
   		$calender[]	=	[
   			'id'	=>	$work->id,
   			'title'	=>	$work->work_name,
   			'start'	=>	$work->start_date,
   			// 'end'	=>	$work->end_date,
   		];	
   	}
   	// echo json_encode($calender);
   	echo json_encode(array("events" => $calender));
  }
}