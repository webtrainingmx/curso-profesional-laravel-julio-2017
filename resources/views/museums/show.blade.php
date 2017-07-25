@extends("layouts.app")
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                @if( isset($museum->image) )
                    <figure class="b-museum__image">

                        <img class="img-responsive img-thumbnail" src="{{ $museum->image }}"
                             alt="{{ $museum->name }}">

                    </figure>
                @endif
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                <div class="b-museum">
                    @include("museums.show-general-info")
                    @include("museums.show-reviews")
                </div>

            </div>
        </div>
    </div>
@endsection