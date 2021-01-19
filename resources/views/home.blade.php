@extends("layouts.app")

@section("content")
    <h1>Home products</h1>

    <ul>
        @foreach ($dresses as $item)
            <li>
                <p>{{ $item->name }}</p>
                <p> {{ $item->color}}</p>
                <p>{{ $item->size}}</p>
                <p>{{ $item->price}}</p>
            </li>
        @endforeach
    </ul>
@endsection
