<?php    
    
while($row = mysql_fetch_object($result)){    
    
    
?>  
    <tr>  
        <td>  
            <?php echo $row->id;?>  
        </td>  
        <td>  
            <?php echo $row->uname;?>  
        </td>  
        <td>  
            <?php echo $row->password;?>  
        </td>  
        <td>  
            <?php echo $row->cnf;?>  
        </td>  
        <td>  
            <?php echo $row->mail;?>  
        <td>  
            <?php echo $row->dob;?>  
        </td>  
        <td> <a href="listing.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Delete    
        </a> | <a href="index.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Edit    
        </a> </td>  
        <tr>  
