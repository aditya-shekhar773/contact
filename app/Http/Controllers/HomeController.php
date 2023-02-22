<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    public function show(){
        return view('home');
    }

    public function phone(){
        return view("/phone");
    }

    public function edit(){
        return view("/edit");
    }

    public function storeData(Request $req){
        $data = $req->validate([
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'company' => 'required',
            'dob' => 'required',
        ]);

        Contact::create($data);
        // session()->flash("msg","Data inserted successfully");
        return redirect()->route('student.show')->with('msg',"Data inserted successfully")->with('bg','teal');
    }

    public function search(Request  $r):View{
        $search = $r->search;
        $data=Contact::where('name','LIKE',"%$search%")->get();
        return view('home',['sdata'=>$data]);
    }


    public function display(): View{

        $data=Contact::all();
        return view('home',['sdata'=>$data]);
    }


    public function delete($id):RedirectResponse
    {
        Contact::where('id', '=', $id)->delete();
        return redirect()->route('student.show')->with('msg',"Data deleted successfully")->with('bg','red');        
    }
}
