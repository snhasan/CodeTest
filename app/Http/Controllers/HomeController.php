<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

//Models
use App\data;
use Facades\App\Repository\Users;

class HomeController extends Controller
{
   

    public function welcome()
    {
        return view('welcome');
    }



    public function Inventory_index()
    {

        $data = data::all();

        return view('pages.index' , compact('data'));
        
    }


    public function inventory()
    {
        return view("pages.create");
        
    }


    public function InventoryStore(Request $request)
    { 

            $insert = new data();
            $insert->name = $request->name;
            $insert->email = $request->email;
            $insert->description = $request->description;

//dd($insert);
            if($insert->save()){

           return Redirect::route('data_index')->with(['alert_msg' => 'Inventory stored successfully' , 'alert_status' => 'success']);
        }

        else{

            return back()->with(['alert_msg' => 'Sorry. Something went wrong' , 'alert_status' => 'warning']);
        }
        
    }


}
