@extends('layouts.adminmaster')
@section('admin_content')

<section class="mt-5 mb-2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                <h5 class="card-header">Default</h5>
                <div class="card-body">
                    <form action="{{route('banner.submit')}}" method="post">
                        @csrf
                        <div class="input"> 
                            <label for="banneTitle" class="form-label">Banner Title</label>
                            <input type="text" class="form-control" name="banner_title" id="banner_title"placeholder="banner title" />
                            <div id="defaultFormControlHelp" class="form-text"> We'll never share your details with anyone else </div>
                        </div>
                        {{-- end here  --}}
                        <div class="input"> 
                            <label for="bannerHeading" class="form-label">Banner  Heading</label>
                            <input type="text" class="form-control" name="banner_heading" id="banner_heading"placeholder="banner heading" />
                            <div id="defaultFormControlHelp" class="form-text"> We'll never share your details with anyone else </div>
                        </div>
                        {{-- end here  --}}
                        <div class="input"> 
                            <label for="bannerDescription" class="form-label">Banner Description</label>
                            <input type="text" class="form-control" name="banner_desc" id="banner_desc"placeholder="banner description" />
                            <div id="id" class="form-text"> We'll never share your details with anyone else </div>
                        </div>
                        {{-- end here  --}}
                        <button class="btn btn-success mt-4 " type=" submit"> Submit </button>
                    </form>
                </div>
                </div>
            </div>




            {{-- cole end  --}}
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5> Createt History </h5>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, libero?</p>
                    </div>
                </div>
            </div>
    </div>
</section>

   


@endsection