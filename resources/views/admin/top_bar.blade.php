<div class="navbar-container content">
    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="nav navbar-nav mr-auto float-left">
        </ul>
        <ul class="nav navbar-nav float-right">
            <!-- <li class="nav-item d-md-block">
                <a class="nav-link nav-menu-main wallet-nav" href="my-wallet.php"><i class="fa fa-money-bill"></i> $100</a>
            </li> -->

            <li class="dropdown dropdown-notification nav-item"> <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i> <span class="badge badge-pill badge-default badge-danger badge-default badge-up">{{ $notif_count }}</span> </a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                    <li class="dropdown-menu-header">
                        <h6 class="dropdown-header m-0"> <span class="grey darken-2">Notifications</span> <span class="notification-tag badge badge-default badge-danger float-right m-0">
                      {{ $notif_count }}
                            
                        
                        </span> </h6>
                    </li>
                    @foreach ($notif as $item)

                    <li class="scrollable-container media-list ps-container ps-theme-dark ps-active-y" data-ps-id="75e644f2-605d-3ecc-f100-72d86e4a64d8">
                        <a href="{{ url('notifications') }}">
                            <div class="media">
                                <div class="media-left align-self-center"><i class="ft-bell icon-bg-circle bg-cyan"></i>
                                </div>
                                    
                                <div class="media-body">
                                    <h6 class="media-heading">You have new notification of {{ $item->type }}</h6>
                                    {{-- <h6 class="media-heading">{{ $item->data['title']; }}</h6> --}}
                                 
                                    {{-- <p class="notification-text font-small-3 text-muted">{{ $item->data['description'] }}</p> --}}
                                    <small>
                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($item->created_at))->diffForHumans() }}</time>
                                    </small>
                                </div>
                                

                            </div>
                        </a>
                     
                       
                            

                    </li>
                    @endforeach

                    <li class="dropdown-menu-footer">
                        <a class="dropdown-item text-muted text-center" href="{{ url('notifications') }}">Read all notifications</a>
                    </li>

                </ul>
            </li>
            <li class="dropdown dropdown-user nav-item"> <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span class="avatar avatar-online"> <img src="{{ Auth::guard('admin')->user()->image?Auth::guard('admin')->user()->image: url('admin_asset/app-assets/images/portrait/small/avatar-s-1.png') }}" alt="avatar"> </span> <span class="user-name">{{ Auth::guard('admin')->user()->first_name." ".Auth::guard('admin')->user()->last_name }}</span> </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ url('profile') }}"><i class="fa fa-user-circle"></i> view Profile </a>
                    <a class="dropdown-item" href="{{ url('logout') }}"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </div>
            </li>
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a>
            </li>
        </ul>
    </div>
</div>