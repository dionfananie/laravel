<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Model\Headers;

use App\Quotation; 

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;

class Header extends Controller
{
    //
     public function getForm(){
    	return view('header.form');
    }

    public function display(){

    	$model = Headers::all();

    	return view('header.show')->with('datas', $model);
    }
    

    public function store(Request $data){
		
    	$validation = Validator::make($data->all(), array(
    		'title' => 'required',
    		'sub_title' => 'required',
    		'image' => 'required|mimes:jpg,jpeg,png',

    		));

    	if ($validation->fails()){
    		return Redirect::to('header/form')->witherrors($validation);
    	}


    	$logo = $data->file('image');
    	$upload = 'uploads/logo';
    	$filename = $logo->getClientOriginalName();
    	$success  = $logo->move($upload, $filename);

    	if($success){

		$table = new Headers;    	
		$table->title = $data->Input('title');    	
		$table->sub_title = $data->Input('sub_title');    	
		$table->image = $filename;    	
		$table->save();
		//print_r($table);exit();
		return Redirect::to('header/form')->with('success', "Image Has Been Submitted Succesfully");
	}
    }


     public function getEdit($id){

    	$edit = Headers::find($id);

    	return view('header.update')->with('datas', $edit);
    }

   public function getUpdate(Request $data, $id){

        $validation = Validator::make($data->all(), array(
            'image' => 'required|mimes:jpg,jpeg,png',

            ));

        if ($validation->fails()){
            return Redirect::to('header/update/'.$id)->witherrors($validation);
        }else{

        $logo = $data->file('image');
        $upload = 'uploads/logo';
        $filename = $logo->getClientOriginalName();
        $success  = $logo->move($upload, $filename);

        if($success){
    	$table = new Headers;
        $table = array( 
        'title' => $data->Input('title'),      
        'sub_title' => $data->Input('sub_title'),
        'image' => $filename 
        );
        print_r($table);
        Headers::where('id', $id)->update($table);

    	return Redirect::to('header/show')->with('updatemsg', "Image Has Been Update");
    }}
}

    public function getDelete($id){

    	$model = Headers::find($id);
    	$model->delete();
    	return Redirect::to('header/show')->with('deletemsg', "Image Has Been Deleted!");

    }
}
