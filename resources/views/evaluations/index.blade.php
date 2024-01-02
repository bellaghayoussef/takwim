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
    <div class="page-header d-md-flex justify-content-between">
        <div>
            <h3>{{ trans('evaluations.model_plural') }}</h3>
        </div>
        <div class="mt-3 mt-md-0">

            <a href="{{ route('evaluations.evaluation.create') }}" class="btn btn-primary ml-0 ml-md-2 mt-2 mt-md-0 " >  <i class="fa fa-plus" aria-hidden="true"></i></a>

        </div>
    </div>
    <div class="panel panel-default">



        @if(count($evaluations) == 0)
            <div class="panel-body text-center">
                <h4>{{ trans('evaluations.none_available') }}</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>{{ trans('evaluations.title') }}</th>
                            <th>{{ trans('evaluations.post') }}</th>

                            <th>{{ trans('evaluations.rating') }}</th>
                            <th>{{ trans('evaluations.user_id') }}</th>
                            <th>{{ trans('evaluations.evaluator_id') }}</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($evaluations as $evaluation)
                        <tr>
                            <td>{{ $evaluation->title }}</td>
                            <td>{{ $evaluation->post }}</td>

                            <td>{{ $evaluation->rating }}</td>
                            <td>{{ optional($evaluation->user)->firstnamear }}</td>
                            <td>{{ optional($evaluation->evaluator)->firstnamear }}</td>

                            <td>

                                <form method="POST" action="{!! route('evaluations.evaluation.destroy', $evaluation->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('evaluations.evaluation.show', $evaluation->id ) }}" class="btn btn-info" title="{{ trans('evaluations.show') }}">
                                            <i class="fa fa-cog" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('evaluations.evaluation.edit', $evaluation->id ) }}" class="btn btn-primary" title="{{ trans('evaluations.edit') }}">
                                            <span class="fa fa-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="{{ trans('evaluations.delete') }}" onclick="return confirm(&quot;{{ trans('evaluations.confirm_delete') }}&quot;)">
                                            حذف
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
            {!! $evaluations->render() !!}
        </div>

        @endif

    </div>
@endsection
