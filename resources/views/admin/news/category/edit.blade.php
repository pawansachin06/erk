@extends('admin.master')

@section('content')
<news-category-edit-component v-bind:categories='{{$category}}'></news-category-edit-component>
@endsection
