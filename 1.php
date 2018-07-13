<?php
	$link=mysqli_connect('localhost:3306','root','','wm');
	if(mysqli_connect_error()){
		die("There was an error");
	}
	$query="SELECT * FROM list ORDER BY `ID`";
	$i=0;
	if($result = mysqli_query($link,$query)){
		while($row[]=mysqli_fetch_array($result)){
		$i=$i+1;
		}
	}
	$flag=0;
	if(array_key_exists('ID',$_POST) AND array_key_exists('code', $_POST)){
		$id=$_POST['ID'];
		$code=$_POST['code'];
		for($x=0;$x<sizeof($row)-1;$x++)
		{
			if($row[$x][1]==$id)
			{
				echo "exists";
				goto end;
			}
		}
		
		$query="INSERT INTO `list`(`roll`,`answer`,`ID`)VALUES('$id','yes','$code')";
		mysqli_query($link,$query);
	}
	$localtime = localtime();
$localtime_assoc = localtime(time(), true);
for($a=0;$a<sizeof($row)-1;$a++){
  $t=$row[$a][1];
if($localtime[2]>=($row[$a][3])/2){
		$query="DELETE FROM `list` WHERE roll='$t'";
		mysqli_query($link,$query);
}
  $t=null;
}
	end:
?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="wm.css">
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-fluid">
      <h1>Prebook your time</h1>
      <h4 id="date"></h4>
      <h5 class="abc"></h5>
    </div>
    
    <div class="container-fluid collapse" id="code" >
    	<table class="table">
    		<thead>
    			<tr>
    				<th scope="col-xs-3">time</th>
    				<th scope="col-cs-3">Code</th>
    				<th scope="col-xs-3">time</th>
    				<th scope="col-xs-3">Code</th>
    			</tr>
    		</thead>
    		<tbody>
    			<tr>
      				<td>00:00-00:30</td>
     				<td>1</td>
      				<td>00:30-01:00</td>
      				<td>2</td>
   				 </tr>
   				 <tr>
      				<td>01:00-01:30</td>
     				<td>3</td>
      				<td>01:30-02:00</td>
      				<td>4</td>
   				 </tr>
   				 <tr>
      				<td>02:00-02:30</td>
     				<td>5</td>
      				<td>02:30-03:00</td>
      				<td>6</td>
   				 </tr>
   				 <tr>
      				<td>03:00-03:30</td>
     				<td>7</td>
      				<td>03:30-04:00</td>
      				<td>8</td>
   				 </tr>
   				 <tr>
      				<td>04:00-04:30</td>
     				<td>9</td>
      				<td>04:30-05:00</td>
      				<td>10</td>
   				 </tr>
   				 <tr>
      				<td>05:00-00:30</td>
     				<td>11</td>
      				<td>05:30-06:00</td>
      				<td>12</td>
   				 </tr>
   				 <tr>
      				<td>06:00-06:30</td>
     				<td>13</td>
      				<td>06:30-07:00</td>
      				<td>14</td>
   				 </tr>
   				 <tr>
      				<td>07:00-07:30</td>
     				<td>15</td>
      				<td>07:30-08:00</td>
      				<td>16</td>
   				 </tr>
   				 <tr>
      				<td>08:00-08:30</td>
     				<td>17</td>
      				<td>08:30-09:00</td>
      				<td>18</td>
   				 </tr>
   				 <tr>
      				<td>09:00-09:30</td>
     				<td>19</td>
      				<td>09:30-10:00</td>
      				<td>20</td>
   				 </tr>
   				 <tr>
      				<td>10:00-10:30</td>
     				<td>21</td>
      				<td>10:30-11:00</td>
      				<td>22</td>
   				 </tr>
   				 <tr>
      				<td>11:00-11:30</td>
     				<td>23</td>
      				<td>11:30-12:00</td>
      				<td>24</td>
   				 </tr>
   				 <tr>
      				<td>12:00-12:30</td>
     				<td>25</td>
      				<td>12:30-13:00</td>
      				<td>26</td>
   				 </tr>
   				 <tr>
      				<td>13:00-13:30</td>
     				<td>27</td>
      				<td>13:30-14:00</td>
      				<td>28</td>
   				 </tr>
   				 <tr>
      				<td>14:00-14:30</td>
     				<td>29</td>
      				<td>14:30-15:00</td>
      				<td>30</td>
   				 </tr>
   				 <tr>
      				<td>15:00-15:30</td>
     				<td>31</td>
      				<td>15:30-16:00</td>
      				<td>32</td>
   				 </tr>
   				 <tr>
      				<td>16:00-16:30</td>
     				<td>33</td>
      				<td>16:30-17:00</td>
      				<td>34</td>
   				 </tr>
   				 <tr>
      				<td>17:00-17:30</td>
     				<td>35</td>
      				<td>17:30-18:00</td>
      				<td>36</td>
   				 </tr>
   				 <tr>
      				<td>18:00-18:30</td>
     				<td>37</td>
      				<td>18:30-19:00</td>
      				<td>38</td>
   				 </tr>
   				 <tr>
      				<td>19:00-19:30</td>
     				<td>39</td>
      				<td>19:30-20:00</td>
      				<td>40</td>
   				 </tr>
   				 <tr>
      				<td>20:00-20:30</td>
     				<td>41</td>
      				<td>20:30-21:00</td>
      				<td>42</td>
   				 </tr>
   				 <tr>
      				<td>21:00-21:30</td>
     				<td>43</td>
      				<td>21:30-22:00</td>
      				<td>44</td>
   				 </tr>
   				 <tr>
      				<td>22:00-22:30</td>
     				<td>45</td>
      				<td>22:30-23:00</td>
      				<td>46</td>
   				 </tr>
   				 <tr>
      				<td>23:00-23:30</td>
     				<td>47</td>
      				<td>23:30-00:00</td>
      				<td>48</td>
   				 </tr>

    		</tbody>
    		
    	</table>
    </div>
    <div id="cde"></div>
    <div class="container-fluid">
    	<table class="table">
    		<thead>
    			<tr>
    				<th scope="col-xs-4">Sl. No.</th>
    				<th scope="col-xs-4">ID</th>
    				<th scope="col-xs-4">Time</th>
    			</tr>
    		</thead>
    		<tbody>
    			<tr>
    				<td id="sl"></td>
    				<td id="Id"></td>
    				<td id="time"></td>
    			</tr>
    		</tbody>
    </div>
   
      <div class="form">
      <form method="post">
      	<input type="text" name="code" placeholder="Time code">
      	<input type="text" name="ID" placeholder="College Id">
      	<input type="submit">
		</form>    
		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#code">Time Code</button>

   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="test.js" type="text/javascript"></script>
     <script type='text/javascript'>
        var myVariable = <?php echo(json_encode($row)); ?>;
         var y=0;
         $(document).ready(function(){
         		for(y=0;y<myVariable.length-1;y++)
         		{
         			if(myVariable[y][3]%2==0){
         				var h=myVariable[y][3]/2;
         				var m="00"
         				var n="30"
         				var o=h-1;
         			}
         			else{
         				var h=Math.floor(myVariable[y][3]/2);
         				var m="30"
         				var n="00"
         				var o=h;
         			}
         			var pTag= document.getElementById('Id');
         			pTag.innerHTML +=myVariable[y][1]+ "</br> " ;
         			document.getElementById('sl').innerHTML+=y+1+"</br>";
         			document.getElementById('time').innerHTML+=o+":"+n+"-"+h+":"+m+"</br>";
         		}
         });
        
</script>
  </body>
</html>