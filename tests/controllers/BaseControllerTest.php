<?php
//include file controller need test
require_once('./controllers/base_controller.php');
// use PHPUnit\Framework\TestCase;
class BaseControllerTest extends PHPUnit_Framework_TestCase {
	private $base_controller;

	protected function setUp()
    {
        $this->base_controller = new BaseController();
    }
    
    public function testRender1()
    {
    	header('Location: http://www.example.com/');
    	$this->assertInstanceOf(
            $this->base_controller,
            $this->base_controller->render('folder', 'file', [])
        );
    }
}
?>