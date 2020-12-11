<?php

namespace App\Http\Controllers;

use App\Models\Table1;
use Illuminate\Support\Collection;
class UserController extends Controller
{
    private $data = array(
        [
            "id" => 1,
            "name" => "Raul",
            "lastname" => "Flores",
            "email" => "raulidavid@hotmail.com"
        ],
        [
            "id" => 2,
            "name" => "Camilo",
            "lastname" => "Sexto",
            "email" => "camilo@ppm.ec"
        ],
        [
            "id" => 3,
            "name" => "Lionel",
            "lastname" => "Messi",
            "email" => "messi10@barca.ec"
        ],
   );

    public function getAllPersons()
    {
        //$persons = Table1::all();
        return response()->json($this->data);
    }

    public function getPerson($id)
    {
        $filtered = collect($this->data)->filter(function ($value) use ($id){
            return $value['id'] == $id;
        });
        //$person = Table1::find($id);
        return response()->json($filtered);
    }

}
