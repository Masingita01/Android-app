<?php
/**
 * @coversDefaultClass \Masingita01\Demo\Hello
 */
class HelloTest extends \PHPUnit_Framework_TestCase{
    protected $hello;
    
    public function setUp(){
        $this->hello = new \Masingita01\Demo\Hello();
    }
    /**
     * @covers ::world
     */
    public function testWorld(){
        $this->assertSame('world',$this->hello->world());
    }
}
