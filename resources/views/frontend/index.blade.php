@extends('layouts.webmaster')
@section('web_contents')

<main>
{{-- include bradcrube  hero section --}}
@include('frontend.mycomponent.header.breadcrub')




{{-- include services --}}
@include('frontend.mycomponent.header.services')



{{-- include services --}}
@include('frontend.mycomponent.header.faq')

  
</main>



@endsection