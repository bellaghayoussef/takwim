
<div class="form-group {{ $errors->has('firstnamear') ? 'has-error' : '' }}">
    <label for="firstnamear" class="col-md-2 control-label">{{ trans('users.firstnamear') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="firstnamear" type="text" id="firstnamear" value="{{ old('firstnamear', optional($user)->firstnamear) }}" minlength="1" maxlength="255" required="true" placeholder="{{ trans('users.firstnamear__placeholder') }}">
        {!! $errors->first('firstnamear', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('lastnamear') ? 'has-error' : '' }}">
    <label for="lastnamear" class="col-md-2 control-label">{{ trans('users.lastnamear') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="lastnamear" type="text" id="lastnamear" value="{{ old('lastnamear', optional($user)->lastnamear) }}" minlength="1" maxlength="255" required="true" placeholder="{{ trans('users.lastnamear__placeholder') }}">
        {!! $errors->first('lastnamear', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('firstnameen') ? 'has-error' : '' }}">
    <label for="firstnameen" class="col-md-2 control-label">{{ trans('users.firstnameen') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="firstnameen" type="text" id="firstnameen" value="{{ old('firstnameen', optional($user)->firstnameen) }}" minlength="1" maxlength="255" required="true" placeholder="{{ trans('users.firstnameen__placeholder') }}">
        {!! $errors->first('firstnameen', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('lastnameen') ? 'has-error' : '' }}">
    <label for="lastnameen" class="col-md-2 control-label">{{ trans('users.lastnameen') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="lastnameen" type="text" id="lastnameen" value="{{ old('lastnameen', optional($user)->lastnameen) }}" minlength="1" maxlength="255" required="true" placeholder="{{ trans('users.lastnameen__placeholder') }}">
        {!! $errors->first('lastnameen', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
    <label for="phone" class="col-md-2 control-label">{{ trans('users.phone') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="phone" type="text" id="phone" value="{{ old('phone', optional($user)->phone) }}" minlength="1" maxlength="255" required="true" placeholder="{{ trans('users.phone__placeholder') }}">
        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('uid') ? 'has-error' : '' }}">
    <label for="uid" class="col-md-2 control-label">{{ trans('users.uid') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="uid" type="text" id="uid" value="{{ old('uid', optional($user)->uid) }}" minlength="1" maxlength="255" required="true" placeholder="{{ trans('users.uid__placeholder') }}">
        {!! $errors->first('uid', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('singater') ? 'has-error' : '' }}">
    <label for="singater" class="col-md-2 control-label">{{ trans('users.singater') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="singater" type="hidden" id="singater" value="{{ old('singater', optional($user)->singater) }}" maxlength="255" placeholder="{{ trans('users.singater__placeholder') }}">
        {!! $errors->first('singater', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div>
    <canvas id="signature-pad" width="300" height="150"></canvas>
</div>
<a  id="clear">Clear</a>
<a  id="save">Save</a>



<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">{{ trans('roles.model_plural') }}</label>
    <div class="col-md-10">
        <select class="form-control" id="role" name="role">
        	@foreach (Spatie\Permission\Models\Role::all()->pluck('name') as $key )
			    <option value="{{ $key }}" >
			    	{{ $key }}
			    </option>
			@endforeach
        </select>

    </div>
</div>

<div class="form-group {{ $errors->has('supvaser_id') ? 'has-error' : '' }}">
    <label for="supvaser_id" class="col-md-2 control-label">{{ trans('users.supvaser_id') }}</label>
    <div class="col-md-10">
        <select class="form-control" id="supvaser_id" name="supvaser_id">
        	    <option value="" style="display: none;" {{ old('supvaser_id', optional($user)->supvaser_id ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('users.supvaser_id__placeholder') }}</option>
        	@foreach ($supvasers as $key => $supvaser)
			    <option value="{{ $supvaser->id }}" {{ old('supvaser_id', optional($user)->supvaser_id) == $supvaser->id ? 'selected' : '' }}>
			    	{{ $supvaser->firstnamear }} {{ $supvaser->lastnamear }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('supvaser_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email" class="col-md-2 control-label">{{ trans('users.email') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="email" type="text" id="email" value="{{ old('email', optional($user)->email) }}" minlength="1" maxlength="255" required="true" placeholder="{{ trans('users.email__placeholder') }}">
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
    <label for="password" class="col-md-2 control-label">{{ trans('users.password') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="password" type="text" id="password" minlength="1" maxlength="255" required="true" placeholder="{{ trans('users.password__placeholder') }}">
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
    </div>
</div>








