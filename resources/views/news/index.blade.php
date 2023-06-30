@extends('layouts.app')
@section('header')
<link rel="shortcut icon" href="{{ asset('static/images/red_newspaper.png') }}" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/navbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/index.css') }}">
<title>Notícias</title>
@endsection
@section('body')
@include('layouts.navbar')
<div class="container py-5">
  <header class="d-flex align-items-center justify-content-between">
    <div class="header-info">
      <img src="{{ asset('static/images/newspaper.png') }}" alt="newspaper">
      <h1 class="mb-0">Notícias</h1>
    </div>
    <a href="{{ route('news.create') }}" class="btn btn-success btn-lg btn-icon" role="button">
      <span class="material-symbols-outlined">library_add</span>
      Cadastrar nova Notícia
    </a>
  </header>
  <div id="alert-area">
  @if(Session::has('success'))
  @include('layouts.alerts')
  @endif
  </div>
  <table class="table table-hover table-striped">
    <thead class="table-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Título</th>
        <th scope="col">Descrição</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
    @if($news->count() > 0)
      @foreach($news as $rs)
      <tr>
        <td class="align-middle">{{ $rs->id }}</td>
        <td class="align-middle overflow-x-hidden">{{ $rs->title }}</td>
        <td class="align-middle overflow-x-hidden">{{ $rs->description }}</td>
        <td class="align-middle">
          <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{ route('news.show', $rs->id) }}" type="button" class="btn btn-info btn-icon">
              <span class="material-symbols-outlined">info</span>Detalhes
            </a>
            <a href="{{ route('news.edit', $rs->id) }}" type="button" class="btn btn-warning btn-icon">
              <span class="material-symbols-outlined">edit</span>Editar
            </a>
            <button
              type="button"
              class="btn btn-danger btn-icon"
              data-bs-toggle="modal"
              data-bs-target="#deleteModal"
              data-url="{{ route('news.destroy', $rs->id) }}"
              data-title="{{ $rs->title }}"
              onclick="deleteNews(this)"
            >
              <span class="material-symbols-outlined">delete</span>Excluir
            </button>
          </div>
        </td>
      </tr>
      @endforeach
    @else
      <tr>
        <td class="text-center" colspan="5">Não há Notícias cadastradas!</td>
      </tr>
    @endif
    </tbody>
  </table>
</div>
@include('layouts.modal')
<script type="text/javascript" src="{{ asset('static/js/index.js') }}"></script>
@endsection
