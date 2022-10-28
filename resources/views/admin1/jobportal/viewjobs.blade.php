@extends('layouts.admin')
@section('page')

    <body>
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                {{-- <div class="table-title">
                    <div class="profiles">

                        <br>
                        { <div class="col-xs-6">
                            <a href="http://127.0.0.1:8000/programlist" class="btn btn-success" data-toggle="modal"><i
                                    class="material-icons">&#xE147;</i> <span>New </span></a>
                            <a href="/home" class="btn btn-warning" data-toggle="modal"><i
                                    class="material-icons">&#xe879;</i> <span>Exit</span></a>
                        </div>
                    </div>
                </div> --}}
                <br>




                <a href="/addjobs" class="btn btn-primary">Add Jobs</a><br><br>

                @foreach ($job as $job)
                    {{-- @if ($profiles->email == Auth::user()->email) --}}
                    <tr>
                        <strong>Employer :</strong> {{ $job->employer }} <br><br>
                        <strong>Company : </strong> {{ $job->company }} <br><br>
                        <strong> Post :</strong> {{ $job->post }} <br><br>
                        <strong> Last_date :</strong>  {{date('d-m-Y', strtotime( $job->last_date )) }} <br><br>
                        <strong>Details :</strong> {{ $job->details }} <br><br>

                    </tr>
                    <a href="{{ route('jobs.delete' , $job->id) }}"  class="btn btn-outline-danger">Delete</a>
                    {{--                    |--}}
                    {{--                    <a href="{{ URL::to('deletedetails/' . $seminars->id) }}">--}}
                    {{--                        Delete--}}
                    </a>
                    <hr>
                    <br>
                @endforeach

                <div class="clearfix">


                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->

    <!-- Edit Modal HTML -->

    <!-- Delete Modal HTML -->

    {{--    @include('layouts.footer')--}}

    </body>










@endsection
