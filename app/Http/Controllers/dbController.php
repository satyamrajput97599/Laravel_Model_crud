<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\student ;
class dbController extends Controller
{
    public function index()
    {
        echo "<h1>Getting data from database</h1>";
        $ob=new student();
        $data=$ob->get();
        $data=json_decode(json_encode($data),true);
         print_r($data);
       
    }

    public function database(){
        $data['mydata']=student::all();
        return view('database',$data);
    }

    public function insert(Request $req)
    {
        // echo "<br>Data submitted";
        if($req->input('submit')){
            $n=$req->input('n');
            $c=$req->input('c');
            $ob=new student();
            $ob->name=$n;
            $ob->course=$c;

            $ob->save();
           return redirect()->to('database');
        //   return back()->with("success","Data inserted successfully");
        }else {
        return view('insert');
        }
    }

    public function edit(Request $req)
    {
        if ($req->input('editid')) {
            $id = $req->input('editid');
            $dt = student::find($id);
            
            $dt= json_decode(json_encode($dt),true);
            // print_r($dt);
            return view('edit',["mydata"=>$dt]);
        }
        else
        {
            $n=$req->input('n');
            $c=$req->input('c');
            
            $ob=new student();
            $ob->name=$n;
            $ob->course=$c;
            $ob->save();
           return redirect()->to('database');
        }
    }
    
  

    public function delete(Request $req)
{
    $id = $req->input('delid');
    $ob = new student();
    $ob->where('id', $id)->delete();

    $data['mydata'] = student::all();

    return view('database', $data);
}

    
}
