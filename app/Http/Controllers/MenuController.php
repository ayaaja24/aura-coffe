<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->query('cari');
        $kategori = $request->query('kategori');

        $menus = Menu::query()
            ->when($cari, function ($query, $cari) {
                $query->where('nama_menu', 'like', '%' . $cari . '%');
            })
            ->when(
                in_array($kategori, ['Makanan', 'Minuman']),
                function ($query) use ($kategori) {
                    $query->where('kategori', $kategori);
                }
            )
            ->get();

        return view('menu', compact('menus', 'cari', 'kategori'));
    }

    public function create()
    {
        return view('create_menu');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'kategori' => 'required|in:Makanan,Minuman',
            'harga' => 'required|numeric|min:0',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        $gambar = null;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('menu', 'public');
        }

        Menu::create([
            'nama_menu' => $request->nama_menu,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'gambar' => $gambar,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/menu')->with('success', 'Menu berhasil ditambahkan! 🌸');
    }

    public function show(Menu $menu)
    {
        return view('show_menu', compact('menu'));
    }

    public function edit(Menu $menu)
    {
        return view('edit_menu', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'kategori' => 'required|in:Makanan,Minuman',
            'harga' => 'required|numeric|min:0',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        $gambar = $menu->gambar;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('menu', 'public');
        }

        $menu->update([
            'nama_menu' => $request->nama_menu,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'gambar' => $gambar,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/menu')->with('success', 'Menu berhasil diupdate! 🌸');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect('/menu')->with('success', 'Menu berhasil dihapus! 🌸');
    }
}