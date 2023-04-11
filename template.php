<?php 
class Template
{
    private $obj = array(); 
   var $tmpl;

function assign($key, $value){
       $this->obj[$key] = $value;
   }

   function show(){
      if(count($this->obj)> 0)
      {
          foreach($this -> obj as $key => $value){  
            $this->tmpl[$key] =  $value;
        
        }
          
      }
     return $this->tmpl;
     
   }
   function render($path = ''){
   /* if($params){
        extract($params);
    }*/

            if(!empty($path)){
                if(file_exists($path)){
                 
                    $this->tmpl = include $path ;
                    
                
                }

                else
                {
                        echo 'Error';
                 }

            }
           
        }
   
}
?>