<!-- link da Main.blade -->
@extends('layouts.main')

@section('title', 'Projeto Man')

@section('content')

        @if (0 > 5)
         <p>Está afirmação é verdadeira</p>
        @endif

        <p>{{$nome}}</p>

        @if($nome == "Pedro")
        <p>O nome é Pedro</p>
        @elseif($nome == "Eric")
        <p>O nome é Eric</p>
        @else
        <p>O nome não é Pedro</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }}</p>
        @endfor
@endsection
