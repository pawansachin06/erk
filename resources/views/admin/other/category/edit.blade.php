@extends('admin.master')

@section('content')
<other-category-edit-component v-bind:categories='{{$category}}'></other-category-edit-component>
@endsection
