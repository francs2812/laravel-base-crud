@extends('layouts.main')

@section('content')
    <div class="show">
        <img src="{{$comic -> thumb}}" alt=" {{$comic -> title}} ">
        <div id="text">
            <h1> {{$comic -> title}} </h1>
            <P><strong>Descrizione</strong> <hr> {{$comic -> description}} <hr> </P>
            <P><strong>Serie :</strong> {{$comic -> series}} </P>
            <P><strong>Data pubblicazione :</strong> {{$comic -> sale_date}} </P>
            <P><strong>Categoria :</strong> {{$comic -> type}} </P>
            <h3> {{$comic -> price}} &euro;</h3>

        </div>
    </div>
@endsection
