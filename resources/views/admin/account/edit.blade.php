@extends('admin.master')

@section('content')
<account-edit-component v-bind:accounts="{{$account}}"></account-edit-component>
@endsection
