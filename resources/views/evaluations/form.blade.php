
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">{{ trans('evaluations.title') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($evaluation)->title) }}" minlength="1" maxlength="255" placeholder="{{ trans('evaluations.title__placeholder') }}">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('post') ? 'has-error' : '' }}">
    <label for="post" class="col-md-2 control-label">{{ trans('evaluations.post') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="post" type="text" id="post" value="{{ old('post', optional($evaluation)->post) }}" minlength="1" placeholder="{{ trans('evaluations.post__placeholder') }}">
        {!! $errors->first('post', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('notes') ? 'has-error' : '' }}">
    <label for="notes" class="col-md-2 control-label">{{ trans('evaluations.notes') }}</label>
    <div class="col-md-10">
        <textarea class="form-control" name="notes" cols="50" rows="10" id="notes" minlength="1" maxlength="1000">{{ old('notes', optional($evaluation)->notes) }}</textarea>
        {!! $errors->first('notes', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('etat') ? 'has-error' : '' }} hidden" style="    display: none;
    ">
    <label for="etat" class="col-md-2 control-label">{{ trans('evaluations.etat') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="etat" type="text" id="etat" value="0" minlength="1" placeholder="{{ trans('evaluations.etat__placeholder') }}">
        {!! $errors->first('etat', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('rating') ? 'has-error' : '' }}">
    <label for="rating" class="col-md-2 control-label">{{ trans('evaluations.rating') }}</label>
    <div class="col-md-10">


        <select class="form-control" name="rating" type="text" id="rating"  minlength="1" placeholder="{{ trans('evaluations.rating__placeholder') }}">
            <option value="A" {{ old('evaluator_id', optional($evaluation)->rating) == 'A' ? 'selected' : '' }}>A</option>
            <option value="B" {{ old('evaluator_id', optional($evaluation)->rating) == 'B' ? 'selected' : '' }}>B</option>
            <option value="C" {{ old('evaluator_id', optional($evaluation)->rating) == 'C' ? 'selected' : '' }}>C</option>
        </select>
        {!! $errors->first('rating', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">{{ trans('evaluations.user_id') }}</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($evaluation)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('evaluations.user_id__placeholder') }}</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($evaluation)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
