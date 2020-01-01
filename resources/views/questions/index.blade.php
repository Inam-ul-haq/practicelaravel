@extends('layout.main')

@section('content')

{{--    <h3 class="page-title">@lang('questions.title')</h3>--}}

    <p>
        <a href="{{ route('questions.create') }}" class="btn btn-success float-left" >Add Question</a>
    </p>


    <h4>Question record </h4>
    <table border = 1 >
        <tr>
            <td class="col-xs-3" >ID</td>
            <td class="col-xs-3">Name</td>
            <td class="col-xs-6">delete</td>
        </tr>
        @foreach ($question as $question)
            <tr>
                <td>{{ $question->id }}</td>
                <td>{{ $question->question}}</td>
<td><a href="{{ route('questions.show',[$question->id]) }}" class="btn btn-xs btn-primary">@lang('view')</a>
                                    <a href="{{ route('questions.edit',[$question->id]) }}" class="btn btn-xs btn-info"> @lang('edit')        </a> {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.are_you_sure")."');",
                                        'route' => ['questions.destroy', $question->id])) !!}
                                    {!! Form::submit(trans('delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}   </td>
            </tr>
        @endforeach
    </table>
@endsection
