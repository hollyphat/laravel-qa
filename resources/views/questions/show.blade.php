@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">    
            @if($question)
                {{ var_dump($question)}}
            @else

                <p>Error...</p>
            @endif 
        </div>
    </div>
</div>
@endsection