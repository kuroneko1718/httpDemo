<?php


namespace Kuro\HttpDemo;

/**
 * HTTP 请求类
 * Class Http
 * @package Kuro\http
 */
class Http
{
    /**
     * GET 请求方法
     * $param string $url
     * return bool | string
    */
    public static function requestByGet($url)
    {
        return file_get_contents($url);

    }
}