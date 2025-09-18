<?php

namespace App\Console\Commands;

use App\Models\RouterOsAPI;
use Illuminate\Console\Command;

class GetMikrotikData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get_data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mengambil Data dari Mikrotik';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $API = new RouterOsAPI();

        // koneksi PostgreSQL
        $conn = pg_connect("host=localhost dbname=web-monitoring user=postgres password=12345 port=5432");
        if (!$conn) {
            die("❌ Gagal konek ke PostgreSQL: " . pg_last_error());
        }

        if ($API->connect('192.168.100.1', 'ismail', '123')) {
            echo "✅ Koneksi ke Mikrotik berhasil!\n";

            // ambil data hotspot active
            $data = $API->comm('/ip/hotspot/active/print');

            foreach ($data as $user) {
                $ip_address = $user['address'] ?? null;      // IP user
                $destination_ip = $user['server'] ?? null;   // bisa server/profil tergantung setting
                $start_time = $user['login-time'] ?? null;   // kapan login
                $uptime = $user['uptime'] ?? null;           // durasi aktif
                $status = "active";

                // insert ke PostgreSQL
                $query = "INSERT INTO connections (src_ip, dst_ip, start_time, uptime_seconds, status)
                        VALUES ($1, $2, $3, $4, $5)";
                $result = pg_query_params($conn, $query, [
                    $ip_address,
                    $destination_ip,
                    $start_time,
                    $uptime,
                    $status
                ]);

                if ($result) {
                    echo "✅ Data user $ip_address berhasil masuk\n";
                } else {
                    echo "❌ Gagal insert: " . pg_last_error($conn) . "\n";
                }
                if (empty($data)) {
                    echo "ℹ️ Tidak ada user aktif di Mikrotik\n";
                }
            }

            $API->disconnect();
        } else {
            echo "❌ Gagal konek ke Mikrotik\n";
            // Hapus semua data di tabel connections jika gagal konek
            $delete_query = "DELETE FROM connections";
            $delete_result = pg_query($conn, $delete_query);
            if ($delete_result) {
                echo "✅ Semua data di tabel connections telah dihapus\n";
            } else {
                echo "❌ Gagal menghapus data: " . pg_last_error($conn) . "\n";
            }
        }

        pg_close($conn);
    }
}
