@if(Session::get('success') == 'CREATE')
<div class="alert alert-success fade show" role="alert">
    Notícia cadastrada com sucesso!
</div>
@endif
@if(Session::get('success') == 'UPDATE')
<div class="alert alert-warning fade show" role="alert">
    Notícia alterada com sucesso!
</div>
@endif
@if(Session::get('success') == 'DELETE')
<div class="alert alert-danger fade show" role="alert">
    Notícia excluída com sucesso!
</div>
@endif
