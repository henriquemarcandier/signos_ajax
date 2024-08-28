<?php include('header.php');?>
<header>
    <h1>Descubra seu signo</h1>
</header>
<hr>
<div class="conteudo">
<div class="col-sm-3">
<form id="signo-form" method="POST" action="">
    <label for="data_nascimento">Data de Nascimento: </label>
    <input type="date" name="data_nascimento" id="data_nascimento" class="form-control bg-light">
    <div class="p-1">
        <button class="btn btn-primary w-100" type="submit">Descobrir</button>
    </div>
</form>
</div>
</div>
<hr>
<div id="conteudo" class="body2"></div>
<?php include('footer.php');?>