<html>

<head>
    <title> Iulia's dashboard</title>
    <style>
        h1 {
            text-align: center;
        }

        h2 {
            text-align: left;
        }

        h3 {
            text-align: center;
        }

        p {
            text-align: center;
        }

        table,
        th,
        td {
            border: 1px solid white;
            border-collapse: collapse;
            text-align: center;
        }

        th,
        td {
            background-color: #96D4D4;
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
            background-color: rgb(194, 206, 117);
        }

        ul {
            background-color: rgb(194, 206, 117);
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
            background-color: rgb(141, 151, 75);
        }

        .active {
            background-color: rgb(91, 97, 49);
        }
    </style>
</head>

<body style="background-color:rgb(243, 252, 184);">
<nav>
    <div class="container">
        <ul class="myUL">
            <li><a href="{{ route('home') }}">Index</a></li>
            <li><a href="/profile">Profile</a></li>
            <li><a class="active" href="/dashboard">Dashboard</a></li>
            <li><a href="/faq">FAQ</a></li>
            <li><a href="/blog">Blog</a></li>
        </ul>
    </div>
</nav>
<img align="left" src="{{  asset('assets\penpaper.gif')  }}" alt="">
<img align="Right" src="{{  asset('assets\penpaper.gif')  }}" alt="">
<h1 style="color: rgb(91, 97, 49);">MY Dashboard</h1>
<p>A summary of my projects and exams this year</p>
<img align="Right" src="{{  asset('assets\stress.gif')  }}" alt="">
<h2>Exams</h2>
<title>Exam</title>
<table>
    <tr>
        <th>Exam</th>
        <th>Date</th>
        <th>Credit</th>
        <th>Grade</th>
        <th>Pass?</th>
    </tr>
    <tr>
        <td>Programming Basics</td>
        <td>31/10/24</td>
        <td>5</td>
        <td>6.5</td>
        <td>Yes</td>
    </tr>
    <tr>
        <td>Computer Science Basics</td>
        <td>01/11/24</td>
        <td>5</td>
        <td>7.2</td>
        <td>Yes</td>
    </tr>
    <tr>
        <td>Object Oriented Programming (EXAM)</td>
        <td>30/01/2024</td>
        <td>5</td>
        <td>4.2</td>
        <td>No</td>
    </tr>
    <tr>
        <td>Framework project 1 (CASE STUDY)</td>
        <td>S2.5 & S2.10</td>
        <td>10</td>
        <td>N/A</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td>Framework project 1 (DATABASE)</td>
        <td>S2.7 & S2.10</td>
        <td>10</td>
        <td>N/A</td>
        <td>N/A</td>
    </tr>
</table>
<img align="Right" src="{{  asset('assets\arturito-clear.gif')  }}" alt="">
<img align="Right" src="{{  asset('assets\super_sidekicks2_player01.gif')  }}" alt="">
<h2>Assignments</h2>
<table>
    <tr>
        <th>Assignment</th>
        <th>Date</th>
        <th>Credit</th>
        <th>Grade</th>
        <th>Pass?</th>
    </tr>
    <tr>
        <td>Programme & Career Orientation</td>
        <td>18/10/2024</td>
        <td>2.5</td>
        <td>8.7</td>
        <td>Yes</td>
    </tr>
    <tr>
        <td>Object Oriented Programming (PRESENTATION)</td>
        <td>29/01/2025</td>
        <td>5</td>
        <td>6.1</td>
        <td>Yes</td>
    </tr>
    <tr>
        <td>Framework project 1 (GROUP)</td>
        <td>S2.10 & S2.12</td>
        <td>10</td>
        <td>N/A</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td>Framework project 1 (INDIVIDUAL)</td>
        <td>S2.9 & S2.12</td>
        <td>10</td>
        <td>N/A</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td>Business IT Consultancy basics (VIDEO)</td>
        <td>S2.19 & S2.20</td>
        <td>2.5</td>
        <td>N/A</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td>Personal Professional Development Exploration (INTERVIEW)</td>
        <td>S2.11 to S2.14</td>
        <td>12.5</td>
        <td>N/A</td>
        <td>N/A</td>
    </tr>
</table>
<h2>Portfolio</h2>
<table>
    <tr>
        <th>Portfolio</th>
        <th>Date</th>
        <th>Credit</th>
        <th>Grade</th>
        <th>Pass?</th>
    </tr>
    <tr>
        <td>Framework Project 2 (FINAL)</td>
        <td>S2.19 & S2.20</td>
        <td>10</td>
        <td>N/A</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td>Framework Project 2 (REPORT)</td>
        <td>S2.19 & S2.20</td>
        <td>10</td>
        <td>N/A</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td>Framework Project 2 (DEVELOPMENT)</td>
        <td>S2.19 & S2.20</td>
        <td>10</td>
        <td>N/A</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td>IT Personality</td>
        <td>S2.19 & S2.20</td>
        <td>1.25</td>
        <td>N/A</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td>IT Personality (INT)</td>
        <td>S2.19 & S2.20</td>
        <td>1.25</td>
        <td>N/A</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td>IT Personality (I)</td>
        <td>S2.19 & S2.20</td>
        <td>1.25</td>
        <td>N/A</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td>IT Personality (II)</td>
        <td>S2.19 & S2.20</td>
        <td>1.25</td>
        <td>N/A</td>
        <td>N/A</td>
    </tr>
</table>

<h2>My Dutch Lessons</h2>
<table>
    <tr>
        <th>Exam</th>
        <th>Date</th>
        <th>Credit</th>
        <th>Grade</th>
        <th>Pass?</th>
    </tr>
    <tr>
        <td>NLbasic01</td>
        <td>29/10/2024</td>
        <td>1.25</td>
        <td>9.3</td>
        <td>Yes</td>
    </tr>
    <tr>
        <td>NLbasic02</td>
        <td>14/01/2025</td>
        <td>1.25</td>
        <td>8.2</td>
        <td>Yes</td>
    </tr>
</table>
</body>
<p>In order to do great at my time at university. I need to do the following things for me to pass or succeed</p>
<h3>ECs</h3>
<p>The EC (short for European Credits) is a form of grading in this university. There are a total of 240 credits in
    this program, 60EC per year.</p>
<h4>How can I obtain credits?</h4>
<table>
    <tr>
        <th>EC obtainabiliaty</th>
    </tr>
    <tr>
        <td>Exams</td>
    </tr>
    <tr>
        <td>Projects</td>
    </tr>
    <tr>
        <td>assignments</td>
    </tr>
</table>
<h4>How many European Credits (EC) do I need in order to pass? </h4>
<table>
    <tr>
        <th>Points</th>
        <th>Status</th>
    </tr>
    <tr>
        <td>
            <45EC</td>
        <td>Failed</td>
    </tr>
    <tr>
        <td>45EC></td>
        <td>Pass</td>
    </tr>
    <tr>
        <td>60EC></td>
        <td>Pass with diploma</td>
    </tr>
    <tr>
        <td>
            <30EC</td>
        <td>Residence permit revoked</td>
    </tr>
</table>
<h3>NBSA</h3>
<p>The NBSA (Negative Binding Study Recommendation) will be obtained if do not pass. If I get one of these, I must
    stop this program</p>
<h4>But there are some exceptions where my NBSA can be postponed for a year</h4>
<table>
    <tr>
        <th>Exceptions</th>
    </tr>
    <tr>
        <td>Sickness</td>
    </tr>
    <tr>
        <td>Sporting Events</td>
    </tr>
    <tr>
        <td>Family loss</td>
    </tr>
</table>
<p>all of these will be informed by a study career coach or dean.</p>
<a href="https://hz.nl/"><img src="https://iuliabac.github.io/hz-university-of-applied-sciences.svg" style="width:200px;
                       height:auto;" alt=""></a>
</body>
</html>
