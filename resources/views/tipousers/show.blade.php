@extends('layouts.app')

@section('content')
    @include('tipousers.show_fields')

    <div class="form-group">
           <a href="{!! route('tipousers.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
