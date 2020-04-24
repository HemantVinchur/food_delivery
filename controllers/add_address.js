function do_login(id, ele){
  var form=form_inputs('login_form');
  ajax_req(
    'POST',
    'methods/login/add_address.php?id='+id,
    form,
    function(e) {
      console.log(e.responseText);

      change_button_state(ele, 'done', true);
    },
    ele
  );
}
