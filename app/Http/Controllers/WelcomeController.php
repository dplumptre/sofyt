<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests\visaRequest;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\schoolRequest;
use App\Models\Visa;
use App\Models\School;
use App\Models\User;
use App\Models\Partner;
use App\Models\Testimony;
use Mews\Captcha\Facades\Captcha;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class WelcomeController extends Controller
{



    public function index()
    {
        $data = Testimony::all();
        return view('welcome/welcome',compact('data'));
    }

    public function about()
    {
        // $admin =  User::create([
        //     'name' => "Admin",
        //     'email' => 'info@overallheuristic.com',
        //     'email_verified_at' => now(),
        //     'password' =>  Hash::make("Service1#"), // password
        //     'remember_token' => Str::random(10),
        //   ]);

       return view('welcome/about');
    }

    public function team()
    {
       return view('welcome/team');
    }



    public function refreshCaptcha()
    {
        $cap =   Captcha::src('math');
        return response()->json(['captcha' => $cap ]);
    }


    public function sp()
    {
    $datapage = Partner::orderBy('name', 'asc')->simplePaginate(12);
    $data = Partner::orderBy('name', 'asc')->get();
       return view('welcome/school-partner', compact('data','datapage'));
    }


    
    public function services()
    {
       return view('welcome/services');
    }



    public function contact()
    {
       return view('welcome/contact');
    }



    public function post_contact(ContactRequest $request)
    {
        Mail::send('partials.contactmail', array(
        
            'name'=> $request->name,
            'email'=>$request->email,
            'msg'=>$request->message
        
        ), function($message) 
        {
            $message->to('info@sofytagency.com')->subject('Contact Form');
        });  
        $request->session()->flash('message.level','success');
        $request->session()->flash('message.content', 'Success! your message has been received');
    
           return back();
    }
  

    public function visa()
    {

       return view('welcome/visa-form');
    }




    public function gallery()
    {
       return view('welcome/gallery');
    }









    public function post_visa(visaRequest $request)
    {

        $email = $request->email;

    $data = Visa::create($request->all());
    Mail::send('partials.visamail', array(
        'fullname'=>	$request->fullname,
        'address'=>	$request->address,
        'email'	=>$request->email,
        'phone'=>	$request->phone,
        'age'=>	$request->age,
        'visacategory'=>	$request->visacategory,
        'validvisa'=>	$request->validvisa,
        'visaexpired'=>	$request->visaexpired,
        'servicerequired'=>	$request->servicerequired,
        'destination'=>	$request->destination,
    
    ), function($message) 
    {
        $message->to('info@sofytagency.com')->subject('Visa Application');
    });  
    // send mail to user
    Mail::send('partials.visamail_reply', array(
        'name'=>	$request->fullname,
    
    ), function($message) use ($email)
    {
        $message->to($email)->subject('Visa Application');
    });  
    $request->session()->flash('message.level','success');
    $request->session()->flash('message.content', 'Success! your message has been received, we will get back to you within 24 hours');

       return back();
    }

 
    public function school()
    {
       return view('welcome/school-form');
    }   

    public function post_school(schoolRequest $request)
    {



        $email = $request->email;
        $data = School::create($request->all());

        Mail::send('partials.schoolmail', array(
            'fullname'=>	$request->fullname,
            'email'=>	$request->email,
            'email'	=>$request->email,
            'phone'=>	$request->phone,
            'program'=>	$request->program,
            'goal'=>	$request->goal,
            'factor'=>	$request->factor,
            'financing'=>	$request->financing,
            'countries'=>	$request->countries,
            'first'=>	$request->first,
            'answeredno'=>	$request->answeredno,
            'gender'=>	$request->gender,
            'grade'=>	$request->grade,
            'motherlevel'=>	$request->motherlevel,
            'fatherlevel'=>	$request->fatherlevel,
            'college'=>	$request->college,
            'collegeanswer'=>	$request->collegeanswer,
            'career'=>	$request->career,
            'knowledge'=>	$request->knowledge,
            'pursuecareer'=>	$request->pursuecareer,
            'takeadvantage'=>	$request->takeadvantage,

        ), function($message) 
        {
            $message->to('info@sofytagency.com')->subject('Foreign School Placement');
        });  
        Mail::send('partials.schoolmail_reply', array(
            'fullname'=>	$request->fullname
        ), function($message) use($email)
        {
            $message->to($email)->subject('Foreign School PLacement');
        });  
        $request->session()->flash('message.level','success');
        $request->session()->flash('message.content', 'Success! your message has been received, we will get back to you within 24 hours');
    
           return back();
   }
       


}
