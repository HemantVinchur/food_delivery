function do_login(ele){
  var form=form_inputs('profile_form');
  ajax_req(
    'POST',
    'methods/login/profile.php',
    form,
    function(e) {
      console.log(e.responseText);

      change_button_state(ele, 'done', true);
    },
    ele
  );
}
