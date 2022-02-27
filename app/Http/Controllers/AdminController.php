<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Autok;
use App\AutokLeirasa;
use App\Foglalas;
use Illuminate\Support\Facades\Storage;
use App\Bejegyzesek;
use Illuminate\Support\Str;
class AdminController extends Controller
{

    protected $seoKeys = "autóbérlés, bérautó, autóbérlés budapest,bérautó budapest, autókölcsönzés, autókölcsönzés budapest,ford autókölcsönzés, olcsó bérautó, olcsó autókölcsönzés, autókölcsönzés ferihegy";

    protected $seodesc = "Olcsó autó bérlés Buapesten! A következő márkák közül válogathat: Ford, Wolksvagen, Mitsubishi, Citroen és mág sok más kölcsönözhető bérautó! ";

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

    /****
     * GET
     * Egy auto modositasa
     */
    public function autoszerkesztes(int $AutoID)
    {
        $auto = Autok::find($AutoID);
        return view('admin.egy_autoszerkesztese')->with('auto',$auto);
    }

    public function automodosito_feldolgozo(Request $request)
    {
        $autoID = (int)$request->input('autoid');
        $ujAuto = Autok::find($autoID);
        $ujAuto->autonev = $request->input('autonev');
        $ujAuto->uzemanyag = intval($request->input('uzemanyag'));
        $ujAuto->elektromosAblakEmelo = intval($request->input('ablakemelo'));
        $ujAuto->ajtokSzama = intval($request->input('ajtokszama'));
        $ujAuto->klima = intval($request->input('klima'));
        $ujAuto->sebessegvalto = intval($request->input('sebvalto'));
        $ujAuto->ara = intval($request->input('autoara'));
        $ujAuto->aktiv = intval($request->input('allapot'));



       // dd($file->getClientOriginalName());
       if($request->has('kep'))
       {
        $file = $request->file('kep');

        Storage::disk('public_uploads')->put('kepek', $file,$file->getClientOriginalName());

        $ujAuto->kep = $file->getClientOriginalName();

       }

        $ujAuto->save();

       /* $autoLeiras = new AutokLeirasa();
        $autoLeiras->autok_id = $ujAuto->id;
        $autoLeiras->tartalom = $request->input('editor');
        $autoLeiras->save();*/

        return back()->withErrors('A módosítas sikeres!','success');
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
        $bejegyzesek = Bejegyzesek::paginate(25);

        return view('admin.bejegyzes')->with('bejegyzesek',$bejegyzesek);
    }

    public function bejegyzes_letrehozas()
    {
        return view('admin.bejegyzes_letrehozasa');
    }

    public function bejegyzes_letrehozas_post(Request $request)
    {
        $request->validate([
            'cim' => 'required',
            'status' => 'required',
            'editordata' => 'required'
        ]);

        $bejegyzes = new Bejegyzesek();
        $bejegyzes->cim = $request->input('cim')??"Nincs kitöltve";
        $bejegyzes->slug = Str::slug($bejegyzes->cim);
        $bejegyzes->aktiv = (int)$request->input('status')??0;
        $bejegyzes->tartalom = $request->input('editordata')??"Nincs kitöltve";
        $bejegyzes->seokeywords = $request->input('seokeys')??$this->seoKeys;
        $bejegyzes->seodesc = $request->input('seodesc')??$this->seodesc;

        $bejegyzes->save();

        return redirect()->route('bejegyzes.lista');

    }

    public function bejegyzes_szerkesztes(int $id)
    {
        $bejegyzes = Bejegyzesek::find($id);

        return  view('admin.bejegyzes_szerkesztes')->with('bejegyzes',$bejegyzes)->with('postId',$id);
    }

    public function bejegyzes_szerkesztes_post(Request $request)
    {
        $request->validate([
            'postid' => 'required',
            'cim' => 'required',
            'status' => 'required',
            'editordata' => 'required'
        ]);

        $id = (int)$request->input('postid');
        $bejegyzes = Bejegyzesek::find($id);
        $bejegyzes->cim = $request->input('cim')??"Nincs kitöltve";
        $bejegyzes->slug = Str::slug($bejegyzes->cim);
        $bejegyzes->aktiv = (int)$request->input('status')??0;
        $bejegyzes->tartalom = $request->input('editordata')??"Nincs kitöltve";
        $bejegyzes->seokeywords = $request->input('seokeys')??$this->seoKeys;
        $bejegyzes->seodesc = $request->input('seodesc')??$this->seodesc;

        $bejegyzes->save();

        return  back();
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
