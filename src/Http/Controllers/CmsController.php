<?php

namespace Roocket\Cms\Http\Controllers;

use Roocket\Cms\CmsFacade;

class CmsController extends BaseController
{
    public function index(){
        return CmsFacade::listAdmins();
    }

    public function getUsers(){
        $name = 'admin Panel 3';
            return view('cms::index',compact('name'));
//        return Cms::listUsers();
    }
}
