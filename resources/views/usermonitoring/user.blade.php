@extends('layouts.master')

@section('content')

<div class="main-panel">
    <div class="content">
        <div class="container-content">
            <main class="frame">
                <div class="card">
                    <div class="card-body" style="width: 1200px">
                        <div>
                            <h3 class="text-black pb-2 fw-bold">User Monitoring</h3>
                        </div>
                        <div class="table-responsive">
                           <table id="add-row" class="display table table-striped table-hover">
                            <div id="table1">
                           </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

<script>
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

</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
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
</script>


@endsection