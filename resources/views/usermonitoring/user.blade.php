@extends('layouts.master')

@section('content')

<div class="main-panel">
    <div class="content">
        <div class="container-content">
            <main class="frame">
                <div class="card">
                    <div class="card-body" style="width: 1070px">
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Ip Address</th>
                                        <th>Destination</th>
                                        <th>Start From</th>
                                        <th>Uptime</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Ip Address</th>
                                        <th>Destination</th>
                                        <th>Start From</th>
                                        <th>Uptime</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($logs as $log)
                                    <tr>
                                        <td>{{ $log->id }}</td>
                                        <td>{{ $log->src_ip }}</td>
                                        <td>{{ $log->dst_ip }}</td>
                                        <td>{{ $log->start_time }}</td>
                                        <td>{{ $log->uptime_seconds }}</td>
                                        <td>{{ $log->status }}</td>
                                        <td>{{ $log->created_at }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

@endsection