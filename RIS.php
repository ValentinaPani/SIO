<!DOCTYPE html>
<html>
<?php include ('head.php'); ?>
<body>
	<?php include ('navbar.php'); ?>
	<h1>RIS</h1>
	<h2>Prenotazione esami radiologici</h2>
	<form class="container" id="needs-validation" novalidate>
		<div class="row">
			<div class="col-md-4 mb-3">
				<label for="validationCustom01">Nome</label>
				<input type="text" class="form-control" id="validationCustom01" placeholder="Nome" minlength="2" required> 
				<div class="invalid-feedback">
					Inserire un Nome valido.
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<label for="validationCustom02">Cognome</label>
				<input type="text" class="form-control" id="validationCustom02" placeholder="Cognome" minlength="2" required> 
				<div class="invalid-feedback">
					Inserire un Cognome valido.
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<label for="validationCustom02">Data di nascita</label>
				<input type="text" class="form-control" id="validationCustom02" placeholder="Data di nascita" minlength="2" required> 
				<div class="invalid-feedback">
					Inserire una Data di nascita valida.
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7">
				<label>Sesso:</label>
				<label class="custom-control custom-radio">
  <input id="radio1" name="radio" type="radio" class="custom-control-input">
  <span class="custom-control-indicator"></span>
  <span class="custom-control-description">Maschio</span>
</label>
<label class="custom-control custom-radio">
  <input id="radio2" name="radio" type="radio" class="custom-control-input">
  <span class="custom-control-indicator"></span>
  <span class="custom-control-description">Femmina</span>
</label>
			</div>
		
		</div>
		<div class="row">
			<div class="col-md-4 mb-3">
				<label for="validationCustom03">Città</label>
				<input type="text" class="form-control" id="validationCustom03" placeholder="Città" required>
				<div class="invalid-feedback">
					Inserire una Città valida.
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<label for="validationCustom04">Stato</label>
				<input type="text" class="form-control" id="validationCustom04" placeholder="Stato" required>
				<div class="invalid-feedback">
					Inserire uno Stato valido.
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<label for="validationCustom05">CAP</label>
				<input type="number" min="09000" max="09999" class="form-control" id="validationCustom05" placeholder="Inserisci CAP" required>
				<div class="invalid-feedback">
					Inserire un CAP valido.
				</div>
			</div>
			</div>
			<div class="row">	
				<div class="col-md-4 mb-3">
					<label for="validationCustom01">Codice Fiscale</label>
					<input type="text" class="form-control" id="validationCustom01" placeholder="Codice Fiscale" minlength="2" required> 
					<div class="invalid-feedback">
						Inserire un Codice Fiscale valido.
					</div>
				</div>
		<div class="col-md-4 mb-3">
				<label for="validationCustom05">Telefono</label>
				<input type="number" class="form-control" id="validationCustom05" placeholder="Inserire un numero di telefono" required>
				<div class="invalid-feedback">
					Inserire un numero di telefono valido.
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<label for="validationCustom01">e-mail</label>
				<input type="text" class="form-control" id="validationCustom01" placeholder="Inserire e-mail" minlength="2" required> 
				<div class="invalid-feedback">
					Inserire una e-mail valida.
				</div>
			</div>
		</div>

		<div class="row">
		<div class="col-md-4 mb-3">
				<label for="validationCustom02">Data di prenotazione</label>
				<input type="text" class="form-control" id="validationCustom02" placeholder="Data di prenotazione" minlength="2" required> 
				<div class="invalid-feedback">
					Inserire una Data di prenotazione valida.
				</div>
			</div>
		</div>
<div class="row">
		<div class="col-md-4 mb-3">
				<label for="validationCustom05">Tipo di Esame</label>
				<select class="form-control" id="exampleFormControlSelect2">
					<option>Radiografia</option>
					<option>Mammografia</option>
					<option>TC (Tomografia Computerizzata)</option>
					<option>RM (Risonanza Magnetica)</option>
					<option>Scintigrafia</option>
					<option>PET (Tomografia ad Emissione di Protoni)</option>
		</select>
		</div>
		</div>
		
		</div>
		<div class="row">
			<div class="col-md-4 mb-3">
				<label for="validationCustom01">Distretto anatomico</label>
				<div class="form-check">
					<label class="form-check-label">

						<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
						Cranio
					</label>
				</div>
				<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
						Colonna
					</label>
				</div>
							<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
						Polso
					</label>
				</div>
							<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
						Mano
					</label>
				</div>
							<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
						Addome
					</label>
				</div>
			<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
						Torace
					</label>
				</div>
			<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
						Spalla
					</label>
				</div>
			<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
						Pelvi
					</label>
				</div>
			<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
						Ginocchio
					</label>
				</div>
			</div>
</div>
		<button class="btn btn-primary" type="submit">Conferma</button>
	</form>
	<?php include('script.php'); ?>

</body>
</html>