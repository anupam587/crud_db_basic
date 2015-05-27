<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Db_basic_model extends CI_Model{
    /*public function table_select ($table){
         
    }
*/
    public function table_create($query,$conn){
        if(!preg_match("/^\s*create\s+table/i", $query)){
            return "###Syntax Error: Check create table syntax";
        }
        else{
            if(mysqli_query($conn,$query)){
            	return "new table created";
            }
            else{
                $error = "# ".mysqli_errno($conn)." - ".mysqli_error($conn);
            	return $error;
            }
        }
        
    }

    public function table_delete($query,$conn){
            if(mysqli_query($conn,$query)){
                return "Dropped table Successfully";
            }
            else{
                $error = "# ".mysqli_errno($conn)." - ".mysqli_error($conn);
                return $error;
            }
    }

    public function table_update($query,$conn){
        if(!preg_match("/^\s*alter\s+table/i", $query)){
            return "###Syntax Error: Check update table syntax";
        }
        else{
            if(mysqli_query($conn,$query)){
                return "Updated table Successfully";
            }
            else{
                $error = "# ".mysqli_errno($conn)." - ".mysqli_error($conn);
                return $error;
            }
        }
    }

    public function table_insert_row($query,$conn){
        if(!preg_match("/^\s*insert\s+into/i", $query)){
            return "###Syntax Error: Check insert row syntax";
        }
        else{
            if(mysqli_query($conn,$query)){
                return "Row Inserted successfully";
            }
            else{
                $error = "# ".mysqli_errno($conn)." - ".mysqli_error($conn);
                return $error;
            }
        }
    }

    public function table_delete_row($query,$conn){
        if(!preg_match("/^\s*delete\s+from/i", $query)){
            return "###Syntax Error: Check delete row syntax";
        }
        else{
            if(mysqli_query($conn,$query)){
                return "Row deleted successfully";
            }
            else{
                $error = "# ".mysqli_errno($conn)." - ".mysqli_error($conn);
                return $error;
            }
        }
    }

    public function table_update_row($query,$conn){
        if(!preg_match("/^\s*update/i", $query)){
            return "###Syntax Error: Check update row syntax";
        }
        else{
            if(mysqli_query($conn,$query)){
                return "Row updated successfully";
            }
            else{
                $error = "# ".mysqli_errno($conn)." - ".mysqli_error($conn);
                return $error;
            }
        }
    }


     public function table_show_data($query,$conn){
            $result = mysqli_query($conn,$query);
            if(! $result )
            {
                $error = "# ".mysqli_errno($conn)." - ".mysqli_error($conn);
                return $error;
            }
            else{ 
                $resultArr = $result->fetch_all(MYSQLI_NUM);
                return $resultArr;
            }
    }

}

?>