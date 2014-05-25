<script type="text/javascript">
    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('PartnerDomicilioFiscal');
        //bootstrap WYSIHTML5 - text editor
        //$(".textarea").wysihtml5();
    });
</script>
<?php 
	echo $this->Form->create('Partner');
		
		echo $this->Form->input('rfc', array(
				'class'=>'form-control',
				'label' => 'Regitro Federal de Contribuyentes'
			));
		echo $this->Form->input('razon_social', array(
				'class'=>'form-control'
			));
		echo $this->Form->input('domicilio_fiscal', array(
				'class'=>'form-control'
			));
		echo $this->Form->input('telefono', array(
				'class'=>'form-control'
			));
		echo $this->Form->input('correo_electronico', array(
				'class'=>'form-control'
			));

		echo $this->Form->input('regimen', array(
				'class'=>'form-control'
			));

		echo '<br>';

		echo $this->Form->input('Guardar', array(
				'type'=>'submit',
				'class'=>'btn btn-default btn-lg',
				'label' => false
			));

	echo $this->Form->end()
 ?>