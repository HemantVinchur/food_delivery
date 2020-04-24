function do_login(user_id, item_id, ele){
  // var form=form_inputs('login_form');
  ajax_req(
    'POST',
    'methods/login/confirm_order.php?user_id='+user_id+'&item_id='+item_id,
    function(e) {
      console.log(e.responseText);

      change_button_state(ele, 'done', true);
    },
    ele
  );
}
