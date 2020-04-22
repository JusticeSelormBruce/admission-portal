@extends('layouts.student')
@section('render')
    <div class="container py-5">

        <div class="">
            <div class="lead">
                Upload other results
            </div>

            <div class="input-group-sm">
                <form action="/get-exams" class="py-2 input-group-sm ml-3 mr-3" method="post">
                    <select name="examstype" id="" class="form-control" required onchange="this.form.submit()">
                        <option value="">Select Exams Type</option>
                        @if($subject == null)
                            @foreach($examsType as $exams)
                                <option value="{{$exams->type}}">{{$exams->desc}}</option>
                            @endforeach
                        @else
                            @foreach($examsType as $exams)
                                <option value="{{$exams->type}}"
                                        @if($subject[0]->exam_type == $exams->type ) selected @endif>{{$exams->desc}}</option>
                            @endforeach
                        @endif

                    </select>
                    @csrf
                </form>
            </div>

            <form action="/save-other-results" method="post">
                <div class="mx-3">
                    @include('applicant.other_results.form')
                </div>


                <div class="row">
                    <div class="mx-auto w-50">
                        <button class="btn btn-sm btn-outline-dark w-25" type="submit">Save</button>
                    </div>
                </div>
                @csrf
            </form>

        </div>

        @include('applicant.other_results.list')


    </div>

@endsection