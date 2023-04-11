<?php 

class Template
{

  function render($path = '' , $data){
    extract($data);
     ob_start(); 
    
            if(!empty($path)){
                if(file_exists($path)){

                include($path) ;
            
                }

                else
                {
                        echo 'Error';
                 }

             }
        $output = ob_get_contents();
        ob_end_clean();
         
         return $output;
        
        }
       
}
?>