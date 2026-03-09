<!DOCTYPE html>
<html>
<head>

<title>Manajemen Bus</title>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

</head>

<body>

<div class="container">
@yield('content')
</div>

<script>
$(document).ready(function(){
    $('#table').DataTable();
});
</script>

</body>
</html>