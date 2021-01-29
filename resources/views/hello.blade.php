@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここに本文が入ります</p>
  <p>{{ $view_message }}</p>
  <p><middleware>google.com</middleware></p>

  @component('components.message')
    @slot('msg_title')
    CAUTION!
    @endslot
    @slot('msg_content')
    これはメッセージ表示です。
    @endslot

  @endcomponent
@endsection

@section('footer')
  adgadgsdfgsadgsad
@endsection
