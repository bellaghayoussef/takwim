
<div class="form-group {{ $errors->has('team_id') ? 'has-error' : '' }}">
    <label for="team_id" class="col-md-2 control-label">{{ trans('roles.team_id') }}</label>
    <div class="col-md-10">
        <select class="form-control" id="team_id" name="team_id">
        	    <option value="" style="display: none;" {{ old('team_id', optional($roles)->team_id ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('roles.team_id__placeholder') }}</option>
        	@foreach ($teams as $key => $team)
			    <option value="{{ $key }}" {{ old('team_id', optional($roles)->team_id) == $key ? 'selected' : '' }}>
			    	{{ $team }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('team_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">{{ trans('roles.name') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($roles)->name) }}" minlength="1" maxlength="255" required="true" placeholder="{{ trans('roles.name__placeholder') }}">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('guard_name') ? 'has-error' : '' }}">
    <label for="guard_name" class="col-md-2 control-label">{{ trans('roles.guard_name') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="guard_name" type="text" id="guard_name" value="{{ old('guard_name', optional($roles)->guard_name) }}" minlength="1" maxlength="255" required="true" placeholder="{{ trans('roles.guard_name__placeholder') }}">
        {!! $errors->first('guard_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

