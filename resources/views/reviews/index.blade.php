@extends("layouts.app")
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="b-museum-reviews">
                    <h2 class="b-museum-reviews__title">My Reviews</h2>

                    @foreach($user->reviews as $review)
                        <div class="b-review">
                            <strong>To: </strong>
                            <a href="{{route("museums.show", $review->museum->id)}}">
                                <span class="b-review__to">{{ $review->museum->name  }}</span>
                            </a>
                            <div class="b-review__text alert alert-info">
                                {{ $review->text }}
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection