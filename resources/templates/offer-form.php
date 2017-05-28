<div class="offer-form" id="offer-form">
	<div class="container">
		<div class="row">	
			<form class="contact-form col s12 m10 offset-m1 l8 offset-l2" id="contact-form-hp" method="post" name="contact-form-hp" action="send">
					
				<h5><img src="/imgs/icons/heart.png" alt="Napište nám" />Něco Vám tady chybí? Zeptejte se nás.</h5>
			    <div class="input-field col s12">
			      	<input id="email" type="email" class="validate" name="email" required>
			      	<label for="email" data-error="Špatně zadaný email">Váš email</label>
			    </div> 
			    <div class="input-field col s12">
			      	<textarea id="zprava" class="materialize-textarea" name="zprava" required></textarea>
			      	<label for="zprava">Váš dotaz</label>
			    </div>
			  	
			    <button class="btn waves-effect waves-light" type="submit" id="submit" name="submit">Odeslat<img src="imgs/icons/send.png" alt="Odeslat" /></button>

				<div id="form-messages"></div>
			</form>
		</div>
	</div>
</div>			