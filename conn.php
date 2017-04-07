<?php

  $conn = mysqli_connect('localhost', 'root', '', 'tutorials');
  // i means improved!
  if (! $conn) die('could not connect to Database');

  $sql = 'select * from tutorials_tbl order by tutorial_id asc';
  $results = $conn->query($sql);
  if ($results) {
  ?>
  	<table>
  		<tr>
  			<th>tutorial_id</th>
  			<th>tutorial_author</th>
  			<th>tutorial_title</th>
        <!-- <th>tutorial_count</th> -->
        <th>submission_date</th>
  		</tr>
  		
  		<?php 
  			foreach ($results as $result){
  				echo '<tr>';
  				echo '<td>'. $result['tutorial_id'].'</td>';
  				echo '<td>'. $result['tutorial_author'].'</td>';
  				echo '<td>'. $result['tutorial_title'].'</td>';
          // echo '<td>'. $result['tutorial_count'].'</td>';
          echo '<td>'. $result['submission_date'].'</td>';
  			 	echo "</tr>";
  			 }
  			 echo '</table>';
  } else{ 
   echo "no results found";
	}
?> 
  		
  		
