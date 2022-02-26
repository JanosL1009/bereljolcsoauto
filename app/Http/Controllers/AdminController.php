<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Autok;
use App\AutokLeirasa;
use App\Foglalas;
use Illuminate\Support\Facades\Storage;
class AdminController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function ujautofelvitele()
    {



        return view('admin.ujautoletrehozasa');
    }

    public function uj_auto_feldolgozo(Request $request)
    {
        $ujAuto = new Autok();
        $ujAuto->autonev = $request->input('autonev');
        $ujAuto->uzemanyag = intval($request->input('uzemanyag'));
        $ujAuto->elektromosAblakEmelo = intval($request->input('ablakemelo'));
        $ujAuto->ajtokSzama = intval($request->input('ajtokszama'));
        $ujAuto->klima = intval($request->input('klima'));
        $ujAuto->sebessegvalto = intval($request->input('sebvalto'));
        $ujAuto->ara = intval($request->input('autoara'));
        $ujAuto->aktiv = intval($request->input('allapot'));


        $file = $request->file('kep');
       // dd($file->getClientOriginalName());
       Storage::disk('public_uploads')->put('kepek', $file,$file->getClientOriginalName());

        $ujAuto->kep = $file->getClientOriginalName();
        $ujAuto->save();

        $autoLeiras = new AutokLeirasa();
        $autoLeiras->autok_id = $ujAuto->id;
        $autoLeiras->tartalom = $request->input('editor');
        $autoLeiras->save();

        return back();

    }

    /**
     * Gyujto oldal
     */
    public function autokszerkesztese()
    {
        $autok = Autok::paginate(20);

        return view('admin.autoszerkesztes')->with('autok',$autok);
    }

    public function bejegyzesek()
    {
        return view('admin.bejegyzes');
    }

    public function bejegyzes_letrehozas()
    {
        return view('admin.bejegyzes_letrehozasa');
    }

    public function foglalasok()
    {
        $foglalasok = Foglalas::orderBy('created_at','DESC')->paginate(25);

        return view('admin.foglalas')->with('foglalasok',$foglalasok);
    }

    public function show_foglalas(int $id)
    {
        $foglalas = Foglalas::find($id);

        return view('admin.autofoglalas')->with('foglalas',$foglalas);
    }

    public function adminlogout()
    {
        Auth::logout();
    }
}
