{{ Form::open(['method' => 'get']) }}
  {{ csrf_field() }}
  <div class="form-group">
    {{ Form::label('keyword', 'キーワード：') }}
    {{ Form::text('keyword', null, ['class' => 'form-control']) }}
  </div>
  <div class="form-group">
    {{ Form::submit('検索', ['class' => 'btn btn-outline-primary']) }}
    <a href="{{ route('shop.list') }}">クリア</a>
  </div>
{{ Form::close() }}