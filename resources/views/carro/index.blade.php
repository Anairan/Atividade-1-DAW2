@extends("templates.main")

@section("titulo", "Cadastro de Carro")

@section("formulario")
		<form method="POST" action="/carro" class="row">
			<div class="form-group">
				<label>Marca:</label>
				<input type="text" name="marca" value="{{$carro->marca}}" class="form-control"/>
			</div>
			<div class="form-group">
				<label>Modelo:</label>
				<input type="text" name="modelo" value="{{$carro->modelo}}" class="form-control"/>
			</div>
			<div>
				<label>Placa:</label>
				<input type="text" name="placa" value="{{$carro->placa}}" class="form-control"/>
			</div>
			<div class="form-group">
				<label>Cor:</label>
				<input type="text" name="cor" value="{{$carro->cor}}" class="form-control"/>
			</div>
			<div class="form-group">
				<label>Ano de Fabricação:</label>
				<input type="text" name="anoFabricacao" value="{{$carro->anoFabricacao}}" class="form-control"/>
			</div>
				@csrf
			<div class="form-group">
				<input type="hidden" name="id" value="{{$carro->id}}">
				<button type="submit" class="btn btn-success">
				<i class="bi-save"></i>Salvar</button>
			</div>
		</form>
		
@endsection

@section("tabela")
		<table class="table table-striped">
			<colgroup>
			
			<col width="200">
			<col width="200">
			<col width="160">
			<col width="160">
			<col width="90">
			<col width="50">
			<col width="50">
			
			</colgroup>
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
							}}" class="btn btn-warning">
								<i class="bi-pencil-square"></i>
								Editar
							</a>
						</td>
						<td>
							<a href="/carro/excluir/{{$carro->id}}" class="btn btn-danger">
							<i class="bi-trash"></i>
							Excluir
							</a>
						</td>
					
					</tr>
				@endforeach
			</tbody>
		</table>
@endsection