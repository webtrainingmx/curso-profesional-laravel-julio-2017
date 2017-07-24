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
                    <div class="b-museum-information">
                        <h1 class="b-museum__name b-museum__name--detail">
                            {{ $museum->name }}
                        </h1>

                        <div class="b-museum__description">
                            {{ $museum->description }}
                        </div>

                        <div class="b-museum__hours">
                            <strong>Hours: </strong> {{ $museum->hours }}
                        </div>

                        <div class="b-museum__phone">
                            <strong>Phone: </strong> {{ $museum->phone }}
                        </div>
                        <div class="b-museum__ranking">
                            <strong>Ranking: </strong> {{ $museum->ranking }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection