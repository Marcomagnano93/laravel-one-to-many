@extends('layouts.app')

@section('title', 'Tipologie')

@section('content')
<div class="container">
    <div class="d-flex gap-4 py-3">
        <h1>Tipi di progetto</h1>
        <a href="{{route('admin.types.create')}}" class="btn btn-success btn-lg">Nuova Tipologia</a>
    </div>
   

    <table class="table">
      <thead>
        <tr>
          <th scope="col" class="text-black-50">Tipologia</th>
          <th scope="col" class="text-black-50">Modifica</th>
        </tr>
      </thead>
      <tbody>
        @foreach($types as $type)
          <tr>
            <th scope="row">
                <span>{{ $type->name }}</span>
            </th>
            <th scope="row">
                <a href="{{ route('admin.types.edit', $type) }}" class="btn btn-warning">Modifica</a>
            </th>
          </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection