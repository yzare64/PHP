<?php


namespace App\Helpers\Cart;

interface Test {
    public function test();
}

abstract class MyTest implements Test
{

}

class MySecondTest extends MyTest {

    public function test()
    {
        // TODO: Implement test() method.
    }
}
