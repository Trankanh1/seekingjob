<?php
    function getProtocol()
    {
        
    }

    function assetUrl($path)
    {
        if (isset($_SERVER['HTTPS']) &&
            ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
            isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
            $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {

            return secure_asset($path);
        }

        return asset($path);
        
    }
