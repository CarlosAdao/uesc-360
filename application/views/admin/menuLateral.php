<ul class="collapsible" id="menu-lateral" data-collapsible="accordion">
  <li>
    <div class="collapsible-header">
      <a href="<?php echo base_url('home'); ?>" class="grey-text text-darken-4" style="display:block;">
        <i class="material-icons">home</i>
        Página Inicial
      </a>
    </div>
  </li>

  <li>
    <div class="collapsible-header">
      <a href="<?php echo base_url('painel'); ?>" class="grey-text text-darken-4" style="display:block;">
        <i class="material-icons">dashboard</i>
        Painel
      </a>
    </div>
  </li>

  <li>
    <div class="collapsible-header"><i class="material-icons">settings</i>Minha Conta</div>
    <div class="collapsible-body">
      <div class="collection">
        <a href="<?php echo base_url('usuario/perfil'); ?>" class="collection-item grey lighten-4 blue-grey-text text-accent-2">Meu Perfil</a>
        <a href="<?php echo base_url('usuario/editar'); ?>" class="collection-item grey lighten-4 blue-grey-text text-accent-2">Editar Perfil</a>
        <a href="<?php echo base_url('usuario/senha'); ?>" class="collection-item grey lighten-4 blue-grey-text text-accent-2">Alterar Senha</a>
      </div>
    </div>
  </li>

  <?php if($this->security_model->isAdmin() || $this->security_model->isCoord()): ?>
  <li>
    <div class="collapsible-header"><i class="material-icons">add</i>Cadastro</div>
    <div class="collapsible-body">
      <div class="collection">
        <?php if($this->security_model->isAdmin() && $this->session->userdata('permissao_usu') == 1): ?>
          <a href="<?php echo base_url('pessoa/cadastrar_pessoa'); ?>" class="collection-item grey lighten-4 blue-grey-text text-accent-2">Pessoa</a>
          <a href="<?php echo base_url('departamento/cadastrar_departamento'); ?>" class="collection-item grey lighten-4 blue-grey-text text-accent-2">Departamento</a>
          <a href="<?php echo base_url('pavilhao/cadastrar_pavilhao'); ?>" class="collection-item grey lighten-4 blue-grey-text text-accent-2">Pavilhão</a>
        <?php endif; ?>
        <a href="<?php echo base_url('laboratorio/cadastrar_laboratorio'); ?>" class="collection-item grey lighten-4 blue-grey-text text-accent-2">Laboratório</a>
        <a href="<?php echo base_url('equipamento/cadastrar_equipamento'); ?>" class="collection-item grey lighten-4 blue-grey-text text-accent-2">Equipamento</a>
      </div>
    </div>
  </li>
  <?php endif; ?>

  <?php if($this->security_model->isAdmin() || $this->security_model->isCoord()): ?>
  <li>
    <div class="collapsible-header"><i class="material-icons">search</i>Consulta</div>
    <div class="collapsible-body">
      <div class="collection">
        <?php if($this->security_model->isAdmin() && $this->session->userdata('permissao_usu') == 1): ?>
          <a href="<?php echo base_url('pessoa/listar_pessoas'); ?>" class="collection-item grey lighten-4 blue-grey-text text-accent-2">Pessoa</a>
          <a href="<?php echo base_url('departamento/listar_departamento'); ?>" class="collection-item grey lighten-4 blue-grey-text text-accent-2">Departamento</a>
          <a href="<?php echo base_url('pavilhao/listar_pavilhao'); ?>" class="collection-item grey lighten-4 blue-grey-text text-accent-2">Pavilhão</a>
          
        <?php endif; ?>
        <a href="<?php echo base_url('laboratorio/listar_laboratorios'); ?>" class="collection-item grey lighten-4 blue-grey-text text-accent-2">Laboratório</a>
        <a href="<?php echo base_url('equipamento/listar_equipamentos'); ?>" class="collection-item grey lighten-4 blue-grey-text text-accent-2">Equipamento</a>
      </div>
    </div>
  </li>
  <?php endif; ?>

	<li>
		<div class="collapsible-header">
      <a href="<?php echo base_url('login/logoff'); ?>" class="black-text text-darken-4" style="display:block;">
        <i class="material-icons white-text">power_settings_new</i>
        Sair
      </a>
		</div>
	</li>
</ul>
