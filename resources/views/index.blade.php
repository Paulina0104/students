@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Contacts</div>
                    <div class="card-body">
                        <a href="{{ route('customers.create') }}" class="btn btn-success btn-sm" title="Add New Contact" style="float: right;">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($customers as $item)
                               
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->customer_name }}</td>
                                        <td>{{ $item->customer_address }}</td>
                                        <td>{{ $item->customer_email }}</td>
 
                                        <td>
                                            {{-- @isset($customer) --}}
                                            {{-- <a href="{{ route('resources.show', ['id'=> $item->id])) }}" title="View customer"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> --}}
                                            <a href="{{ route('customers.show', $item->id) }}" title="View customer">
                                                <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                                            </a>
                                            
                                            {{-- <a href="{{ route('resources.edit',['id'=> $item->id])) }}" title="Edit customer"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a> --}}
                                            <a href="{{ route('customers.edit', $item->id ) }}" title="Edit customer">
                                                <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Edit</button>
                                            </a>
                                            
                                           
                                            <form method="POST" action="{{ route('customers.destroy', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{-- @method('delete') --}}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete customer" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                {{-- @endisset --}}
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection