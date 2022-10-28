@extends('layouts.admin')
@section('page')
    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-8 mb-5">




                    <form action="{{ route('update-seminar' , $seminar) }}" method="post" id="login_form" class="p-5 bg-white">
                        @csrf


                        <div class="row form-group">
                            <div class="col-md-6">
                                <label class="font-weight-bold" >Venue</label>
                                <input type="text" id="venue" name="venue" class="form-control" placeholder="" value="{{$seminar->venue}}">
                            </div>

                            <div class="col-md-6">
                                <label class="font-weight-bold" >Seats</label>
                                <input type="number" id="seats" name="seats" class="form-control"
                                       placeholder="" value="{{$seminar->seats}}">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6">
                                <label class="font-weight-bold">Topic</label>
                                <input type="text" id="topic" name="topic" cols="20" rows="5" class="form-control" placeholder="" value="{{$seminar->topic}}"/>

                            </div>

                            <div class="col-md-6">
                                <label class="font-weight-bold" >Special Guests</label>
                                <input type="text" id="guests" name="guests" cols="20" rows="5" class="form-control"
                                       placeholder="" value="{{$seminar->guests}}"/>

                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6">
                                <label class="font-weight-bold" >Hosts</label>
                                <input type="text" id="hosts" name="hosts" class="form-control" placeholder="" value="{{$seminar->hosts}}" >
                            </div>


                            <div class="col-md-3">
                                <label class="font-weight-bold" >Fee</label>
                                <input type="text" id="fee" name="fee" class="form-control" placeholder="" value="{{$seminar->fee}}">
                            </div>

                            <div class="col-md-3">
                                <label class="font-weight-bold" >Date</label>
                                <input type="date" id="date" name="date" class="form-control" placeholder="" value="{{$seminar->date}}">
                            </div>

                            <div class="col-md-3">
                                <label class="font-weight-bold" >Time</label>
                                <input type="time" id="time" name="time" class="form-control" placeholder="" value="{{$seminar->time}}">
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
