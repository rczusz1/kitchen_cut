<!-- Extends template page-->
@extends('layouts.app')

<!-- Specify content -->
@section('content')
    <div class="container">
        <h3>Locations List</h3>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Alert message (end) -->
            <div class="container mt-5">
                <table class="table table-bordered mb-5">
                    <thead>
                    <tr>
                        <th width='50%'>Location ID</th>
                        <th width='50%'>Date</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($locations as $location)
                        <tr>
                            <td>{{ $location->location_id}}</td>
                            <td>{{ $location->il_sum }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection