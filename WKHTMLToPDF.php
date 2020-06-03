<?php
namespace pdh\WKHTMLToPDF;

class WKHTMLToPDF
{
    const PATH = __DIR__ . '/bin/wkhtmltopdf';

    /**
     * @return string
     *
     * @throws OSNotSupportedException
     */
    public static function getPath()
    {
        switch (PHP_OS_FAMILY) {
            case 'Darwin':
                return self::PATH.'-mac';
            case 'Linux':
                return self::PATH.'-debian';
            case 'Solaris':
            case 'Windows':
            case 'BSD':
            default:
                throw new OSNotSupportedException('OS is not currently supported.');
        }
    }
}
