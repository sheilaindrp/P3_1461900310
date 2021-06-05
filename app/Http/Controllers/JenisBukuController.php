<?php

namespace App\Http\Controllers;

use App\Models\JenisBuku;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class JenisBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $data = JenisBuku::select('*');
        if (request()->has('query')) {
            $q = request()->get('query');
            $data->where('jenis', 'LIKE', '%' . $q . '%');
        }
        $data = $data->orderBy('jenis', 'ASC')->get();

        return view('jenisBuku.index_0310')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('jenisBuku.create_0310');
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
            'jenis' => ['required', 'string', 'min:3', 'max:50']
        ]);

        JenisBuku::create([
            'jenis' => $request->jenis
        ]);

        return redirect()->route('jenisBuku.index');
    }

    /**
     * Display the specified resource.
     *
     * @param JenisBuku $jenisBuku
     * @return View
     */
    public function show(JenisBuku $jenisBuku)
    {
        return view('jenisBuku.show_0310')->with('data', $jenisBuku);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param JenisBuku $jenisBuku
     * @return RedirectResponse
     */
    public function update(Request $request, JenisBuku $jenisBuku)
    {
        $request->validate([
            'jenis' => ['required', 'string', 'min:3', 'max:50']
        ]);

        $jenisBuku->jenis = $request->jenis;
        $jenisBuku->save();

        return redirect()->route('jenisBuku.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param JenisBuku $jenisBuku
     * @return RedirectResponse
     */
    public function destroy(JenisBuku $jenisBuku)
    {
        $jenisBuku->delete();
        return redirect()->back();
    }
}
