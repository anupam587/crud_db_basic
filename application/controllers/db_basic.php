<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class db_basic extends CI_Controller{

        public $link;
        public $tables;

   	  function __construct() {
   	  	parent::__construct();
   	  	$this->link = mysqli_connect('127.0.0.1','root','anupam');

		    if (!$this->link) {
    		  die('Could not connect: ' . mysql_error());
		    }
		
		    //echo 'Connected successfully<br/>';

		    if(mysqli_select_db($this->link,"dream_store")){
               //echo "<b>Database</b> :: dream_store</br></br>";
		    }   
		    else{
			      die('Could not find dream_store database'. mysql_error());
		    }

        $query1 = "SHOW TABLES";
        $result = mysqli_query($this->link,$query1);
        $this->tables = $result->fetch_all(MYSQLI_NUM);

   	  }


   	  public function index(){
   	  	  $this->load->model("Db_basic_model");
   	  	  $query = "create table if not exists anupam(a integer,b integer)";
   	  	  $profile = $this->Db_basic_model->table_create($query,$this->link);
   	  	  //echo $profile;
   	  	  $this->load->view('db_basic');      
   	  }

        public function show_tables(){
           $this->load->model("Db_basic_model");          
           $query1 = "SHOW TABLES";
           $result = mysqli_query($this->link,$query1);
           $this->tables = $result->fetch_all(MYSQLI_NUM);
           $data['tables'] = $this->tables;
           $this->load->view('show_tables',$data);
         }

        public function delete_table(){
           $this->load->model("Db_basic_model");
           $query = "drop table ".$_POST['query'];
           $profile = $this->Db_basic_model->table_delete($query,$this->link);
           echo $profile;
        }

        public function create_table(){
           $this->load->model("Db_basic_model");
           $query = $_POST['query'];
           $profile = $this->Db_basic_model->table_create($query,$this->link);
           echo $profile;
         }

        public function update_table(){
           $this->load->model("Db_basic_model");
           $query = $_POST['query'];
           $profile = $this->Db_basic_model->table_update($query,$this->link);
           echo $profile;
         }

         public function create_table_view(){
           $this->load->model("Db_basic_model");
           $this->load->view('create_table_view');
         }

         public function update_table_view(){
           $this->load->model("Db_basic_model");
           $this->load->view('update_table_view');
         }

         public function insert_row_view(){
           $this->load->model("Db_basic_model");
           $this->load->view('insert_query_view');
         }

         public function delete_row_view(){
           $this->load->model("Db_basic_model");
           $this->load->view('delete_query_view');
         }

         public function update_row_view(){
           $this->load->model("Db_basic_model");
           $this->load->view('update_query_view');
         }

         public function insert_row_table(){
           $this->load->model("Db_basic_model");
           $query = $_POST['query'];
           $profile = $this->Db_basic_model->table_insert_row($query,$this->link);
           echo $profile;
         }

         public function delete_row_table(){
           $this->load->model("Db_basic_model");
           $query = $_POST['query'];
           $profile = $this->Db_basic_model->table_delete_row($query,$this->link);
           echo $profile;
         }


         public function update_row_table(){
           $this->load->model("Db_basic_model");
           $query = $_POST['query'];
           $profile = $this->Db_basic_model->table_update_row($query,$this->link);
           echo $profile;
         } 

          public function show_data_table(){
           $this->load->model("Db_basic_model");
           $query = "select * from ".$_POST['query'];
           $result1 = $this->Db_basic_model->table_show_data($query,$this->link);
           $data['result'] = $result1;
           //print_r($data);
           //$data['result'] = $result;
           $this->load->view('show_data_table',$data);
         } 

          
   }

?>


