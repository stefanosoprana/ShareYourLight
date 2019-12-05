@extends('layouts.admin_app')

@section('sidebar')
  @include('layouts.sidebar.admin_app')
@endsection

@section('content')
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Pages</h1>
    </div>

    <!-- Content Row -->

    <div class="row">

      <!-- Area Chart -->
      <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
            <div class="dropdown no-arrow">
              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Dropdown Header:</div>
                <a class="dropdown-item" href="{{ route('admin.pages.create') }}">Add Pages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div>
          <!-- Card Body -->
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Title</th>
                  <th scope="col">Description</th>
                  <th scope="col">Date</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @php
                $number = 0
                @endphp
                @foreach ($pages as $page)
                  <tr>
                    <td>{{ $number += 1 }}</td>
                    <td>{{ $page->title }}</td>
                    <td>{{ str_limit($page->description, 50, '...') }}</td>
                    <td>{{ $page->created_at->format('d/m/Y') }}</td>
                    <td>
                      <a href="{{ route('admin.pages.show', $page->id) }}" class="btn btn-primary">View</a>                      </td>
                      <td>
                        <form action="{{ route('admin.pages.destroy', $page->id) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <input class="btn btn-danger" type="submit" value="Elimina">
                        </form>
                      </td>
                    </tr>
                    @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
@endsection
