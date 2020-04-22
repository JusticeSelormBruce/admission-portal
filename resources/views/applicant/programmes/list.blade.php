<section class="mx-3">
    <style>
        a {
            text-decoration: none !important;
        }
    </style>

    <table class="table table-bordered text-black-50">
        <thead>
        <tr>

            <th>First Choice</th>
            <th>Second Choice</th>

        </tr>
        </thead>
        <tbody>

        <tr>
            @foreach($programmes as $list)
                @if($list->id == $program->first_choice)
                    <td>{{$list->long_name}}</td>
                @endif
                @if($list->id == $program->second_choice)
                    <td>{{$list->long_name}}</td>
                @endif
            @endforeach
        </tr>

        </tbody>
    </table>


    <div class="row">
        <div class="mx-auto py-5">
            <a href="/other-results" class="btn btn-primary btn-sm">Continue</a>
        </div>
    </div>
</section>