<?php
 include"includes/header.php";
 
?>
<p><strong>Welcome, Please Register</strong></p>
        <p>All Fields Required</p>     

        <form method="POST" action="connect.php">
            
            <p>
                <label>First Name</label><br>
                <input type="text" name"first_name" placeholder="First Name" />
            </p>
            
            <p>
                <label>Last Name</label><br>
                <input type="text" name"last_name" placeholder="Last Name" />
            </p>
            
            <p>
                <label>Email</label><br>
                <input type="text" name="email" placeholder="Email" />
            </p>
            
            <p>
                <label>Password</label><br>
                <input type="password" name="password" placeholder="Password" />
            </p>
            
            <p>
                <label>Gender</label><br>
                <select name="gender">
                    <option>Female</option>
                    <option>Male</option>
                </select>
            </p>
            
            <p>
                <label>Designation</label><br>
                <select name="designation">
                    <option>Medical Team</option>
                    <option>Patients</option>
                </select>
            </p>
            
            <p>
                <label>Department</label><br>
                <input type="text" name="department" placeholder="Department" />
            </p>
            
            <p>
                <button type="submit">Submit</button>
            </p>
        
            
            
        </form>
        
<?php
 include"includes/footer.php";


?>        
     