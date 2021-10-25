<?php

namespace App\Repositories;

use Illuminate\Http\Request;

interface IUserrepository
{
    public function create(Request $request);
}
