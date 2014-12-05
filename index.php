<!DOCTYPE html>
<html>
<head>
	<title>FooTable</title>
   <link href="css/footable.core.css" rel="stylesheet" type="text/css" />
   <link href="css/footable.metro.css" rel="stylesheet" type="text/css" />
 <style type="text/css">

breakpoints: {
  phone: 480,
  tablet: 1024
}
 </style>


	<script type="text/javascript">
		$(function () {
		 
		    $('.footable').footable();
		 
		});
</script>
</head>
<body>
<table class="footable" data-filter="#filter" data-page-size="5">
  <thead>
    <tr>
      <th data-toggle="true">
        Nombre
      </th>
      <th data-sort-ignore="true">
        Apellido
      </th>
      <th data-hide="phone,tablet">
        Correo
      </th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <td>Aaron David</td>
      <td>555-12345</td>
      <td>Aaron@home.com</td>
    </tr>
    <tr>
      <td>Gothen Antonio</td>
      <td>544-776655</td>
      <td>Gothen@mysite.com</td>
    </tr>
    <tr>
      <td>Felix Alexander</td>
      <td>555-99911</td>
      <td>Felix@crazy.com</td>
    </tr>
  </tbody>
  </table>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
  <script src="js/footable.js" type="text/javascript"></script>
</body>
</html>