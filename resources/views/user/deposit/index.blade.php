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
                            <h4 class="card-title">Datatable</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Amount</th>
                                            <th>Total</th>
                                            <th>Transcation ID</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($deposit as $item)
                                            <tr>
                                                <td>{{ $item->amount }}</td>
                                                <td>{{ $item->total }}</td>
                                                <td>{{ $item->trx }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td><img src="{{ asset('images/'.$deposit->image) }}" height="60px"
                                                        class="img-fluid img-responsive" width="60px"></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Amount</th>
                                            <th>Total</th>
                                            <th>Transcation ID</th>
                                            <th>Status</th>
                                            <th>Image</th>
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