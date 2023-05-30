<style>
    body{
        font-size: 10px;
        text-decoration:none;
    }
    #form{
        font-size: 10px;
        text-decoration:none;
    }
    .btn-edit{
        margin:1px;
        border-radius:5px;
        padding: 1px;
        background-color: lime;
        color:white;
        position:relative;
        top:1px;
        text-align:center;
    }
    #h2-cds{
        font-size: 40px;
    }
    
</style>
<head>
<link rel="stylesheet" type="text/css" href="../view/css/stylesheet.css" media="screen" />
</head>
<h2 id="h2-cds"><center> Cadastro </center></h2> 
<hr>
<body>
<form action="../controller/CadastroController.php" method='post' id="form">
    <label><center> Nome: </label>
    <input type="text" name='nome' required> 
    <label> Endereço: </label>
    <input type="text" name='endereco' required> 
    <button type='submit' name='add'>
       Adicionar
    </button>
</form> <hr> <h1> <center>
</body>
<?php if(isset($listaCadastro)):?>
    <?php foreach($listaCadastro as $c) : ?>
        <p>
        #<?=$c['id']?> 
        <?php echo "Nome:"?>
        <?=$c['nome']?>
        <?php echo "\nEndereço:"?>
        <?=$c['endereco']?> 
        <a href="?id=<?=$c['id']?>" class="btn-edit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
            </svg>
        </a><br>
    </p>
        <?php endforeach ?> </h1></center>
<?php else : ?>
    <p> Nenhum cadastro encontrado </p> 
<?php endif ?> <?

