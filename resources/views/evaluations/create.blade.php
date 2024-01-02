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

            <form method="POST" action="{{ route('evaluations.evaluation.store') }}" accept-charset="UTF-8" id="create_evaluation_form" name="create_evaluation_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('evaluations.form', [
                                        'evaluation' => null,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="{{ trans('evaluations.add') }}">
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection


