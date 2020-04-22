@extends('layouts.Admin')
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
    <section>
        <div>
            <div class="container-fluid py-5">
                <div class="card">
                    <div class="card-header">
                    Add Bank Details
                    </div>
                    <div class="card-body">
                        <div class="row pt-5">
                            <div class="mx-auto w-50">
                                <form action="/create-bank" method="post">
                                    <div class="input-group-sm  form-group">
                                        <div>
                                            <label for="">Bank Name:</label>
                                        </div>
                                        <input type="text" class="form-control" required name="name">

                                    </div>

                                    <div class="input-group-sm  form-group">
                                        <div>
                                            <label for="">Bank Branch:</label>
                                        </div>
                                        <input type="text" class="form-control" required name="branch">

                                    </div>

                                    <div class="input-group-sm  form-group row">
                                     <button class="btn btn-sm btn-outline-dark mx-auto w-25" type="submit">Submit</button>
                                    </div>
                                    @csrf
                                </form>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
