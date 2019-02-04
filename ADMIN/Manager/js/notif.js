
  $(document).ready(function(){
   
   function load_unseen_notification(view = '')
   {
    $.ajax({
     url:"process/fetch.php",
     method:"POST",
     data:{view:view},
     dataType:"json",
     success:function(data)
     {
      $('#dropdownnotif').html(data.notification);
      if(data.unseen_notification > 0)
      {
       $('.label label-pill label-danger count').html(data.unseen_notification);
      }
     }
    });
   }
   
   load_unseen_notification();
   
   $('#appointment_form').on('submit', function(event){
    event.preventDefault();
    if($('#vehicle').val() != '' && $('#additionalMessage').val() != '' && $('#service').val() != '' && $('#datepicker').val() != '')
    {
     var form_data = $(this).serialize();
     $.ajax({
      url:"process/insert.php",
      method:"POST",
      data:form_data,
      success:function(data)
      {
       $('#appointment_form')[0].reset();
       load_unseen_notification();
      }
     });
    }
    else
    {
     alert("All Fields are Required");
    }
   });
   
   $(document).on('click', '.nav-link count-indicator dropdown-toggle', function(){
    $('.label label-pill label-danger count').html('');
    load_unseen_notification('yes');
   });
   
   setInterval(function(){ 
    load_unseen_notification();; 
   }, 5000);
   
  });