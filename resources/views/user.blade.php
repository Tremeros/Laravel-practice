@extends('layouts.app')
@section('content')
  User page
  {{$user === null ? 'User doesn\'t exist' : $user->name}}
@endsection
