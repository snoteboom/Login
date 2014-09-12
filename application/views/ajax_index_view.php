<html>
<head>
	<title></title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		// this is just the event listener, no ajax
		$('form').submit(function(){
			alert('the form has been submitted');
			$.post($(this).attr('action'),$(this).serialize(),function(data){
				$('#results').append("<p> Name is: "+ data.name +" the food is: "+ data.food+"</p>");
			},'json')
			// by putting the line below we dont transfer any data to the server
			return false
		})
	})

	</script>
</head>
<body>
	<h1>Time to ajax</h1>
	<form method='post' action='/ajax/process'>
		Your name: <input type='text' name='name'>
		Your food: <input type='text' name='food'>
		<input type='submit'>
	</form>
	<div id='results'>

	</div>
</body>
</html>