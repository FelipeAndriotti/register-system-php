<h1> New User </h1>
<form action="?page=save" method="POST">
    <input type="hidden" name="action" value="save">
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label> E-mail </label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label> Password </label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <label> Birthdate </label>
        <input type="date" name="birth" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>