"<?php
// Developed By dollarstir(+233556676471/kpin463@gmail.com)
$ins = new Add();
extract($_POST);
$response = $ins->insert('user', [
    'username' => $username,
    'email' => $email,
], $_FILES);
YolkUI::run(new Wrapper(
    el::html('',
    [
         el::head([meta::viewport(), el::title('Login Form'), import('css')]),
        el::body([
            el::image('widgets/login/assets/img/wave.png', 'class="wave"'),
            el::div('class="logcont"', [
                el::div('class="img"', [el::image('widgets/login/assets/img/bg.svg')]),

                el::div('class="logcontent"', [
                    el::form('', 'post', 'class="form"', [
                        el::image('widgets/login/assets/img/avatar.svg'),
                        el::h2('class="title"', 'Welcome'),
                        el::div('class="input-div one"', [
                            el::div('class="i"', [Icons::fas('user')]),
                            el::div('class="div"', [
                                el::h5('', 'Username'),
                                el::input('text', '', 'input'),
                            ]),
                        ]),

                        el::div('class="input-div pass"', [
                            el::div('class="i"', [Icons::fas('lock')]),
                            el::div('class="div"', [
                                el::h5('', 'password'),
                                el::input('password', '', 'input'),
                            ]),
                        ]),
                        el::a('', 'class="a"', ['Forgot Password?']),
                        el::input('submit', '', 'btn1', 'Login'),
                    ]),
                ]),
            ]),
                el::linkjs('widgets/login/assets/js/style.js'),
        ]),
    ])
));
?>"