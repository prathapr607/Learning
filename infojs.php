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
        <th >Age</th>
        <th>Country</th>
        <th >Email_id</th>
    </tr>
</thead>
    <tbody id="Data"></tbody>
</table>
<script type="text/javascript">
    var userInfo = [
        {
           name: "ram",
			gender: "male",
			age: 23,
			country: "india",
			email_id: "ram123@gmail.com"
        },
        {
           name: "kumar",
			gender: "male",
			age: 25,
			country: "india",
			email_id: "kumargowda@gmail.com"
        },
        {
           name: "jhony",
			gender: "female",
			age: 23,
			country: "america",
			email_id: "jhony12@gmail.com"
        },
        { 

        	name: "raj",
			gender: "male",
			age: 32,
			country: "japan",
			email_id: "raj12345@gmail.com"

        },
        {
        	name: "geetha",
			gender: "female",
			age: 28,
			country: "india",
			email_id: "geetharai@gmail.com"

        },
    ];
    var gettable = '<tbody>'
    for(i = 0; i< userInfo.length; i++){
        gettable+= '<tr>';
        gettable+= '<td>' + userInfo[i].name + '</td>';
         gettable+= '<td>' + userInfo[i].gender + '</td>';
         gettable+= '<td>' + userInfo[i].age + '</td>';
         gettable+= '<td>' + userInfo[i].country + '</td>';
         gettable+= '<td>' + userInfo[i].email_id+ '</td>';
        gettable+= '</tr>';
    }
    gettable+='</tbody>';
    document.getElementById('Data').innerHTML = gettable;
    </script>
