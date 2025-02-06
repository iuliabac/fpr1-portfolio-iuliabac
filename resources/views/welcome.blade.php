<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HZ HBO-ICT</title>

    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
{{-- Navigation bar --}}
<nav class="navbar is-primary  has-text-white" >
    <div class="container">
        <div class="navbar-brand">
            <a href="/" class="navbar-item">
                <strong><i class="fas fa-graduation-cap"></i> HZ</strong>
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                <a href="{{ route('home') }}"
                   class="navbar-item {{ Request::route()->getName() === 'home' ? "is-active" : "" }}">
                    Home
                </a>
            </div>
        </div>
    </div>
</nav>

{{-- Content --}}
<section class="hero  is-medium  is-bold is-primary">
    <div class="hero-body" style="
            background: url('https://www.hz.nl/imager/uploads/images/3.-Werk-en-studie/Headers/docent-coacht-studenten-003_c8fa470484be7b69be5daae77a1602c5.jpg') no-repeat center center;
            background-size: cover;"
    ></div>
</section>

<section class="section">
    <div class="container">
        <div class="columns">

            <div class="column is-8-desktop is-12-tablet">

                <div class="content">
                    <h1>Welcome to the HZ HBO-ICT template app.</h1>
                    <p>
                        Posuere porttitor natoque velit duis penatibus fermentum dignissim ut? Vel vel mi purus
                        tempor nec conubia platea venenatis. Mauris pharetra auctor magnis, vehicula integer risus
                        taciti gravida semper fames! Eu fermentum lorem accumsan litora. Consequat dapibus interdum
                        primis lorem. Convallis integer mi suscipit tempor. Ad tincidunt placerat at. Sagittis
                        pulvinar consectetur commodo, placerat varius sociosqu egestas felis! Curae; dictumst porta
                        tempus. Nisi nec morbi netus euismod egestas proin sed tempor. Nam feugiat ante ante.
                        Conubia vehicula tincidunt facilisis quisque risus senectus convallis. Eget at feugiat vel
                        nisi. Tortor, facilisis neque elementum ultricies blandit amet orci dictumst eu mi molestie.
                        Libero vulputate porta proin volutpat suspendisse aenean aenean facilisi ut primis!
                        Venenatis elementum auctor neque urna et facilisis vulputate erat lorem habitasse libero!
                        Risus ornare quam rutrum praesent blandit congue aliquet mauris.
                    </p>
                    <p>
                        Elementum orci eget vel adipiscing tempor malesuada? Sollicitudin euismod nunc feugiat
                        accumsan accumsan condimentum nulla pellentesque sagittis habitasse suspendisse praesent?
                        Lectus proin justo vulputate tristique duis metus, est pellentesque blandit quam pharetra.
                        Maecenas tincidunt litora mauris mollis ornare dictum nec placerat lectus massa lobortis
                        auctor. Hac feugiat dolor, ac ridiculus mi adipiscing aptent elementum suspendisse augue
                        rutrum! Habitasse a consequat ornare dictumst integer dis porta.
                    </p>
                    <p>
                        Blandit mollis felis gravida sem ad venenatis ut a lacus! Magna odio netus, torquent rhoncus
                        fames velit. Adipiscing libero, class cursus ipsum penatibus enim mollis netus. Sociis
                        luctus eros sapien platea parturient fringilla. Senectus purus tincidunt laoreet purus
                        praesent. Accumsan pulvinar tincidunt gravida malesuada senectus proin, elit cubilia
                        lobortis quisque tellus? Torquent dis natoque sapien natoque sagittis conubia pulvinar risus
                        elementum hac adipiscing arcu. Sem nisl fusce phasellus adipiscing pretium eget hendrerit
                        proin non. Vestibulum lacus magna, commodo volutpat.
                    </p>
                    <p>
                        Vivamus ridiculus amet arcu. Magnis venenatis vehicula venenatis molestie molestie proin sed
                        blandit, inceptos volutpat. Auctor auctor massa sodales ipsum. Congue est quisque porta?
                        Porta phasellus sem torquent ad feugiat sollicitudin nisi tempor tortor habitasse. Eros
                        condimentum enim blandit pulvinar. Justo aenean, taciti curae; diam volutpat cubilia ante
                        vestibulum. Augue penatibus phasellus inceptos tortor convallis ridiculus at ad. Nisl
                        curabitur vel gravida, montes sit velit pellentesque. Sem, dapibus maecenas urna lectus
                        mauris quisque nibh accumsan amet curabitur egestas dolor. Sagittis montes magnis quam
                        fringilla accumsan bibendum. Nisl, a laoreet himenaeos sapien lorem quisque taciti lacus
                        elit mauris. Mollis eleifend montes commodo? Accumsan nullam venenatis malesuada netus metus
                        sociosqu magnis velit. Rhoncus lacus tempus praesent fermentum netus ullamcorper dolor
                        integer nulla.
                    </p>
                    <p>
                        Habitasse suspendisse egestas vestibulum pellentesque per leo enim metus donec ad. Hac metus
                        convallis nibh eget, parturient dis elementum posuere. Felis, ultricies fusce est cubilia
                        facilisis odio id velit dapibus suspendisse. Erat praesent nullam aliquam. Rutrum commodo
                        eget malesuada per montes, curae; senectus convallis sociis per. Risus mattis justo vivamus
                        lorem bibendum aenean eleifend facilisi, suscipit consectetur libero litora. Interdum?
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Footer --}}
<footer class="footer">
    <div class="container">
        <div class="columns is-multiline">

            <div class="column has-text-centered">
                <div>
                    <a href="/" class="link">Home</a>
                </div>
            </div>

            <div class="column has-text-centered">
                <div>
                    <a href="https://opensource.org/licenses/MIT" class="link">
                        <i class="fa fa-balance-scale" aria-hidden="true"></i> License: MIT
                    </a>
                </div>
            </div>

        </div>

        <div class="content is-small has-text-centered">
            <p class="">Theme built by <a href="https://www.csrhymes.com">C.S. Rhymes</a> | adapted by <a href="https://github.com/dwaard">BugSlayer</a></p>
            <p>PROJECT FOOTER HERE</p>
        </div>
    </div>
</footer>

</body>
</html>
