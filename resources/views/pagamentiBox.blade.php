@extends ('layout.cubeLay')

@section('section_allPagamenti')

<div class="box-wrapper box-pagamenti">

  @foreach ($values as $value)

    <div class="box bg_{{ $color }}">
      <p> {{ $value -> status }} {{ $value -> price }} </p>
    </div>

    @endforeach

</div>
  <div class="box-wrapper">


      <div class="box">
        <p>Max:</p>
        <p> {{ $max }} </p>
      </div>
      <div class="box">
        <p>Min:</p>
        <p> {{ $min }} </p>
      </div>
      <div class="box">
        <p>Avg:</p>
        <p> {{ $avg }} </p>
      </div>
    </div>

  @endsection
