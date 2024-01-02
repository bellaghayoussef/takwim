@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($evaluation->title) ? $evaluation->title : 'Evaluation' }}</h4>
        </span>



    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>{{ trans('evaluations.title') }}</dt>
            <dd>{{ $evaluation->title }}</dd>
            <dt>{{ trans('evaluations.post') }}</dt>
            <dd>{{ $evaluation->post }}</dd>
            <dt>{{ trans('evaluations.notes') }}</dt>
            <dd>{{ $evaluation->notes }}</dd>

            <dt>{{ trans('evaluations.rating') }}</dt>
            <dd>{{ $evaluation->rating }}</dd>
            <dt>{{ trans('evaluations.user_id') }}</dt>
            <dd>{{ optional($evaluation->user)->firstnamear }}</dd>
            <dt>{{ trans('evaluations.evaluator_id') }}</dt>
            <dd>{{ optional($evaluation->evaluator)->firstnamear }} {{ optional($evaluation->evaluator)->lastnamear }}</dd>

        </dl>

    </div>
</div>

@endsection
