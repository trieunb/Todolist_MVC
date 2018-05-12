<?php
//include file controller need test
require_once('./controllers/works_controller.php');
require_once('models/work.php');
require_once('DB.php');
// use PHPUnit\Framework\TestCase;
class WorksControllerTest extends PHPUnit_Framework_TestCase {
	private $works_controller;

	protected function setUp()
    {
        $this->works_controller = new WorksController();
    }
    
    public function testIndex1()
    {
    	$this->assertInstanceOf(
            $this->works_controller,
            $this->works_controller->index('works')
        );
    }
}
?>