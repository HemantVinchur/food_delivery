function do_login(ele){
  var form=form_inputs('login_form');
  ajax_req(
    'POST',
    'methods/login/login.php',
    form,
    function(e) {
      console.log(e.responseText);

      change_button_state(ele, 'done', true);
    },
    ele
  );
}
