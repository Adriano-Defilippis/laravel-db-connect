@extends ('layout.cubeLay')

@section('content')

<div class="box-wrapper box-paganti">

  @foreach ($values as $value)

    <div class="box bg_{{ $color }}">
      <p> {{ $value -> name }}
      {{ $value -> lastname }} </p>
      <p> {{ $value -> address }} </p>
    </div>

    @endforeach


</div>
  @endsection
