@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Contacts</div>
                    <table border="1px">

                        <tr>
                            <td>fsp_type</td>
                            <td> institution_code</td>
                            <td> institution_full_name</td>
                            <td>institution_name</td>
                        </tr>

                        <tbody>
                        @foreach($details as $details)
                            <tr>
                                <td>{{ $details->fsp_type }}</td>
                                <td>{{ $details->institution_code }}</td>
                                <td>{{ $details->institution_full_name }}</td>
                                <td>{{ $details->institution_name}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
