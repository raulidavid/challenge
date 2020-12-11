<?php

namespace App\Http\Controllers;

use App\Models\Table1;

class UserController extends Controller
{
    public function getAllPersons()
    {
        $persons = Table1::all();
        return response()->json($persons);
    }

    public function getPerson($id)
    {
        $person = Table1::find($id);
        return response()->json($person);
    }
   
}
