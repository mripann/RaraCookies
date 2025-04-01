<?php
$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$password = htmlentities($_POST['password']) ? htmlentities($_POST['password']) : "";
if (!empty($_POST['submit_validate'])) {
    if ($username == "abc@abc.com" && $password == "password") {
       header('location:../ghome');
    }else{ ?>
        <script>
            alert("username yang anda masukkan salah")
            window.location='../signin'
        </script>

<?php
    }
}
?>