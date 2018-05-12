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
    $calender =	  [];
    $status   =   '';
   	foreach ($works as $work) {
      switch ($work->status) {
        case 1:
            $status   = 'Planning';
            break;
        case 2:
            $status   = 'Doing';
            break;
        case 3:
            $status   = 'Complete';
            break;
        default:
          $status   = 'No Status';
      }
   		$calender[]	=	[
   			'id'	     =>	$work->id,
   			'title'	  =>	$work->work_name,
   			'start'	  =>	$work->start_date,
   			'end'	    =>	$work->end_date,
   			'status'	=>	$status,
   		];	
   	}
   	echo json_encode(array("events" => $calender));
  }
}