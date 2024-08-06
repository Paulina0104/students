@extends('layouts.app')
@section('content')
        <div class="card-body">
          <div class="card">
            <div class="card-header">Contactus Page</div>
            {{-- <div class="card-body"> --}}
        <h5 class="card-title">Name : {{ $item['customer_name']}}</h5>
        <p class="card-text">Address : {{$item->customer_address }}</p>
        <p class="card-text">email : {{ $item->customer_email }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
</div>
@endsection