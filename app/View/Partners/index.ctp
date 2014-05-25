<div class="btn-table btn-group pull-right">
	<a href="<?= $this->Html->url(array('controller'=>'Partners', 'action'=>'add')) ?>" class="btn btn-default">Nuevo Cliente</a>
</div>
<table class="table dataTable">
	<thead>
		<tr>
			<th>RFC</th>
			<th>Nombre / Razón Social</th>
			<th>Domicilio Fiscal</th>
			<th>Telefono</th>
			<th>Correo Electronico</th>
			<th>Regimen</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($partners as $k_p=>$partner): ?>
		<tr>
			<td><?= $this->Html->link($partner['Partner']['rfc'] , array(
				'action'=>'view', $partner['Partner']['id'] 
			)) ?></td>
			<td><?= $partner['Partner']['razon_social'] ?></td>
			<td><?= $partner['Partner']['domicilio_fiscal'] ?></td>
			<td><?= $partner['Partner']['telefono'] ?></td>
			<td><?= $partner['Partner']['correo_electronico'] ?></td>
			<td><?= $partner['Partner']['regimen'] ?></td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table>