function do_login(category_id, ele){
  var form=form_inputs('login_form');
  ajax_req(
    'POST',
    'methods/users/add_restaurant.php?category_id='+category_id,
    form,
    function(e) {
      console.log(e.responseText);

      change_button_state(ele, 'done', true);
    },
    ele
  );
}
