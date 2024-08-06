@extends('layouts.app')
@section('content')
 
{{-- <div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body"> --}}
    <div id="main-content">
      <div class="container-fluid">
       <h1>UPDATE CUSTOMER INFO</h1>
       <div class="card">
           <div class="header">
            <div class="col-md-12">
      
      <form action=" {{route('customers.update',['id'=>$item->id]) }}" method="post">
        {!! csrf_field() !!}
        @method("PUT")
        <label>Name</label>
        <input type="text" name="customer_name" id="customer_name"value=" {{ $item['customer_name']}}" class="form-control">
        <label>Address</label>
        <input type="text" name="customer_address" id="address" value=" {{ $item['customer_address']}}"class="form-control">
        <label>Email</label>
        <input type="email" name="customer_email" id="customer_email"value=" {{ $item['customer_email']}}" class="form-control"><br>
        {{-- <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$contacts->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$contacts->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$contacts->mobile}}" class="form-control"></br> --}}
       <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
