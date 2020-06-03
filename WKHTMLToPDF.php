<?php
namespace pdh\WKHTMLToPDF;

class WKHTMLToPDF
{
    const PATH = __DIR__ . '/bin/wkhtmltopdf-amd64';

    public static function getPath()
    {
//        // Switch architecture if needed
//        if(2147483647 == PHP_INT_MAX) {
//            $architecture = 'i386';
//        }else{
//            $architecture = 'amd64';
//        }

        switch (PHP_OS_FAMILY) {
            case 'Windows':
                return __DIR__.'w';
            case 'BSD':
                return __DIR__.'b';
            case 'Darwin':
                return __DIR__.'d';
            case 'Solaris':
                return __DIR__.'s';
            case 'Linux':
                return __DIR__.'l';
            default:
                return null;
        }
    }
}
