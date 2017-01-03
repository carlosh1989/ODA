<?php

class app{
    private static $options = array(
        'app_id' => 'hello',
    );
    public static function config($key){
        return self::$options[$key];
    }
}

print_r(app::config('app_id'));