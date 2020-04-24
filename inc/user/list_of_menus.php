<div class='container'>
		<div class='jumbotron'>
<div class="heading">
  <div class="card layer1">
      <h3>List of menus</h3>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="list_of_menus">
  </tbody>
</table>
<body onload="list_of_menus(<?php $_GET['restaurant_id'] ?>)"></body>
</div>
</div>
