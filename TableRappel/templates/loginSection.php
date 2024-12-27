<form method="post" action="src/loginUser.php" class="needs-validation" novalidate>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="username-login" id="username-login" placeholder="Username" required>
        <label for="username-login">Username</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" name="password-login" id="password-login" placeholder="Password" required>
        <label for="password-login">Password</label>
    </div>

    <button type="submit" class="btn btn-primary">Log in</button>
</form>