<style>
    a {
        text-decoration: none !important;
    }
    table,thead,tbody,th{
        font-size: small!important;
    }
</style>
@if($otherResults->count())
    <div class="row">
        <a href="/attachments" class="btn  btn-sm ml-auto  mx-5 btn-outline-dark">Continue</a>
    </div>
@endif
<div>
    @foreach($otherResults->groupBy('exam_type') as $results)
        <div class="alert text-success">
            <div class="small">{{$results[0]->exam_type}}</div>
        </div>
        <table class="table mx-lg-4">
            <thead>
            <tr>
                <th>Subject</th>
                <th>Index Number</th>
                <th>Examination Year/month</th>
                <th>Grade</th>
                <th><span class="text-danger text-lowercase">action</span></th>
            </tr>
            </thead>
            <tbody>
            @foreach($results as $list)
                <tr>
                    <td>{{$list->subject}}</td>
                    <td>{{$list->examindex}}</td>
                    <td>{{$list->monthyear}}</td>
                    <td>{{$list->qualification}}</td>
                    <td><a href="{{route('results.delete',['id'=>$list->id])}}"><h1 class="text-danger">-</h1></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endforeach
</div>