<div class="container" id="contact">
	<div class="row">
		<!--contact information-->
		<div class="contact col s12 m12 l6">
			<div class="row">
				<div class="provozovna col s12 m4 l4">
					<h4 class="center-align">Provozovna</h4>
				</div>
				<div class="col s12 m8 l8 first">
					<p class="center-align">Lužická 2,</p>
					<p class="center-align">700 30, Ostrava - Výškovice</p>
				</div>
				<div class="col s12 m8 l8 second">
					<a class="center-align" href="tel:+420-608-510-145">+420 608 510 145</a>
					<a class="center-align" href="mailto:bobas@bobas.cz">bobas@bobas.cz</a>
				</div>
				<div class="contact-box col hide-on-small-only m4 l4">
					<h4 class="center-align">Kontakt</h4>
				</div>
				<div class="invoice col s12 m4 l4">
					<h4 class="center-align">Sídlo firmy</h4>
				</div>
				<div class="col s12 m8 l8 third">
					<p class="center-align">Čeladná 793,</p>
					<p class="center-align">739 12, Čeladná</p>
				</div>
			</div>
		</div>
		<!-- contact form -->
		<form class="contact-form col s12 m12 l6" id="contact-form-hp" method="post" name="contact-form-hp" action="send">

			<h5><img src="/imgs/icons/heart.png" alt="Napište nám" />Sdělte nám, co máte na srdci</h5>
	        <div class="input-field col s12">
	          	<input id="email" type="email" class="validate" name="email" required>
	          	<label for="email" data-error="Špatně zadaný email">Váš email</label>
	        </div>
	        <div class="input-field col s12">
	          	<textarea id="zprava" class="materialize-textarea" name="zprava" required></textarea>
	          	<label for="zprava">Váš vzkaz</label>
	        </div>
	        <!--
	      	<input id="submit" type="submit" name="submit" value="Send" />
			-->

	        <button class="btn waves-effect waves-light" type="submit" id="submit" name="submit">Odeslat<img src="imgs/icons/send.png" alt="Odeslat" /></button>

			<div id="form-messages"></div>
		</form>
	</div>
</div>
