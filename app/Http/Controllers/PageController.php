<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');

        $kosan = [
            [
                'nama' => 'Kos Mastrip EE8',
                'gambar' => 'gambarKos_available.webp',
                'harga' => 'Rp. 500.000',
                'fasilitas' => ['Kamar mandi Dalam','WiFi','Listrik','Kasur','Dapur','Kulkas'],
                'status' => 'ada',
            ],
            [
                'nama' => 'Kos Bangka 02',
                'gambar' => 'gambarKos_available.webp',
                'harga' => 'Rp. 330.000',
                'fasilitas' => ['Kamar mandi Luar','WiFi','Listrik','Dapur','Kasur'],
                'status' => 'ada',
            ],
            [
                'nama' => 'Kos Puri DD1',
                'gambar' => 'kosan_soldOut.png',
                'harga' => 'Rp. 1.000.000',
                'fasilitas' => ['Kamar mandi dalam','WiFi','Listrik','Kasur','AC','Dapur','Kulkas'],
                'status' => 'sold',
            ],
            [
                'nama' => 'Kos Kalimantan 14',
                'gambar' => 'kosan_soldOut.png',
                'harga' => 'Rp. 1.000.000',
                'fasilitas' => ['Kamar mandi dalam','WiFi','Listrik','Kasur','AC','Dapur','Kulkas'],
                'status' => 'sold',
            ],
            [
                'nama' => 'Kos Putra Jawa 07',
                'gambar' => 'gambarKos_available.webp',
                'harga' => 'Rp. 1.500.000',
                'fasilitas' => ['Kamar mandi dalam','WiFi','Listrik','Kasur','AC','Dapur','Kulkas'],
                'status' => 'ada',
            ],
            [
                'nama' => 'Kos Putri Riau 02',
                'gambar' => 'kosan_soldOut.png',
                'harga' => 'Rp. 1.000.000',
                'fasilitas' => ['Kamar mandi dalam','WiFi','Listrik','Kasur','AC','Dapur','Kulkas'],
                'status' => 'sold',
            ],
        ];
        return view('pengelolaan', compact('kosan', 'username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username') ?? 'Tamu Tak Diundang';
        $email = strtolower($username).'@gmail.com';
        return view('profile', compact('username', 'email'));
    }

    public function logout()
    {
        return redirect()->route('login');
    }
}
