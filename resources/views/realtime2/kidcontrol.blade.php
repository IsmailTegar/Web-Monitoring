
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

<div class="table-responsive">
    <table id="add-row" class="display table table-striped table-hover">
        <thead>
            <tr>
                <th>Username</th>
                <th>Device</th>
                <th>MAC</th>
                <th>IP</th>
                <th>Upload (Bytes)</th>
                <th>Download (Bytes)</th>
                <th>Uptime</th>
                <th>Status</th>
                <th>Last Update</th>
                <th>Activity</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Username</th>
                <th>Device</th>
                <th>MAC</th>
                <th>IP</th>
                <th>Upload (Bytes)</th>
                <th>Download (Bytes)</th>
                <th>Uptime</th>
                <th>Status</th>
                <th>Last Update</th>
                <th>Activity</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach($devices as $d)
            <tr>
                <td>{{ $d->user_name }}</td>
                <td>{{ $d->name }}</td>
                <td>{{ $d->mac_address }}</td>
                <td>{{ $d->ip_address }}</td>
                <td>{{ formatBytes($d->bytes_down) }}</td>
                <td>{{ formatBytes($d->bytes_up) }}</td>
                <td>{{ $d->uptime }}</td>
                <td>{{ ucfirst($d->status) }}</td>
                <td>{{ $d->last_update }}</td>
                <td>{{ $d->activity }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@php function formatBytes($bytes, $decimal = 2) {
    if ($bytes <= 0) return '0 Bytes';
    $satuan = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
    $i = floor(log($bytes, 1024));
    $ukuran = $bytes / pow(1024, $i);
    return round($ukuran, $decimal) . ' ' . $satuan[$i];
}

@endphp

