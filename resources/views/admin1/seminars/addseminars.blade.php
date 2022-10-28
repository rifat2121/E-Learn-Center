@extends('layouts.admin')
@section('page')
<div class="py-5 bg-light">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-8 mb-5">




                <form action="{{ route('seminar.store') }}" method="post" id="login_form" class="p-5 bg-white">
                    @csrf


{{--                    <div class="row form-group">--}}
{{--                        <div class="col-md-12 mb-3 mb-md-0">--}}
{{--                            <label class="font-weight-bold" for="fullname">Name</label>--}}
{{--                            <input type="text" id="name" name="name" class="form-control" placeholder="">--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label class="font-weight-bold" for="fullname">Venue</label>
                            <input type="text" id="venue" name="venue" class="form-control" placeholder="">
                        </div>

                        <div class="col-md-6">
                            <label class="font-weight-bold" for="email">Seats</label>
                            <input type="number" id="seats" name="seats" class="form-control"
                                   placeholder="">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label class="font-weight-bold" for="phone">Topic</label>
                            <input id="topic" name="topic" cols="20" rows="5" class="form-control" placeholder="" />

                        </div>

                        <div class="col-md-6">
                            <label class="font-weight-bold" for="message">Hosts</label>
                            <input type="text" id="hosts" name="hosts" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="font-weight-bold" for="phone">Special Guests</label>
                            <input id="guests" name="guests" cols="20" rows="5" class="form-control"
                                   placeholder="" />

                        </div>
                    </div>
                        <div class="row form-group">
                        <div class="col-md-4">
                            <label class="font-weight-bold" for="phone">Fee</label>
                            <input type="text" id="fee" name="fee" class="form-control" placeholder="">
                        </div>

                    <div class="col-md-4">
                        <label class="font-weight-bold" for="message">Date</label>
                        <input type="date" id="date" name="date" class="form-control" placeholder="">
                    </div>



                        <div class="col-md-4">
                            <label class="font-weight-bold" >Time</label>
                            <input type="time" id="time" name="time" class="form-control" placeholder="" >
                        </div>
                </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Add seminars" class="btn btn-primary text-white px-4 py-2">
                        </div>
                    </div>


                </form>
            </div>

            <div class="col-lg-4">
                <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3">Contact Info</h3>
                    <p class="mb-0 font-weight-bold">Address</p>
                    <p class="mb-4">Daffodil International University, Ashulia Campus, Datta para, Savar Khagan, Dhaka Division, Bangladesh</p>

                    <p class="mb-0 font-weight-bold">Phone</p>
                    <p class="mb-4"><a href="#">+8802224441834</a></p>

                    <p class="mb-0 font-weight-bold">Email Address</p>
                    <p class="mb-0"><a href="#">daffodil.university@diu.edu.bd</a></p>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection
