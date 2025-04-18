@extends('layouts.adminmaster')
@section('admin_contents')

<section class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="my_form">
                    <div class="card">
                        <div class="card-body">
                            <div class="row pt-4 ">
                                <div class="col-lg-6">
                                    <h3> Add Banner Information</h3>
                                </div>
                                <div class="col-lg-6">
                                  <div class="button  d-flex justify-content-end">
                                    <a href="{{url('home-banner/all')}}"><button class="btn btn-success mx-4">All Information</button></a>
                                  </div>
                                </div>
                            </div>
                            <hr>
                            {{-- form start here  --}}
                            <form action="#" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Banner Heading</label>
                                            <input type="text" class="form-control" name="banner_heading" id="banner_heading" aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                          </div>
                                    </div>
                                    {{-- col end  --}} 
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Banner Title</label>
                                            <input type="text" class="form-control" name="banner_title" id="banner_title" aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                          </div>
                                    </div>
                                    {{-- col end  --}} 
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Banner Description</label>
                                            <input type="text" class="form-control" name="banner_desc" id="banner_desc" aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                          </div>
                                    </div>
                                    {{-- col end  --}} 
                                   
                                </div>

                                <div class="submit_button mt-4 ">
                                    <button type="submit" class="btn btn-success">Submit Data</button>
                                </div>
                            </form>





                            {{-- form end here  --}}
                        </div>
                    </div>
                </div>
            </div>
            {{-- col end  --}}
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body p-2">
                        <h4> Sidebar Information </h4>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sit fuga dignissimos quasi quaerat cupiditate consequatur neque doloremque temporibus a.</p>
                    </div>
                </div>
            </div>
            {{-- col end  --}}



        </div>
        {{-- row end  --}}
    </div>
</section>


@endsection