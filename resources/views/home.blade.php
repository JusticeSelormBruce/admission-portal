@extends('layouts.app')

@section('content')
    <style>
        .card1 {
            height: 30vh !important;
            margin: 3px;
        }

        @media (max-width: 576px) {
            .card1 {
                height: 30vh !important;
                border-radius: 0px;
            }

            img {
                height: 20vh !important;
            }

            title {
                font-size: 10pt !important;
            }
            .card2{
                height: auto !important;
            }
        }
    </style>
    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div>
                    <img src="{{asset('images/bg.png')}}" alt="" class="w-100">
                </div>
            </div>
            <div class="row pt-2 no-gutters">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card card1" style="background-color: #5B6C71  !important;">
                        <div class="row my-auto mx-auto h1">
                            How to Apply
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card  card1 card2" style="background-color: #34495E  !important;">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group input-group-sm">
                                <div class="mx-lg-5 mx-md-3 mx-sm-3 py-3">
                                    <input type="text" class="form-control" required placeholder="serial No" name="email">
                                </div>
                                <div class="mx-lg-5 mx-md-3 mx-sm-3 py-3">
                                    <input type="text" class="form-control" required placeholder="Pin Code" name="password">
                                </div>
                                <div class="row">
                                    <button class="mx-auto btn btn-success btn-sm w-25" type="submit">Continue</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>

@endsection
