var count=0;

function list_of_menus_template(e){
	count++;

	return `<tr>
	            <td>${count}</td>
	            <td>${e.menu_name}</td>
              <td>
              <a href="list_of_items.php?menu_id=${e.menu_id}&user_id=${e.user_id}">List of items</a>
              </td>
	          </tr>`;
}
function list_of_menus(restaurant_id){ 
  var login_token = localStorage.getItem('login_token');
	ajax_req(
			'POST',
			'methods/user/list_of_menus.php',
			'login_token='+login_token+'&restaurant_id='+restaurant_id,
			function(e){

            var result=JSON.parse(e.responseText);

            var template_to_insert=result.list_of_menus.map(list_of_menus_template).join('');

            list_of_menus.innerHTML=template_to_insert;
        }
    );
}
// list_of_menus();
