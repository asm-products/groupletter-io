@extends('app')

@section('content')

<form role="form" method="POST" action="/links/create">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <fieldset>
    <div class="form-group">
      <label>Title</label>
      <input type="text" name="title">
    </div>
    <div class="form-group">
      <label>URL</label>
      <input type="text" name="url">
    </div>
  </fieldset>

  <fieldset>
    Why should somebody
    <select name="kind">
      <option value="thing">visit this link</option>
      <option value="video">watch this video</option>
      <option value="article">read this article</option>
      <option value="app">try this app or service</option>
      <option value="song">listen to this song</option>
      <option value="podcast">listen to this podcast (episode)</option>
    </select>

    <small>(optional)</small>:<br />
    <label>Reason</label>
    <textarea name="reason"></textarea>
  </fieldset>

  <fieldset>
    <button type="submit">Add</button>
  </fieldset>
</form>
@endsection
