<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<main>
    <head>
        <title> Iulia's index</title>
        <style>
            h1 {
                text-align: center;
            }
            h2 {
                text-align: center;
            }
            p {
                text-align: center;
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
                background-color: rgb(152, 194, 243);
            }
            ul {
                background-color: rgb(152, 194, 243);
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
                background-color: rgb(20, 57, 100);
            }
            .active {
                background-color: rgb(2, 36, 74);
            }
        </style>
        <nav>
            <div class="container">
                <ul class="myUL">
                    <li><a class="active" href="{{ route('home') }}">Index</a></li>
                    <li><a href="/profile">Profile</a></li>
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/faq/index">FAQ</a></li>
                    <li><a href="/posts">Blog</a></li>
                </ul>
            </div>
        </nav>
        <nav>
            <img align="left"
                 src="{{  asset('assets\nederlands.gif')  }}" alt="">
            <img align="Right"
                 src="{{  asset('assets\nederlands.gif')  }}" alt="">
            <h1 style="color: rgb(10, 30, 81)">Welkom bij de index page van Băcanu Iulia</h1>

            <img align="left"
                 src="{{  asset('assets\Romania.gif')  }}" alt="">
            <img align="Right"
                 src="{{  asset('assets\Romania.gif')  }}" alt="">
            <h1 style="color: rgb(10, 30, 81)">Bun venit la pagina de index a lui Băcanu Iulia</h1>

            <img align="left"
                 src="{{  asset('assets\uk_gs.gif')  }}" alt="">
            <img align="Right"
                 src="{{  asset('assets\uk_gs.gif')  }}" alt="">
            <h1 style="color: rgb(10, 30, 81)">Welcome to Băcanu Iulia's index page</h1>
        </nav>
    </head>
    <body style="background-color:rgb(197, 220, 247);">

    <img align="left"
         src="{{  asset('assets\cat_md_clr.gif')  }}" alt="">
    <img align="Right"
         src="{{  asset('assets\cat_md_clr.gif')  }}" alt="">
    <p>I choose ICT because I had prior experience with it since the first grade up until high school. I was naturally talented using the computer at a very young age. I think my motivation for ICT came from my parents as well as my former IT teachers as they would always support me in working with computers.</p>
    <p>During my school years, I would work a lot on various applications (Word, PowerPoint, Excel,). Though coding lessons were limited during my time at school, we would program simple websites using HTML as well as working on python using simple comands. and maybe, I could improve my coding skills during my time at this institution.</p>
    <a href="https://hz.nl/"><img
            src="https://iuliabac.github.io/hz-university-of-applied-sciences.svg"
            style="width:200px;
                   height:auto;" alt=""></a>
    </body>
</main>
</html>
