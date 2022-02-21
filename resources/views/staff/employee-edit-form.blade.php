@extends('layout.app') 
@section('page-body')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
    Employee Details
    </h1>
</div>

<nav>
<div class="nav nav-tabs" id="nav-tab" role="tablist">
<button class="nav-link" data-bs-toggle="tab" data-bs-target="#general" type="button"  >General</button>
<button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-picture" type="button" >Profile Picure</button>
<button class="nav-link" data-bs-toggle="tab" data-bs-target="#set-salary" type="button" >Set Salary</button>
<button class="nav-link" data-bs-toggle="tab" data-bs-target="#leaves" type="button" >Leaves</button> 
<button class="nav-link" data-bs-toggle="tab" data-bs-target="#core-hr" type="button"  >Core Hr</button>
<button class="nav-link" data-bs-toggle="tab" data-bs-target="#project-task" type="button" >Project Tasks</button>
<button class="nav-link" data-bs-toggle="tab" data-bs-target="#payslip" type="button"  >Payslips</button>

</div>
</nav>

<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="nav-home-tab">
  <div class="row">
  <div class="col-md-12">
    <div class="card">
    <div class="card-body p-3"> 
    <div>
   <form action="{{ route('employee-update') }}" method="post"  >
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
            <button type="submit" class="btn btn-primary" value="Add"> Save </button>
        </div>
    </form>
   </div>

    </div>
    </div>
  </div>   
  </div>
  </div>
<div class="tab-pane fade" id="profile-picture" role="tabpanel" aria-labelledby="nav-contact-tab">...
 Profile Picture
</div>
<div class="tab-pane fade" id="salary" role="tabpanel" aria-labelledby="nav-contact-tab">...
 Salary
</div>
<div class="tab-pane fade" id="leaves" role="tabpanel" aria-labelledby="nav-contact-tab">...
 Leaves
</div>    
<div class="tab-pane fade" id="core-hr" role="tabpanel" aria-labelledby="nav-contact-tab">...
core hr
</div>
<div class="tab-pane fade" id="project-task" role="tabpanel" aria-labelledby="nav-contact-tab">...
 project task
</div> 
<div class="tab-pane fade" id="payslip" role="tabpanel" aria-labelledby="nav-contact-tab">...
 nav payslip
</div> 
    <div class="tab-pane fade" id="set-salary" role="tabpanel" aria-labelledby="nav-contact-tab">...
Set salary
</div> 
   
</div> 

@endsection
