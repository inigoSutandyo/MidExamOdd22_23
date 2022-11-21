@extends('main.template')

@section('content')
    <div class="d-flex flex-row flex-wrap my-3 justify-content-center">
        @foreach ($books as $book)
            <div class="card justify-content-center m-2" style="max-width: 15rem">
                <img src={{asset('storage/'.$book->image)}} class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <div>
                        <div class="card-text mb-1">
                            by
                            {{$book->author}}
                        </div>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
