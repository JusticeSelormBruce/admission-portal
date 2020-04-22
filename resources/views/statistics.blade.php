<style>
    body{
        font-family: -apple-system!important;
    }
    table{
        font-size: 8pt!important;
    }
</style>
<div class="row pt-5"></div>
<table class="table  border table-bordered text-muted text-sm">
    <thead>
    <tr class="row">
        <th class="col-4 ml-4">Form Name</th>
        <th class="col-3">Sold</th>
        <th class="col-3">Remaining</th>
        <th class="">Total</th>
    </tr>
    </thead>
    <tbody>
    @if($formNo >= 1)
        <tr class="row">
            <th class="col-4 ml-4">
                {{$forms[0]->name}} <br>
                <div class="row">
                    <div class="mx-auto"><span class="mr-1">GH₵</span> ({{$forms[0]->price}})</div>
                </div>

            </th>
            <th class="col-3">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar"
                         style="width: @if(!$hnd_gh_remaining_percentage==0){{ round((100 - $hnd_gh_remaining_percentage),3)}}% @endif @if($hnd_gh_remaining_percentage==0)0%@endif"
                         aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="row">
                    <div class="mx-auto pt-2">
                        @if(!$hnd_gh_remaining_percentage ==0)
                            ({{($hnd_gh_remaining + $hnd_gh_sold)-($hnd_gh_remaining)}})
                        @else
                            (0)
                        @endif
                    </div>
                </div>

            </th>
            <th class="col-3">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar"
                         style="width: {{$hnd_gh_remaining_percentage}}%"
                         aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="row">
                    <div class="mx-auto pt-2">
                      ({{($hnd_gh_remaining + $hnd_gh_sold)-($hnd_gh_sold)}})
                    </div>
                </div>

            </th>
            <th class="">{{$hnd_gh_remaining + $hnd_gh_sold}}</th>
        </tr>
    @else
    @endif
    @if($formNo >= 2)
        <tr class="row">
            <th class="col-4 ml-4">
                {{$forms[1]->name}} <br>
                <div class="row">
                    <div class="mx-auto"><span class="mr-1">GH₵</span> ({{$forms[1]->price}} )</div>
                </div>

            </th>
            <th class="col-3">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                         style="width: @if(!$hnd_foreign_remaining_percentage==0){{ round((100 - $hnd_foreign_remaining_percentage),3)}}% @endif @if($hnd_foreign_remaining_percentage==0)0%@endif"
                         aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="row">
                    <div class="mx-auto pt-2">
                        @if(!$hnd_foreign_remaining_percentage ==0)
                            ({{($hnd_foreign_remaining +$hnd_foreign_sold)-($hnd_foreign_remaining)}})
                        @else
                            (0)
                        @endif


                    </div>
                </div>
            </th>
            <th class="col-3">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                         style="width:@if(!$hnd_foreign_remaining_percentage==0){{ round(( $hnd_foreign_remaining_percentage),3)}}% @endif @if($hnd_foreign_remaining_percentage==0)0%@endif"
                         aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="row">
                    <div class="mx-auto pt-2">
                        @if(!$hnd_foreign_remaining_percentage ==0)
                            ({{($hnd_foreign_remaining +$hnd_foreign_sold)-($hnd_foreign_sold)}})
                        @else
                            (0)
                        @endif


                    </div>
                </div>
            </th>
            <th class="">{{$hnd_foreign_remaining +$hnd_foreign_sold}}</th>
        </tr>
    @else
    @endif
    @if($formNo >= 3)
        <tr class="row">
            <th class="col-4 ml-4">

                <div class="row">
                    <div class="mx-auto">    {{$forms[2]->name}}</div>
                </div>
                <div class="row">
                    <div class="mx-auto"><span class="mx-2">GH₵</span>({{$forms[2]->price}})</div>
                </div>

            </th>
            <th class="col-3">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                         style="width:@if(!$btech_topup_foreign_remaining_percentage==0){{ round((100 - $btech_topup_foreign_remaining_percentage),3)}}% @endif @if($btech_topup_foreign_remaining_percentage==0)0%@endif"
                         aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="row">
                    <div class="mx-auto pt-2">
                        @if(!$btech_topup_foreign_remaining_percentage ==0)
                            ({{($btech_topup_foreign_remaining +$btech_topup_foreign_sold)-($btech_topup_foreign_remaining)}})
                        @else
                            (0)
                        @endif


                    </div>
                </div>
            </th>
            <th class="col-3">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                         style="width: {{$btech_topup_foreign_remaining_percentage}}%"
                         aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="row">
                    <div class="mx-auto pt-2">
                        @if(!$btech_topup_foreign_remaining_percentage ==0)
                            ({{($btech_topup_foreign_remaining +$btech_topup_foreign_sold)-($btech_topup_foreign_sold)}})
                        @else
                            (0)
                        @endif


                    </div>
                </div>
            </th>
            <th class="">{{$btech_topup_foreign_remaining +$btech_topup_foreign_sold}}</th>
        </tr>
    @else
    @endif
    @if($formNo >= 4)
        <tr class="row">
            <th class="col-4 ml-4">
                <div class="row">
                    <div class="mx-auto">    {{$forms[3]->name}}</div>
                </div>
                <div class="row">
                    <div class="mx-auto"><span class="mx-2">GH₵</span>({{$forms[3]->price}})</div>
                </div>


            </th>
            <th class="col-3">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                         style="width:@if(!$btech_foreign_remaining_percentage==0){{ round((100 - $btech_foreign_remaining_percentage),3)}}% @endif @if($btech_foreign_remaining_percentage==0)0%@endif"
                         aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="row">
                    <div class="mx-auto pt-2">
                        @if(!$btech_foreign_remaining_percentage ==0)
                            ({{($btech_foreign_sold +$btech_foreign_remaining)-($btech_foreign_remaining)}})
                        @else
                            (0)
                        @endif


                    </div>
                </div>
            </th>
            <th class="col-3">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                         style="width: {{$btech_foreign_remaining_percentage}}%"
                         aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="row">
                    <div class="mx-auto pt-2">
                        ({{($btech_foreign_sold +$btech_foreign_remaining)-($btech_foreign_sold)}})

                    </div>
                </div>
            </th>
            <th class="">{{$btech_foreign_sold +$btech_foreign_remaining}}</th>
        </tr>
    @else
    @endif
    @if($formNo >= 5)
        <tr class="row">
            <th class="col-4 ml-4">
                <div class="row">
                    <div class="mx-auto">    {{$forms[4]->name}}</div>
                </div>
                <div class="row">
                    <div class="mx-auto"><span class="mx-2">GH₵</span>({{$forms[4]->price}})</div>
                </div>


            </th>
            <th class="col-3">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                         style="width:@if(!$btech_gh_remaining_percentage==0){{ round((100 - $btech_gh_remaining_percentage),3)}}% @endif @if($btech_gh_remaining_percentage==0)0%@endif"
                         aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="row">
                    <div class="mx-auto pt-2">
                        @if(!$btech_gh_remaining_percentage ==0)
                            ({{($btech_gh_sold + $btech_gh_remaining) -($btech_gh_remaining)}}))
                        @else
                            (0)
                        @endif


                    </div>
                </div>
            </th>
            <th class="col-3">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                         style="width: {{round($btech_gh_remaining_percentage)}}%"
                         aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="row">
                    <div class="mx-auto pt-2">
                        ({{($btech_gh_sold + $btech_gh_remaining) -($btech_gh_sold)}}))

                    </div>
                </div>
            </th>
            <th class="">{{$btech_gh_sold + $btech_gh_remaining}}</th>
        </tr>
    @else
    @endif
    </tbody>
</table>

