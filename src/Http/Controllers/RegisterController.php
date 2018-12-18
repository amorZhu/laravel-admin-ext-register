<?php

namespace Encore\Register\Http\Controllers;

use Encore\Admin\Layout\Content;
use http\Env\Request;
use Illuminate\Routing\Controller;

class RegisterController extends Controller
{
    public function getRegister(Content $content)
    {
        return $content
            ->header('Title')
            ->description('Description')
            ->body(view('register::index'));
    }

    public function postRegister(Request $request) {

    }
}
