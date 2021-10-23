<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListModel;
use App\User;
use Illuminate\Support\Facades\Hash;

class RestroController extends Controller
{
    //
    function index()
    { 
        return view("home");
    }
    function list()
    {
        $data= ListModel::all();
        return view("list",["data"=>$data]);
    }
    function add(Request $req)
    {
        $data=new ListModel();
        $data->name=$req->name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->save();
        $req->session()->flash("status","Your data has been saved successfully");
        return redirect("add");
    }
    function delete($id)
    {
        $data=ListModel::find($id);
        $data->delete();
        return redirect("list");
    }

    function edit($id)
    {
        $data=ListModel::find($id);
        return view("edit",["data"=>$data]);
    }
    function update(Request $req)
    {
        $data=ListModel::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->save();
        $req->session()->flash("status","Your data has been updated successfully");
        return redirect("list");
    }
    function register(Request $req)
    {
        $data=new User();
        $data->name=$req->name;
        $data->email=$req->email;
        $data->password=Hash::make($req->password);
        $data->contact=$req->contact;
        $data->save();
        return redirect("/login");
    }
    function login(Request $req)
    {
        $data=User::where("email",$req->email)->first();
        if(!$data||!Hash::check($req->password,$data->password))
        {
            $req->session()->flash("status","User email or User password is not matched");
            return redirect("login");
        }
        else
        { 
         $session1=$req->session()->put("user",$data);
            return redirect("/");
        }

    }
       
}
