@extends('layouts.app')
@section('content')
<div id="main-content">
   <div class="container-fluid">
    <h1>WELCOME CUSTOMER</h1>
    <div class="row">
        <div class="header">
            
        </div>
        
        <div class="body">
            <a href="{{ route('customers.create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
          
            <form id="basic-form" method="POST"  action="{{ route('customers.store') }}"
            enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Customer name</label>
                    <input type="text" class="form-control" required="" name="customer_name">
                </div>
                <div class="form-group">
                    <label>Customer email</label>
                    <input type="email" class="form-control" required="" name="customer_email">
                </div>
                <div class="form-group">
                    <label>password</label>
                    <input type="password" class="form-control" required="" name="password">
                </div>
                <div class="form-group">
                    <label>Customer address</label>
                    <input type="text" class="form-control" required="" name="address">
                </div>
            
               
                <br>
                <button type="submit" class="btn btn-primary">submit</button>
            </form>
            
        </div>
    </div>
</div>    
</div>





@endsection

