@extends ('layout.cubeLay')

@section('content')

<div class="box-wrapper box-ospiti">

  @foreach ($values as $value)

    <div class="box bg_{{ $color }}">
      <p> {{ $value -> name }} {{ $value -> lastname }} </p>
    </div>

    @endforeach


</div>
  @endsection
