@extends('layouts.app')

@section('title', 'Progetti')

@section('content')
<div class="container">
    <div class="d-flex gap-4 py-3">
    <h1>Progetti</h1>
    <a href="{{route('admin.dashboards.create')}}" class="btn btn-success btn-lg">Aggiungi un progetto</a>
    </div>
   

    <table class="table">
      <thead>
        <tr>
          <th scope="col" class="text-black-50">Titolo</th>
          <th scope="col" class="text-black-50">GitHub</th>
          <th scope="col" class="text-black-50">Descrizione</th>
          <th scope="col" class="text-black-50">Modifica</th>
          <th scope="col" class="text-black-50">Elimina</th>
        </tr>
      </thead>
      <tbody>
        @foreach($dashboards as $dashboard)
          <tr>
              <th scope="row">
                <a href="{{route('admin.dashboards.show', $dashboard)}}">{{ $dashboard->title }}</a>
                </th>
              <td>
                <a href="{{ $dashboard->git }}">Link</a>
              </td>
              <td>
                <a href="{{route('admin.dashboards.show', $dashboard)}}" class="btn btn-primary btn">Dettagli</a>
              </td>
              <td>
                <a href="{{route('admin.dashboards.edit', $dashboard)}}" class="btn btn-warning btn">Modifica</a>
              </td>
              <td>
                <form action="{{route('admin.dashboards.destroy', $dashboard)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger">Elimina</button>
              </td>
          </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection