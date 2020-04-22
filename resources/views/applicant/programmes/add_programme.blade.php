@extends('layouts.student')
@section('render')
    <style>
        .avatar {
            width: 150px !important;
            height: 150px !important;
        }
    </style>
    <div class="container pt-5 mx-5">
        <div class="row pb-5">
            <div class=" w-100">
                <div class="">Programmes  Details</div>
                @if($result == 0)
                    <form action="/save-programmes-details" method="post">
                        <div>
                            @include('applicant.programmes.form')
                        </div>
                        <div class="row">
                            <div class="pb-5 mx-auto w-50 ">
                                <button class=" btn  btn-sm  btn-outline-dark w-50 mx-5" type="submit">Save  and continue</button>
                            </div>
                        </div>
                        @csrf
                    </form>
                    @else
                   @include('applicant.programmes.add')
                    @include('applicant.programmes.list')
                @endif


            </div>
        </div>
    </div>

@endsection
