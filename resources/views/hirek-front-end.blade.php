@extends('layouts.app')

@section('head-seo')
    <title>Bérelj olcsón autót</title>
    <meta name="description" content="Olcsó autóbérlés, autókölcsönzés Budapesten! Bérelhető autóink között találhat Mercedest, Fordot, Opelt, Peugeot, Suzukit és sok más márkát, valamint kategóriát!"/>
    <meta name="keywords" content="autóbérlés budapest,autókölcsönzés,autókölcsönzés Budapeset,bérautó,bérautó Budapest"/>

    <meta name="author" content="Berelj olcsó Autót 2020">
    <meta name="robots" content="index,follow" />
    <link rel=”canonical” href=”https://www.bereljolcsoautot.hu/” />
    <meta name="og:site_name" content="www.bereljolcsoautot.hu"/>
    <meta name="og:type" content="Autóbérlés, bérautó, olcsó autókölcsönzés Budapest"/>

    <style>
        hr{
            color: #fff; background-color: #fff;
        }
        .ar{
            font-size: 24px;
    font-weight: 700;
    margin-bottom: 10px;
    color: black;
        }
        .berauto{width: inherit;} ul {color:#000;}
        .card-xtra{width: 98% !important;}
    </style>

@endsection

@section('head-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/simple-slider/1.0.0/simpleslider.min.js"></script>
<style>
  .card_egyedi{
  width: auto!important;
background: white;
border: 1px solid rgba(0,0,0,.125);
color: black;
  }
</style>
@endsection

@section('content')
	<div class="container">
  <div class="row">
        
          @foreach($bejegyzesek as $bejegyzes)
<div class="col-12 col-md-3">
          <div class="card card_egyedi" >
          <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
          <div class="card-body">
            <h5 class="card-title">{{$bejegyzes->cim}}</h5>
            <p class="card-text">{{$bejegyzes->seodesc}}</p>
            <a href="{{route('Bejegyzes.FrontEnd', [ 'slug' => $bejegyzes->slug])}}" class="btn btn-primary">Érdekel</a>
          </div>
        </div>
</div>
			@endforeach
        
        
    </div>
	</div>
  


@endsection


