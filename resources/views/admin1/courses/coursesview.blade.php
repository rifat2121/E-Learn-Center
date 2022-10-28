@extends('layouts.admin')
@section('page')

    <body>
    <div class="container">
        <div class="table-responsive">
                <br>
                <a href="/addcourses" class="btn btn-primary">Add Courses</a><br>
            <br>
                @foreach ($courses as $courses)
{{--                     @if ($profiles->email == Auth::user()->email)--}}
                    <tr>
                        <strong>Title :</strong> {{ $courses->title }} <br><br>
                        <strong>Seats :</strong> {{ $courses->seats }} <br><br>
                        <strong>Fee : </strong> {{ $courses->fee }} <br><br>
                        <strong> Starts :</strong> {{ date('d-m-Y', strtotime( $courses->starts_at )) }} <br><br>
                        <strong> Ends :</strong> {{ date('d-m-Y', strtotime( $courses->ends_at )) }} <br><br>
                        <strong> Description:</strong> {{ $courses->details }} <br><br>
                    </tr>
                    <a href="{{ URL::to('editcourses/' . $courses->id) }}" class="btn-outline-success" >Update</a>
                                        |
                    <a href="{{ URL::to('deletecourses/' . $courses->id) }}" class="btn-outline-danger">
                                            Delete
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
