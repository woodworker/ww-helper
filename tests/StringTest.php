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
    public function testEndsWith($haystack, $needle, $result) {
        $this->assertEquals($result, startsWith($haystack, $needle));
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
    public function testStartsWith($haystack, $needle, $result) {
        $this->assertEquals($result, endsWith($haystack, $needle));
    }
}

