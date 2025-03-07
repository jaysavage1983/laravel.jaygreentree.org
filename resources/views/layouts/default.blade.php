<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            
            <title>
                        @isset($title)
                            {{ $title }} | 
                        @endisset
                        {{ config('app.name') }}
            </title>
          

        <link href="/lib/Ionicons/css/ionicons.css" rel="stylesheet">
        <link href="/assets/fontawesome/css/all.css" rel="stylesheet">
        <link href="/css/output.css" rel="stylesheet">

        <link href="/css/blockbox.css" rel="stylesheet">
        <link href="/css/blockbox-templates.css" rel="stylesheet">
        <link href="/assets/forms/css/main.css" rel="stylesheet">
        
        <link href="/css/live.css" rel="stylesheet" rel="stylesheet">
        
        <link href="/css/bootstrap-social.css" rel="stylesheet">
        <link href="/css/prism.css" rel="stylesheet" rel="stylesheet">
        
        <link rel="alternate" type="application/rss+xml" href="{{ url('feeds/articles.xml') }}">
        <link rel="alternate" type="application/rss+xml" href="{{ url('feeds/livestreams.xml') }}">
        
        <script src="/js/prism.js"></script>
        <script src="/lib/jquery/jquery.js"></script>
        <script src="/assets/forms/js/chopNew.js"></script>
        <script src="/lib/tether/tether.js"></script>
        <script src="/lib/bootstrap/bootstrap.js"></script>
        <script src="/js/blockbox.js"></script>
        <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.css">
        <script src="https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.umd.js"></script>
        <script>
        const {
            ClassicEditor,
            Essentials,
            Bold,
            Italic,
            Font,
            Paragraph
        } = CKEDITOR;

        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                licenseKey: 'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3NzA2ODE1OTksImp0aSI6ImY3ZTY4N2JmLWQzOTQtNDI0OC1hOTk5LTI4ZjczZDg1N2FhZSIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiXSwiZmVhdHVyZXMiOlsiRFJVUCJdLCJ2YyI6IjhkMGM4ZDA5In0.wnvWfOK8yEr3HvL5pHJLg_NT6wnbeMxepw21Izd-dHzygu0dj2hVypV72muyPoiJWAYuon-CxmFgh2oum9zzEg', // Create a free account on https://portal.ckeditor.com/checkout?plan=free
                plugins: [ Essentials, Bold, Italic, Font, Paragraph ],
                toolbar: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                ]
            } )
            .create( document.querySelector( '#editor2' ), {
                licenseKey: 'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3NzA2ODE1OTksImp0aSI6ImY3ZTY4N2JmLWQzOTQtNDI0OC1hOTk5LTI4ZjczZDg1N2FhZSIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiXSwiZmVhdHVyZXMiOlsiRFJVUCJdLCJ2YyI6IjhkMGM4ZDA5In0.wnvWfOK8yEr3HvL5pHJLg_NT6wnbeMxepw21Izd-dHzygu0dj2hVypV72muyPoiJWAYuon-CxmFgh2oum9zzEg', // Create a free account on https://portal.ckeditor.com/checkout?plan=free
                plugins: [ Essentials, Bold, Italic, Font, Paragraph ],
                toolbar: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                ]
            } )
                .then( editor => {
                    window.editor = editor;
                } )
                .catch( error => {
                    console.error( error );
                } );
        </script>
    <script>
    function doPoll() {
        $.get('/isLive', function(response) {
            if (response) {
                $('#livestream').addClass('btn btn-maroon pulse');
                $('#livestream > span').text('Watch Live');
                $('#livestream-player-chat').show();
                $('#livestream-noplayer-nochat').hide();
            } else {
                $('#livestream').removeClass('btn btn-maroon pulse');
                $('#livestream > span').text('Livestreams');
                $('#livestream-player-chat').hide();
                $('#livestream-noplayer-nochat').show();
            }
            setTimeout(doPoll, 100);
        });
    }
    doPoll();
    </script>
    
    </head>
    <body class="landing-10 pos-relative tx-size-14 bg-greay-dark-lighjtest">


        <div id="headPanel" class="bb-headpanel bg-inverse z-index-100 shadow-1">
            <div class="container pd-x-0 pd-lg-x-10 ht-70 d-lg-flex align-items-center justify-content-between">
                <div class="d-flex ht-70 align-items-center justify-content-between pd-x-20 pd-lg-x-0">
                    <h5 class="tx-size-sm-24 mg-b-0 tx-bold tx-spacing-neg-2">
                        <a href="{{ config('app.url') }}/" class="tx-white">
                            {{ config('app.name') }}
                        </a>
                    </h5>
                    <a id="showBbMenu" href="#" class="tx-white hidden-lg-up">
                        <i class="fa fa-navicon tx-white tx-size-18"></i>
                        menu</a>
                </div>

                <div
                    class="menu-right hidden-md-down">

                    <!-- logo for mobile display only -->
                    <div class="ht-70 shadow-1 pos-absolute-top d-flex align-items-center pd-x-25 hidden-lg-up">
                        <a href="/" class="tx-inverse tx-size-24 tx-spacing-neg-2 tx-bold">
                            {{ config('app.name') }}
                        </a>
                    </div>


                    <nav class="nav nav-gray-light nav-active-primary nav-hover-primary nav-dropdown flex-column flex-lg-row">
                        <a class="{% if craft.app.request.getSegment(1) == '' %}active btn-inverse{% endif %} nav-link" href="/">Home</a>
                        <a class="{% if craft.app.request.getSegment(1) == 'about' %}active btn-inverse{% endif %} nav-link" href="/about">About</a>
                        <a class="{% if craft.app.request.getSegment(1) == 'contact' %}active btn-inverse{% endif %} nav-link" href="/contact">Contact</a>
                        <a class="{% if craft.app.request.getSegment(1) == 'articles' %}active btn-inverse{% endif %} nav-link" href="/articles">Articles</a>
                        <a href="/live/" class="nav-link" id="livestream"><span></span></a>
                        {% if currentUser %}
                            <a class="{% if craft.app.request.getSegment(2) == 'dashboard' %}active btn-inverse{% endif %} nav-link" href="/account/dashboard">Dashboard</a>
                            <a class="{% if craft.app.request.getSegment(1) == 'logout' %}active btn-inverse{% endif %} nav-link" href="/logout">Logout</a>
                        {% else %}
                            <a class="{% if craft.app.request.getSegment(2) == 'login' %}active btn-inverse{% endif %} nav-link" href="/login">Login</a>
                        {% endif %}

                        <a class="btn tx-white nav-link" href="#search" data-toggle="collapse" data-target="#search">
                            <i class="icon ion-ios-search tx-size-20 lh-0"></i>
                        </a>

                        <form action="/search/results" class="collapse" id="search">
                            <div class="form-group">
                                <input name="q" class="form-control" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
                            </div>
                        </form>
                    </nav>

                </div>
            </div>
            <!-- container -->

        </div><!-- headpanel -->
</div>


                  @yield('content')


<div class="footer card card-block bd-0 rounded-0 bg-dark bg-gray-dark mg-t-20 pd-30 pd-lg-60" id="footer">
<div class="row">
    <div class="col-lg-8">
        <div class="row">
            <div class="col-6 col-md-3">
                <h6 class="tx-size-xs tx-uppercase tx-white">Who We Are</h6>
                <ul class="list-unstyled mg-t-20 tx-size-xs mg-b-0 op-2">
                    {% for page in craft.entries.section('pages').limit('4') %}
                        <li class="mg-t-5">
                            <a href="{{ config('app.url') }}" class="tx-white">
                                {{ config('app.name') }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </div>
            <!-- col-3 -->
            <div class="col-6 col-md-3">
                <h6 class="tx-size-xs tx-uppercase tx-white">Articles</h6>
                <ul class="list-unstyled mg-t-20 tx-size-xs mg-b-0 op-2">
                    {% for article in craft.entries.section('articleEntries').limit('4') %}
                        <li class="mg-t-5">
                            <a href="{{ config('app.url') }}" class="tx-white">
                                {{ config('app.title') }}
                                <button class="btn btn-primary badge badge-inverse">
                                    {{ config('app.date') }}
                                    
                                </button>
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </div>
            <!-- col-3 -->
            <div class="col-6 col-md-3 mg-t-20 mg-md-t-0">
                <h6 class="tx-size-xs tx-uppercase tx-white">Livestreams</h6>
                <ul class="list-unstyled mg-t-20 tx-size-xs mg-b-0 op-2">
                    {% for stream in craft.entries.section('livestreamEntries').limit('4') %}
                        <li class="mg-t-5">
                            <a href="{{ config('app.url') }}" class="tx-white">
                                {{ config('app.title') }}
                                <button class="btn btn-primary badge badge-inverse">
                                    {{ config('app.date') }}
                                </button>
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </div>
            <!-- col-3 -->
            <div class="col-6 col-md-3 mg-t-20 mg-md-t-0">
                <h6 class="tx-size-xs tx-uppercase tx-white">Follow Us</h6>
                <ul class="list-unstyled mg-t-20 tx-size-xs mg-b-0 op-2">
                    <li class="mg-t-5"><a href="" class="tx-white">Facebook</a></li>
                    <li class="mg-t-5"><a href="" class="tx-white">Twitter</a></li>
                    <li class="mg-t-5"><a href="" class="tx-white">Google Plus</a></li>
                    <li class="mg-t-5"><a href="" class="tx-white">Medium</a></li>
                    <li class="mg-t-5"><a href="" class="tx-white">Pinterest</a></li>
                </ul>
            </div>
            <!-- col-3 -->
        </div>
        <!-- row -->
    </div>
    <!-- col-8 -->

    <div class="col-md-6 col-lg-4 mg-t-40 mg-lg-t-0">
        <div class="row row-lg">
            <p class="tx-size-25">Copyright &copy;
                <?php echo date("Y"); ?>
                {{ config('app.name') }}</p>
        </div>
    </div>


</div>
</div>




</body>
</html>