function add_item(menu_id,restaurant_id, ele){
  var form=form_inputs('login_form');
  ajax_req(
    'POST',
    'methods/users/add_item.php?'+'menu_id='+menu_id+'restaurant_id='+restaurant_id,
    form,
    function(e) {
      console.log(e.responseText);

      change_button_state(ele, 'done', true);
    },
    ele
  );
}
