@extends('layouts.admin')
@section('content')
<div class="col-sm-12">
    <div class="btn-wrapper" style="margin-bottom: 15px;">
        <a href="{{ route('members.create') }}" class="btn btn-primary text-white me-0">Add Member</a>
    </div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">List Members</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Mobile.</th>
                            <th>Blood Group</th>
                            <th>Pending</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pratheesh</td>
                            <td>9061797446</td>
                            <td>B+</td>
                            <td><label class="badge badge-danger">₹500</label></td>
                        </tr>
                        <tr>
                            <td>Jayadhevan</td>
                            <td>9947457101</td>
                            <td>AB+</td>
                            <td><label class="badge badge-success">₹00</label></td>
                        </tr>
                        <tr>
                            <td>Shibin</td>
                            <td>9847745874</td>
                            <td>A+</td>
                            <td><label class="badge badge-danger">₹150</label></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection