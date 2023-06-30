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
  <h1 class="mb-3">Cadastrar Notícia</h1>
  <form action="{{ route('news.store') }}" method="POST" class="needs-validation" novalidate>
    @csrf
    <div class="form-floating mb-3">
      <input
        type="text"
        class="form-control"
        id="title"
        name="title"
        placeholder="title"
        required
        autofocus
        pattern="^(?!\s*$).+"
        title="Este campo é Obrigatório. Por favor preencha corretamente."
      >
      <label for="title">Título</label>
      <div class="invalid-feedback">Este campo é Obrigatório. Por favor preencha corretamente.</div>
    </div>
    <div class="form-floating mb-3">
      <textarea
        class="form-control"
        id="description"
        name="description"
        placeholder="description"
        required
        pattern="^(?!\s*$).+"
        title="Este campo é Obrigatório. Por favor preencha corretamente."
      ></textarea>
      <label for="description">Descrição</label>
      <div class="invalid-feedback">Este campo é Obrigatório. Por favor preencha corretamente.</div>
    </div>
    <div class="btn-area">
      <a href="/news" type="button" class="btn btn-primary btn-icon">
        <span class="material-symbols-outlined">arrow_back</span>Voltar
      </a>
      <button type="submit" class="btn btn-success btn-icon">
        <span class="material-symbols-outlined">library_add</span>Cadastrar
      </button>
    </div>
  </form>
</div>
<script type="text/javascript" src="{{ asset('static/js/index.js') }}"></script>
@endsection
