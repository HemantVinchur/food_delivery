function do_login(id, ele){
  var form=form_inputs('edit_user_form');

  ajax_req(
    'POST',
    'methods/users/edit_user.php?id='+id,
    form,
    function(e) {
      console.log(e.responseText);

      change_button_state(ele, 'done', true);
    },
    ele
  );
}
