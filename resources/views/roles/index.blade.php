@extends('layouts.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">{{ trans('roles.model_plural') }}</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('roles.roles.create') }}" class="btn btn-success" title="{{ trans('roles.create') }}">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($rolesObjects) == 0)
            <div class="panel-body text-center">
                <h4>{{ trans('roles.none_available') }}</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>{{ trans('roles.team_id') }}</th>
                            <th>{{ trans('roles.name') }}</th>
                            <th>{{ trans('roles.guard_name') }}</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($rolesObjects as $roles)
                        <tr>
                            <td>{{ optional($roles->team)->id }}</td>
                            <td>{{ $roles->name }}</td>
                            <td>{{ $roles->guard_name }}</td>

                            <td>

                                <form method="POST" action="{!! route('roles.roles.destroy', $roles->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('roles.roles.show', $roles->id ) }}" class="btn btn-info" title="{{ trans('roles.show') }}">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('roles.roles.edit', $roles->id ) }}" class="btn btn-primary" title="{{ trans('roles.edit') }}">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="{{ trans('roles.delete') }}" onclick="return confirm(&quot;{{ trans('roles.confirm_delete') }}&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $rolesObjects->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection