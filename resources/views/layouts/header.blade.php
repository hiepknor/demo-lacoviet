
<header>
    <div class="container">
        <div class="header-wrap">
            <div class="logo">
                <a href="/" title="{{ config('app.name', 'Laravel') }}">
                    <img src="{{ asset('lacoviet/images/1537885227-Cong-Ty-Laco-Cong-Ty-TNHH-Quoc-Te-Laco.png') }}" alt="{{ config('app.name', 'Laravel') }}">
                </a>
            </div>
            <nav class="header-nav top-level-menu">
                <ul class="nav-list">
                    <li class="nav-item">
                        <div class="label label-parent"><a href="{{ route('gioi-thieu') }}">Giới thiệu</a></div>
                    </li>
                    <li class="nav-item add-arrow">
                        <span class="nav-click"><i class="nav-arrow"></i></span>
                        <div class="label label-parent"><a href="{{ route('san-pham') }}">Sản phẩm</a></div>
                        <ul class="nav-submenu second-level-menu">
                            @foreach($allCategories as $catg)
                                <li class="nav-submenu-item ">
                                    <div class="label">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        <a href="{{ url('san-pham/'.$catg->slug) }}">{{ $catg->name }}</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <div class="label label-parent"><a href="{{ route('tin-tuc') }}">Tin tức</a></div>
                    </li>
                    <li class="nav-item">
                        <span class="nav-click"><i class="nav-arrow"></i></span>
                        <div class="label label-parent"><a href="{{ route('hoat-dong') }}">Hoạt động</a></div>

                        <ul class="nav-submenu second-level-menu">
                            <li class="nav-submenu-item">
                                <div class="label">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <a href="#">Hình ảnh</a>
                                </div>
                            </li>
                            <li class="nav-submenu-item ">
                                <div class="label">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <a href="#">Video</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <div class="label label-parent"><a href="{{ route('tuyen-si-dai-ly') }}">Tuyển sỉ, đại lý</a></div>
                    </li>
                    <li class="nav-item">
                        <div class="label label-parent"><a href="{{ route('lien-he') }}">Liên hệ</a></div>
                    </li>
                </ul>
            </nav>
            <div class="nav-mobile"></div>
        </div>
    </div>
</header>
