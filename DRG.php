<!DOCTYPE html>
<html>
<?php include ('head.php'); ?>
<body>
	<?php include ('navbar.php'); ?>
	<h1>DRG</h1>
	<h2>Raggruppamenti omogenei di diagnosi</h2>
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
				<div class="col-md-6 mb-3">
					<label for="validationCustom01">Codice Fiscale</label>
					<input type="text" class="form-control" id="validationCustom01" placeholder="Codice Fiscale" minlength="2" required> 
					<div class="invalid-feedback">
						Inserire un Codice Fiscale valido.
					</div>
				</div>
		</div>
		<div class="row">
			<div class="col-md-4 mb-3">
				<label for="validationCustom05">DRG</label>
				<select class="form-control" id="exampleFormControlSelect2">
					<option>Patologie dell'apparato respiratorio</option>
					<option>Patologie del Sistema Nervoso Centrale</option>
					<option>Patologie dell'apparato digerente</option>
					<option>Patologie cardiologiche</option>
                    <option>Patologie neoplastiche</option>
                    <option>Patologie dell'apparato genitale</option>
                    <option>Patologie dell'apparato muscolo-scheletrico</option>
</select>
				
			</div>
		</div>
		
		<button class="btn btn-primary" type="submit">Conferma</button>
	</form>
	<?php include('script.php'); ?>

</body>
</html>