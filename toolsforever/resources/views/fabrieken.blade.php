<body>
<div id="wrapper" class="toggled">
	@include('gadget.header')
	<div class="container">	
		<table class="table">
			<thead>
				<tr>
					<th style="border-bottom: none">Fabriek</th>
					<th style="border-bottom: none">Telefoon nummer</th>
				</tr>
			</thead>
			<tbody>
				@foreach($fabrieken as $fabriek)
				<tr>
					<td>{{ $fabriek->Fabriek }}</td>
					<td>{{ $fabriek->Telefoon }}</td>
					<td>
						<a href="/editfabriek/{{ $fabriek->Fabriekcode }}">
							<img src="/images/wijzigen.png" alt="wijzigen">
						</a> 
						<a href="/deletefabriek/{{ $fabriek->Fabriekcode }}">
							<img src="/images/verwijderen.png" alt="verwijder">
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		<a href="/addFabriek" class="btn btn-default">Fabriek toevoegen</a>
	</div>
</div>
</body>
