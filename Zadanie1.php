<?php
class ReadingList
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 10) {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($item) {
        if (count($this->stack) < $this->limit) {

            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Stack is full!');
        }
    }

    public function pop() {
        if ($this->isEmpty()) {
	      throw new RunTimeException('Stack is empty!');
	  } else {
            return array_shift($this->stack);
        }
    }

    public function top() {
        return current($this->stack);
    }

    public function isEmpty() {
        return empty($this->stack);
    }
}


class Brackets
{
  


  public function isBracketSequenceCorrect($str) {
    // your code
	$flag=true;
	$myBrackets = new ReadingList();
	if (strlen($str)%2>0)
		echo "Returned false!";	
	else
	{
	for ($i = 0; $i < strlen($str); $i++) 
	{
		if ($str[$i]=='[')
		  $element=1;
		if ($str[$i]=='(')
		  $element=2;
		if ($str[$i]=='{')
		  $element=3;
		if ($str[$i]==']')
		  $element=-1;
		if ($str[$i]==')')
		  $element=-2;
		if ($str[$i]=='}')
		  $element=-3;
	  echo $element;
		if ($element>0)
			$myBrackets->push($element);
		else {
			if ($element==-($myBrackets->top()))
				$myBrackets->pop();
			else 
			$flag=false;
	}
	  
	}	
if ($flag==false)
	echo "Returned false!";	
	else
	echo "Returned true!";		
  }

}
}

$myBracketsSequence = new Brackets();
$myBracketsSequence->isBracketSequenceCorrect('([[{[]})))');
?>