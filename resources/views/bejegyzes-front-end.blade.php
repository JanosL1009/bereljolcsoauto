@extends('layouts.app')

@section('head-seo')
    <title>Bérelj olcsón autót</title>
    <meta name="description" content="{{$bejegyzes->seodesc}}"/>
    <meta name="keywords" content="{{$bejegyzes->seokeywords}}"/>

    <meta name="author" content="Berelj olcsó Autót 2022">
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

</style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-9 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h1>{{$bejegyzes->cim}}</h1>
                    <section>
                        {!! $bejegyzes->tartalom !!}
                    </section>
                </div>
            </div>

        </div>
        <div class="col-md-3 col-sm-12">
            <h3 id="autoberles-bejegyzesek-cikkek" title="Autóbérlés és autokölcsönzéssel kapcsolatos cikkek">Bejegyzések, cikkek</h3>
            <table>
                <tbody>
                    @foreach ($bejegyzesek as $b)
                        <tr>
                            <td><a href="{{route('Bejegyzes.FrontEnd',['slug' => $b->slug])}}" class="btn btn-primary">{{$b->cim}}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection


