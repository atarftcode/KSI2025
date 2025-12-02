<?php
use PHPUnit\Framework\TestCase;
require __DIR__ . '/../hello.php';

class HelloTest extends TestCase {

    public function testSayHello() {
        $result = sayHello("Atar");
        $this->assertEquals("Hello, Atar", $result);
    }

}
?>
