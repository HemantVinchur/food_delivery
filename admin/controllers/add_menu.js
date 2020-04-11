function add_menu(restaurant_id, ele){
  var form=form_inputs('login_form');
  ajax_req(
    'POST',
    'methods/users/add_menu.php?restaurant_id='+restaurant_id,
    form,
    function(e) {
      console.log(e.responseText);

      change_button_state(ele, 'done', true);
    },
    ele
  );
}
