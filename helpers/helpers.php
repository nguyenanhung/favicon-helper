<?php
if (!function_exists('build_favicon_html_tags')) {
    function build_favicon_html_tags($baseUrl = '')
    {
        $fav = new nguyenanhung\Libraries\Favicon\Favicon();

        return $fav->faviconHtml($baseUrl);
    }
}
