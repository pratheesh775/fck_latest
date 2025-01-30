<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    //

    public function create(){
        return view('admin.member.add');
    }

    public function member_list()
    {
        return view('admin.member.list');
    }

}
