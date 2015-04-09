<?php
    /**
     * This class on shows the "dependencies" between tests. It's not actually tessting any class
     */
    class DependencyTest extends PHPUnit_Framework_TestCase{
	
	function test1()
	{
	    $this->assertTrue(true);
	    return 1;
	}
	
	function test2()
	{
	    $this->assertTrue(true);
	    return 2;
	}
	
	function test3()
	{
	    $this->assertTrue(true);
	    return 3;
	}
	
	/**
	 * 
	 * @depends test1
	 * @depends test2
	 * @depends test3
	 */
	function testDependencies($arg1,$arg2,$arg3)
	{
	    $this->assertEquals(1,$arg1);
	    $this->assertEquals(2,$arg2);
	    $this->assertEquals(3,$arg3);
	}
	
	function testCreatedStdClass()
	{
	    $obj = new stdClass();
	    $obj->foo = 'bar';
	    $this->assertTrue(true);
	    return $obj;
	}
	
	/**
	 * @depends testCreatedStdClass
	 */
	function testDependency1($obj)
	{
	    $this->assertEquals('bar',$obj->foo);
	    $obj->foo = 'notbar';
	}
	
	/**
	 * @brief This function shows that dependent classes arguments are modified
	 * @depends testCreatedStdClass
	 */
	function testDependency2($obj)
	{
	    $this->assertEquals('notbar',$obj->foo);
	}
    }