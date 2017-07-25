<div class="b-museum-reviews">
    <h2 class="b-museum-reviews__title">Reviews</h2>
    @foreach($museum->reviews as $review)
        <div class="b-review">
            <strong>By: </strong>
            <span class="b-review__user">{{ $review->user->name }}</span>
            <div class="b-review__text alert alert-info">
                {{ $review->text }}
            </div>
        </div>
    @endforeach
</div>