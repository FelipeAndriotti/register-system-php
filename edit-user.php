<h1> Edit User </h1>
<?php
$sql = "SELECT * FROM users WHERE id=" . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action="?page=save" method="POST">
    <input type="hidden" name="action" value="edit">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>ID</label>
        <input type="text" name="id" value="<?php print $row->id; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="<?php print $row->name; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label> E-mail </label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label> Password </label>
        <input type="password" name="password" value="<?php print $row->password; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label> Birthdate </label>
        <input type="date" name="birth" value="<?php print $row->birth; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>