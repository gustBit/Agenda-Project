<?php 
include_once ("config/url.php");
include_once ('./templates/header.php');

?>
    <div class="container">
        <?php include_once("templates/backbtn.html");?>
        <h1 id="main-title">Criar contato</h1>
        <form  id="create-form"  action="<?= $BASE_URL ?>config/process.php" method="POST">
                <input type="hidden" name="type" value="create">
                <div class="form-group">
                    <label for="name">Nome do contato:</label>
                    <input type="text" class="form-control" id= "name" name="name" placeholder="Coloque seu nome aqui." required>
                </div>
                <div class="form-group">
                    <label for="phone">Telefone do contato:</label>
                    <input type="text" class="form-control" id= "phone" name="phone" placeholder="Coloque seu número aqui." required>
                </div>
                <div class="form-group">
                    <label for="observations">Observações do contato:</label>
                    <textarea type="text" class="form-control" id= "observations" name="observations" placeholder="Coloque as informações do contato aqui." rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    
    </div>
<?php 
include_once ('./templates/header.php');
?>