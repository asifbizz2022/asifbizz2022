@extends('layout.app')
 
@section('page-body')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
    Employees
    </h1>
</div>
<div class="row">
    <div class="col-lg-3 mb-4">
        <div class="card bg-light text-black shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                    <div class='alert alert-success text-center'>
                        <i class="fa fa-user"></i>
                    </div>   
                    </div>
                    <div class="col">
                        Active
                        <span>
                            24
                        </span>
                         
                    </div>
                </div>  
               
            </div>
        </div>
    </div>
    <div class="col-lg-3 mb-4">
       <div class="card bg-light text-black shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                    <div class='alert alert-danger text-center'>
                        <i class="fa fa-user"></i>
                    </div>   
                    </div>
                    <div class="col">
                        Inactive
                        <span>
                            24
                        </span>
                        
                    </div>
                </div>  
               
            </div>
        </div>
    </div>
     <div class="col-lg-3 mb-4">
       <div class="card bg-light text-black shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                    <div class='alert alert-info text-center'>
                        <i class="fa fa-user"></i>
                    </div>   
                    </div>
                    <div class="col">
                        Male
                        <span>
                            24
                        </span>
                        
                    </div>
                </div>  
               
            </div>
        </div>
    </div>
    <div class="col-lg-3 mb-4">
       <div class="card bg-light text-black shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                    <div class='alert alert-warning text-center'>
                        <i class="fa fa-user"></i>
                    </div>   
                    </div>
                    <div class="col">
                        Female
                        <span>
                            24
                        </span>
                         
                    </div>
                </div>  
               
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body p-3">
        <div class="row">
            <div class="col-md-12">
                <span>
                <strong>
                    Add New Employee 
                </strong> 
                </span>
                <span class="float-right mb-0">
                    <button class="float-right btn btn-sm btn-primary" id="add-new">Add new </button>
                </span> 
            </div>
        </div>
       <div id="add-new-form">
       <form action="{{ route('employee-add') }}" method="post" id="add-employee">
            @csrf
            <div class="row mt-3">
                <div class="col-md-3">
                    <label>First Name</label>
                    <input type="text" name="first-name" class="form form-control form-sm" placeholder="First Name"></input>   
                </div>
                 <div class="col-md-3">
                     <label>Last Name</label>
                    <input type="text" name="last-name" class="form form-control form-sm" placeholder="Last Name"></input>   
                </div>
                 <div class="col-md-3">
                     <label>Employee Id</label>
                    <input type="text" name="employee-id" class="form form-control form-sm" placeholder="Employee Id"></input>   
                </div>
                 <div class="col-md-3">
                     <label>Date of Joining</label>
                    <input type="date" name="date-of-joining" class="form form-control form-sm" placeholder="Date of Joining"></input>   
                </div>
            </div>
            
             <div class="row mt-3">
                <div class="col-md-3">
                    <label>Company</label>
                    <input type="text" name="company" class="form form-control form-sm" placeholder="Company"></input>   
                </div>
                 <div class="col-md-3">
                     <label>Location</label>
                    <input type="text" name="location" class="form form-control form-sm" placeholder="Location"></input>   
                </div>
                 <div class="col-md-3">
                     <label>Main Department</label>
                    <input type="text" name="department" class="form form-control form-sm" placeholder="Department"></input>   
                </div>
                 <div class="col-md-3">
                     <label>Designation</label>
                    <input type="text" name="designation" class="form form-control form-sm" placeholder="Designation"></input>   
                </div>
            </div>
            
            <div class="row mt-3">
                <div class="col-md-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form form-control form-sm" placeholder="User Name"></input>   
                </div>
                 <div class="col-md-3">
                     <label>Email</label>
                    <input type="text" name="email" class="form form-control form-sm" placeholder="Email"></input>   
                </div>
                 <div class="col-md-3">
                     <label>Gender</label>
                    <input type="text" name="gender" class="form form-control form-sm" placeholder="Gnder"></input>   
                </div>
                 <div class="col-md-3">
                     <label>Office Shift</label>
                    <input type="text" name="office-shift" class="form form-control form-sm" placeholder="Office Shift"></input>   
                </div>
            </div>
            
             <div class="row mt-3">
                <div class="col-md-3">
                    <label>Date of Birth</label>
                    <input type="text" name="date-of-birth" class="form form-control form-sm" placeholder="Date of Birth"></input>   
                </div>
                 <div class="col-md-3">
                     <label>Contact Number</label>
                    <input type="text" name="contact-number" class="form form-control form-sm" placeholder="Contact Number"></input>   
                </div>
                 <div class="col-md-3">
                     <label>Password</label>
                    <input type="text" name="password" class="form form-control form-sm" placeholder="Password"></input>   
                </div>
                 <div class="col-md-3">
                     <label>Confirm Password</label>
                    <input type="text" name="confirm-password" class="form form-control form-sm" placeholder="Confirm Password"></input>   
                </div>
            </div>
            
             <div class="row mt-3">
                <div class="col-md-3">
                    <label>Role</label>
                    <input type="text" name="role" class="form form-control form-sm" placeholder="Role"></input>   
                </div>
                 <div class="col-md-3">
                     <label>Reports To</label>
                    <input type="text" name="reports-to" class="form form-control form-sm" placeholder="Reports-to"></input>   
                </div>
                 <div class="col-md-6">
                     <label>Leave Categorey</label>
                    <input type="text" name="leave-categorey" class="form form-control form-sm" placeholder="leave-categorey"></input>   
                </div>
                  
            </div>
            
            <div class="row mt-3">
                <div class="col-md-12">
                    <label>Address</label>
                    <input type="text" name="address" class="form form-control form-sm" placeholder="Address"></input>   
                </div>
                
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary" value="Add">Add Employee</button>
            </div>
        </form>
       </div>
       
    </div>
</div>
<br>
<div class="card shadow mb-4">
    
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Of All Employees</h6>
    </div>
    
<div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
        <thead> 
            <th>Action</th>
            <th>Name</th>
            <th>Company</th>
            <th>Contact</th>
            <th>Reports To</th>
            <th>Role</th> 
        </thead> 
        @foreach($result as $rows)
         
        <tbody>
        <tr>
            <td> 
                <a href="{{ route('employee-edit', $rows->user_id ) }}" >
                    <i class="fa fa-edit"></i>
                </a>&nbsp;&nbsp;&nbsp;
                <a href="{{ route('employee-delete', $rows->user_id ) }}">
                 <i class="fa fa-trash"></i>
                </a>  
            </td>
            <td>
                <p>
                {{ $rows->first_name }}
                {{ $rows->last_name }}
                </p>
            </td>
            <td>
                <i>
                Location: SGML 
                <br>
                Department: Admin 
                <br>
                Designation: Admin 
                </i>
            </td>
            <td>
                {{ $rows->first_name }} 
                <br>
                {{ $rows->email }} 
                <br>
                {{ $rows->contact_no }} 

            </td>
            <td>
                --
            </td>
            <td>
                Super
            </td>
        </tr>
        </tbody>
        @endforeach
    </table>
    </div>
</div>
</div>
 

@endsection

