<?php
//include file controller need test
require_once('./controllers/calendar_controller.php');
require_once('models/work.php');
require_once('DB.php');
// use PHPUnit\Framework\TestCase;
class CalendarControllerTest extends PHPUnit_Framework_TestCase {
	private $calendar_controller;

	protected function setUp()
    {
        $this->calendar_controller = new CalendarController();
    }
    
    public function testGetDataCalendar1()
    {
    	$this->assertInstanceOf(
            $this->calendar_controller,
            $this->calendar_controller->getDataCalendar('folder')
        );
    }
}
?>