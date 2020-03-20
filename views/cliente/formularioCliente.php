<?php if (isset( $data["id_cliente"])):?>
  <input name="id_client" type="text" value="<?= $data["id_cliente"]?>" hidden>
<?php endif;?>

<div class="row">
  <div class="col-sm">
    <div class="form-group">
      <label for="name">Nome</label>
      <input 
        type="text" 
        class="form-control" 
        name="nome" 
        value="<?= isset($data["nome"])? $data["nome"] : null?>"
      >
    </div>

    <div class="form-group">
      <label for="password">Senha</label>
      <input 
        type="password" 
        class="form-control" 
        name="pass" 
        id="pass"
        value="<?= isset($data["pass"])? $data["pass"] : null?>"
      >
    </div>
  </div>

  <div class="col-sm">
    <div class="row">
      <legend>Escolha seu sexo:</legend>

      <div class="form-check">
        <label class="form-check-label">
          <input 
            type="radio" 
            class="form-check-input" 
            name="rdSexo" 
            id="rdSexo1" 
            value="Masculino<?= isset($data["Masculino"])? $data["Masculino"] : null?>" 
            checked
          >
          Masculino
        </label>
        <br/>
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="rdSexo" id="rdSexo2" value="Feminino<?= isset($data["Feminino"])? $data["Feminino"] : null?>">
          Feminino
        </label>
      </div>        
    </div>
    
  </div>
  <div class="col-sm">
    <legend>Escolha:</legend>

    <div class="form-check form-check-inline">

      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="escolha1" id="escolha1" value="escolha1<?= isset($data["escolha1"])? $data["escolha1"] : null?>"> Escolha 1
      </label>
      
    </div>

    <div class="form-check form-check-inline">
      
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="escolha2" id="escolha2" value="escolha2<?= isset($data["escolha2"])? $data["escolha2"] : null?>"> Escolha 2
      </label>
      
    </div>

    <div class="form-check form-check-inline">
      
      <label class="form-check-label">        
        <input class="form-check-input" type="checkbox" name="escolha3" id="escolha3" value="escolha3<?= isset($data["escolha3"])? $data["escolha3"] : null?>"> Escolha 3
      </label>

    </div>
  </div>
</div>  

<div class="col-sm">
  <div class="row">
    <div class="col-sm">

      <label>Selecione 01<br />
        <select name=selecao >
          <option></option>
          <option value=”selecao1<?= isset($data["selecao1"])? $data["selecao1"] : null?>”>Seleção 01</option>
          <option value=”selecao2<?= isset($data["selecao2"])? $data["selecao2"] : null?>”>Seleção 02</option>
          <option value=”selecao3<?= isset($data["selecao3"])? $data["selecao3"] : null?>”>Seleção 03</option>
        </select>
      </label>

    </div>

    <div class="col-sm">
      <label>Selecione 02<br />    
        <select name="opcao" size="4" multiple="yes">
          <option></option>
          <option value=”selecao4<?= isset($data["selecao4"])? $data["selecao4"] : null?>”>Seleção 04</option>
          <option value=”selecao5<?= isset($data["selecao5"])? $data["selecao5"] : null?>”>Seleção 05</option>
          <option value=”selecao6<?= isset($data["selecao6"])? $data["selecao6"] : null?>”>Seleção 06</option>
        </select>
      </label>
    </div>
  </div>

</div>

<div class="col-sm">
  <div class="form-group">
    <label for="">Escreva:</label>
    <textarea class="form-control" name="textArea" id="textArea" rows="3" value=”<?= isset($data["textArea"])? $data["textArea"] : null?>></textarea>
  </div>
</div>  


<button type="submit" class="btn btn-primary" action="views/cliente/clientes.php" >Enviar</button>
