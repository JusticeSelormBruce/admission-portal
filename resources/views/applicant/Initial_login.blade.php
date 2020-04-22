@extends('layouts.view')
@section('render')
    <div class="container mt-5" ata-color="dark">
        <div class="card w-100">
            <div class="card-header ">
                <div class="mx-auto lead">Welcome {{Auth::user()->name}}</div>
            </div>
            <div class="card-body">
                <div class="row py-3">
                    <div class="mx-auto small">
                        <label for="">Form:</label>
                        <span class="mx-2"></span>
                        {{$formDetails->name}}
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="mx-auto d-flex">
                            <form action="/loged-in-before" method="post">
                                <div>
                                    <button class="btn btn-outline-dark btn-sm" type="submit">Continue </button>
                                </div>
                                @csrf
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
