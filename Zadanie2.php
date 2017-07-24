<?php
class MaximumUniqueSubstring
{
	function find_repit($str,$sub){
        for($i=0;$i<strlen($str);$i++){
            if($str[$i]==$sub)
                return true;
        }
				return false;
    }
    public function findMaximumUniqueSubstring($str) {
        $maxstr="";
        $index=0;
		$substr="";
        while ($index<strlen($str)){
            if($this->find_repit($substr,$str[$index])==false){
                $substr.=$str[$index];
                if(strlen($substr)>strlen($maxstr))
                    $maxstr=$substr;
					$index++;
            }
            else $substr="";
        }
        return $maxstr;
    }
     
}

	$mySubstring = new MaximumUniqueSubstring();
 $answer=$mySubstring->findMaximumUniqueSubstring('aabcdAbc');
 echo $answer;
?>