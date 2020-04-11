function delete_menu(id){
  //var form=form_inputs('edit_user_form');

  ajax_req(
    'GET',
    'methods/users/delete_menu.php?id='+id
  );
}
