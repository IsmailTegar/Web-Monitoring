@extends('layouts.master')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-content">
                <header class="div">
                    <h1 class="text-wrapper">Monitoring Hostpot</h1>
                    <p class="text-wrapper-2">Monitoring Hostpot</p>
                </header>
                <div class="table-responsive" style="max-width: 1070px">
                    <table class="table table-bordered table-striped text-center align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>NO</th>
                                <th>IP Address</th>
                                <th>MAC Address</th>
                                <th>Login Time</th>
                                <th>Logout Time</th>
                                <th>Status</th>
                                <th>Upload</th>
                                <th>Download</th>
                                <th>History</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $row)
                                <tr>
                                    <td>{{ $row['no'] }}</td>
                                    <td>{{ $row['ip'] }}</td>
                                    <td>{{ $row['mac'] }}</td>
                                    <td>{{ $row['login'] }}</td>
                                    <td>{{ $row['logout'] }}</td>
                                    <td>
                                        @if($row['status'] === 'Online')
                                            <span class="badge bg-success">Online</span>
                                        @else
                                            <span class="badge bg-secondary">Offline</span>
                                        @endif
                                    </td>
                                    <td>{{ $row['upload'] }}</td>
                                    <td>{{ $row['download'] }}</td>
                                    <td>{{ $row['history'] }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center text-muted">Belum ada user terkoneksi</td>
                                </tr>
                            @endforelse

                            {{-- minimal 5 baris (isi kosong kalau datanya kurang) --}}
                            @for ($i = count($users); $i < 5; $i++)
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection