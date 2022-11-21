@extends('main.template')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center">
    <div class="card mb-3 w-50">
        <div class="row g-0">
            <div class="col-md-4">
                <img style="max-width: 13rem" src={{ asset('storage/'.$publisher->image) }} class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$publisher->name}}</h5>
                    <p class="card-text"><b>Email : </b>{{$publisher->email}}</p>
                    <p class="card-text text-muted"><b>Address :</b> {{$publisher->address}}</p>
                    <p class="card-text text-muted"><b>Phone : </b>{{$publisher->phone}}</p>
                </div>
            </div>
        </div>
    </div>
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
                        <a href={{'/book/'.$book->id}} class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
