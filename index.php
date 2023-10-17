<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>User Registration</h2>
    <form method="post" action="register.php" id="registrationForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Register">
    </form>

    <script>
        
        const registrationForm = document.getElementById('registrationForm');

        registrationForm.addEventListener('submit', function(event) {
            event.preventDefault(); 

            
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const address = document.getElementById('address').value;
            const password = document.getElementById('password').value;

            
            const formData = {
                name,
                email,
                phone,
                address,
                password,
            };

           
            const formDataJSON = JSON.stringify(formData);

           
            localStorage.setItem('formData', formDataJSON);

            
            alert('Data saved to local storage.');

            
            registrationForm.reset();
        });
    </script>
</body>
</html>
