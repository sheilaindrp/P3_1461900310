<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $data = Buku::select('*');
        if (request()->has('query')) {
            $q = request()->get('query');
            $data->where('judul', 'LIKE', '%' . $q . '%')
                ->orWhere('tahun_terbit', 'LIKE', '%' . $q . '%');
        }
        $data = $data->orderBy('judul', 'ASC')->get();
        return view('buku.index_0310')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('buku.create_0310');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => ['required', 'string', 'min:3', 'max:50'],
            'tahun_terbit' => ['required', 'string', 'min:1', 'max:4']
        ]);

        Buku::create([
            'judul' => $request->judul,
            'tahun_terbit' => $request->tahun_terbit
        ]);

        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Buku $buku
     * @return View
     */
    public function show(Buku $buku)
    {
        return view('buku.show_0310')->with('data', $buku);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Buku $buku
     * @return RedirectResponse
     */
    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'judul' => ['required', 'string', 'min:3', 'max:50'],
            'tahun_terbit' => ['required', 'string', 'min:1', 'max:4']
        ]);

        $buku->judul = $request->judul;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->save();

        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Buku $buku
     * @return RedirectResponse
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();

        return redirect()->back();
    }
}
