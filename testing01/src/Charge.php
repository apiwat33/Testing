<?php namespace Charge;

class Charge{
    private $accountNumber,$chargeType;

    public function __construct(string $accountNumber,string $chargeType){
        $this->accountNumber = $accountNumber;
        $this->chargeType = $chargeType;
    }

	public function getCharge() {
		$waterCharge = 0;
		$electricCharge = 0;
		$phoneCharge = 0;
		
		if($this->accountNumber == '0123444667'){
				$waterCharge = 10000;
				$electricCharge = 53000;
				$phoneCharge = 400000;
		 }else if($this->accountNumber == '4235750021'){
				$waterCharge = 410000;
				$electricCharge = 3500000;
				$phoneCharge = 200000;
		 }else if($this->accountNumber == '5902150431'){
				$waterCharge = 5004000;
				$electricCharge = 0;
				$phoneCharge = 1150250;
		 }else if($this->accountNumber == '9835602413'){
				$waterCharge = 0;
				$electricCharge = 300000;
				$phoneCharge = 240000;
		 }else if($this->accountNumber == '7840125312'){
				$waterCharge = 10000;
				$electricCharge = 10000;
				$phoneCharge = 0;
		 }else if($this->accountNumber == '1924356780'){
				$waterCharge = 10000;
				$electricCharge = 700000;
				$phoneCharge = 100000;
		 }else if($this->accountNumber == '2476492431'){
				$waterCharge = 100000;
				$electricCharge = 50000;
				$phoneCharge = 50000;
		 }
		 
		 if($this->chargeType == 'waterCharge'){
			 
			$chargeAmount = $waterCharge;
			
		 }else if ($this->chargeType == 'electricCharge'){
			 
			 $chargeAmount =  $electricCharge;
			 
		 }else if ($this->chargeType == 'phoneCharge'){
			 
			 $chargeAmount =  $phoneCharge;
			 
		 }else{
			 
			$chargeAmount = 0 ;
			
		 }
		
		return $chargeAmount;
	}

	
	
	/* 
    public function getType(): array{ 
       // instrument version
        $answer = array('path' => array(),'answer'=> 'out of range' );
        $isOutOfRange = false;
		
		array_push($answer['path'], 'a');
    
        array_push($answer['path'], 'b');
        if(!($this->C >= 1 && $this->C <= 200)){
            
            $answer['answer'] = 'C '.$answer['answer'];
            $isOutOfRange = true;
            array_push($answer['path'], 'c');
    
        }
    
        array_push($answer['path'], 'd');
        if(!($this->B >= 1 && $this->B <= 200)){
            
            $answer['answer'] = 'B '.$answer['answer'];
            $isOutOfRange = True;
            array_push($answer['path'], 'e');
        }
        
        array_push($answer['path'], 'f');
        if(!($this->A >= 1 && $this->A <= 200)){
            $answer['answer'] = 'A '.$answer['answer'];
            $isOutOfRange = true;
            array_push($answer['path'], 'g');
        }

		
		array_push($answer['path'], 'h');
		if(!$isOutOfRange){

			array_push($answer['path'], 'i');
			
			if (($this-> A < $this->B  + $this->C   )&&($this-> B < $this->A  + $this->C  )&&($this-> C < $this->A  + $this->B ))
				{
				if 
					($this->A != $this->B && $this->B != $this->C && $this->A != $this->C)
					{
						$answer['answer'] = 'scalene';
						array_push($answer['path'], 'j');
				}elseif (
					(($this->A == $this->B && $this->A != $this->C) ||
					($this->A == $this->C && $this->A != $this->B) ||
					($this->B == $this->C && $this->B != $this->A))) 
					{
						$answer['answer'] = 'Isosceles';
						array_push($answer['path'], 'k');
				}else{
						$answer['answer'] = 'Equilateral';
						array_push($answer['path'], 'l');
					}
				}
			else {
				$answer['answer'] = 'Not a Triangle';
				array_push($answer['path'], 'm');
			}
			
	}
		array_push($answer['path'], 'n');
		
		$answer['answer'] = '99991';
        return $answer;


    } */


}