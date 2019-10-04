<section class="container">
    <?php if(isset($_SESSION['flash']['message'])) echo $_SESSION['flash']['message']; ?>
    <form class="send" action="?controller=security&method=login" method="POST">
      <h1>Login</h1>
        <section class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email"  required class="form-control">
        </section>
        <br>
        <section class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required class="form-control">
        </section>
        <br>
        <section class="form-group">
            <input type="submit" value="LOGIN" class="btn btn-green">
        </section>
    </form>
</section>
