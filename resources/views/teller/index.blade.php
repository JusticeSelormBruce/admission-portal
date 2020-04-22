@extends('layouts.teller')
@section('render')
    <style>
        @media only screen and (min-width: 768px) {
            .card {
                height: 80vh !important;
            }
        }

        @media only screen and (max-width: 768px) {

            .card {
                height: auto !important;
            }

            input {
                width: 100% !important;
            }
        }

        @media only screen and (min-width: 600px) {
            .card {
                height: 80vh !important;
            }
        }
        label{
            font-size: 15pt!important;
        }
    </style>
    <div class="container-fluid py-5">
        <div class="card">
            @include('statistics')
        </div>
    </div>
@endsection
