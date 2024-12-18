@extends('layouts.webmaster')
@section('web_contents')

<main>
{{-- include bradcrube  hero section --}}
@include('frontend.mycomponent.header.breadcrub')


{{-- include slider --}}
@include('frontend.mycomponent.header.slider')


{{-- include services --}}
@include('frontend.mycomponent.header.services')



{{-- include services --}}
@include('frontend.mycomponent.header.faq')







  
</main>



@endsection