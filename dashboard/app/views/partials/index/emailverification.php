<?php
	$data=$this->view_data;
	$user_email = $data["user_email"];
	$status = $data["status"];
?>
<div class="container">
	<?php 
		if($status==true){
			if(!empty($_GET['resend'])){
				?>
				<h4 class="text-info bold animated bounce"><i class="fa fa-envelope"></i> Email jóváhagyás újraküldve!</h4>
				<?php
			}
			else{
				?>
				<h4 class="text-info bold"><i class="fa fa-envelope"></i> Email jóváhagyás elküldve!</h4>
				<?php
			}
		?>
			<div class="text-muted">Kérjük hagyd jóvá emailcímed a levélben kapott linket követve!</div>
			<hr />
			<div>
				<a href="<?php print_link("index/send_verify_email_link/$user_email?resend=true") ?>" class="btn btn-primary"><i class="fa fa-envelope"></i> Email újraküldése</a>
			</div>
			<?php
		}
		else{
			?>
			<div><i class="fa fa-envelope"></i> Kérjük hagyd jóvá emailcímed a levélben kapott linket követve!</div>
			<hr />
			<div>
				<a href="<?php print_link("index/send_verify_email_link/$user_email?resend=true") ?>" class="btn btn-primary"><i class="fa fa-envelope"></i> Email újraküldése</a>
			</div>
			<?php
		}
	?>
	<?php
		if(DEVELOPMENT_MODE){
			$mailbody = $this->view_data["mailbody"];
			?>
			<hr />
			<div class="bg-light p-4 border">
				<div class="text-danger">
					<h3>
						<b>Figyelmeztetés:</b> Ezt azért látod, mert a weboldal fejlesztői módban van publikálva!
						<br />Az emailek küldése helyi webszerveren problémákkal járhat.
					</h3>
					<div class="text-muted">Az email sablon módosításához:- <i>app/view/partials/index/emailverify_template.html</i></div>
				</div>
				<hr />
				<?php  echo $mailbody; ?>
			</div>
			
			<?php
		}
	?>
</div>


