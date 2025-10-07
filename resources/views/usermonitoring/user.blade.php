@extends('layouts.master')

@section('content')

<div class="main-panel">
    <div class="content">
        <div class="container-content">
            <main class="frame">
                {{-- <div class="card">
                    <div class="card-body" style="width: 1200px">
                        <div>
                            <h3 class="text-black pb-2 fw-bold">User Monitoring</h3>
                        </div>
                        <div id="table1"></div>
                    </div>
                </div> --}}
                <div class="card">
                    <div class="card-body" style="width: 1200px">
                        <div>
                            <h3 class="text-black pb-2 fw-bold">User Monitoring</h3>
                        </div>
                        <div id="kidcontrol"></div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

{{-- <script>
    function loadData() {
        $.get('/testuser', function (data) {
            console.log(data); // lihat di console browser
            $('#status').text("Data tersimpan. Total koneksi: " + data.count);
        }).fail(function() {
            $('#status').text("Gagal ambil data");
        });
    }

    // langsung eksekusi pertama kali
    loadData();

    // ulang tiap 30 detik
    setInterval(loadData, 30000);

</script> --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- <script>
    var currentUrl = '{{ route('monitoring.table1') }}';

    function loadTable1(url = null) {
        if (url) currentUrl = url; // update kalau ada klik pagination
        $('#table1').load(currentUrl);
    }

    // Load pertama kali
    loadTable1();

    // Delegasi event klik pagination
    $(document).on('click', '#table1 .pagination a', function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        loadTable1(url);
    });

    // Refresh setiap 30 detik, pakai url terakhir
    setInterval(function() {
        loadTable1();
    }, 2000);
</script> --}}
<script>
    var currentUrl = '{{ route('kidcontrol.index') }}';

    function initTable() {
        // pastikan gak dobel inisialisasi
        if ($.fn.DataTable.isDataTable('#add-row')) {
            $('#add-row').DataTable().destroy();
        }
        $('#add-row').DataTable({
            pageLength: 10,
            order: [[0, 'asc']],
        });
    }

    function loadTable1(url = null) {
        if (url) currentUrl = url;

        // ambil posisi scroll horizontal sebelum konten diganti
        var scrollPos = $('#kidcontrol .table-responsive').scrollLeft();

        // load ulang tabel via AJAX
        $('#kidcontrol').load(currentUrl, function() {
            initTable(); // aktifkan DataTables lagi

            // balikin posisi scroll setelah load selesai
            $('#kidcontrol .table-responsive').scrollLeft(scrollPos);
        });
    }

    // load pertama kali
    loadTable1();

    // event pagination
    $(document).on('click', '#kidcontrol .pagination a', function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        loadTable1(url);
    });

    // auto-refresh tiap 10 detik (ganti 10000 jadi 30000 kalau mau lebih ringan)
    setInterval(function() {
        loadTable1();
    }, 10000);
</script>



@endsection