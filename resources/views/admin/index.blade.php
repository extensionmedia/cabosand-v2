@extends('admin.layout.app')
@section('content')
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <button>Logout</button>
    </form>
    this is the admin dashboard
@endsection
