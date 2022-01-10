<?
class ArraySorteada{
	public function arraySorteio(){
		$dados = array();
		$newDados = $dados;
		for($i = 1; $i <= 20; $i++){
			array_push($dados, rand(1,10));
		}

		echo "Array sorteada: ";
		foreach($dados as $item){
			echo $item.", ";
		}
		$duplicados = array_unique(array_diff_assoc($dados, array_unique($dados)));
		if(count($duplicados) < 1){
			echo "<br>Nenhum número se repete.";
		}else{
			echo "<br>Os números que se repetem são os: ";
			foreach($duplicados as $n1){
				echo $n1.", ";
				$remove = array($n1);
				$dados = array_diff($dados, $remove);

			}
			echo "<br> Os números que não se repetem: ";
			foreach($dados as $numerosUnicos){
				echo $numerosUnicos.", ";
			}
		}
	}
}

$ArraySorteada = new ArraySorteada();
$ArraySorteada-> arraySorteio();
?>