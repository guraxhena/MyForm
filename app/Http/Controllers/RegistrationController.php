<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Session;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          //
          $registrations = Registration::all();

          return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $request->validate(
        //     [
        //         'name'              =>      'required|string|min:2',
        //         'lastname'          =>      'required|string|min:2',
        //         'email'             =>      'required|email|unique:users,email',
        //         'phone'             =>      'required|numeric|digits:10',
        //         'company'           =>      'required|string|min:10',
        //         'password'          =>      'required|alpha_num|min:6',
        //     ]
        // );
    
        // $registration = new Registration([
        //     'name' => $request->get('name'),
        //     'lastname' => $request->get('lastname'),
        //     'email' => $request->get('email'),
        //     'company' => $request->get('company'),
        //     'phone' => $request->get('phone'),
        //     'password' => $request->get('password'),
        // ]);
        // $registration->save();
        // return redirect('register')->with('status', 'Blog Post Form Data Has Been inserted');
        $rules = [
            'name' => 'required | min:2',
            'lastname' => 'required | min:2',
            'email' => 'required| email | unique:registrations',
            'phone' => 'required | numeric | digits:10 | unique:registrations',
            'password' => 'required|alpha_num',
        ];

        $this->validate($request,$rules);

        $registration = new Registration;
        $registration->name = $request->name;
        $registration->lastname = $request->lastname;
        $registration->email = $request->email;
        $registration->phone = $request->phone;
        $registration->company = $request->company;
        $registration->password = $request->password;
        $registration->save();

        Session::flash('success', 'You are registered');
        return redirect('/register');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
