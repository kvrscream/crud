<div class="box box-info">
  <div class="row">
    <div class="users form">
      <?php echo $this->Session->flash(); ?>
      <?php echo $this->Form->create('User',["url" => ["Controller" => "Users", "action" => "login"]]);?>
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
          <button class="btn btn-primary" type="submit">Entrar</button>
          <a class="btn btn-deafult" href="<?php echo $this->base.'/users/add' ?>">Cadastre-se</a>
        </div>
      </form>
    </div>
  </div>
</div>