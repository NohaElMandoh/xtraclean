<section class="sidenav-bar">
        <div class="nav-box">
            <div class="inner-box">
                <div class="upper-box">
                    <div class="btn-box"><button class="close-btn"><span class="fa fa-times"></span></button></div>
                </div>

                <!-- .Side Nav -->
                <nav class="side-nav">
                    <ul class="navigation clearfix" id="nav">
                        <li class="{{ (Route::currentRouteName()== 'home' ) ? 'current' : '' }} "><a href="{{route('home')}}">{{__('messages.Home')}}</a></li>
                        <li class=" dropdown"><a>{{__('messages.About')}}</a>
                            <ul>
                                <li><a href="WhoWeAre.html">{{__('messages.Who_We_Are')}}</a></li>
                                <li><a href="History.html">{{__('messages.History')}}</a></li>
                                <li><a href="Team.html">{{__('messages.Team')}}</a></li>
                                <li><a href="Partners.html">{{__('messages.Partners')}}</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="ProjectDetailsM.html">{{__('messages.Projects')}}</a></li>
                        <li class=""><a href="NewsAndEvents.html">{{__('messages.News&Events')}}</a></li>
                        <li class=""><a href="CareerM.html">{{__('messages.Careers')}}</a></li>
                        <li class=""><a href="CotactM.html">{{__('messages.Contact_Us')}}</a></li>
                    </ul> 
                </nav><!-- /.Side-menu -->
            </div>
        </div>
    </section>