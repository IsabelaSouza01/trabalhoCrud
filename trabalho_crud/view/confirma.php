<h2> Cadastro #<?=$cadastro['id']?> </h2>
<hr>
<p>
    Tem certeza que deseja excluir  <?=$cadastro['nome']?>
    , com o endereço  <?=$cadastro['endereco']?>, da sua lista de cadastros ?
</p>
<p>
    <form action="" method='get'>
        <button type='submit' value="<?=$cadastro['id']?>" name='sim'>
            Sim
        </button>
        <button type='submit' name='não'>
            Não
        </button>
    </form>
</p>