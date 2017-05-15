<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div id="wrapper" class="toggled">
		@include('gadget.header')
		
		<div class="container">
			<h2>Fabriek toevoegen</h2>
			<form method="POST" action="/savefabriek">
				<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
				<button type="submit" class="btn btn-default">Verzenden</button>
				<a href="/fabrieken" class="btn btn-default">Annuleren</a>
				<div class="form-group">
					<label for="fabriekNaam">Fabriek naam: </label>
					<input type="text" class="form-control" placeholder="Fabriek naam" name="fabriekNaam" id="fabriekNaam">
				</div>
			
				<div class="form-group">
					<label for="telefoonNummer">Telefoon Nummer: </label>
					<input type="text" class="form-control" placeholder="Telefoon Nummer" name="telefoonNummer" id="telefoonNummer">
				</div>
		
				<button type="submit" class="btn btn-default">Verzenden</button>
				<a href="/fabrieken" class="btn btn-default">Annuleren</a>
			</form>
		</div>
	</div>
</body>
</html>