@extends('layouts.app')

@section('content')


    
<div class="d-flex justify-content-end mb-3"><a href="{{ route('users.user.create') }}" class="btn btn-info">إضاف</a></div>

    <table class="table table-bordered" style="    direction: rtl;    ">      
                    <thead>
                        <tr>
                            <th>{{ trans('users.firstnamear') }}</th>
                            <th>{{ trans('users.lastnamear') }}</th>
                            <th>{{ trans('users.firstnameen') }}</th>
                            <th>{{ trans('users.lastnameen') }}</th>
                            <th>{{ trans('users.phone') }}</th>
                            <th>{{ trans('users.uid') }}</th>
                   
                            <th>{{ trans('users.supvaser_id') }}</th>
                            <th>{{ trans('users.email') }}</th>
                        

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->firstnamear }}</td>
                            <td>{{ $user->lastnamear }}</td>
                            <td>{{ $user->firstnameen }}</td>
                            <td>{{ $user->lastnameen }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->uid }}</td>
                          
                            <td>{{ optional($user->supvaser)->id }}</td>
                            <td>{{ $user->email }}</td>
                        

                            <td>

                                <form method="POST" action="{!! route('users.user.destroy', $user->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('users.user.show', $user->id ) }}" class="btn btn-info" title="{{ trans('users.show') }}">
                                           إظهار 
                                        </a>
                                        <a href="{{ route('users.user.edit', $user->id ) }}" class="btn btn-primary" title="{{ trans('users.edit') }}">
                                           تحديث
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="{{ trans('users.delete') }}" onclick="return confirm(&quot;{{ trans('users.confirm_delete') }}&quot;)">
                                           حذف
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


        <div class="panel-footer">
            {!! $users->render() !!}
        </div>
       
@endsection