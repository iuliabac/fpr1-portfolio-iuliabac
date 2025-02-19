<html>
<main>
    <head>
        <title> What's Wrong?</title>
        <style>
            h1 {
                text-align: center;
            }
            h2 {
                text-align: left;
            }
            div.container {
                text-align: center;
            }
            ul.myUL {
                display: inline-block;
                text-align: left;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }
            img {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
            li {
                display: inline;
            }
            li {
                float: left;
            }

            a {
                display: block;
                padding: 8px;
                background-color: rgb(138, 230, 128);
            }
            ul {
                background-color: rgb(138, 230, 128);
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }
            li {
                float: left;
            }
            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
            li a:hover {
                background-color: rgb(83, 143, 76);
            }
            .active {
                background-color: rgb(60, 114, 54);
            }
        </style>
    </head>
    <body style="background-color:rgb(172, 239, 165);">
    <nav>
        <div class="container">
            <ul class="myUL">
                <li><a href="{{ route('home') }}">Index</a></li>
                <li><a href="/profile">Profile</a></li>
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a class="active" href="/faq/index">FAQ</a></li>
                <li><a href="/blog">Blog</a></li>
            </ul>
        </div>
    </nav>

    <h1>Have any question? Ask here!</h1>
    <h2><a href="/faq/index">go back</a></h2>

    <a href="https://hz.nl/"><img
            src="https://iuliabac.github.io/hz-university-of-applied-sciences.svg"
            style="width:200px;
                   height:auto;" alt=""></a>

    </body>
</main>
