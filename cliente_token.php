<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cliente credencial</title>
</head>
<body>
	<div id="wrapper">
		<form method="POST">
			<input type="submit" id="resources" value="obtener recurso" />
		</form>
	</div>
	<script>
		(function(){
		'use strict';

		
		let resources = document.getElementById('resources');

		resources.addEventListener('click',function(e){
			e.preventDefault();

		let token='eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjY0YzM3OTczZGJiZjJkY2YzZjU5MTQ4ZjNhNzZiNDMzNWZkNjhhZmExMmQzOWVlMDU3YWE1ZTViN2MwOWMzMDY0NmU3NGYxMzk4ZTFlODVjIn0.eyJhdWQiOiI3IiwianRpIjoiNjRjMzc5NzNkYmJmMmRjZjNmNTkxNDhmM2E3NmI0MzM1ZmQ2OGFmYTEyZDM5ZWUwNTdhYTVlNWI3YzA5YzMwNjQ2ZTc0ZjEzOThlMWU4NWMiLCJpYXQiOjE1MTYxMjQzMjIsIm5iZiI6MTUxNjEyNDMyMiwiZXhwIjoxNTQ3NjYwMzIyLCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.yp4jvytMJMUvFoT3VT3XVQYw7bcFpwJsJ60WfUcHOoKqvN1HHfyxZGqQTJmHF-Rb24TV3hiMQM8O2EwbvTLeuN4ddccbfWYPn8kAzfmYUNpuZPiYz5swrXI7tDpTKHbbna7IkivlVf02UZk1ko5OeFszZa2TYHgY9taHeFh4JDAqoCnT7FsWaMf4X7UXW_AGbLjWulSyF0on1PPMd1dhhy7urZ1B0ZbfRAT8NegzXj9C-VtbZ0nkRFnNFMnXrU87bZ1rJG25-UgO4Qd1E5ZnJ1dllMnZ4T_7za37C1RJ346t_NIn0f0JM9jbRlQfj8OkGXl2xl2-mnzLqQfjYv_xAkeKj9WlGpdHhx45qb5j9gzk_sAncW42Qr7uIWkTErehfj1jyQ4nfrXRpesulkMgddN_g91ZnE5wNtXKcbJmrx5Y1SRPdZq2v3x3VPih_3LfbuWjHaS_3uSrtdluUmmHhnuadQjfog8PxEBFm4cbbsl1ExYnHT4zo1x_HVWWJCl-VOpb8UfUD_Ym2H7LO9uIIQWY-ZhzQFYb4AAdSxJdx0ChP_Qk22nxUD4Xj_I_E21QVUIxht093Bv00AdU12QeT6BgxYdEA5oXBRLFbgTPGkgZuJWrzpgoNoEIhSr0eksPHHUQ0XwQ3IPZz2fXEgfjuT0hJfdLZ6sM99tbls81lkA';
						fetch('http://localhost:8000/api/posts',{
						method:'GET',
						headers:{'Authorization':'Bearer ' + token,'Content-Type': 'application/json'}
				})
				.then( response  => {
		        return response.json();
		    	})

		.then (data => {
        	console.log(data);

		})



		});

		


		







		})();








	</script>


	
</body>
</html>