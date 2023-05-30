<h2> Cadastro #<?=$cadastro['id']?></h2>
<hr>
<form action="" method='post'>
    <input type="hidden" name='id' value='<?=$cadastro['id']?>' required>
    <label>Nome: </label>
    <input type="text" name='nome' value='<?=$cadastro['nome']?>'>
    <label> Endereço: </label>
    <input type="text" name='endereco' value='<?=$cadastro['endereco']?>'>
    <button type='submit' name='atualiza'>
                Atualizar 
    </button>
    <button type='submit' name='exclui'>
        Excluir
    </button>
</form>
