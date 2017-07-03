<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href=""/>
</head>

<body>
    <body bgcolor="#E6E6FA">
    <div class='fix main'>
	    <div class="fix header">
			<img src="maindb.jpg" align="bottom" height="217" width="100%">
			<font color="royalblue"><h1><u>Our Tutor Table:</u></h1></font><br>
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

                 $con=mysql_connect("localhost","root","");
                 if(!$con)
                    {
                      die('could not connect.'.mysql_error());
                    }
                 mysql_select_db("project",$con);

                 mysql_query("INSERT INTO rafsan VALUES ('$fname','$funiv','$fdept','$fcoll','$femai','$fmobi','$fpass')");
                 //echo"Our Tutor's Table";


                 mysql_select_db("project",$con);

                 $result=mysql_query("SELECT*FROM rafsan");

                 echo"<table border='1'>
                 <tr>
                 <th>name</th>
                 <th>university</th>
                 <th>department</th>
               
                 <th>e-mail</th>
                 <th>mobile</th>
                
                 </tr>";

                 while($row=mysql_fetch_array($result))
                   {
                      echo "<tr>";
                      echo "<td>" .$row['name']. "</td>";
                      echo "<td>" .$row['university']. "</td>";
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
