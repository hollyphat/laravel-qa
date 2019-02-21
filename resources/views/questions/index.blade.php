@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">All Questions</div>

                <div class="panel-body">
                    @if($questions)
                    
                        @foreach ($questions as $question)
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="mt-0">
                                        <a href="{{ $question->url }}">{{$question->title}}</a>
                                    </h3>

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