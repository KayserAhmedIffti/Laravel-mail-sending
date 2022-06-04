<?php

namespace App\Http\Controllers;

use App\Models\mailConfig;
use Illuminate\Http\Request;

use Session;

class MailConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = mailConfig::simplepaginate(5);
       // $posts = mailConfig::all(); //here is the mailConfig is from Model 
         //dd($posts);
         return view('data-show',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'Driver' => 'required', // driver is the column name from database
        //     'Host'=>'required',
        //     'Port'=>'required|integer',
        //     'Username'=>'required',
        //     'Password'=>'required',
        //     'Encryption'=>'required'
        // ]);

        $rules = [
            'Driver' => 'required', // driver is the column name from database
            'Host'=>'required',
            'Port'=>'required|integer',
            'Username'=>'required | email',
            'Password'=>'required',
            'Encryption'=>'required'

        ];
        $cm = [
            'name.required'=>'This field can not be empty',
            'name.max'=>'you name can not be more that 10 character',
            'Username.required'=>'Enter your email',
            'Username.email'=>'Email must be a validate Email',
            'Port.integer'=>'Use only Integer'
        ];
        $this->validate($request,$rules,$cm);
        $crud = new mailConfig(); // we are using model in the controller by instance and have to import in above
        $crud->Driver= $request->Driver; //we are catching name field from database by $crud.name and we are catching form field by using request.name
        $crud->Host= $request->Host;
        $crud->Port= $request->Port;
        $crud->Username = $request->Username;
        $crud->Password= $request->Password;
        $crud->Encryption = $request->Encryption;

        $crud->save();
        session()->flash('msg', 'Data succesfully added');










        // dd($request->all());
        //if it is valid, it will proceed
        //if it is not valid, throw a exception
        mailConfig::create([        // here mailconfig is a model and create is a function build in laravel

            'Driver'=>$request->Driver, // here is the column name from database
            'Host'=>$request->Host,
            'Port'=>$request->Port,
            'Username'=>$request->Username,
            'Password'=>$request->Password,
            'Encryption'=>$request->Encryption

        ]);
           return redirect()->route('mail-configurations'); // because we have mentioned the name from web.php
    }
// if we did not write the name of web.php then we could write redirect('url');
    /**
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $mailConfig = mailConfig::find($id); //Model::primary key match from url id
       // dd($mailConfig);            //here is the array data showing ,mailConfig is the Model
        return view('single-data-show',compact('mailConfig')); //compact alwys take string variable name, 
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mailConfig  $mailConfig
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = mailConfig::findOrFail($id);
        return view('post.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mailConfig  $mailConfig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'Driver' => 'required', // driver is the column name from database
            'Host'=>'required',
            'Port'=>'required|integer',
            'Username'=>'required | email',
            'Password'=>'required',
            'Encryption'=>'required'

        ];
        $cm = [
            'name.required'=>'This field can not be empty',
            'name.max'=>'you name can not be more that 10 character',
            'Username.required'=>'Enter your email',
            'Username.email'=>'Email must be a validate Email',
            'Port.integer'=>'Use only Integer'
        ];
        $this->validate($request,$rules,$cm);
        $crud = mailConfig::find($id); // we are using model in the controller by instance and have to import in above and this id is from Request $request,$id
        $crud->Driver= $request->Driver; //we are catching name field from database by $crud.name and we are catching form field by using request.name
        $crud->Host= $request->Host;
        $crud->Port= $request->Port;
        $crud->Username = $request->Username;
        $crud->Password= $request->Password;
        $crud->Encryption = $request->Encryption;

        $crud->save();

        session()->flash('msg', 'Data succesfully Updated');

        return redirect()->route('data.show.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mailConfig  $mailConfig
     * @return \Illuminate\Http\Response
     */
    public function destroy(mailConfig $post)
    {
        //dd($post);
        $post->delete();


        session()->flash('msg', 'Data succesfully Deleted');
        
        
        return redirect()->route('data.show.index');
    }
}
