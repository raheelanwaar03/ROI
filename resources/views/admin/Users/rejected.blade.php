@extends('layout.app')
@section('links')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
@endsection
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Rejected Users</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Profile</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Balance</th>
                                            <th>Ph:</th>
                                            <th>UNC</th>
                                            <th>Referral</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $item)
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('images/profile/' . $item->pic) }}" height="20px"
                                                        width="20px">
                                                </td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->balance }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->unc }}</td>
                                                <td>{{ $item->referral }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td class="d-flex justify-content-align align-items-center">
                                                    <button class="btn btn-sm btn-primary">Pending</button>
                                                    <button class="btn btn-sm btn-success">Approved</button>
                                                    <button class="btn btn-sm btn-danger">Rejected</button>
                                                    <button class="btn btn-sm btn-warning">Edit</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Profile</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Balance</th>
                                            <th>Ph:</th>
                                            <th>UNC</th>
                                            <th>Referral</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('scripts')
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
        <script>
            new DataTable('#example');
        </script>
    @endsection
