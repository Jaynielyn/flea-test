@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
<x-header></x-header>

@section('main')
<div class="main">
    <div class="top__page-top">
        <a class="recommendation">おすすめ</a>
        <a class="top__mypage">マイページ</a>
    </div>
    <div class="recommendation">
    </div>
    <div class="mypage">
        //
    </div>
</div>
@endsection