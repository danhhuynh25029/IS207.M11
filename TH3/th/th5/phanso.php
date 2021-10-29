<?php 
	class phanso{
		private $ts1,$ts2,$ms1,$ms2;
		public function __construct($ts1,$ms1,$ts2,$ms2){
			$this->ts1 = $ts1;
			$this->ms1 = $ms1;
			$this->ts2 = $ts2;
			$this->ms2 = $ms2;
		}
		public function ucln($a,$b){
			if ($a == 0 || $b == 0){
        		return $a + $b;
   			}
    		while ($a != $b){
	        	if ($a > $b){
	                $a -= $b; // $a = $a - $b
	            }else{
	            	$b -= $a;
	            }
   		    }
    		return $a;
		}
		public function Cong(){
			$t = $this->ts1*$this->ms2 + $this->ts2*$this->ms1;
			$m = $this->ms1*$this->ms2;
			$uc = $this->ucln($t,$m);
			$ts = $t/$uc;
			$ms = $m/$uc;
			return $this->ts1."/".$this->ms1."+".$this->ts2."/".$this->ms2."=".$ts."/".$ms;
		}
		public function Nhan(){
			$t = $this->ts1*$this->ts2;
			$m = $this->ms1*$this->ms2;
			$uc = $this->ucln($t,$m);
			$ts = $t/$uc;
			$ms = $m/$uc;
			return $this->ts1."/".$this->ms1."*".$this->ts2."/".$this->ms2."=".$ts."/".$ms;	
		}
		public function Chia(){
			$t = $this->ts1*$this->ms2;
			$m = $this->ms1*$this->ts2;
			$uc = $this->ucln($t,$m);
			$ts = $t/$uc;
			$ms = $m/$uc;
			return $this->ts1."/".$this->ms1."/".$this->ts2."/".$this->ms2."=".$ts."/".$ms;	
		}
		public function Tru(){
			$t = $this->ts1*$this->ms2 - $this->ts2*$this->ms1;
			$m = $this->ms1*$this->ms2;
			$uc = $this->ucln($t,$m);
			$ts = $t/$uc;
			$ms = $m/$uc;
			return $this->ts1."/".$this->ms1."-".$this->ts2."/".$this->ms2."=".$t."/".$m;	
		}
	}
	// $ms = new phanso(1,1,2,3);
	// echo $ms->Tru();
?>