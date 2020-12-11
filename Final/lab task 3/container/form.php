<html>    
    <head>
        <link rel="stylesheet" href="style.css">   
        <title>Registration Form</title>    
    </head>    
    <body>    
        <link href = "registration.css" type = "text/css" rel = "stylesheet" />    
        <h2>Sign Up</h2>    
        <form name = "form1" action="modified.php" method = "post" enctype = "multipart/form-data" class="form_group" > 

            <div class = "container">    
                <div class = "form_group">    
                    <label>ID:</label>    
                    <input type = "text" name = "id" value = "" required/>    
                </div>  
                <div class = "form_group">    
                    <label>User Name:</label>    
                    <input type = "text" name = "uname" value = "" required />    
                </div>      
                <div class = "form_group">    
                    <label>Email:</label>    
                    <input type = "text" name = "email" value = "" required />    
                </div>   
                <div class = "form_group">    
                    <label>Password:</label>    
                    <input type = "password" name = "password" value = "" required/>    
                </div> 
                <div class = "form_group">    
                    <label>DOB:</label>    
                    <input type = "text" name = "dob" value = "" required/>    
                </div> 

            </div>   
            <br>
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
            <br>   
        </form>    
    </body>    
</html>    