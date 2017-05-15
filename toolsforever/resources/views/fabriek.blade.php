<body>
	<div id="wrapper" class="toggled">
		@include('gadget.header')
		<div class="container">
			<h2>Wijzig fabriek {{ $fabriek->fabriek }}</h2>
			<form method="POST" action="/updatefabriek/{{ $fabriek->Fabriekcode }}">
				<button type="submit" class="btn btn-default">Wijzig</button>
				<a href="/fabrieken" class="btn btn-default">Annuleren</a>
				<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
				<div class="form-group">
					<label for="fabriekNaam">Fabriek naam: </label>
					<input type="text" class="form-control" value="{{ $fabriek->Fabriek }}" name="fabriekNaam"  id="fabriekNaam">
				</div>
			
				<div class="form-group">
					<label for="telefoon">Telefoon nummer: </label>
					<input type="text" class="form-control" value="{{ $fabriek->Telefoon }}" name="telefoon" id="telefoon">
				</div>
				
				<button type="submit" class="btn btn-default">Wijzig</button>
				<a href="/fabrieken" class="btn btn-default">Annuleren</a>
			</form>
		</div>
	</div>
</body>