@extends('admin.master')

@section('content')
<email-edit-component v-bind:email='{{$email}}'></email-edit-component>
@endsection
