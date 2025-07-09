<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title", "GASS App")</title> 
    <!-- ketika pake yield kita akan tanya 
        halaman yang akan extend halaman ini untuk pass titlenya -->

    <link rel="stylesheet" href="style/login-header.css">
    <link rel="stylesheet" href="style/body-login.css">
</head>
<body>
    @yield("content")


    <script src="scripts/login.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>