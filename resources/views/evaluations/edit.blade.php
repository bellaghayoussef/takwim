@extends('layouts.app')

@section('content')

    <div class="panel panel-default">

        <div class="page-header d-md-flex justify-content-between">
            <div>
                <h3>{{ trans('evaluations.model_plural') }}</h3>
            </div>

        </div>

        <div class="panel-body">

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('evaluations.evaluation.update', $evaluation->id) }}" id="edit_evaluation_form" name="edit_evaluation_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('evaluations.form', [
                                        'evaluation' => $evaluation,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="{{ trans('evaluations.update') }}">
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
