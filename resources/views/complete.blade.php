<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sign in with Apple Example by Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 40px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            pre {
                text-align: left;
                width: 800px;
                overflow-x: scroll;
                background: #eee;
                border: 1px solid #ddd;
                padding: 10px;
                font-size: 11px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Authentication successfull
                </div>

                <div class="m-b-md">
                    Response
                    <pre><code>{{ print_r($user, true) }}</code></pre>
                </div>

                <div class="links">
                    Created with <a href="https://laravel.com" target="_blank">Laravel</a> and <a href="https://packagist.org/packages/seoda/socialite-apple" target="_blank">Apple OAuth2 Provider for Laravel Socialite</a>
                </div>

            </div>
        </div>
    </body>
</html>
