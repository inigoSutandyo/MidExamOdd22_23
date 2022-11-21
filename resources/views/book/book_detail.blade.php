@extends('main.template')

@section('content')
<div class="d-flex flex-row justify-content-center w-100 align-items-start">
    <div class="m-3 flex-end d-flex">
        <img style="max-width: 20rem" src={{asset('storage/'.$book->image)}} alt="">
    </div>
    <div class="m-3 w-50">
        <div class="row mb-2">
            <div class="col-2">
                Title:
            </div>
            <div class="col-6">
                {{$book->title}}
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                Author:
            </div>
            <div class="col-6">
                {{$book->author}}
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                Year:
            </div>
            <div class="col-6">
                {{$book->year}}
            </div>
        </div>
        <div class="row mb-2">
            <div>
                Synopsis:
            </div>
            <div class="text-wrap">
                {{$book->synopsis}}
            </div>
        </div>
    </div>
</div>
@endsection
