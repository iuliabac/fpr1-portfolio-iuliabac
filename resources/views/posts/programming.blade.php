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
                text-align: center;
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
                <li><a class="active" href="/posts">Blog</a></li>
            </ul>
        </div>
    </nav>
    <img align="left"
         src="{{  asset('assets\bouncy.gif')  }}" alt="">
    <img align="Right"
         src="{{  asset('assets\bouncy.gif')  }}" alt="">
    <h1 style="color: rgb(66, 28, 66);">Programming experience</h1>
    <p>The fist time I ever learned programing was in 7th grade, on HTML. All of our stuff were coded using, NOTEPAD? yes, thats right! all of the coding in middle school were on notepad. Then in High School, I used python for Computer Science classes, however we didn't use that much... Right now, I am rediscovering this thing called "Programming" and all of this is made using "Visual Studio Code", and let me tell you. It's much more easier than using notepad that's for sure! </p>
    <a href="https://hz.nl/"><img
            src="https://iuliabac.github.io/hz-university-of-applied-sciences.svg"
            style="width:200px;
                   height:auto;" alt=""></a>

    </body>
</main>
</html>
