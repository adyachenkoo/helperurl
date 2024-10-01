<?php

namespace classes\helperurl;

Class HelperURL
{
    /**
     * @return mixed
     *
     */

    public function getCurPageURL()
    {
        $pageURL = 'http';
        if(isset($_SERVER['https'])) {
            if($_SERVER['https'] == 'on') {$pageURL .= 's';}
        }
        $pageURL .= '://';
        if($_SERVER['SERVER_PORT'] != '80') {
            $pageURL .= $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
        } else {
            $pageURL .= $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        }
        return $pageURL;
    }
}