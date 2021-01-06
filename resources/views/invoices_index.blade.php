<!-- Extends template page-->
@extends('layouts.app')

<!-- Specify content -->
@section('content')
    <div class="container">
        <h3>Invoices List</h3>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- Alert message (start) -->
                @if(Session::has('message'))
                    <div class="alert {{ Session::get('alert-class') }}">
                        {{ Session::get('message') }}
                    </div>
            @endif
            <!-- Alert message (end) -->
                <div class="container mt-5">
                    <table class="table table-bordered mb-5">
                        <thead>
                        <tr>
                            <th width='25%'>Name</th>
                            <th width='25%'>Date</th>
                            <th width='25%'>Status</th>
                            <th width='25%'>Value</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($invoices as $invoice)
                            <tr>
                                <td>{{ $invoice->location_name}}</td>
                                <td>{{ $invoice->date }}</td>
                                <td>{{ $invoice->status }}</td>
                                <td>{{ $invoice->value }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
    </div>
@endsection