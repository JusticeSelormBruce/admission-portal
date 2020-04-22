@extends('layouts.student')
@section('render')
    <style>
        .avatar {
            width: 150px !important;
            height: 150px !important;
        }
    </style>
    <div class="container">
        <div class="row py-5">
            <div class=" w-100">
                <div class="ml-3">Education Details</div>
                @if($result == 0)
                    <form action="/save-education-details" method="post">
                        <div>
                            @include('applicant.education.form')
                        </div>
                        <div class="row">
                            <div class=" ml-auto w-50">
                                <button class=" btn btn-outline-dark btn-sm w-25" type="submit">Save</button>
                            </div>
                        </div>
                        @csrf
                    </form>
                    @else
                   @include('applicant.education.add')
                    @include('applicant.education.list')
                @endif


            </div>
        </div>
    </div>

@endsection
