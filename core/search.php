<?php
class search extends database{

    public function basic($table,$searchword,$record,$order = [],$limit =''){
        $vs = '';
        $ord ='';

        foreach ($record as $value){
           
                if($vs == ''){
                    $vs .='WHERE '.$value.' LIKE :'.$value;
                }
                else{
                    $vs .=' OR '.$value.' LIKE :'.$value;
                }

          
        }

        if($limit == ''){
            $l ='';
        }
        else{
            $l ='LIMIT '.$limit;
        }
        if($order != []){
            foreach ($order as $key=> $value){
                $ord = 'ORDER BY '.$key.' '.$value;
            }
        }
        // var_dump($vs);
        if($searchword =='/'){
            $sq = $this->conn->prepare("SELECT * FROM $table $ord $l");
        }
        else{
            $sq = $this->conn->prepare("SELECT * FROM $table $vs $ord $l");
        }

        foreach($record as $value){
          
                $sq->bindValue(':'.$value, '%'.$searchword.'%',PDO::PARAM_STR);
           
        }
       try{

        $sq->execute();
        $result = $sq->fetchAll();

       }catch(PDOException $e){
           $result= $e;

       }


       return $result;





    }

}