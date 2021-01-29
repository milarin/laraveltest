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

  <p>{{ $msg }}</p>
  @if (count($errors) > 0)
  <p>入力時に問題があります。再入力してください。</p>
  @endif
  <form action="/hello" method='post'>
  <table>
    @csrf
    @error('name')
    <tr><th>ERROR</th><td>{{ $message }}</td></tr>
    @enderror
    <tr><th>name:</th><td><input type="text" name='name' value='{{ old("name") }}'></td></tr>
    @error('mail')
    <tr><th>ERROR</th><td>{{ $errors->first('mail') }}</td></tr>
    @enderror
    <tr><th>mail:</th><td><input type="text" name='mail' value='{{ old("mail") }}'></td></tr>
    @error('age')
    <tr><th>ERROR</th><td>{{ $errors->first('age') }}</td></tr>
    @enderror
    <tr><th>age:</th><td><input type="text" name='age' value='{{ old("age") }}'></td></tr>
    <tr><th></th><td><input type="submit" value='send'></td></tr>
  </table>
  </form>
@endsection

@section('footer')
  adgadgsdfgsadgsad
@endsection
