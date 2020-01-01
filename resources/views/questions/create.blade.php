@extends('layout.main')

@section('content')

<h3 class="page-title">@lang('Title')</h3>
{!! Form::open(['method' => 'POST', 'route' => ['questions.store']]) !!}

<div class="panel panel-default">
    <div class="panel-heading">
        @lang('create')
    </div>

    <div class="panel-body">

        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('question', 'Question text*', ['class' => 'control-label']) !!}
                {!! Form::textarea('question', old('question'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('question'))
                    <p class="help-block">
                        {{ $errors->first('question') }}
                    </p>
                @endif
            </div>
        </div>


{!! Form::submit(trans('save'), ['class' => 'btn btn-danger']) !!}



{!! Form::close() !!}
    @endsection
