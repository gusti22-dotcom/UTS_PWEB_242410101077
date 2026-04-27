<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->input('username') ?? $request->query('username');
        $password = $request->input('password');

        return view('dashboard', [
            'username' => $username
        ]);
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');

        return view('profile', [
            'username' => $username
        ]);
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');
        $filter = $request->query('filter', 'Semua');

        $barang = [
            ['nama' => 'Laptop', 'kategori' => 'Elektronik', 'jumlah' => 1],
            ['nama' => 'Handphone', 'kategori' => 'Elektronik', 'jumlah' => 2],
            ['nama' => 'Bulpen', 'kategori' => 'ATK', 'jumlah' => 1],
            ['nama' => 'Liptint', 'kategori' => 'Makeup', 'jumlah' => 1],
            ['nama' => 'Bedak', 'kategori' => 'Makeup', 'jumlah' => 1],
            ['nama' => 'Cushion', 'kategori' => 'Makeup', 'jumlah' => 1],
            ['nama' => 'Buku Tulis', 'kategori' => 'ATK', 'jumlah' => 1],
            ['nama' => 'Minyak Kayu Putih', 'kategori' => 'Obat', 'jumlah' => 1],
            ['nama' => 'Tolak Angin', 'kategori' => 'Obat', 'jumlah' => 1],
        ];

        if ($filter != 'Semua') {
            $barang = array_filter($barang, function ($item) use ($filter) {
                return $item['kategori'] == $filter;
            });
        }

        return view('pengelolaan', [
            'barang' => $barang,
            'username' => $username,
            'filter' => $filter,
        ]);
    }
}
