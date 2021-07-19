@extends('layouts.main')
@section('content')
    <h1>Elenco fumetti</h1>
    <table class="mt-4 table table-striped">
        <thead>
            <tr>
                <td>id</td>
                <td>title</td>
                <td>description</td>
                <td>price</td>
                <td colspan="3">action</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($comics as $item)
                <tr>
                    <td>{{$item -> id}}</td>
                    <td>{{$item -> title}}</td>
                    <td>{{$item -> description}}</td>
                    <td>{{$item -> price}}&euro;</td>
                    <td>
                        <a href="{{ route("comic.show", $item->id, $item -> title, $item -> description, $item -> price, $item -> thumb) }}" class="btn btn-success">SHOW</a>
                    </td>
                    <td>EDIT</td>
                    <td>DELETE</td>
                </tr>
            @endforeach
    
        </tbody>
    </table>
    {{ $comics->links() }}
@endsection