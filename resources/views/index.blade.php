@extends('layouts.hello')

@section('content')
<h2>Todo List</h2>
  @error('content')
    <p>{{$message}}</p>
  @enderror
<form action="/todo/create" method="post" class="content_in">
  @csrf
  <input type="text" name="content" class="form">
  <input type="submit" value="追加" class="btn_1">
</form>
<table>
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  @foreach($items as $item)
  <tr>
    <td>{{$item->updated_at}}</td>
    <form action="/todo/update" method="post" class="content_in">
      @csrf
      <td>
        <input type="text" name="content" class="form_2" value="{{$item->content}}">
        <input type="hidden" value="{{$item->id}}" name="id">
      </td>
      <td><input type="submit" value="更新" class="btn_2"></td>
    </form>
    <form action="/todo/delete" method="post">
      @csrf
      <td>
        <input type="submit" value="削除" class="btn_3">
        <input type="hidden" value="{{$item->id}}" name="id">
      </td>
    </form>
  </tr>
  @endforeach
  @endsection