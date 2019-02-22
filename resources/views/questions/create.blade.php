@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 style="display: inline-block; margin-top: 0;">Ask Question</h2>

                    <div class="pull-right" style="margin-left: auto; display: inline-block;">
                        <a href="{{route('questions.index')}}" class="btn btn-default">Back to All Questions</a>
                    </div>
                </div>

                <div class="panel-body">
                    <form action="{{route('questions.store')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="question-title">Question Title</label>
                            <input type="text" name="title" id="question-title" placeholder="Question Title" required class="form-control">
                            @if($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('body') ? ' has-error' : '' }}">
                            <label for="question-body">Explain Your Question</label>
                            <textarea name="body" id="question-body" placeholder="Explain Your Question" required class="form-control" rows="10"></textarea>
                            @if($errors->has('body'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg">Ask this question</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection