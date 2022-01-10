<?
class Primos{
	public function retornaPrimos($inicial, $final){
		$primos = [];
		for($i = $inicial; $i <= $final; $i++){
			$divisores = 0;

			for($nL = $i; $nL >= 1; $nL--){
				if(($i % $nL) == 0){
					$divisores++;
				}
			}

			if($divisores == 2){
				array_push($primos, $i);
			}
		}

		$totalPrimos = count($primos) - 1;
		// unset($primos[0]);
		unset($primos[$totalPrimos]);
		
		echo "Número inicial = ".$inicial."<br>";
		echo "Número final = ".$final."<br>";
		echo "Encontramos ".count($primos)." números primos, são eles: ";
		// var_dump($primos);
		for($i = 0; $i < count($primos); $i++){
			echo $primos[$i].", ";
		}
	}
}

$primos = new Primos();
$primos-> retornaPrimos(10, 29);
?>