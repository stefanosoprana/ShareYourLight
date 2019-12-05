@extends('layouts.admin_app')

@section('sidebar')
  @include('layouts.sidebar.admin_app')
@endsection

@section('content')

            <div class="container-fluid">

              <!-- Page Heading -->
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="{{ route('admin.pages.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Tutte le pagine</a>
              </div>
            </div>
            <!-- /.container-fluid -->
          @endsection
