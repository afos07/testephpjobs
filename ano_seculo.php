<?
class AnoSeculo{
	private $combo1;
	private $combo2;
	private $seculo;
	public function SeculoAno($anoRequest){
		if($anoRequest < 1){
			echo "Ano inválido";
		}else{
			if(strlen($anoRequest) == 1 || strlen($anoRequest) == 2){
				$this-> seculo = (0 + 1);
			}else{
				if($anoRequest > 2099){
					echo "Algoritmo limitado até o século 21 :)";
				}else{
					if(strlen($anoRequest) == 3){
						$this-> combo1 = substr($anoRequest, 0,1);
						$this-> combo2 = substr($anoRequest, 1,2);
					}else{
						$this-> combo1 = substr($anoRequest, 0,2);
						$this-> combo2 = substr($anoRequest, 2,4);
					}
					if($this-> combo2 != 00){
						$this-> seculo = (intval($this-> combo1) + 1);
					}else{
						$this-> seculo = $this-> combo1;
					}
				}	
				
			}
			echo "Ano ".$anoRequest." = século ".$this-> seculo;
			
		}
	}
}

$anoSeculo = new AnoSeculo();
$anoSeculo-> SeculoAno(1905);
?>