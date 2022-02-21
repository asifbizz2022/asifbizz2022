@extends('layout.app')
 
@section('page-body')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 text-gray-800">
    Employee Exit
    </h1> 
</div>
 
<div class="card">
<div class="card-body p-3">
    <span>
        <strong>
            List Of All Employee Exit
        </strong> 
    </span> 
    <button class="float-right btn btn-sm btn-primary" id="add-emp-exit">Add New</button>
    <div id="emp-exit-form">
         
        <form method="post" action="" id="form">
            
        </form>
    </div>
</div>
</div>
<br>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Of All Employee Exit</h6>
    </div>
    <div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Action</th>
            <th>Name</th>
            <th>Company</th>
            <th>Contact</th>
            <th>Reports To</th>
            <th>Role</th> 
        </tr>
    </thead> 
  
</table>
</div>
</div>
</div>
<script>
$(document).ready(function(){
     $('#emp-exit-form').hide();
    $('#add-emp-exit').click(function(){
           $('#emp-exit-form').slideToggle();
    });
});
</script>
@endsection