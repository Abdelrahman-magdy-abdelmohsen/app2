<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
<label>Username</label>
<input type="text" id="username" name="username">
<label>Password</label>
<input type="text" id="password" name="password">
<button onclick="submitForm()">Submit</button>
<div id="result"></div>

<script>
    function submitForm() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        var result = document.getElementById('result');
        var xhr = new XMLHttpRequest();
        var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                result.innerHTML = "Username: " + response.username + "<br>Password: " + response.password;
            }
        };


        xhr.open('POST', 'http://app2.com/submit', true);
        xhr.setRequestHeader("X-CSRF-Token", csrfToken);
        xhr.send("username=" + username + "&password=" + password);

    }
</script>
</body>
</html>
