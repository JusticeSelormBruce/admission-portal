@extends('layouts.view')
@section('render')
    <style>
        .line {
            background-color: #cce5ff;

        }

        hr {
            margin: 0.3rem;
        }

        .bg {
            background-color: white;
        }

        body {
            font-family: -apple-system;
            font-size: small !important;
        }

    </style>
    <div class="container py-4 small">
        {{--<div class="">--}}
            {{--<label for="">Application Preview:</label> <span class="mx-2 h4">{{Auth::user()->name}}</span>--}}
        {{--</div>--}}
        <div class="row">
            <div class="ml-auto mx-5 h4"><a href="/submit-form" class="btn btn-light btn-outline-dark btn">Submit Application</a></div>
        </div>
        <div class="row line hr">
            <hr>
        </div>

        @if($applicantcount >= 1)
            <h3>Bio Information</h3>
            <div class="row pt-2">
                <div class="mx-auto">
                    <img src="{{"storage/".$applicant->image}}" alt="{{Auth::user()->name}}"
                         style="height: 100px!important;  width: 100px!important; border-image: initial">
                </div>
            </div>
            <div class="row">
                <div class="ml-auto">
                    @include('applicant.edit_bio_details')
                </div>
            </div>

            <div class="row line py-2 text-uppercase">
                <div class="col-3">Title</div>
                <div class="col-3">Surname</div>
                <div class="col-3">First Name</div>
                <div class="col-3">Middle Name</div>
            </div>
            <div class="row py-2 bg text-uppercase">
                <div class="col-3">{{$applicant->title}}</div>
                <div class="col-3">{{$applicant->lname}}</div>
                <div class="col-3">{{$applicant->fname}}</div>
                <div class="col-3">{{$applicant->mname}}</div>
            </div>
            <div class="row line py-2 text-uppercase">
                <div class="col-3">Sex</div>
                <div class="col-3">Date of Birth</div>
                <div class="col-3">email</div>
                <div class="col-3">Home Phone</div>
            </div>
            <div class="row py-2 bg text-uppercase">
                <div class="col-3">{{$applicant->sex}}</div>
                <div class="col-3">{{$applicant->dob}}</div>
                <div class="col-3">{{$applicant->email}}</div>
                <div class="col-3">{{$applicant->homephone}}</div>
            </div>
            <div class="row line py-2 text-uppercase">
                <div class="col-3">Cell Phone</div>
                <div class="col-3">Fax</div>
                <div class="col-3">Home Address</div>
                <div class="col-3">Postal Address</div>
            </div>
            <div class="row py-2 bg text-uppercase">
                <div class="col-3">{{$applicant->cellphone}}</div>
                <div class="col-3">{{$applicant->fax}}</div>
                <div class="col-3">{{$applicant->homeadd}}</div>
                <div class="col-3">{{$applicant->post_address}}</div>
            </div>
            <div class="row line py-2 text-uppercase">
                <div class="col-3">Region</div>
                <div class="col-3">City</div>
                <div class="col-3">SSNIT</div>
                <div class="col-3">Place of Birth</div>
            </div>
            <div class="row py-2 bg text-uppercase">
                <div class="col-3">{{$applicant->region}}</div>
                <div class="col-3">{{$applicant->city}}</div>
                <div class="col-3">{{$applicant->ssnit}}</div>
                <div class="col-3">{{$applicant->place_of_birth}}</div>
            </div>
            <div class="row line py-2 text-uppercase">
                <div class="col-3">Home Town</div>
                <div class="col-3">Religion</div>
                <div class="col-3">Disability</div>
                <div class="col-3">Denomination</div>
            </div>
            <div class="row py-2 bg text-uppercase">
                <div class="col-3">{{$applicant->hometown}}</div>
                <div class="col-3">{{$applicant->religion}}</div>
                <div class="col-3">{{$applicant->disability}}</div>
                <div class="col-3">{{$applicant->denomination}}</div>
            </div>
            <div class="row line py-2 text-uppercase">
                <div class="col-3">Marital Status</div>
                <div class="col-3">No. of Children</div>
                <div class="col-3">Zip Code</div>
                <div class="col-3">Country</div>
            </div>
            <div class="row py-2 bg text-uppercase">
                <div class="col-3">{{$applicant->marital_status}}</div>
                <div class="col-3">{{$applicant->no_children}}</div>
                <div class="col-3">{{$applicant->zipcode}}</div>
                <div class="col-3">{{$applicant->country}}</div>
            </div>
            <div class="row line py-2 text-uppercase">
                <div class="col-6">Nationality</div>
                <div class="col-6">Languages spoken</div>

            </div>
            <div class="row py-2 bg text-uppercase">
                <div class="col-6">{{$applicant->nationality}}</div>
                <div class="col-6">{{$applicant->langSpoken}}</div>

            </div>

        @endif

        @if(!$family == null)
            <h3 class="py-3">Guardian Information</h3>
            <div class="row">
                <div class="ml-auto">
                    @include('applicant.edit_gaurdian_details')
                </div>
            </div>
            <div class="row line py-2 text-uppercase">
                <div class="col-3">Relationship</div>
                <div class="col-3">Full Name</div>
                <div class="col-3">Home Address</div>
                <div class="col-3">Post Office Box</div>
            </div>
            <div class="row py-2 bg text-uppercase">
                <div class="col-3">{{$family->relationship}}</div>
                <div class="col-3">{{$family->fullname}}</div>
                <div class="col-3">{{$family->homeadd}}</div>
                <div class="col-3">{{$family->post_box}}</div>
            </div>
            <div class="row line py-2 text-uppercase">
                <div class="col-3">City</div>
                <div class="col-3">Zip Code</div>
                <div class="col-3">Region</div>
                <div class="col-3">Country</div>
            </div>
            <div class="row py-2 bg text-uppercase">
                <div class="col-3">{{$family->city}}</div>
                <div class="col-3">{{$family->zipcode}}</div>
                <div class="col-3">{{$family->region}}</div>
                <div class="col-3">{{$family->country}}</div>
            </div>
            <div class="row line py-2 text-uppercase">
                <div class="col-3">Phone 1</div>
                <div class="col-3">Phone 2</div>
                <div class="col-3">Occupation</div>
                <div class="col-3">Company</div>
            </div>
            <div class="row py-2 bg text-uppercase">
                <div class="col-3">{{$family->phone1}},</div>
                <div class="col-3">{{$family->phone2}}</div>
                <div class="col-3">{{$family->occupation}}</div>
                <div class="col-3">{{$family->company}}</div>
            </div>
        @endif
        @if($educations != null)
            <h3 class="py-3">Education</h3>

            <div class="row">
                <div class="ml-auto">
                    <a href="/education" class="h1 lead text-danger">Edit</a>
                </div>
            </div>

            <div class="row line py-2 text-uppercase">
                <div class="col-3">School</div>
                <div class="col-3">Location</div>
                <div class="col-3">From (Date/year)</div>
                <div class="col-3">To (Date/year)</div>
            </div>
            @foreach($educations as $education)
                <div class="row py-2 bg text-uppercase">
                    <div class="col-3">{{$education->school}}</div>
                    <div class="col-3">{{$education->location}}</div>
                    <div class="col-3">{{$education->fromdate}}</div>
                    <div class="col-3">{{$education->todate}}</div>
                </div>
                <div class="line py-2  bg">
                </div>
            @endforeach
        @endif
        @if($otherresults != null)
            <h3 class="py-3">Other Results</h3>
            <div class="row">
                <div class="ml-auto">
                    <a href="/other-results" class="h1 lead text-danger">Edit</a>
                </div>
            </div>
            <div class="row line py-2 text-uppercase">
                <div class="col-2">Exams</div>
                <div class="col-3">Subject</div>
                <div class="col-2">Month/Year</div>
                <div class="col-2">Index Number</div>
                <div class="col-3">Qualification/Grade</div>

            </div>
            @foreach($otherresults as $list)

                <div class="row py-2 bg text-uppercase">

                    <div class="col-2">{{$list->exam_type}}</div>
                    <div class="col-3">{{$list->subject}}</div>
                    <div class="col-2">{{$list->monthyear}}</div>
                    <div class="col-2">{{$list->examindex}}</div>
                    <div class="col-3">{{$list->qualification}}</div>

                </div>

            @endforeach
        @endif
        @if($attachments != null)
            <h3 class="py-3">Attachments</h3>
            <div class="row">
                <div class="ml-auto">
                    <a href="/attachments" class="h1 lead text-danger">Edit</a>
                </div>
            </div>
            <div class="row line py-2 text-uppercase">
                <div class="col-6">File Name</div>
                <div class="col-6">File/Document</div>

            </div>
            @foreach($attachments as $list)

                <div class="row py-2 bg text-uppercase">

                    <div class="col-6 pt-3">{{$list->file_name}}</div>
                    <div class="col-6"><img src="{{"storage/".$list->file}}" alt="{{$list->file_name}}" width="100">
                    </div>


                </div>

            @endforeach
        @endif

        @if(!$programmes == null)
            <h3 class="py-3">Programmes</h3>
            <div class="row">
                <div class="ml-auto">
                    <a href="/programmes" class="h1 lead text-danger">Edit</a>
                </div>
            </div>
            <div class="row line py-2 text-uppercase">
                <div class="col-6">First Choice</div>
                <div class="col-6">Second Choice</div>

            </div>
            @foreach($Selectedprogrammes as $prog)
                <div class="row">
                    <div class="col-6">
                        @if($prog->id === $programmes->first_choice)
                            <div class="row  bg text-uppercase">
                                <div class="mx-auto pt-4">
                                    {{$prog->long_name}}
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-6">
                        @if($prog->id === $programmes->second_choice)
                            <div class="row bg text-uppercase">
                                <div class="mx-auto">
                                    {{$prog->long_name}}
                                </div>
                            </div>
                        @endif</div>
                </div>
            @endforeach
        @endif


    </div>

@endsection