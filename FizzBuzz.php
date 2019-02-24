<?php

class FizzBuzz
{
    protected static $fizz = 'Fizz';
    protected static $buzz = 'Buzz';
    protected static $result = array();

    public function __construct($param)
    {
        $number = self::isNumber($param);
        if ($number > 1 && $number <= 100) {
            $results = array();
            for ($i = 1; $i <= $number; ++$i) {
                if (0 == $i % 3 && 0 == $i % 5) {
                    $results[$i] = self::getFizzBuzz();
                } elseif (0 == $i % 5) {
                    $results[$i] = self::getBuzz();
                } elseif (0 == $i % 3) {
                    $results[$i] = self::getFizz();
                } else {
                    $results[$i] = $i;
                }
            }
            self::$result = $results;
        }
    }

    public static function isNumber($param)
    {
        if (is_numeric($param)) {
            return trim($param);
        }

        $exception = new Exception('Parameter is not a number');
        return $exception->getMessage();
    }

    public static function getFizz()
    {
        return self::$fizz;
    }

    public static function getBuzz()
    {
        return self::$buzz;
    }

    public static function getFizzBuzz()
    {
        return self::$fizz.self::$buzz;
    }

    public static function getResult()
    {
        return self::$result;
    }
}
