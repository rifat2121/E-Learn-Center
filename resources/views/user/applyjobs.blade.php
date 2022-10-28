@extends('layouts.user')
@section('page')
    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-8 mb-5">




                    <form action="{{ route('apply.now') }}" method="post" id="login_form" class="p-5 bg-white">
                        @csrf


                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="font-weight-bold" for="phone">Applying For</label>
                                <select id="applyfor" name="applyfor" class="form-control" required="required" data-error="Please specify your need." >
                                    <option value=""> </option>
                                    @foreach($job as $jobs)

                                        <option value="{{$jobs->id}}"> {{$jobs->company}} for the post of {{$jobs->post}}     </option>
                                    @endforeach
                                </select>
                            </div>



                            <div class="col-md-6">
                                <label class="font-weight-bold" for="fullname">Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="">
                            </div>

                            <div class="col-md-3">
                                <label class="font-weight-bold" for="fullname">Nid</label>
                                <input type="text" id="nid" name="nid" class="form-control" placeholder="">
                            </div>


                            <div class="col-md-3">
                                <label class="font-weight-bold" for="fullname">Email</label>
                                <input type="text" id="extra" name="extra" class="form-control" placeholder="">
                            </div>
<br>
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="phone">Personal Details</label>
                                <textarea id="pdetails" name="pdetails" cols="20" rows="3" class="form-control" placeholder="" ></textarea>
                            </div>

                            <div class="col-md-12">
                                <label class="font-weight-bold" for="phone">Education</label>
                                <textarea id="education" name="education" cols="20" rows="3" class="form-control" placeholder="" ></textarea>
                            </div>

                            <div class="col-md-12">
                                <label class="font-weight-bold" for="phone">Experience</label>
                                <textarea id="experience" name="experience" cols="20" rows="3" class="form-control" placeholder="" ></textarea>
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Apply Now" class="btn btn-primary text-white px-4 py-2">
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
