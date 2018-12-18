<?php

namespace Encore\Register;

use Encore\Admin\Extension;

class Register extends Extension
{
    public $name = 'register';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

//    public $menu = [
//        'title' => 'Register',
//        'path'  => 'register',
//        'icon'  => 'fa-gears',
//    ];
}
