<!DOCTYPE html>	
<html>
<head>
	<title></title>
</head>
<body>
	<table cellpadding="2" cellspacing="2" border="1" bgcolor="#dfdfdf" width="40%" align="center">
<thead>
    <tr>
        <th>Name</th>
        <th >Age</th>
        <th >Status</th>
    </tr>
</thead>
    <tbody id="tableData"></tbody>
</table>
<script type="text/javascript">
    var mainObj = [
        {
            name: "Kapil",
            age:  21,
            status: "Active"
        },
        {
            name: "John",
            age:  28,
            status: "Inactive"
        },
        {
            name: "Deos",
            age:  18,
            status: "Active"
        },
    ];
    var k = '<tbody>'
    for(i = 0;i < mainObj.length; i++){
        k+= '<tr>';
        k+= '<td>' + mainObj[i].name + '</td>';
        k+= '<td>' + mainObj[i].age + '</td>';
        k+= '<td>' + mainObj[i].status + '</td>';
        k+= '</tr>';
    }
    k+='</tbody>';
    document.getElementById('tableData').innerHTML = k;
    </script>


	<!-- <table border="1" cellpadding="2" cellspacing="2">
	<thead>
	<tr>
	<strong><th>firstname</th><th>lastname</th><th>email_id</th><th>age</th><th>native</th><th>job</th> </strong>
   </tr>
</thead> 
<tbody
 id="tableData"></tbody>
</table> -->

	<!-- <script type="text/javascript">
		// var data = [{ firstname: ['Raj','Jhon','anu','rakul',],lastname: ['Kumar','Jhony','Gowda','Singh'],
		// email_id: ['rajkumar@gmail.com','jhon123@gmail.com','anugowda@gmail.com','rakul123@gmail.co.in'],age:['25','34','45','28'],native: ['karnataka','tamilnadu','bangalore','andhrapradesh',],job:['agriculture','developer','tester','director']

		// }];

 
 // var k = '<tbody>'
 // for(i=0; i<data.length; i++){
 // 	var fname = data[i].firstname;
 // 	for (var y = 0; y < fname.length; y++) {
 // 		k+= '<tr>';
 // 		k+= '<td>' + data[i].firstname[y] + '</td>';
	// 	k+= '<td>' + data[i].lastname[y] + '</td>';
	// 	k+= '<td>' + data[i].email_id[y] + '</td>';
	// 	k+= '<td>' + data[i].age[y] + '</td>';
	// 	k+= '<td>' + data[i].native[y] + '</td>';
	// 	k+= '<td>' + data[i].job[y] + '</td>';
 // 	k+= '</tr>'
 // 	}
 // }
 // k+= '</tbody>';
 //  document.getElementById('tableData').innerHTML = k;

 </script> -->


</body>
</html>