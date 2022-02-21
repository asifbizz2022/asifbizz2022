@extends('layout.app') 
@section('page-title') Staff Dashboard @endsection
@section('page-body')
<div class="row">
    <div class="col-lg-3 mb-4">
        <div class="card bg-light text-black shadow">
            <div class="card-body"> 
                <h5>
                    <span>{{ $counts }}</span>    
                    Employee</h5>
                <div class="text-black-50 small">
                    <a href="#" class="badge badge-primary">Active</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 mb-4">
        <div class="card bg-light text-black shadow">
            <div class="card-body">
                 <h5>Total Salaries</h5>
                <div class="text-black-50 small">#f8f9fc</div>
            </div>
        </div>
    </div>
     <div class="col-lg-3 mb-4">
        <div class="card bg-light text-black shadow">
            <div class="card-body">
                <h5>Awards</h5>
                <div class="text-black-50 small">#f8f9fc</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 mb-4">
        <div class="card bg-light text-black shadow">
            <div class="card-body">
                <h5>Request</h5>
                <div class="text-black-50 small">#f8f9fc</div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 mb-4">
        <div class="card bg-light text-black shadow">
            <div class="card-body">
                <h5>Total Tickets</h5>
                <div class="text-black-50 small">#f8f9fc</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 mb-4">
        <div class="card bg-light text-black shadow">
            <div class="card-body">
                <h5>Travel Requests</h5>
                <div class="text-black-50 small">#f8f9fc</div>
            </div>
        </div>
    </div>
     <div class="col-lg-3 mb-4">
        <div class="card bg-light text-black shadow">
            <div class="card-body">
                <h5>Training</h5>
                <div class="text-black-50 small">#f8f9fc</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 mb-4">
        <div class="card bg-light text-black shadow">
            <div class="card-body">
                 <h5>Assets</h5>
                <div class="text-black-50 small">#f8f9fc</div>
            </div>
        </div>
    </div>
</div>
 
@endsection
