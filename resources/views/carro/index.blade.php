<html>
	<body>
		<form method="POST" action="/carro">
			<div>
				<label>Marca:</label>
				<input type="text" name="marca" value="{{$carro->marca}}"/>
			</div>
			<div>
				<label>Modelo:</label>
				<input type="text" name="modelo" value="{{$carro->modelo}}"/>
			</div>
			<div>
				<label>Placa:</label>
				<input type="text" name="placa" value="{{$carro->placa}}"/>
			</div>
			<div>
				<label>Cor:</label>
				<input type="text" name="cor" value="{{$carro->cor}}"/>
			</div>
			<div>
				<label>Ano de Fabricação:</label>
				<input type="text" name="anoFabricacao" value="{{$carro->anoFabricacao}}"/>
			</div>
				@csrf
			<div>
				<input type="hidden" name="id" value="{{$carro->id}}">
				<button type="submit">Salvar</button>
			</div>
		</form>
		
		<table border="1">
			<thead>
				<tr>
				
					<th>Marca</th>
					<th>Modelo</th>
					<th>Placa</th>
					<th>Cor</th>
					<th>Ano de Fabricação</th>
					<th>Editar</th>
					<th>Excluir</th>
				
				</tr>
			</thead>
			<tbody>
				@foreach ($carros as $carro)
					<tr>
					
						<td>{{$carro->marca}}</td>
						<td>{{$carro->modelo}}</td>
						<td>{{$carro->placa}}</td>
						<td>{{$carro->cor}}</td>
						<td>{{$carro->anoFabricacao}}</td>
						<td>
						
							<a href="/carro/editar/{{
								$carro->id
							}}">
								Editar
							</a>
						</td>
						<td>
							<a href="/carro/excluir/{{$carro->id}}">
							Excluir
							</a>
						</td>
					
					</tr>
				@endforeach
			</tbody>
		</table>
	</body>
</html>