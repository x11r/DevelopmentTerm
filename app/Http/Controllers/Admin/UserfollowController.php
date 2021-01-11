<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserfollowController extends Controller
{
    public function add(Request $request)
    {
        return view('admin.userfollow.create');
    }

    public function create(Request $request)
    {
        return redirect('admin/userfollow/create');
    }
    public function edit(Request $request)
    {
        return view('admin.userfollow.edit');
    }

    public function update(Request $request)
    {
        return redirect('admin/userfollow');
    }
}
