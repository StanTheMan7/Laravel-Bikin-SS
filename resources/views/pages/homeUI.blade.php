@extends('template.mainH')

@section('content')
    @include('partials.header')
    @include('partials.heroSection')
<main id="main">
    @include('partials.aboutSection')
    @include('partials.featuresSection')
    @include('partials.serviceSection')
    @include('partials.portfolioSection')
    @include('partials.testimonialSection')
    @include('partials.teamSection')
    @include('partials.contactSection')
</main>
    @include('partials.footer')
    
@endsection