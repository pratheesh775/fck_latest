@extends('layouts.admin')
@section('content')
<div class="col-sm-12">
    <div class="btn-wrapper" style="margin-bottom: 15px;">
        <a href="{{ route('members.create') }}" class="btn btn-primary text-white me-0">Add Events</a>
    </div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">List Events</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Event Name</th>
                            <th>Date</th>
                            <th>description</th>
                            <th>Accounts</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kabadi 2015</td>
                            <td>12-March-2025</td>
                            <td>Kabadi fest 2025</td>
                            <td><label class="badge badge-danger">Accounts</label></td>
                        </tr>
                        <tr>
                            <td>Onagosham 2025</td>
                            <td>18-Sep-2025</td>
                            <td>Onagosham 2025</td>
                            <td><label class="badge badge-danger">Accounts</label></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection