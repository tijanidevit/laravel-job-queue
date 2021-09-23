<?php

namespace App\Http\Controllers;

use App\Jobs\InsertStaffs;
use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StaffController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        InsertStaffs::dispatch();
        return 'stored';
    }
    public function show(Staff $staff)
    {
        //
    }
    public function edit(Staff $staff)
    {
        //
    }
    public function update(Request $request, Staff $staff)
    {
        //
    }
    public function destroy(Staff $staff)
    {
        //
    }
}
