<?php
/**
 * Project favicon-helper
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 09/02/2023
 * Time: 23:05
 */

namespace nguyenanhung\Libraries\Favicon;

/**
 * Class Favicon
 *
 * @package   nguyenanhung\Libraries\Favicon
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Favicon
{
    const VERSION = '2.0.0';

    /**
     * Function getVersion
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/18/2021 36:14
     */
    public function getVersion(): string
    {
        return self::VERSION;
    }

    /**
     * Function faviconHtml - Function này hỗ trợ return ra 1 đoạn HTML dùng show Favicon, được build từ https://www.favicon-generator.org/
     *
     * @param string $baseUrl
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 30/12/2022 00:06
     *
     * @see      : https://www.favicon-generator.org/
     */
    public function faviconHtml(string $baseUrl = ''): string
    {
        $baseUrl = trim($baseUrl) . '/';
        $html = '<link rel="apple-touch-icon" sizes="57x57" href="' . $baseUrl . 'apple-icon-57x57.png">' . PHP_EOL;
        $html .= '<link rel="apple-touch-icon" sizes="60x60" href="' . $baseUrl . 'apple-icon-60x60.png">' . PHP_EOL;
        $html .= '<link rel="apple-touch-icon" sizes="72x72" href="' . $baseUrl . 'apple-icon-72x72.png">' . PHP_EOL;
        $html .= '<link rel="apple-touch-icon" sizes="76x76" href="' . $baseUrl . 'apple-icon-76x76.png">' . PHP_EOL;
        $html .= '<link rel="apple-touch-icon" sizes="114x114" href="' . $baseUrl . 'apple-icon-114x114.png">' . PHP_EOL;
        $html .= '<link rel="apple-touch-icon" sizes="120x120" href="' . $baseUrl . 'apple-icon-120x120.png">' . PHP_EOL;
        $html .= '<link rel="apple-touch-icon" sizes="144x144" href="' . $baseUrl . 'apple-icon-144x144.png">' . PHP_EOL;
        $html .= '<link rel="apple-touch-icon" sizes="152x152" href="' . $baseUrl . 'apple-icon-152x152.png">' . PHP_EOL;
        $html .= '<link rel="apple-touch-icon" sizes="180x180" href="' . $baseUrl . 'apple-icon-180x180.png">' . PHP_EOL;
        $html .= '<link rel="icon" type="image/png" sizes="192x192" href="' . $baseUrl . 'android-icon-192x192.png">' . PHP_EOL;
        $html .= '<link rel="icon" type="image/png" sizes="32x32" href="' . $baseUrl . 'favicon-32x32.png">' . PHP_EOL;
        $html .= '<link rel="icon" type="image/png" sizes="96x96" href="' . $baseUrl . 'favicon-96x96.png">' . PHP_EOL;
        $html .= '<link rel="icon" type="image/png" sizes="16x16" href="' . $baseUrl . 'favicon-16x16.png">' . PHP_EOL;
        $html .= '<link rel="manifest" href="' . $baseUrl . 'manifest.json">' . PHP_EOL;
        $html .= '<meta name="msapplication-TileColor" content="#ffffff">' . PHP_EOL;
        $html .= '<meta name="msapplication-TileImage" content="' . $baseUrl . 'ms-icon-144x144.png">' . PHP_EOL;
        $html .= '<meta name="theme-color" content="#ffffff">' . PHP_EOL;

        return $html;
    }
}
