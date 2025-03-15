@extends("Layout.App")
@section("title")
    Home
@endsection

@section("body")
    <div class="w-full">
        @include("components.Home.Book1")
        @include("components.Home.Find")
        @include("components.Home.Doctors")
        @include("components.Home.Book2")
    </div>
@endsection
