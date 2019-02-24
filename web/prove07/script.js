function checkPasswords() {
    password = document.getElementById('password').value;
    confirm = document.getElementById('confirm').value;
    number = /\d/;
    message = "";
    asterisk = "";
    if (password != confirm) {
        message = 'Passwords must match';
        asterisk = '*';
    } else if (password.length < 7) {
        message = 'Password must be at least 7 characters';
        asterisk = '*';
    } else if (!number.test(password)) {
        message = 'Password must contain at least one number';
        asterisk = '*';
    }
    document.getElementById('message').innerHTML = asterisk + ' ' + message;
    document.getElementById('asterisk').innerHTML = asterisk;

}