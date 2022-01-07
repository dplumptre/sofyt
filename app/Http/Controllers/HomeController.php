<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Visa;
use App\Models\School;
use App\Models\Testimony;
use App\Http\Requests\UserRequest;
use App\Http\Requests\TestRequest;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $user = User::all();
        return view('home/home',compact('user'));
    }


    public function visa()
    {
        $data = Visa::orderBy('id','Desc')->simplepaginate(15);  
        return view('home/visa-applications',compact('data'));
    }


    public function create()
    {
        return view('home/create-user');
    }


    public function deleteUser(User $data)
    {
        
        $data->delete();
        return back();
    }

    public function createUser(UserRequest $request)
    {
        $data = User::create(array(
            
            'name' => $request->name,
            'email'=>  $request->email,
            'password' =>  bcrypt($request->password),
        
           ));

           $request->session()->flash('message.level', 'success');
           $request->session()->flash('message.content', 'User  was successfully added!');
    
            return redirect()->route('home.users');  
    }







    public function test()
    {
        $data = Testimony::orderBy('id','Desc')->simplepaginate(15);  
        return view('home/test',compact('data'));
    }


    public function deleteTest(Testimony $data)
    {
        
        $data->delete();
        return back();
    }

    public function createTest()
    {
        return view('home/create-test');
    }

    public function postTest(TestRequest $request)
    {
        $data = Testimony::create(array(
            
            'title' => $request->title,
            'content'=>  $request->content,
        
           ));

           $request->session()->flash('message.level', 'success');
           $request->session()->flash('message.content', 'Testimony  was successfully added!');
    
            return redirect()->route('test');  
    }














    public function school()
    {
        $data= School::orderBy('id','Desc')->simplepaginate(15);  
        return view('home/school-applications',compact('data'));
    }

    public function visaDetails(Visa $details)
    {

        return view('home/visa-applications-details',compact('details'));
    }


    public function visaDelete(Visa $data)
    {
        $data->delete();
        return back();
    }



    public function schoolDetails(School $details)
    {
        return view('home/school-applications-details',compact('details'));
    }

    public function schoolDelete(School $data)
    {
        $data->delete();
        return back();
    }


}
