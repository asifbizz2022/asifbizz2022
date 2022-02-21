@extends('layout.app')
 
@section('page-body')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
    Roles And Privilages
    </h1>
</div>
<div class="card">
<div class="card-body p-3">
    <div class="row">
        <div class="col-md-12">
            <span>
                <strong>
                    Add New Role
                </strong> 
            </span> 
            <span class="float-right mb-0">
                <button class="float-right btn btn-sm btn-primary" id="show-add-role-form">Add new </button>
            </span> 
        </div>
    </div>
    <div  id="role-add-form"> 
        <div class="row">
            <div class="col-md-4">
                <form action="{{ route('add-role') }}" method="post" id="add-role" >@csrf
                    <p> 
                        <label>Role Name</label>
                        <input type="text" class="form form-control form-sm" name="role-name" placeholder="Role Name"/>
                    </p>
                    <p>
                        <label>Select Access</label>
                        <select class="form form-control form-sm" name="role-access">
                            <option name="all-menu-access">All menu Access</option>
                            <option name="custom-menu-access">Custom Menu Access</option>
                        </select>
                    </p>
                    <p>
                        <button type="submit" class="btn btn-primary btn-sm">Save</button>
                    </p>
                </form>
            </div>
        </div> 
    </div>
</div>
 

</div>
<br>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List All Role</h6>
    </div>
    <div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
    <thead> 
        <th>Action</th>
        <th>Role Id</th>
        <th>Role Name</th>
        <th>Menu Permission</th>
        <th>Add Delete</th> 
    </thead>
    @foreach($result as $rows)
    <tbody>
        <tr>
              <td> 
                <a href="{{ route('role-edit-form', $rows->role_id ) }}"  >
                    <i class="fa fa-edit"></i>
                </a>&nbsp;&nbsp;&nbsp;
                <a href="{{ route('role-delete', $rows->role_id ) }}">
                 <i class="fa fa-trash"></i>
                </a>  
            </td>
            <td>{{ $rows->role_id }}</td>
            <td>{{ $rows->role_name }}</td>
            <td>{{ $rows->role_access }}</td>
            <td>{{ $rows->created_at }}</td>
        </tr>
    </tbody>
     
@endforeach
</table>
</div>
</div>
</div>
<script>
    $(document).ready(function(){ 
    
        $('#role-add-form').hide();  
        $('#show-add-role-form').click(function(){
            $('#role-add-form').slideToggle(); 
        });

        $('#add-role').on('submit', function(e){ 

            e.preventDefault();

            var type = $(this).attr('method');
            var url = $(this).attr('action');
            var data = $(this).serialize();

            $.ajax({
                type: type,
                url : url,
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,

                success: function(response){
                    console.log(response.role);
                }
            });

        });
    });
</script>
@endsection