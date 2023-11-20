<?php
switch ($_REQUEST["action"]) {
    case 'save':
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $birth = $_POST["birth"];

        $sql = "INSERT INTO users (name, email, password, birth)
      VALUES('{$name}', '{$email}', '{$password}', '{$birth}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('User sucessfully registered'); </script>";
            print "<script>location.href'?page=list'; </script>";
        } else {
            print "<script>alert('Failed to register new user'); </script>";
            print "<script>location.href'?page=list'; </script>";
        }
        break;

    case 'edit':
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $birth = $_POST["birth"];

        $sql = "UPDATE users SET
        name='{$name}',
        email='{$email}',
        password='{$password}',
        birth='{$birth}'

        WHERE
          id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('User sucessfully edited'); </script>";
            print "<script>location.href'?page=list'; </script>";
        } else {
            print "<script>alert('Failed to edit new user'); </script>";
            print "<script>location.href'?page=list'; </script>";
        }

        break;

    case 'delete':

        $sql = "DELETE FROM users WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('User sucessfully deleted'); </script>";
            print "<script>location.href'?page=list'; </script>";
        } else {
            print "<script>alert('Failed to delete new user'); </script>";
            print "<script>location.href'?page=list'; </script>";
        }

        break;
}
