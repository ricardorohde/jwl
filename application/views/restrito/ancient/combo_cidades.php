<?php 

/*View que monta o combo*/

 foreach ($cidades as $city):

     echo '<option value="'.$city->id.'" ';
 
 if ($city->id == $cidsel)
         echo "selected='selected' ";
 
     echo '>'.$city->nome_cidade.'</option>';
   
  endforeach;




//// Connect Database
 /*   mysql_connect("127.0.0.1","db_user","db_pass");     
    mysql_select_db("db_name");*/
    
    
/*
    $this->db->where("id", $_GET['id']);
    $query = $this->db->get("cidades");
    $resultado = $query->result();

    foreach ($resultado as $cidades):
        $items[] = array( $resultado->id, $resultado->nome_cidade);
    endforeach;

    echo json_encode($items);
   
    
  /*  //  buscar os resultados
    $result = mysql_query($query);
    $items = array();
    if($result && mysql_num_rows($result)>0) {
        while($row = mysql_fetch_array($result)) {
            $items[] = array( $row[0], $row[1] );
        }        
    }
    mysql_close();
    echo json_encode($items);  
    */
 ?>