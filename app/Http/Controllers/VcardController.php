<?php

namespace App\Http\Controllers;

use App\Models\Vcard;
use Illuminate\Http\Request;

class VcardController extends Controller
{
    public function home(){
        $vcard = Vcard::all();
        //select * from vcard

        return view("index", compact("vcard"));
    }

    public function store(Request $request){
       $data = $request->validate([
        // 'name' => 'required| regex:/^[A-z][Z,]$/',
        // 'contact' => 'required|regex:/^[6-9][0-9]{9}$/|unique:vcards,contact',
       'name' => 'required',
       'contact' => 'required',

       ]);

       // store data in the table
       Vcard::create($data);
       return redirect("/");
    }

    public function deleteData(vcard $vcard){
        $vcard->delete();
        
        return redirect("/");
    }
}
