<?php
namespace woodworker\string;

/**
 *
 */
class StringTests extends \PHPUnit_Framework_TestCase {

    /**
     * @return array
     */
    public function startsWithProvider() {
        return [
            ['Hello Hello', '', true],
            ['Hello Hello', 'Hello', true],
            ['Hello Hello', 'ello', false],
        ];
    }

    /**
     * @dataProvider startsWithProvider
     * @param $haystack
     * @param $needle
     * @param $result
     */
    public function testStartsWith($haystack, $needle, $result) {
        $this->assertEquals($result, starts_with($haystack, $needle));
    }

    /**
     * @return array
     */
    public function endsWithProvider() {
        return [
            ['Hello Hello', '', true],
            ['Hello Hello', 'lo', true],
            ['Hello Hello', 'Hell', false],
        ];
    }

    /**
     * @dataProvider endsWithProvider
     * @param $haystack
     * @param $needle
     * @param $result
     */
    public function testEndsWith($haystack, $needle, $result) {
        $this->assertEquals($result, ends_with($haystack, $needle));
    }

    /**
     * @return array
     */
    public function inStringProvider() {
        return [
            ['Hello Hello', '', false, false],
            ['Hello Hello', 'lo', false, true],
            ['Hello Hello', 'Hell', false, true],
            ['Hello Hello', 'hello', false, false],
            ['Hello Hello', 'hello', true, true],
        ];
    }

    /**
     * @dataProvider inStringProvider
     * @param $haystack
     * @param $needle
     * @param $result
     */
    public function testInString($haystack, $needle, $caseInsensitive, $result) {
        $this->assertEquals($result, in_string($haystack, $needle, $caseInsensitive));
    }
}

