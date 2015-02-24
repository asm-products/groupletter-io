@extends('app')

@section('content')

  @if($items)
    <table>
      <thead>
        <tr>
          <td class="links">
            <strong>Link</strong>
          </td>
          <td colspan="2">
            <strong>Votes</strong>
          </td>
        </tr>
      </thead>
      <tbody>

        @foreach ($items as $link)
          <tr>
            <td>
              <a href="{{ $link->url }}">{{ $link->title }}</a>
            </td>
            <td>
              <img src="http://www.gravatar.com/avatar/{{{ md5(strtolower(trim('admin@groupletter.io'))) }}}?s=32&d=identicon">
            </td>
            <td>
              <form role="form" method="POST" action="/vote">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="link_id" value="{{ $link->id }}">
                <button type="submit">+1</button>
              </form>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
  @else
    <p>No links yet</p>
  @endif

@endsection
