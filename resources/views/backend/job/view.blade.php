@extends('layouts.app')

@section('content')
<div class='container'>
    @if(isset($model))
        {!! Form::model($model,['route' => 'backend.job.store' ,'id'=>'job_form','class' => 'form-horizontal', 'method' => 'post']) !!}
        {!! Form::hidden('id', $model->id) !!}
    @else    
        {!! Form::open(['route' => 'backend.job.store' ,'id'=>'job_form','class' => 'form-horizontal', 'method' => 'post']) !!}
    @endif
    
    @include('backend.job.html')
    @if(!isset($disabled))
    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
    </button>
    @endif
    {!! Form::close() !!}
</div>


@endsection
