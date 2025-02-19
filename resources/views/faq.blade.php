<html>
<main>
    <head>
        <title> Iulia's FAQ</title>
        <style>
            h1 {
                text-align: center;
            }
            h2 {
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
                <li><a class="active" href="/faq">FAQ</a></li>
                <li><a href="/posts">Blog</a></li>
            </ul>
        </div>
    </nav>
    <img align="left"
         src="{{  asset('assets\Tgfaq.gif')  }}" alt="">
    <img align="Right"
         src="{{  asset('assets\Tgfaq.gif')  }}" alt="">
    <h1 style="color: rgb(60, 114, 54);">FAQ</h1>
    <h2>For anyone who is curious</h2>

    <div class="navbar-end">
        <a href="faq/create" class="button is-primary">Ask a Question</a>
    </div>

    <p>Q: How can you print a document from your laptop at HZ?</p>
    <p>A: Select the following printer for your job: HZ Printer, use your HZ Pass and choose your format
    </p>
    <p>Q: How can you scan a document and send it to your laptop at HZ?</p>
    <p>A: Log on to the printer using your HZ card and choose the scan option</p>
    <p>Q: How can I buy something (like when I sign up for the IT introduction event) on the HZ web shop?</p>
    <p>A: Search at the HZ Web Shop</p>
    <p>Q: How can you book a project space?</p>
    <p>A: With the self service portal, click on the new reservation button and you can choose where you want and when to be in the room. </p>
    <p>Q: What are the instructions if you want to park your car at the HZ parking lot?</p>
    <p>A: Since I don't own or drive a car, maybe you can use your HZ student card and reserve your time there </p>
    <a href="https://hz.nl/"><img
            src="https://iuliabac.github.io/hz-university-of-applied-sciences.svg"
            style="width:200px;
                   height:auto;" alt=""></a>
    </body>
</main>
</html>
