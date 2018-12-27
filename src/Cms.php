<?php

namespace Roocket\Cms;

use Illuminate\Support\Facades\Auth;
use Roocket\Cms\Models\Admin;

class Cms
{
    public function listAdmins()
    {
        return Admin::all();
    }
}