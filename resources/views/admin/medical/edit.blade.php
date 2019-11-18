@extends('admin.master')

@section('content')
<medical-edit-component v-bind:medicals='{{$medical}}'></medical-edit-component>
@endsection
