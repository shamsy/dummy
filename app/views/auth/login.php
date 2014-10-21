<form action="{{ action('UserController@doLogin') }}" method="POST">
    <ul style="list-style: none">
        <li>Username</li>
        <li><input type="login" name="login"></li>
        <li>Password</li>
        <li><input type="password" name="password"></li>
        <li><input type="submit" value="Submit"></li>
        <li><a href="forgot_password">Forgot your password? Click here</a></li>
    </ul>
</form>

<div class="container">
    @if(Session::has('message'))
        <p class="alert">{{ Session::get('message') }}</p>
    @endif
</div>