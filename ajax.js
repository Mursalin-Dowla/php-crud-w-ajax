jQuery(document).ready(()=>{
jQuery(".submit").click(()=>{
    var student_name = jQuery('.name').val();
    var student_email = jQuery('.email').val();
    var student_phone = jQuery('.phone').val();
    var student_status = jQuery('.status').val();
  jQuery.ajax({
    url:"process.php",
    type:"POST",
    data:{
        name:student_name,
        email:student_email,
        phone:student_phone,
        status:student_status,
        action:"insert"
    },
    success:function(res){
        jQuery('.msg').html('<div class="alert alert-info">'+res+'</div>');
        jQuery('.msg').fadeOut(2000);
        jQuery('.name').val('');
        jQuery('.email').val('');
        jQuery('.phone').val('');
        jQuery('.status').val('');
        show();
    }
  })
})

jQuery(document).on("click","#delete",function(){
  var id = jQuery(this).val();
  jQuery('#deleteModal').modal('show');
  jQuery('.btn-delete').val(id);
});
jQuery(document).on("click",".btn-delete",function(){
  var id= jQuery(this).val();
    jQuery.ajax({
    url:"process.php",
    type:"POST",
    data:{
      id:id,
      action:'delete'
    },
    success:function(res){
      jQuery('#deleteModal').modal('hide');
      show();

    }
   })
});

jQuery(document).on("click",".active",function(){
  var id= jQuery(this).val();
    jQuery.ajax({
    url:"process.php",
    type:"POST",
    data:{
      id:id,
      action:'active'
    },
    success:function(res){
      show();

    }
   })
});
jQuery(document).on("click",".inactive",function(){
  var id= jQuery(this).val();
    jQuery.ajax({
    url:"process.php",
    type:"POST",
    data:{
      id:id,
      action:'inactive'
    },
    success:function(res){
      show();

    }
   })
});
jQuery(document).on("click","#edit",function(){
  var id= jQuery(this).val();
  jQuery('#updateModal').modal('show');
  jQuery('.btn-update').val(id);
});
jQuery(document).on("click",".btn-update",function(){
    var id= jQuery(this).val();
    var student_name = jQuery('.updatedname').val();
    var student_email = jQuery('.updatedemail').val();
    var student_phone = jQuery('.updatedphone').val();
    var student_status = jQuery('.updatedstatus').val();
    jQuery.ajax({
    url:"process.php",
    type:"POST",
    data:{
      name:student_name,
      email:student_email,
      phone:student_phone,
      status:student_status,
      id:id,
      action:'update'
    },
    success:function(res){
      jQuery('#updateModal').modal('hide');
      jQuery('.updatedname').val('');
        jQuery('.updatedemail').val('');
        jQuery('.updatedphone').val('');
        jQuery('.updatedstatus').val('');
      show();

    }
   })
});

show();
function show(){
    jQuery.ajax({
        url:"process.php",
        type:"POST",
        data:{
            action:"show"
        },
        success:function(res){
            jQuery('.tData').html(res);
        }
      })
}
})