function do_login(ele){
  var form=form_inputs('login_form');
  ajax_req(
    'POST',
    'methods/users/add_restaurant.php',
    form,
    function(e) {
      console.log(e.responseText);

      change_button_state(ele, 'done', true);
    },
    ele
  );
}
