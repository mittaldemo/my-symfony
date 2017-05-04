$(document).ready(function()
{
    
    
   $("#composeForm").validate({
    
       
        rules: 
        {
            
            subject: "required",
             
            content: "required",
            from: {
                required: true,
                email: true
            },
            to: {
                required: true,
                email: true
            },
            
        },
        
        // Specify the validation error messages
        messages: 
        {
            
            subject: "Please enter subject",
            
            content: "Please enter content",
            
            from: "Please enter  from",
            to: "Please enter to"
        },
        
        submitHandler: function(form)
         {
            form.submit();
        }
    }); 
    
    
    
});