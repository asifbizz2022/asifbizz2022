@extends('layout.app')
 
@section('page-body')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
    Employees Last Login
    </h1>
</div> 
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Employees Last Login</h6>
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
   
</table>
</div>
</div>
</div>
@endsection