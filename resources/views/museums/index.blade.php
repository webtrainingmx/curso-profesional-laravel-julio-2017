@extends("layouts.app")
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                @foreach($museums as $museum)
                    <div class="b-museum">
                        @if( isset($museum->thumbnail) )
                            <figure class="b-museum__thumbnail">
                                <a href="{{route("museos.show", $museum->id)}}">
                                    <img class="img-responsive" src="{{ $museum->thumbnail }}"
                                         alt="{{ $museum->name }}">
                                </a>
                            </figure>
                        @endif

                        <div class="b-museum-information">
                            <a href="{{route("museos.show", $museum->id)}}">
                                <h2 class="b-museum__name">
                                    {{ $museum->name }}
                                </h2>
                            </a>
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
                @endforeach
            </div>
        </div>
    </div>
@endsection