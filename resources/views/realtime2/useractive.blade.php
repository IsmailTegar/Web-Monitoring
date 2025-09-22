
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
                <th>Updated At</th>
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
                <th>Updated At</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($users as $index => $log)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $log->username }}</td>
                <td>{{ $log->ip_address }}</td>
                <td>{{ $log->destination }}</td>
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

</div>

