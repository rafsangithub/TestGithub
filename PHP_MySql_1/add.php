<html>
    <head>
        <link rel="stylesheet" type="text/css" href="versity.css"/>


    </head>

<body>

<div class="fix main">

<body bgcolor="#E6E6FA">
   
        <div class="fix header">
			<img src="image123.jpg" align="bottom" height="217" width="100%">
		
        </div>
		
		<div class="mainmenu">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">About University</a></li>
					<li><a href="">Contact</a></li>
					<li><a href="">Others</a></li>
					<li><a href="">Media</a></li>
				</ul>
		</div>
		
		<div class="fix headline">
		<font color='#4682b4'><h1>Visit Our Home Tutors:</h1></font><br>
		
		</div>
		
		<div align="center">
            <?php

                 $fname=$_POST["name"];
                 $funiv=$_POST["university"];
                 $fdept=$_POST["department"];
                 $fcoll=$_POST["college"];
                 $femai=$_POST["e-mail"];
                 $fmobi=$_POST["mobile"];
                 $fpass=$_POST["password"];
				 
				 
				 //$temp=$_POST["Mawlana Bhashani Science & Technology University"];

                 $con=mysql_connect("localhost","root","");
                 if(!$con)
                    {
                      die('could not connect.'.mysql_error());
                    }
                 //mysql_select_db("project",$con);

                 //mysql_query("INSERT INTO rafsan VALUES ('$fname','$funiv','$fdept','$fcoll','$femai','$fmobi','$fpass')");
                 //echo"Our Tutor's Table";


                 mysql_select_db("project",$con);

                 $result=mysql_query("SELECT * FROM rafsan where='Mawlana Bhashani Science & Technology University'");

                 echo"<table border='1'>
                 <tr>
                 <th>name</th>
                 
                 <th>department</th>
               
                 <th>e-mail</th>
                 <th>mobile</th>
                
                 </tr>";

                 while($row=mysql_fetch_array($result))
                   {
                      echo "<tr>";
                      echo "<td>" .$row['name']. "</td>";
                      //echo "<td>" .$row['university']. "</td>";
                      echo "<td>" .$row['department']. "</td>";
                      //echo "<td>" .$row['college']. "</td>";
                      echo "<td>" .$row['e-mail']. "</td>";
                      echo "<td>" .$row['mobile']. "</td>";
                      //echo "<td>" .$row['password']. "</td>";
                      echo "</tr>";
                   }
                 echo "</table>";

                 mysql_close($con);
            ?>
         </div>
</div>

</body>
</html>