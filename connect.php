<?php

  $conn = mysqli_connect('localhost', 'root', '', 'etibe_bank');
  // i means improved!
  if (! $conn) die('could not connect to Database');

  $sql = 'select * from account_branch order by branch_id asc' ;
  $results = $conn->query($sql);
  if($results){ 
  ?>
  	<table>
  		<tr>
  			<th>account no</th>
  			<th>user ID</th>
  			<th>branch_ID</th>
  		</tr>
  		
  		<?php 
  			foreach ($results as $result){
  				echo '<tr>';
  				echo '<td>'. $result['account_no'].'</td>';
  				echo '<td>'. $result['user_id'].'</td>';
  				echo '<td>'. $result['branch_id'].'</td>';
  			 	echo "</tr>";
  			 }
  			 echo '</table>';
  			  } else{ 
  			   echo "no results found";
  			}
  		
  		
