function add_category(ele){
  var form=form_inputs('login_form');
  ajax_req(
    'POST',
    'methods/users/add_category.php',
    form,
    function(e) {
      console.log(e.responseText);

      change_button_state(ele, 'done', true);
    },
    ele
  );
}
