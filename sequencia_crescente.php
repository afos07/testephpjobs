<?
class SequenciaCrescente{
	public function calculaSequencia($sequencia){
		$sequencia = $sequencia;
		$newS = implode(',', $sequencia);
		if(count($sequencia) === 1){
			// var_dump($sequencia);exit;
			echo "Sequencia: [".$newS."] - True";
		}else{
			$modificado = 0;
			$count = count($sequencia);

			for($i = 0; $i < $count - 1; $i++) {
				if($sequencia[$i] >= $sequencia[$i+1])
					$modificado++;

				if($modificado > 1){
					break;
				}
			}

			if($sequencia[$count - 2]>= $sequencia[$count - 1])
				$modificado++;    

			if($modificado > 1){
				echo "Sequencia: [".$newS."] - False";
			}else{
				echo "Sequencia: [".$newS."] - True";	
			}

		}
	}
}
// Não entendi direito a pergunta :(

$sequenciaCrescente = new SequenciaCrescente();
$sequenciaCrescente-> calculaSequencia([1,2,1,0,5])
?>