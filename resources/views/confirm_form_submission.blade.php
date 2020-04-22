@extends('layouts.view')
@section('render')
    <style>
        .h {
            height: 40vh !important;
        }
    </style>
    <div class="container">
        <div class="w-100 pt-5">
            <div class="jumbotron h pb-5">
                <div>
                    <lead>
                        <h5>{{$title ??''}}</h5>
                    </lead>
                </div>
                <hr>
                <hr>
                <div class="row pt-5">
                    <div class="mx-auto">
                        <a href="/confirm-submit" class="btn  btn-outline-dark">Submit
                            Application</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection