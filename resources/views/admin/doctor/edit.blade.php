@extends('admin.master')

@section('content')
<doctor-edit-component v-bind:doctors='{{$doctor}}'></doctor-edit-component>
@endsection
