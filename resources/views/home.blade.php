@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At magnam officiis officia nulla architecto? Quasi omnis sit culpa nostrum eligendi pariatur ducimus aspernatur reprehenderit sequi, fugiat repellat provident consequuntur dolor!</p>
@endsection

@section('sidebar')
    @parent
    <P>This is appended to the sidebar</P>
@endsection
