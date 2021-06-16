
@extends('backoffice.index')

@section('content')
      <h1 class="dashboard-title mt-5 pt-5">Bienvenue {{Auth::user()->name }} </h1>
@endsection
