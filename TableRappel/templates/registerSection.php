<form method="post" action="src/registerUser.php" class="needs-validation"novalidate>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="username-register" id="username-register" placeholder="Username" required>
        <label for="username-register">Username</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" name="email-register" id="email-register" placeholder="Email" required>
        <label for="email">Email</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" name="password-register" id="password-register" placeholder="Password" required>
        <label for="password-register">Password</label>
    </div>

    <button type="submit" class="btn btn-primary">Sign in</button>
</form>

<script src="JS/registerUser.js"></script>