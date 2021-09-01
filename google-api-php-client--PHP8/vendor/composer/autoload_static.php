<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd70adc67221c655d24b106d677d73d61
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..',
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..',
        'a8d3953fd9959404dd22d3dfcd0a79f0' => __DIR__ . '/../..',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib3\\' => 11,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
            'Psr\\Cache\\' => 10,
            'ParagonIE\\ConstantTime\\' => 23,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
            'Google\\Auth\\' => 12,
            'Google\\' => 7,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib3\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'ParagonIE\\ConstantTime\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'Google\\Auth\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'Google\\' => 
        array (
            0 => __DIR__ . '/../..',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
    );

    public static $prefixesPsr0 = array (
        'G' => 
        array (
            'Google_Service_' => 
            array (
                0 => __DIR__ . '/..',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..',
        'Google_AccessToken_Revoke' => __DIR__ . '/../..',
        'Google_AccessToken_Verify' => __DIR__ . '/../..',
        'Google_AuthHandler_AuthHandlerFactory' => __DIR__ . '/../..',
        'Google_AuthHandler_Guzzle5AuthHandler' => __DIR__ . '/../..',
        'Google_AuthHandler_Guzzle6AuthHandler' => __DIR__ . '/../..',
        'Google_AuthHandler_Guzzle7AuthHandler' => __DIR__ . '/../..',
        'Google_Client' => __DIR__ . '/../..',
        'Google_Collection' => __DIR__ . '/../..',
        'Google_Exception' => __DIR__ . '/../..',
        'Google_Http_Batch' => __DIR__ . '/../..',
        'Google_Http_MediaFileUpload' => __DIR__ . '/../..',
        'Google_Http_REST' => __DIR__ . '/../..',
        'Google_Model' => __DIR__ . '/../..',
        'Google_Service' => __DIR__ . '/../..',
        'Google_Service_Exception' => __DIR__ . '/../..',
        'Google_Service_Resource' => __DIR__ . '/../..',
        'Google_Task_Composer' => __DIR__ . '/../..',
        'Google_Task_Exception' => __DIR__ . '/../..',
        'Google_Task_Retryable' => __DIR__ . '/../..',
        'Google_Task_Runner' => __DIR__ . '/../..',
        'Google_Utils_UriTemplate' => __DIR__ . '/../..',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd70adc67221c655d24b106d677d73d61::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd70adc67221c655d24b106d677d73d61::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd70adc67221c655d24b106d677d73d61::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitd70adc67221c655d24b106d677d73d61::$classMap;

        }, null, ClassLoader::class);
    }
}
