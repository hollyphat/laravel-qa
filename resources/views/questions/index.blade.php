@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 style="display: inline-block; margin-top: 0;">All Questions</h2>

                    <div class="pull-right" style="margin-left: auto; display: inline-block;">
                        <a href="{{route('questions.create')}}" class="btn btn-default">Ask Question</a>
                    </div>
                </div>

                <div class="panel-body">

                    @include('layouts._messages')

                    @if($questions)
                    
                        @foreach ($questions as $question)
                            <div class="media row">
                                <div class="col-sm-1 counters">
                                    <div class="vote">
                                        <strong>{{ $question->votes }}</strong> {{ str_plural('vote', $question->votes)}}
                                    </div>
                                    <div class="status {{ $question->status }}">
                                        <strong>{{ $question->answers }}</strong> {{ str_plural('answer', $question->answers)}}
                                    </div>
                                    <div class="view">
                                        {{ $question->views ." ". str_plural('view', $question->views)}}
                                    </div>
                                </div>
                                <div class="medias-body col-sm-11">
                                    <div class="d-flex align-items-center">
                                        <h3 class="mt-0" style="margin-top:0;">
                                            <a href="{{ $question->url }}">{{$question->title}}</a>
                                        </h3>

                                        <div class="ml-auto">
                                            <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-sm btn-outline-info">Edit</a>
                                        </div>
                                    </div>

                                    <p class="lead">
                                        Asked by
                                        <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>

                                        <small class="text-muted">
                                            {{ $question->created_date }}
                                        </small>
                                    </p>

                                    {{ str_limit($question->body, 250) }}
                                </div>
                            </div>
                            <hr>
                        @endforeach

                        <div class="text-center" style='margin: auto;'>
                            {{ $questions->links() }}
                        </div>
                
                    @endif     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection