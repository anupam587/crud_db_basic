<html>
<head>
	<title>home</title>
  <style type="text/css">
    #querytextarea{
      margin-left: auto;
      margin-right: auto;
      width: 450;
      height: 60;
    }
    #tables_data{
      width: 180;
    }
    #result{
      text-align: center;
    }
    body{
      text-align: center;
    }
    table{
      margin-left: auto;
      margin-right: auto;
    }
  </style>
  <script src="js/jquery-2.1.4.js"></script>
  <script src="http://code.jquery.com/jquery-2.0.0.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.1.1.js"></script>
</head>
<body>
  <b>DATABASE ::  dream_store</b> <br/><br/>
  <b>Select A Table:: </b> 
  <select id="tables_data">
    <option id='no_table_sel'>Not-selected</option>
  </select>
  <button id="show_table_but" href="#"​​​​​>Show table</button>
  <button id="drop_table_but" href="#"​​​​​>Drop table</button>
	<h4>Basic CRUD operation implementation</h4>
	<button id="create_table_but" href="#"​​​​​>Create table</button>
	<button id="update_table_but" href="#"​​​​​>Update table</button>	
	<button id="insert_row_but" href="#"​​​​​>Insert row</button>
	<button id="delete_row_but" href="#"​​​​​>Delete row</button>
	<button id="update_row_but" href="#"​​​​​>Update row</button>
  <br/><br/>	
	<div id="result"></div> 
<script type="text/javascript">
$( document ).ready(function() {
    $.post( "db_basic/show_tables", {} ,function(response){
            $( "#tables_data" ).html(response);
    });
});

$(function(){
    $('#show_table_but').click(function(){
       var mytable = $('#tables_data').find(":selected").text();
       $.post( "db_basic/show_data_table", { query: mytable } ,function(response){
            $( "#result" ).html(response);
       });
    })
    $('#drop_table_but').click(function(){
       var mytable = $('#tables_data').find(":selected").text();     
       if(window.confirm("Do you really want to Drop the table?")) { 
            $.post( "db_basic/delete_table", { query: mytable } ,function(response){
              $( "#result" ).html(response);
              $.post( "db_basic/show_tables", {} ,function(response1){
                  $( "#tables_data" ).html(response1);
              });
            });  
       }
    })
    $('#create_table_but').click(function(){
       $( "#result" ).load( "<?php echo 'db_basic/create_table_view'?>" );
       var mytable = $('#tables_data').find(":selected").text();
    })
    $("#result").on('click', '#but_create_table', function () {
       var myquery = $("textarea#querytextarea").val(); 
       $.post( "db_basic/create_table", { query: myquery } ,function(response){
            $( "#query_exec_res" ).html(response);
            $.post( "db_basic/show_tables", {} ,function(response1){
              $( "#tables_data" ).html(response1);
            });
       });
    })
    $('#update_row_but').click(function(){
       $( "#result" ).load( "<?php echo 'db_basic/update_row_view'?>" );
    })
    $('#delete_row_but').click(function(){
       $( "#result" ).load( "<?php echo 'db_basic/delete_row_view'?>" );
    })
    $('#insert_row_but').click(function(){
       $( "#result" ).load( "<?php echo 'db_basic/insert_row_view'?>" );
    })
    $("#result").on('click', '#but_insert_row', function () {
       var myquery = $("textarea#querytextarea").val(); 
       $.post( "db_basic/insert_row_table", { query: myquery } ,function(response){
            $( "#query_exec_res" ).html(response);
       });
    })
    $("#result").on('click', '#but_delete_row', function () {
       var myquery = $("textarea#querytextarea").val(); 
       $.post( "db_basic/delete_row_table", { query: myquery } ,function(response){
            $( "#query_exec_res" ).html(response);
       });
    })
    $("#result").on('click', '#but_update_row', function () {
       var myquery = $("textarea#querytextarea").val(); 
       $.post( "db_basic/update_row_table", { query: myquery } ,function(response){
            $( "#query_exec_res" ).html(response);
       });
    })
    $('#update_table_but').click(function(){
       $( "#result" ).load( "<?php echo 'db_basic/update_table_view'?>" );
    })
    $("#result").on('click', '#but_update_table', function () {
       var myquery = $("textarea#querytextarea").val(); 
       $.post( "db_basic/update_table", { query: myquery } ,function(response){
            $( "#query_exec_res" ).html(response);
       });
    })

})

</script>
</body>
</html>