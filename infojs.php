<!DOCTYPE html>
<html>
<head>
	<title>information</title>
</head>
<body>

	<table cellpadding="2" cellspacing="2" border="1" bgcolor="#dfdfdf" width="40%" align="center">
		<thead>
			<tr>
				<th>Name</th>
				<th>Gender</th>
				<th>Age</th>
				<th>Country</th>
				<th>Email_id</th>
			</tr>
		</thead>
		<tbody id="Data"> </tbody>
</table>
	<script type="text/javascript">
		var userinfo = [
		{
			Name: "ram",
			Gender: "male",
			Age: 23,
			Country: "india",
			Email_id: "ram123@gmail.com"
		},
        {
        	Name: "kumar",
			Gender: "male",
			Age: 25,
			Country: "india",
			Email_id: "kumargowda@gmail.com"
        },
        {
        	Name: "jhony",
			Gender: "female",
			Age: 23,
			Country: "america",
			Email_id: "jhony12@gmail.com"
        },
        {
        	Name: "raj",
			Gender: "male",
			Age: 32,
			Country: "japan",
			Email_id: "raj12345@gmail.com"
        },
        {
        	Name: "geetha",
			Gender: "female",
			Age: 28,
			Country: "india",
			Email_id: "geetharai@gmail.com"
        },
        ];
         var m = '<tbody>'
         for (i = 0; i<userinfo.length; i++) {
         	 m+= '<tr>';
         	 m+= '<td>' + userinfo[i].Name + '</td>';
         	 m+= '<td>' + userinfo[i].Gender + '</td>';
         	 m+= '<td>' + userinfo[i].Age + '</td>';
         	 m+= '<td>' + userinfo[i].Country + '</td>';
         	 m+= '<td>' + userinfo[i].Email_id + '</td>';
         	 m+= '</tr>';

         }
          var m+= '</tbody>';
          document.getElementById("Data").innerHTML = m;
	</script>
</body>
</html>