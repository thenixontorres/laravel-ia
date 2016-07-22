@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit tipouser</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($tipouser, ['route' => ['tipousers.update', $tipouser->id], 'method' => 'patch']) !!}

            @include('tipousers.fields')

            {!! Form::close() !!}
        </div>
@endsection