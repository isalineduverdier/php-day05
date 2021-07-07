<php?
function remove_cookie($name) {
    if (isset($_COOKIE[$name])){
        unset($_COOKIE[$name]);
        setcookie($name, '', time() - 4200, '/');
    }
}
>?