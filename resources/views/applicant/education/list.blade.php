<section class="mx-3">
    <style>
        a {
            text-decoration: none !important;
        }
    </style>
    @foreach($educations->groupBy('school') as $education)
        <div class="row">
            <div class="lead ml-4">{{$education[0]->school}}</div>
        </div>
        <table class="table table-bordered text-black-50">
            <thead>
            <tr>
                <th>Location</th>
                <th>From(Date)</th>
                <th>To(Date)</th>
                <th>Major</th>
                <th>Award</th>
                <th>Last School</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($education as $list)
                <tr>
                    <td>{{$list->location}}</td>
                    <td>{{$list->fromdate}}</td>
                    <td>{{$list->todate}}</td>
                    <td>{{$list->major}}</td>
                    <td>{{$list->award}}</td>
                    <td>{{$list->last_sch}}</td>
                    <td><a href="{{route('school.delete',['id'=>$list->id])}}" class="h1"><span
                                    class="text-danger h1 lead rounded-circle"><h1>-</h1></span></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endforeach

    <div class="row">
        <div class="mx-auto">
            <a href="/programmes" class="btn btn-primary btn-sm"> continue</a>
        </div>
    </div>
</section>