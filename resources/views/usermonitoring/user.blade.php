@extends('layouts.master')

@section('content')

<div class="main-panel">
    <div class="content">
        <div class="container-content">
            <main class="frame">
                <div class="card">
                    <div class="card-body" style="width: 1070px">
                        <div>
                            <h3 class="text-black pb-2 fw-bold">User Monitoring</h3>
                        </div>
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>IP</th>
                                        <th>Destination</th>
                                        <th>Login Time</th>
                                        <th>Uptime</th>
                                        <th>Upload</th>
                                        <th>Download</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>IP</th>
                                        <th>Destination</th>
                                        <th>Login Time</th>
                                        <th>Uptime</th>
                                        <th>Upload</th>
                                        <th>Download</th>
                                        <th>Status</th>
                                    </tr>
                                </tfoot>
                                {{-- <tbody>
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
                                </tbody> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

@endsection