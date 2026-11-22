function validateForm(){
            //create a shortcut to our form
            let form = document.frmApp;

            // get the name that the user entered
            let fullName = form.txtName.value.trim();

            //create a boolean variable (true/false) thats tracks if the user correctly entered their name
            let validInput = true;

            // to test if a name was entered
            if (fullName.length == 0){
                document.getElementById("divMsg").textContent = "Please enter your name!";
                validInput = false;
                // or you can use return false; here to skip the rest of the code  from running
            }

            // add more validation for other inputs

            return validInput;
        }

        // Login form validation
        function validateLoginForm(){
            // create a shortcut to our form
            let form = document.frmLogin;

            // get the username and password that the user entered
            let userName = form.txtName.value.trim();
            let password = form.txtPassword.value.trim();

            // create a boolean variable (true/false) that tracks if the user correctly entered their credentials
            let validInput = true;

            // to test if a username was entered that is at least 6 characters
            if (userName.length < 6){
                document.getElementById("divMsg").innerHTML = "Username must be at least 6 characters long!";
                validInput = false;
                document.getElementById("txtUserName").style.backgroundColor = "yellow";
                // or you can use return false; here to skip the rest of the code from running
            }
            

            // to test if a password was entered
            if (password.length < 8){
                document.getElementById("divMsg").innerHTML = "Password must be at least 8 characters long!";
                validInput = false;
                document.getElementById("txtPassword").style.backgroundColor = "yellow";
            }

            return validInput;
        }

            
        