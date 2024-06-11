<script src ="assets/js/jquery-3.5.1.js"></script>
<?php
echo '<section id = "home">';
echo '<table class = "table table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th>First Name</th>';
echo '<th>Last Name</th>';
echo '<th>Email</th>';
echo '<th>Phone</th>';
echo '<th>Comments</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody id = "results">';
echo '</tbody>';
echo '</table>';
echo '</section>';
?>

<script>
function refresh_data()
	{
	$.ajax({
		type: 'post',
		url:'https://ec2-18-216-179-0.us-east-2.compute.amazonaws.com/hw19/query_contacts.php',
		success: function(data){
			$('#results').html(data);
		}
	});
	}
setInterval(function(){ refresh_data();}, 500);
</script>
