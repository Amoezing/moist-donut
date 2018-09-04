<html>
   <head>
<style>
table {
    border-collapse: collapse;
    table-layout: fixed;
}
th:first-child {
  border-top-left-radius:3px;
}
tr:hover td {
  background: #4e5066;
  color: #aaaaaa;
  border-top: 1px solid #44462e;
}
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
table, td, th {
    border: 1px solid black;
    width:250px;
}

th {text-align: left;}

td,th {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}
</style>
</head>
    <body>
    Pay: <input type="text" id="fpay"><br>
        <button id="btn1">Get data</button>
        <script
			  src="https://code.jquery.com/jquery-2.2.4.js"
			  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
			  crossorigin="anonymous"></script>
        <script>
            $("#btn1").click(function(event)
        {
            
        };
        });
        </script>
        <br>
        
        <?php       
            echo "Nayatel db demo";
            echo "<br>";
            /* $this->db->query('CREATE TABLE ntdb3 (
                id int AUTO_INCREMENT,
                firstname char(10),
                PRIMARY KEY(id))');*/

        //$nn=json_encode($names);
        // $this->db->query('INSERT INTO ntdb3(firstname) VALUES("Moeez")');
         //$this->db->query('INSERT INTO ntdb3(firstname) VALUES("Ali")');
         //$this->db->query('INSERT INTO ntdb3(firstname) VALUES("Furqan")');
        //$this->db->insert('ntdb3',$names);
        //$this->db->query('CALL new_procedure()');
        $data=$this->db->query('SELECT* FROM TAX')->result_array();     
        //  echo $data;
        //  echo "name";
        //  echo '<br>';
        //  echo '<br>';
        // foreach($data as $result) {
        //         echo $result['firstname'], '<br>';
        //     }
        //echo '<pre>';
        //print_r ($data);
        //echo '</pre>';
        /*$this->db->query('UPDATE ntdb2
        SET id="2"
        WHERE firstname="Ali"');*/
        //$this->db->query('DELETE FROM ntdb2');
        //$data=$this->db->query('SELECT * FROM ntdb2')->result_array();
        echo "<table>
        <th>TAX_ID</th>
        <th>LOWER_RANGE</th>
        <th>UPPER_RANGE</th>
        <th>FIXED</th>
        <th>PERCENTAGE</th>";
         foreach($data as $result) {
             echo "<table id='tb1'><tr>
             <td>".$result['TAX_ID'], '<br>'.

        "</td><td>".$result['LOWER_RANGE'], '<br>'.

        "</td><td>".$result['UPPER_RANGE'],'<br>'.
        "</td><td>".$result['FIXED_AMOUNT'],'<br>'.
        "</td><td>".$result['PERCENTAGE'],'<br>'.
        "</td></tr>
        </table>";
            }
        ?>        
    </body>
</html>