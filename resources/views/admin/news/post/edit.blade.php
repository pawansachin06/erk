@extends('admin.master')

@section('content')
<news-post-edit-component v-bind:posts='{{$post}}'></news-post-edit-component>
@endsection
