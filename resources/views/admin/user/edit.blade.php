@extends('admin.master')

@section('content')
<user-edit-component v-bind:users='{{$user}}'></user-edit-component>
@endsection
