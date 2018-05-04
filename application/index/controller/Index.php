<?php

namespace app\index\controller;

use think\Config;

class Index
{
    public function index()
    {
        echo '<pre>';
        echo json_encode(Config::get(), JSON_PRETTY_PRINT);
        echo '</pre>';
    }

    public function rw()
    {
        var_dump(Config::get('test'));
        Config::set('test', '111');
        var_dump(Config::get('test'));
    }
}
