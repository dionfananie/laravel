<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Model\Students;

use App\Quotation; 

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;

class Student extends Controller
{
    //
    public function getForm(){
    	return view('student.form');
    }

    public function showData(){

    	$model = Students::all();

    	return view('student.show')->with('datas', $model);
    }
    

    public function store(Request $data){
		
    	$validation = Validator::make($data->all(), array(
    		'first_name' => 'required| min:3|max:15',
    		'last_name' => 'required| min:3|max:15',
    		'address' => 'required| min:3|max:500',

    		));

    	if ($validation->fails()){
    		return Redirect::to('form')->witherrors($validation);
    	}


		$table = new Students;    	
		$table->first_name = $data->input('first_name');    	
		$table->last_name = $data->input('last_name');    	
		$table->address = $data->input('address');    	
		$table->save();

		return Redirect::to('form')->with('message', "Data Has Been Submitted Succesfully");

    }


     public function editData($id){

    	$edit = Students::find($id);

    	return view('student.edit')->with('datas', $edit);
    }

   public function updateData(Request $formdata, $id){

    	$table = Students::find($id);
    	$table->first_name = $formdata->input('first_name');
    	$table->last_name = $formdata->input('last_name');
    	$table->address = $formdata->input('address');
    	$table->save();

    	return Redirect::to('show')->with('updatemsg', "Data Has Been Update");
    }

    public function deleteData($id){

    	$model = Students::find($id);
    	$model->delete();
    	return Redirect::to('show')->with('deletemsg', "Data Has Been Deleted!");

    }
}

	