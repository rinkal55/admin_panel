<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class Home extends Controller
{
	public function index(Request $request)
    { 
    	if ($request->input('submit')) 
    	{
        $this->validate($request,[
          'name' => 'required'
          ],[
          'name.required' => ' The name field is required.'
          ]);
    		$data = array();
    		$data['name'] = $request->input('name');
        $data['email'] = $request->input('email');

       if($request->has('logo'))
        {
          $imageName = $request->file('logo');
          $new_name = time().$imageName->getClientOriginalName();
          $destinationPath = storage_path( 'app/public' );
          $imageName->move($destinationPath, $new_name);
          $data['logo'] = $new_name; 
        }
        $data['website'] = $request->input('website');
       
    		$res =  DB::table('company')->insert($data);
      		if($res)
      		{
              session(["greenmsg" => "Record Inserted Successfully"]);
          }
          else
          {
              session(["redmsg" => "Failed"]);
          }
            return redirect('/');
        }
    	return view('add-record');
    }
    public function display(Request $request)
    {
        return view('display-record');
    }
    public function displayedit($id)
    {
        return view('display-record');
    }
    public function edit(Request $request)
    {
    	if($request->input('submit'))
		{
      $this->validate($request,[
          'name' => 'required'
          ],[
          'name.required' => ' The name field is required.'
          ]);
            $data = array();
            $id = $request->input('id');
            $data['name'] = $request->input('name');
            $data['email'] = $request->input('email');

           if($request->has('logo'))
            {
              $imageName = $request->file('logo');
              $new_name = time().$imageName->getClientOriginalName();
              $destinationPath = storage_path( 'app/public/' );
              $imageName->move($destinationPath, $new_name);

              $logo_image = $request->input('logo_image');
              if(!empty($logo_image)){
                   unlink($destinationPath.$logo_image);
              }
              //unlink($destinationPath.$logo_image);
              $data['logo'] = $new_name;  
            }
            else{
              $data['logo'] = $request->input('logo_image');
            }
      
            $data['website'] = $request->input('website');
            
            $res =  DB::table('company')->where('id', $id)->update($data);

            if($res){
                session(["greenmsg" => "Record Updated Successfully"]);
            }else{
                session(["redmsg" => "No Change"]);
            }
        	return redirect('home/display');
       }
    }
    public function delete($id)
    {
      $getdata = DB::table('company')->where('id',$id)->get();
      foreach ($getdata as $v) {
        $imgname = $v->logo;
      }
      $destinationPath = storage_path( 'app/public/' );
        $res = DB::table('company')->where('id', $id)->delete();
        
        if($res){
          unlink($destinationPath.$imgname);
            session(["greenmsg" => "Record Deleted Successfully"]);
        }else{
            session(["redmsg" => "Failed"]);
        }

        return redirect('home/display');
    }

}