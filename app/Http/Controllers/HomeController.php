<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autok;
use App\AutokLeirasa;
use App\Bejegyzesek;
use App\Foglalas;
use App\Oldalak;
use \Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function berlesfeltetelek()
    {
        $oldal = Oldalak::find(1);
        return view('berlesfeltetelek')->with('oldal',$oldal);
    }

    public function FoglalasiUrlap()
    {

        return view('foglalas');
    }

    public function UrlapFeldolgozo(Request $request )
    {

        $validatedData = $request->validate([
            'Nev' => 'required|max:255',
            'AnyjaNeve' => 'required|max:255',
            'Cim' => 'required|max:255',
            'LakcimSzam' => 'required|max:50',
            'SzemIgSzam' => 'required|max:50',
            'JogsiSzam' => 'required|max:50',
            'Email' => 'required|max:50',

        ]);


        $fogalaloNeve = $request->input('Nev');
        $AnyjaNeve = $request->input('AnyjaNeve');
        $Cim = $request->input('Cim');
        $lakcimkartya = $request->input('LakcimSzam');
        $szemigszam= $request->input('SzemIgSzam');
        $JogsiSzam= $request->input('JogsiSzam');
        $Mail= $request->input('Email');

        $tartHely = $request->input('tartHely');
        $SzulIdo = $request->input('SzulIdo');
        $SzulHely = $request->input('SzulHely');
        $telefon = $request->input('telefon');
        $autokategoria = $request->input('autokategoria');
        $berlesNapja = $request->input('berlesNapja');
        $berlesIdotartama = $request->input('berlesIdotartama');
        $autoAtvevesHelye = $request->input('autoAtvevesHelye');
        $Comments = $request->input('Comments');
        $hasznalat = $request->input('hasznalat');

        $foglalas = new Foglalas();

        $foglalas->nev = $fogalaloNeve;
        $foglalas->anyjaNeve = $AnyjaNeve;
        $foglalas->cim = $Cim;
        $foglalas->lakcimKartya = $lakcimkartya;
        $foglalas->szigszam = $szemigszam;
        $foglalas->jogsiszam = $JogsiSzam;
        $foglalas->email = $Mail;
        $foglalas->telefon = $telefon;
        $foglalas->kategoria = $autokategoria;
        $foglalas->mikortolberelne = $berlesNapja;
        $foglalas->meddig = $berlesIdotartama;
        if( $hasznalat == "1")
        {
            $foglalas->mo_belul = 1;
        }
        else{
            $foglalas->mo_belul = 0;
        }
        $foglalas->atvetelHelye = $autoAtvevesHelye;
        $foglalas->egyebIgeny = $Comments;
        $foglalas->save();
        $from = env('MAIL_FROM_ADDRESS');
        Mail::send('emails.foglalas', ['nev' =>$fogalaloNeve], function ($message) use ($Mail,$from) {
            $message->to($Mail)
           ->subject('Sikeres foglalás - Bérelj olcsón autót', 'Bérelj olcsón autót ')
           ->from($from,'Bérelj olcsón autót');
        });


        Mail::send('emails.admin', ['nev' =>$fogalaloNeve], function ($message) use ($from) {
            $message->to('bereljolcsonautot@gmail.com')
           ->subject('Autó foglalás történt - Bérelj olcsón autót', 'Bérelj olcsón autót ')
           ->from($from,'Bérelj olcsón autót');
        });



        return view('koszonjukfoglalas');
    }
  
  public function hirek()
  {
    $bejegyzesek = Bejegyzesek::orderBy('created_at','DESC')->paginate(15);
    return view('hirek-front-end')->with('bejegyzesek',$bejegyzesek);
  }

    public function show_bejegyzes(string $slug)
    {
        $bejegyzes = Bejegyzesek::where('slug',$slug)->first();
        $bejegyzesek = Bejegyzesek::orderBy('created_at','DESC')->paginate(5);
        return view('bejegyzes-front-end')->with('bejegyzes',$bejegyzes)->with('bejegyzesek',$bejegyzesek);
    }

    public function szemelyAutok()
    {
        $autok = Autok::where('aktiv',1)->orderBy('ara','ASC')->get();
        $bejegyzesek = Bejegyzesek::orderBy('created_at','DESC')->paginate(5);
        return view("szemelyautok")->with('autok',$autok)->with('bejegyzesek',$bejegyzesek);
    }

    public function thanx()
    {
        return view('koszonjukfoglalas');
    }

    public function kapcsolat()
    {
        return view('kapcsolat');
    }
}
