<html>
<main>
    <head>
        <title> Iulia's Choice</title>
        <style>
            h1 {
                text-align: center;
            }
            h2 {
                text-align: left;
            }
            p {
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
                background-color: rgb(208, 117, 208);
            }
            ul {
                background-color: rgb(208, 117, 208);
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
                padding: 14px 16px;
                text-decoration: none;
            }
            li a:hover {
                background-color: rgb(122, 59, 122);
            }
            .active {
                background-color: rgb(66, 28, 66);
            }
        </style>
    </head>
    <body style="background-color: rgb(232, 170, 232);">
    <nav>
        <div class="container">
            <ul class="myUL">
                <li><a href="{{ route('home') }}">Index</a></li>
                <li><a href="/profile">Profile</a></li>
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a href="/faq/index">FAQ</a></li>
                <li><a class="active" href="/posts/index">Blog</a></li>
            </ul>
        </div>
    </nav>
    <img align="left"
         src="{{  asset('assets\bouncy.gif')  }}" alt="">
    <img align="Right"
         src="{{  asset('assets\bouncy.gif')  }}" alt="">
    <h1 style="color: rgb(66, 28, 66);">Feedback</h1>
    <p>My colleges really liked the nostalgic aesthetic that I have going on with the site (e.g: Old-school GIFs and the amateurish coding). However all of my files were not organised as it was intended. all of the were in one folder and the files were all hosted on github instead of the projects folder. and all of my pictures were from the internete and the link redirected to the website, that is a bad thing because the web pictures can get deleted and won't be able to see it. so instead I organised my folders, downloaded my Pictures and have everything well organised and well done!  </p>
    <a href="https://hz.nl/"><img
            src="https://iuliabac.github.io/hz-university-of-applied-sciences.svg"
            style="width:200px;
                   height:auto;" alt=""></a>
    </body>
</main>
</html>
