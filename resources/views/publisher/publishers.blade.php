@extends('main.template')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center my-3">
    @foreach ($publishers as $p)
        <div class="card mb-3 w-75">
            <div class="row g-0">
                <div class="col-md-4">
                    <img style="max-width: 13rem" src={{ asset('storage/'.$p->image) }} class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$p->name}}</h5>
                        <p class="card-text"><b>Email : </b>{{$p->email}}</p>
                        <p class="card-text text-muted"><b>Address :</b> {{$p->address}}</p>
                        <p class="card-text text-muted"><b>Phone : </b>{{$p->phone}}</p>
                        <a class="btn btn-primary" href="">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
