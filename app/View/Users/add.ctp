 <div class="box box-info">
    <div class="row">
      <div class="users form">
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->Form->create('User', ["url" => ["Controller" => "Users", "action" => $form_action ]]);?>
          <div class="col-md-12">
            <div class="input-group">
              <label for="UserUsername">Nome:</label>
              <?php echo $this->Form->input('name', array("label" => false)); ?>
            </div>
          </div>
          <div class="col-md-12">  
            <div class="input-group">
              <label for="UserUsername">Usuario:</label>
              <?php echo $this->Form->input('username', array("label" => false)); ?>
            </div>
          </div>
          <div class="col-md-12">
            <div class="input-group">
              <label for="UserPassworld">Senha:</label>
              <?php echo $this->Form->input('password', array("label" => false)); ?>
            </div>
          </div>
          <div class="col-md-12">  
            <?php if(CakeSession::read("Auth.User") == null) { ?>
              <button class="btn btn-success" type="submit">Cadastrar</button>
              <a class="btn btn-danger" href="<?php echo $this->base.'/users/login' ?>">Cancelar</a>
            <?php } else { ?>
              <button class="btn btn-success" type="submit">Salvar</button>
              <a class="btn btn-warning" href="<?php echo $this->base.'/users/index' ?>">Voltar</a>
            <?php } ?>  
          </div>
        </form>
      </div>
    </div>
  </div>
