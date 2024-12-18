@extends('layouts.webmaster')
@section('web_contents')
{{-- header end here  --}}
    <main>
        <div class="container col-xl-10 col-xxl-12 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
              <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">About Our Service  </h1>
                <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
              </div>
            </div>
          </div>
    {{-- include services --}}
    @includeif('frontend.mycomponent.header.services', ['title' => 'Our Service'])
      






    </main>
@endsection