function do_login(id){
  //var form=form_inputs('edit_user_form');

  ajax_req(
    'GET',
    'methods/users/delete_restaurant.php?id='+id
  );
}
