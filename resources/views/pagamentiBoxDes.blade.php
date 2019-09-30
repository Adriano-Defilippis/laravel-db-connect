@extends ('layout.cubeLay')

@section('content')

<div class="box-wrapper box-pagamenti">

  @foreach ($values as $value)

    <div class="box bg_{{ $color }}">
      <p> {{ $value -> status }} {{ $value -> price }} </p>
    </div>

    @endforeach

</div>


  @endsection
