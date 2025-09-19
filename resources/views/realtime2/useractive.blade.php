
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
        <tbody>
            @foreach ($users as $log)
            <tr>
                <td>{{ $log->id }}</td>
                <td>{{ $log->username }}</td>
                <td>{{ $log->ip_address }}</td>
                <td>{{ $log->desination }}</td>
                <td>{{ $log->login_time }}</td>
                <td>{{ $log->uptime }}</td>
                <td>{{ $log->bytes_in }}</td>
                <td>{{ $log->bytes_out }}</td>
                <td>{{ $log->status }}</td>
                <td>{{ $log->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links('pagination::bootstrap-4') }}
</div>