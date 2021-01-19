@extends("layouts.app")

@section("content")
    <div class="container">
        <h1 class="uppercase">Home products</h1>

        <div class="box-card">
            @foreach ($dresses as $item)
                <div class="card-product">
                    <ul>
                        <li>
                            <p class="uppercase"> Type : </p> <span>{{ $item->name }} </span>
                            <p class="uppercase"> Color : </p> <span>{{ $item->color }} </span>
                            <p class="uppercase"> Size : </p> <span>{{ $item->size }} </span>
                            <p class="uppercase"> Price : </p> <span> € {{ $item->price }} </span>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>

    </div>
@endsection
