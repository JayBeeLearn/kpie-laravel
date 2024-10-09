@extends('welcome')

@section('content')
    @include('partials/navbar')
    <div class="alert">
        <p>We recently published our 2023 Conscious Capital Sustainability Report. Click <a href="">here</a> to access it.</p>
    </div>
    @include('partials/hero')
    @include('partials/footer')
@endsection 