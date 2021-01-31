@extends('layouts.helloapp')

@section('title', 'Person.Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')

  <table>
    <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
    @foreach ($items as $item)
      <tr>
        <td>{{ $item -> getData() }}</td>
      </tr>
    @endforeach
  </table>

@endsection

@section('footer')
  adgadgsdfgsadgsad
@endsection
