@extends('layouts.admin_app')

@section('sidebar')
  @include('layouts.sidebar.show')
@endsection

@section('content')

<div id="template-base">

  <div class="container">
      @foreach ($elements as $element)
        <div class="title">
          @foreach ($element[0] as $item)
            <div class="row">
              <div class="col-12 title__item">
                <h1>{{ $item->text }}</h1>
              </div>
            </div>
          @endforeach
        </div>
        <div class="subtitle">
          @foreach ($element[1] as $item)
            <div class="row">
              <div class="col-12 subtitle__item">
                <h4>{{ $item->text }}</h4>
              </div>
            </div>
          @endforeach
        </div>
        <div class="image">
          @foreach ($element[2] as $item)
            <div class="row">
              <div class="col-12">
                <div class="image__item" style="background-image: url('{{ $item->path }}');">
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="description">
          @foreach ($element[3] as $item)
            <div class="row">
              <div class="col-12 description__item">
                <p>{{ $item->text }}</p>
              </div>
            </div>
          @endforeach
        </div>
      @endforeach
  </div>

</div>

@endsection
