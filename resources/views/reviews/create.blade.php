@extends("layouts.app")
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1>Create review</h1>

                {!! Form::open(['route' => 'reviews.store']) !!}

                <div class="form-group{{ $errors->has('museum_id') ? ' has-error' : '' }}">
                    {{ Form::label('text', 'Museum:', ['class' => '']) }}

                    {!!
                        Form::select('museum_id', $museums->pluck('name', 'id')->all(), null,
                        ['class' => 'form-control'])
                    !!}
                    @if ($errors->has('museum_id'))
                        <span class="help-block">
                            @foreach ($errors->get('museum_id') as $message)
                                <strong>{{ $message }}</strong>
                            @endforeach
	                   	</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('rating') ? ' has-error' : '' }}">
                    {{ Form::label('rating', 'Rating:', ['class' => '']) }}
                    {!!
                       Form::select('rating', [1 => '1',2 => '2', 3 => '3',4 => '4', 5 => '5'], null,
                       ['class' => 'form-control'])
                   !!}
                </div>

                <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                    {{ Form::label('text', 'Your review:', ['class' => '']) }}
                    {{ Form::textarea('text', null,  ['class' => 'form-control']) }}
                    @if ($errors->has('text'))

                        <span class="help-block">
                            @foreach ($errors->get('text') as $message)
                                <strong>{{ $message }}</strong>
                            @endforeach
	                   	</span>

                    @endif
                </div>
                
                {{ Form::submit('Save', ['class' => 'btn btn-primary'])  }}
                {!! Form::close() !!}
            </div>
        </div>
@endsection