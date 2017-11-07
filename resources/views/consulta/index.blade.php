<h1> Consulta SALDO</h1>

<table>
@forelse( $credits as $cc)
	<tr><td><b>GRU:</b>{{$cc->gru}}</td><td><b>Valor:</b> R$ {{$cc->valor}}</td></tr>
@empty
	
@endforelse
	</table>
