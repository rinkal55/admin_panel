<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class Employee extends Controller
{
	public function index(Request $request)
    {
      $company_data= DB::table('company')->get();
    	if ($request->input('submit')) 
    	{
        $this->validate($request,[
          'firstname' => 'required',
          'lastname' => 'required',
          ],[
          'firstname.required' => ' The firstname field is required.',
          'lastname.required' => ' The lastname field is required.'
          ]);

    		$data = array();
    		$data['firstname'] = $request->input('firstname');
        $data['lastname'] = $request->input('lastname');
        $data['company'] = $request->input('company_id'); 
        $data['email'] = $request->input('email');
        $data['phone'] = $request->input('phone');
       
    		$res =  DB::table('employee')->insert($data);
      		if($res)
      		{
              session(["greenmsg" => "Record Inserted Successfully"]);
          }
          else
          {
              session(["redmsg" => "Failed"]);
          }
            return redirect('/displayemplyee');
        }
    	return view('add_emp', ['company_data' => $company_data]);
    }
    public function display(Request $request)
    {
        return view('display_emp');
    }
    public function displayedit($id)
    {
        return view('display_emp');
    }
    public function edit(Request $request)
    {
      $company_data= DB::table('company')->get();
    	if($request->input('submit'))
		{
      $this->validate($request,[
          'firstname' => 'required',
          'lastname' => 'required',
          ],[
          'firstname.required' => ' The firstname field is required.',
          'lastname.required' => ' The lastname field is required.'
          ]);
            $data = array();
            $id = $request->input('id');
            $data['firstname'] = $request->input('firstname');
            $data['lastname'] = $request->input('lastname');
            $data['company'] = $request->input('company_id'); 
            $data['email'] = $request->input('email');
            $data['phone'] = $request->input('phone');

            $res =  DB::table('employee')->where('id', $id)->update($data);

            if($res){
                session(["greenmsg" => "Record Updated Successfully"]);
            }else{
                session(["redmsg" => "No Change"]);
            }
        	return redirect('/displayemplyee');

       }
    }
    public function delete($id)
    {
        $res = DB::table('employee')->where('id', $id)->delete();
        
        if($res){
            session(["greenmsg" => "Record Deleted Successfully"]);
        }else{
            session(["redmsg" => "Failed"]);
        }

        return redirect('/displayemplyee');
    }

}