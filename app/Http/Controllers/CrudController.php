<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\testimoni;

class CrudController extends Controller
{
    public function tampiltesti() {
    	$datatesti = testimoni::orderBy('testimoni', 'asc')->paginate(5);
    	return view('pages/admin/testimoni', ['datatesti' => $datatesti]);
    }

    public function tambahtesti(Request $req) {
        $this->validate($req, [
            'testimoni' => 'required',
            'nama' => 'required'
        ]);
        testimoni::create([
            'testimoni' => $req->testimoni,
            'nama' => $req->nama
        ]);
        return redirect()->back();
    }

    public function hapustesti($id)
    {
        $testi = testimoni::find($id);
        $testi->delete();
        return redirect()->back();
    }
}
