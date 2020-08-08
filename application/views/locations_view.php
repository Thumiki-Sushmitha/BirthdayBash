$loc = $this->user->getlocationsfromdatabase();
     if($loc == TRUE){
        $data = array('cakes_active' =>'true' , 
                        'cake'=> $loc);
     }