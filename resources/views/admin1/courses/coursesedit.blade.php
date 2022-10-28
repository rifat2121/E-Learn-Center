@extends('layouts.admin')

@section('page')
    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-8 mb-5">


                    <form action="{{ route('update-courses',$courses) }}" method="post" id="login_form" class="p-5 bg-white">
                        @csrf


                        <div class="row form-group">
                            <div class="col-md-6">
                                <label class="font-weight-bold" >Title</label>
                                <input type="text" id="title" name="title"  placeholder="" value="{{$courses->title}}" class="form-control ">
                            </div>


                            <div class="col-md-6">
                                <label class="font-weight-bold" >Seats</label>
                                <input type="text" id="seats" name="seats" class="form-control" placeholder="" value="{{$courses->seats}}">
                            </div>

                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label class="font-weight-bold" >Fee</label>
                                <input type="text" id="fee" name="fee" class="form-control"
                                       placeholder="" value="{{$courses->fee}}">
                            </div>

                            <div class="col-md-4">
                                <label class="font-weight-bold" >Starts_at</label>
                                <input type="date" id="starts_at" name="starts_at" class="form-control"
                                       placeholder=""  value="{{$courses->starts_at}}"/>

                            </div>

                            <div class="col-md-4">
                                <label class="font-weight-bold" >Ends_at</label>
                                <input type="date" id="ends_at" name="ends_at" class="form-control"
                                       placeholder="" value="{{$courses->ends_at}}" />
                            </div>

                        </div>

                        <div class="col-md-14">
                            <label class="font-weight-bold">Details</label>
                            <input id="details" name="details"  class="form-control" placeholder="" value="{{$courses->details}}" />
                        </div>
                        <br>


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
