<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // data product 1
        DB::table('products')->insert([
            'nama_barang' => 'Kopi',
            'stok' => 100,
            'jumlah_terjual' => 10,
            'tgl_transaksi' => '2021-05-01',
            'jenis_barang' => 'Konsumsi',

        ]);
        // data product 1
        DB::table('products')->insert([
            'nama_barang' => 'Teh',
            'stok' => 100,
            'jumlah_terjual' => 19,
            'tgl_transaksi' => '2021-05-10',
            'jenis_barang' => 'Konsumsi',

        ]);
        // data product 1
        DB::table('products')->insert([
            'nama_barang' => 'Pasta Gigi',
            'stok' => 100,
            'jumlah_terjual' => 20,
            'tgl_transaksi' => '2021-05-20',
            'jenis_barang' => 'Pembersih',

        ]);
        // data product 1
        DB::table('products')->insert([
            'nama_barang' => 'Sabun Mandi',
            'stok' => 100,
            'jumlah_terjual' => 30,
            'tgl_transaksi' => '2021-05-15',
            'jenis_barang' => 'Pembersih',

        ]);
        // data product 1
        DB::table('products')->insert([
            'nama_barang' => 'Shampo',
            'stok' => 100,
            'jumlah_terjual' => 25,
            'tgl_transaksi' => '2021-05-11',
            'jenis_barang' => 'Pembersih',

        ]);
    }
}
