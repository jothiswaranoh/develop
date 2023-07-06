<?php



// echo "hello world <br/>";
// echo "helllo"."world";
// $user="user";
// $name="name";
// echo $user.$name;
// echo "<br/>";;
// $c=100;
// $n=2;
// for($i=1;$i<=$c;$i++)
// {
//     echo $n;
//     echo "*";
//     echo $i;
//     echo "=";
//     echo $i."*".$n."=".$n*$i";
//     echo "<br/>";
/// 

// }
$c=100  ;
$n=2;

?>
<html>
    <head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>A Fancy Table</h1>

<table id="customers">
  <tbody>
    <tr>
    <th>Number</th>
    <th>Result</th>
  
  </tr>

  <?php
// echo $n;
$i=1;
while($i<=$c)
{
    // echo $i;
    $i=$i+1;
    // echo $i."*".$n."=".$n*$i;
?>
    <tr>
        <td><?php echo $i."*".$n."=" ?></td>
        <td><?php echo $n*$i ?> </td>
     
    </tr>
<?php
}
?>
 
</tbody></table>



</body></html>
