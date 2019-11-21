@extends('admin.master')

@section('content')
<about-edit-component v-bind:abouts="{{$about}}"></about-edit-component>
@endsection
