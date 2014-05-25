<?php 
	
//pr($partner);

 ?>
 <style type="text/css">
 	.bg-gray-light{
 		background-color: #f5f5f5;
 	}
 </style>
<h3><?= $partner['Partner']['razon_social'] ?></h3>
<hr>
<div class="row">
	<div class="col-md-9">
		<div class="row bg-gray-light">
			<div class="col-md-3">
				<label>Razón Social</label>&nbsp;&nbsp;<i class="fa fa-caret-right"></i>
			</div>
			<div class="col-md-6">
				<?= $partner['Partner']['razon_social'] ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<label>RFC</label>&nbsp;&nbsp;<i class="fa fa-caret-right"></i>
			</div>
			<div class="col-md-6">
				<?= $partner['Partner']['rfc'] ?>
			</div>
		</div>
		 <div class="row bg-gray-light">
			<div class="col-md-3">
				<label>Domicilio Fiscal</label>&nbsp;&nbsp;<i class="fa fa-caret-right"></i>
			</div>
			<div class="col-md-6">
				<?= $partner['Partner']['domicilio_fiscal'] ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<label>Telefono</label>&nbsp;&nbsp;<i class="fa fa-caret-right"></i>
			</div>
			<div class="col-md-6">
				<?= $partner['Partner']['telefono'] ?>
			</div>
		</div>
		 <div class="row bg-gray-light">
			<div class="col-md-3">
				<label>Correo Electronico</label>&nbsp;&nbsp;<i class="fa fa-caret-right"></i>
			</div>
			<div class="col-md-6">
				<?= $partner['Partner']['correo_electronico'] ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<label>Regimen</label>&nbsp;&nbsp;<i class="fa fa-caret-right"></i>
			</div>
			<div class="col-md-6">
				<?= $partner['Partner']['regimen'] ?>
			</div>
		</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-6">
		<div class="btn-group">
			<?= $this->Html->link('Regresar', array(
				'action' => 'index'
			), array(
				'class' => 'btn btn-default'
			)) ?>
			<?= $this->Html->link('Editar', array(
				'action' => 'edit', $partner['Partner']['id'] 
			), array(
				'class' => 'btn btn-default'
			)) ?>
			<?= $this->Html->link('Eliminar', array(
				'action' => 'delete', $partner['Partner']['id'] 
			), array(
				'class' => 'btn btn-warning'
			)) ?>
		</div>
	</div>
</div>