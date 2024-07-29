<?php  
    
interface firstInterface {  
   public function interfaceone();  
   public function interfaceonetwo();  
}  
    
interface secondInterface {  
   public function interfacetwo();  
}  
    
class childClass implements firstInterface, secondInterface {  // 
    
    function interfaceone() {  
        echo "this is the first interface </br>";  
    }  
    function interfaceonetwo() {  
        echo "this is the first interfaceone2 </br>";  
    }  
    
    function interfacetwo() {  
        echo "this is the second interface</br>";  
    }  
    
    public function childFunction()  
    {  
        echo "this is child inherited from both interfaces</br>";  
    }  
}  
    
$obj = new childClass();  
$obj->interfaceone();  
$obj->interfaceonetwo();  
$obj->interfacetwo();  
$obj->childFunction();  
?>  