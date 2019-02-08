@extends('layouts.app')

@section('content')
    <h3 class="page-title">Departments</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['departments.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Create
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    <!-- @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif -->
                </div>
            </div> 

            <!-- <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('author', 'Author*', ['class' => 'control-label']) !!}
                    {!! Form::text('author', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    <!-- @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif -->
                </div>
            </div>    -->
        </div>
    </div>

    {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

