@extends('layouts.hello')

@section('content')
<h2>Todo List</h2>
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
  @foreach($forms as $form)
  <tr>
    <td>{{$form->created_at}}</td>
    <form action="/todo/update" method="post" class="content_in">
      @csrf
      <td><input type="text" name="content" class="form_2" value="{{$form->content}}"></td>
      <td><input type="submit" value="更新" class="btn_2"></td>
      <td><input type="submit" value="削除" class="btn_3"></td>
    </form>
  </tr>
  @endforeach
  @endsection