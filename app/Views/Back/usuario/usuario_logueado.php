<div class="container mt-5">
	<div class="row justify-content-md-center" style="text-align: center;">
		<div class="col-5">
		<?php if(session()->getFlashdata('msg')):?>
			<div class="alert alert-warning">
				<?= session()->getFlashdata('msg')?>
			</div>
		<?php endif;?>
		<br><br>
			<?php if(session()->perfil_id == 1): ?>
				<div>
					<img src="<?php echo base_url('assets/img/admin.jpeg');?> ">
				</div>
			<?php elseif(session()->perfil_id == 2): ?>
				<div>
					<img src="<?php echo base_url('assets/img/cliente.jpeg');?> ">
				</div>
			<?php endif;?>
		</div>
	</div>
</div>
<br>
