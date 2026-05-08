<style>
body {
    margin: 0;
    font-family: Arial;
    background: url('https://images.unsplash.com/photo-1542838132-92c53300491e') no-repeat center center/cover;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* DARK OVERLAY */
.overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
}

/* LOGIN BOX */
.login-box {
    position: relative;
    background: white;
    padding: 40px;
    border-radius: 12px;
    width: 320px;
    box-shadow: 0 0 25px rgba(0,0,0,0.3);
    text-align: center;
}

/* HEADER */
.login-box h2 {
    margin-bottom: 5px;
    color: #2c3e50;
}

.login-box p {
    font-size: 13px;
    color: gray;
    margin-bottom: 20px;
}

/* INPUTS */
.login-box input {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 6px;
    outline: none;
}

.login-box input:focus {
    border-color: #27ae60;
}

/* BUTTON */
.login-box button {
    width: 100%;
    padding: 12px;
    background: #27ae60;
    border: none;
    color: white;
    font-size: 16px;
    border-radius: 6px;
    cursor: pointer;
}

.login-box button:hover {
    background: #219150;
}

/* SMALL FOOTER */
.footer {
    margin-top: 10px;
    font-size: 12px;
    color: gray;
}
</style>

<div class="overlay"></div>

<div class="login-box">
    <h2>🛒 FreshMart Admin</h2>
    <p>Login to manage your supermarket system</p>

    <form action="auth.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <div class="footer">
        Secure Admin Panel • FreshMart System
    </div>
</div>
