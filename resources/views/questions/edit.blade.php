@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 style="display: inline-block; margin-top: 0;">Edit Question</h2>

                    <div class="pull-right" style="margin-left: auto; display: inline-block;">
                        <a href="{{route('questions.index')}}" class="btn btn-default">Back to All Questions</a>
                    </div>
                </div>

                <div class="panel-body">
                    <form action="{{route('questions.update', $question->id)}}" method="post">
                        {{method_field('PUT')}}
                        @include ("questions._form", ['buttonText' => "Update Question"])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection