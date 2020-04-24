function do_login(menu_id, restaurant_id, ele){
  var form=form_inputs('edit_user_form');

  ajax_req(
    'POST',
    'methods/users/edit_menu.php?'+'menu_id='+menu_id+'&restaurant_id='+restaurant_id,
    form,
    function(e) {
      console.log(e.responseText);

      change_button_state(ele, 'done', true);
    },
    ele
  );
}
