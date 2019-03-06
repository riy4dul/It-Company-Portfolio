<div class="sidebar" data-color="rose" data-background-color="black" data-image="{{asset('')}}backend/img/sidebar-1.jpg">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
    Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="http://www.creative-tim.com/" class="simple-text logo-mini">
            CT
        </a>
        <a href="http://www.creative-tim.com/" class="simple-text logo-normal">
            Creative Tim
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{asset('')}}backend/img/faces/avatar.jpg" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>
                        {{Auth::user() ->name}}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> MP </span>
                                <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> S </span>
                                <span class="sidebar-normal"> Settings </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item {{ Request::is('home') ? 'active' : ''}}">
                <a class="nav-link" href="{{ URL::to('home')}}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>

            
            {{--  =======================For Slider============================= --}}
            <li class="nav-item {{ Request::is('slider*') ? 'active' : ''}}">
                <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
                    <i class="material-icons">slideshow</i>
                    <p> Home
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ Request::is('slider*') ? 'show' : ''}}" id="pagesExamples">
                    <ul class="nav">
                        <li class="nav-item {{ Request::is('slider') ? 'active' : ''}}">
                            <a class="nav-link" href="{{ URL::to('slider')}}">
                                <i class="material-icons">view_list</i>
                                <span class="sidebar-normal">Slider</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('wedo') ? 'active' : ''}}">
                            <a class="nav-link" href="{{ URL::to('wedo')}}">
                                <i class="material-icons">add</i>
                                <span class="sidebar-normal">We Do</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('job-offers') ? 'active' : ''}}">
                            <a class="nav-link" href="{{ URL::to('job-offers')}}">
                                <i class="material-icons">add</i>
                                <span class="sidebar-normal">job Offers</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('news-events') ? 'active' : ''}}">
                            <a class="nav-link" href="{{ URL::to('news-events')}}">
                                <i class="material-icons">add</i>
                                <span class="sidebar-normal">News Events</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('subscription') ? 'active' : ''}}">
                            <a class="nav-link" href="{{ URL::to('subscription')}}">
                                <i class="material-icons">add</i>
                                <span class="sidebar-normal">Subscription</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            {{--  =======================For About============================= --}}
            <li class="nav-item {{ Request::is('about*') ? 'active' : ''}}">
                <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                    <i class="material-icons">apps</i>
                    <p>  About
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ Request::is('about*') ? 'show' : ''}}" id="componentsExamples">
                    <ul class="nav">
                        <li class="nav-item {{ Request::is('about') ? 'active' : ''}}">
                            <a class="nav-link" href="{{ URL::to('about')}}">
                                <i class="material-icons">add</i>
                                <span class="sidebar-normal">List About</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('about/create') ? 'active' : ''}}">
                            <a class="nav-link" href="{{ URL::to('about/create')}}">
                                <i class="material-icons">add</i>
                                <span class="sidebar-normal">Add About</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            {{--  =======================For Solutions ============================= --}}
            <li class="nav-item {{ Request::is('solutions') ? 'active' : ''}}">
                <a class="nav-link" href="{{ URL::to('solutions')}}">
                    <i class="material-icons">
                    chrome_reader_mode
                    </i>
                    <p> Solutions </p>
                </a>
            </li>
            
            {{--  =======================For Careers ============================= --}}
            <li class="nav-item {{ Request::is('careers') ? 'active' : ''}}">
                <a class="nav-link" href="{{ URL::to('careers')}}">
                    <i class="material-icons">
                    chrome_reader_mode
                    </i>
                    <p> Careers </p>
                </a>
            </li>


            

            {{--  =======================For Contact============================= --}}
            <li class="nav-item {{ Request::is('contact') ? 'active' : ''}}">
                <a class="nav-link" href="{{ URL::to('contact')}}">
                    <i class="material-icons">
                    contacts
                    </i>
                    <p> Contact </p>
                </a>
            </li>


        </ul>
    </div>
</div>