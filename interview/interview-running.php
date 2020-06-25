<?php
require 'dao/allRunningDataFetching.dao.php';
if($result)
echo '
<div class="mt-5">
<p>Running Interview</p>
        <table class="table table-bordered">
        <thead class="thead-light">
        
  <tr>
    <th colspan="4">General Info</th>
    <th colspan="7">Interview Info</th>
    <th colspan="2">Result</th>
    <th colspan="2">Edit/Delete</th>
  </tr>
  <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Birth Date</th>
                        <th>Interview Date</th>
                        <th>Interview Time</th>
                        <th>Interview Platform</th>
                        <th>Interview Link</th>
                        <th>Inerview ID</th>
                        <th>Inerview Pass</th>
                        <th>Interviw Status</th>
                        <th>Status</th>
                        <th>Team</th>
                        <th>Edit</th>
                        <th>Delete</th>
  </tr>
  </thead>
  <tbody>'; 
         
         while ($row = mysqli_fetch_assoc($result)) {
            $splitTimeStamp = explode(" ", $row['interview_time']);
            $interview_date = $splitTimeStamp[0];
            $interview_time = $splitTimeStamp[1];
         echo '
            <tr>
                        <td><a href="candidateinfo.php?idno='.base64_encode($row['idno']).'">'.$row['idno'].'</a></td>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['birthdate'].'</td>
                        <td>'.$interview_date.'</td>
                        <td>'.$interview_time.'</td>
                        <td>'.$row['interview_platform'].'</td>
                        <td>'.$row['interview_link'].'</td>
                        <td>'.$row['interview_id'].'</td>
                        <td>'.$row['interview_pass'].'</td>
                        <td>'.$row['interview_status'].'</td>
                        <td>'.$row['result_status'].'</td>
                        <td>'.$row['result_team'].'</td>
                        <td><a href="editdata.php?idno='.base64_encode($row['idno']).'" class="text-warning">Edit</a></td>
                        <td><a href="deletedata.php?idno='.base64_encode($row['idno']).'" class="text-danger">Delete</a></td>
            </tr>
         ';
         }
  '</tbody>
</table>
</div>'
?>