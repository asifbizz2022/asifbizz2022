<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class StaffController extends Controller
{
    public function staff_dashboard()
    {
        return view('staff.staff-dashboard');
    } 
    
    public function staff_directory()
    {
        return view('staff.staff-directory');
    }
    public function employee_exit()
    {
       return view('staff.employees-exit');
    }
    public function employee(){
       $result = DB::table('xin_employees')->get();
       return view('staff.employees')->with('result', $result);
    }
    public function employee_last_login()
    {
         return view('staff.employees-last-login');
    }
    public function expired_documents()
    {
       return view('staff.expired-documents');
    }
    public function profile()
    {
        return view('staff/profile');
    }
    public function add_employee(Request $request)
    {
 //       print "<pre>";
 //       print_r($request->post());
        echo $request->post('first_name');

        return response()->json(['msg'=> 'Data Submitted' ]);
    }
    public function edit_employee_form($id){
        
        return view('staff.employee-edit-form')->with('id', $id);
    
          
    }
    public function update_employee($id){
        echo "update ".$id;
    }
    public function delete_employee($id){
        echo "delete ".$id;
    }
    
}
