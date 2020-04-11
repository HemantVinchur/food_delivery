function do_login(item_id, menu_id, ele){
  var form=form_inputs('edit_user_form');

  ajax_req(
    'POST',
    'methods/users/edit_item.php?'+'item_id='+item_id+'&menu_id='+menu_id,
    form,
    function(e) {
      console.log(e.responseText);

      change_button_state(ele, 'done', true);
    },
    ele
  );
}
