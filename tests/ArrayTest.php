<?php
namespace woodworker\arrays;

/**
 *
 */
class ArrayTest extends \PHPUnit_Framework_TestCase {

    /**
     * @return array
     */
    public function arrayAnyProvider() {
        return [
            [[1,2,3], function ($item) {return $item == 2;}, true],
            [[1,2,3], function ($item) {return $item == 1;}, true],
            [[1,2,3], function ($item) {return $item == 5;}, false],
        ];
    }

    /**
     * @dataProvider arrayAnyProvider
     * @param $array
     * @param $callback
     * @param $result
     */
    public function testArrayAny($array, $callback, $result) {
        $this->assertEquals($result, array_any($array, $callback));
    }

    /**
     * @return array
     */
    public function arrayAllProvider() {
        return [
            [[1,2,3], function ($item) {return is_int($item);}, true],
            [[1,2,3], function ($item) {return is_numeric($item);}, true],
            [[1,2,3], function ($item) {return $item == 2;}, false],
        ];
    }

    /**
     * @dataProvider arrayAllProvider
     * @param $array
     * @param $callback
     * @param $result
     */
    public function testArrayAll($array, $callback, $result) {
        $this->assertEquals($result, array_all($array, $callback));
    }
}

