<?php

namespace App\Models;

class ClientModel
{
    static $client = "";
    static $data = "";

    public static function init()
    {
        $user = session("user");
        return "<script type='text/javascript'>
                            var Client = new function __Client(){
                            };
                            Client.pageData = new function _ClientPageData(){
                            };
                            Client.data = new function _ClientData(){
                                this.viewer = ".json_encode($user)."
                            }
                        </script>";
    }
    public static function pageData($key, $data)
    {
        $value = is_array($data) ? json_encode($data) : "'". $data ."'";

        static::$data .= " Client.pageData.$key = " . $value . "; ";
    }
    public static function getData()
    {
        return  "<script type='text/javascript'>" . static::$data . " </script>";
    }
}
