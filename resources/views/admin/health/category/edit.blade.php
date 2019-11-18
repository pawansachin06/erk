@extends('admin.master')

@section('content')
<category-edit-component v-bind:categories='{{$category}}'></category-edit-component>
@endsection
