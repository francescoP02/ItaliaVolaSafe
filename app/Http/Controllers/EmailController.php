<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Email;
use App\Mail\SendNewMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->getValidationRules());

        $data= $request->all();
        $email = new Email();
        $email->fill($data);
        $email->save();
        Mail::to('info@italiavolasafe.it')->send(new SendNewMail($email));
        return redirect()->route('home');
    }

    private function getValidationRules() {
        return [
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => 'required|max:255',
            'company' => 'required|max:255',
            'departure_airport' => 'required|max:255',
            'arrival_airport' => 'required|max:255',
            'flight_number' => 'required|max:255',
            'flight_date' => 'required',
            'discomfort' => 'max:255',
            'tags' => 'nullable|exists:tags,id',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:1024',
        ];
    }
}
