{{ csrf_field() }}
<div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
    <label for="question-title">Question Title</label>
    <input type="text" value="{{ old('title', $question->title) }}" name="title" id="question-title" placeholder="Question Title" required class="form-control">
    @if($errors->has('title'))
        <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
    @endif
</div>

<div class="form-group {{ $errors->has('body') ? ' has-error' : '' }}">
    <label for="question-body">Explain Your Question</label>
    <textarea name="body" id="question-body" placeholder="Explain Your Question" required class="form-control" rows="10">{{old('body',$question->body)}}</textarea>
    @if($errors->has('body'))
        <span class="help-block">
            <strong>{{ $errors->first('body') }}</strong>
        </span>
    @endif
</div>


<div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg">{{$buttonText}}</button>
</div>