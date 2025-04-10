<?php

namespace App\Http\Controllers;

use App\Models\szakdoga;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class SzakdogaController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'szakdoga_nev' => 'string|max:255',
            'githublink' => 'string|max:255',
            'oldallink' => 'string|max:255',
            'tagokneve' => 'string|max:255'
        ]);
        szakdoga::create([
            'szakdoga_nev' => $request->szakdoga_nev,
            'githublink' => $request->githublink,
            'oldallink' => $request->oldallink,
            'tagokneve' => $request->tagokneve
        ]);
    }
    public function index() {
        $szakdoga = szakdoga::all()->values();
        return response()->json($szakdoga);
    }
    public function update(Request $request, $id) {
        $request->validate([
            'szakdoga_nev' => 'string|max:255',
            'githublink' => 'string|max:255',
            'oldallink' => 'string|max:255',
            'tagokneve' => 'string|max:255'
        ]);
        szakdoga::update([
            'szakdoga_nev' => $request->szakdoga_nev,
            'githublink' => $request->githublink,
            'oldallink' => $request->oldallink,
            'tagokneve' => $request->tagokneve
        ]);
    }
    public function destroy($id) {
        szakdoga::where('id', $id)->delete();
    }
}
