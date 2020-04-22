@extends('layouts.student')
@section('render')

    <style>
        a {
            text-decoration: none !important;
        }
    </style>
    <section>
        <div class="container py-5 mx-5">
            <form action="/save-attachment" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 input-group-sm">
                        <label for="">file Name</label>
                        <input type="text" name="file_name" required class="form-control">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 input-group-sm">
                        <label for="">Upload Attachment/File</label>
                        <br>
                        <input type="file" name="file" required>
                        <div class="text-danger">
                            {{$errors->first('file')}}
                        </div>
                    </div>

                </div>
                @csrf
                <div class="row py-3">
                    <div class="w-25 mx-3">
                        <button class="btn  btn-sm btn-outline-dark w-25" type="submit">Save</button>
                    </div>
                </div>
            </form>
            <div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>File Name</th>
                        <th>File</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($files as $file)
                        <tr>
                            <th>{{$file->file_name}}</th>
                            <th><img src="{{asset('storage/'.$file->file)}}" alt="" width="100"></th>
                            <th><span><h1 class="text-danger"><a href="{{route('attachment.delete',['id'=>$file->id])}}"
                                                                 class="text-danger">-</a></h1></span></th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @if($files != null)
            <div class="row">
                <div class="ml-auto mx-5">
                    <a href="/preview" class="btn-primary btn btn-sm">Preview Document</a>
                </div>
            </div>
        @endif
    </section>
@endsection