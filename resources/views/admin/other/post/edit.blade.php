@extends('admin.master')

@section('content')
<other-post-edit-component v-bind:posts='{{$post}}'></other-post-edit-component>
@endsection
