@extends('layouts.app')
@section('content')

    <div id="main-content">
      <div class="container-fluid">
       <h1>WELCOME CUSTOMER</h1>
       <div class="card">
           <div class="header">
            <div class="col-md-12">


           </div>

      <form  action=" {{route('customers.store') }}" method="post" enctype="multipart/form-data">
        {{-- {!! csrf_field() !!} --}}
        @csrf

        {{-- @method("PATCH") --}}
        <label>Name</label>
        <input type="text" name="customer_name" id="customer_name" class="form-control">
        <label>Address</label>
        <input type="text" name="address" id="address" class="form-control">
        <label>Email</label>
        <input type="email" name="customer_email" id="customer_email" class="form-control">
        <div class="form-group">
          <label>password</label>
          <input type="password" class="form-control" required="" name="password"><br>
        <input type="submit" value="Create" class="btn btn-success">
        </div>
    </form>

  </div>
</div>
      </div>

@stop
