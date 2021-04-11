jQuery(document).ready(function() {
   jQuery("#frmLogin").validate({
      rules: {
         email: {
            required: true,
            email: true
         },
         password : {
            required: true
         },
      },
      messages : {
          
          email: {
            required: "Enter Email",
            email: "Invalid Email"
          },
          password: {
            required: "Enter Password"
          },
        }
   });
});

