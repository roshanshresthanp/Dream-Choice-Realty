<!--begin::Aside Menu-->
<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
    <!--begin::Menu Container-->
    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
        <!--begin::Menu Nav-->
        <ul class="menu-nav">
            <li class="menu-item {{ request()->is('admin/dashboard') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{route('admin.dashboard')}}" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            @can('isAdmin')
            <li class="menu-item {{ request()->is('admin/user/*') || request()->is('admin/user') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{route('admin.user.index')}}" class="menu-link">
                    <span class="svg-icon menu-icon fa fa-users">
                    </span>
                    <span class="menu-text">User</span>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/appointment-date') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{route('admin.appointment-date.index')}}" class="menu-link">
                    <span class="svg-icon menu-icon fa fa-calendar-alt">
                    </span>
                    <span class="menu-text">Appointment Date</span>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/properties')? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{route('admin.all.property')}}" class="menu-link">
                    <span class="svg-icon menu-icon fa fa-home">
                    </span>
                    <span class="menu-text">Property</span>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/bookings')? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{route('admin.all.booking')}}" class="menu-link">
                    <span class="svg-icon menu-icon fa fa-envelope">
                    </span>
                    <span class="menu-text">Booking Requests</span>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/active-bookings')? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{route('admin.all.booking.active')}}" class="menu-link">
                    <span class="svg-icon menu-icon fa fa-envelope">
                    </span>
                    <span class="menu-text">Active Booking</span>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/reported-issues')? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{route('admin.admin.issue')}}" class="menu-link">
                    <span class="svg-icon menu-icon fa fa-bug">
                    </span>
                    <span class="menu-text">Reported Issues</span>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/message')? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{route('admin.message.index')}}" class="menu-link">
                    <span class="svg-icon menu-icon fa fa-inbox">
                    </span>
                    <span class="menu-text">Messages</span>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/contacts')? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{route('admin.contact')}}" class="menu-link">
                    <span class="svg-icon menu-icon fa fa-phone">
                    </span>
                    <span class="menu-text">Enquiry</span>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/payment')? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{route('admin.payment.index')}}" class="menu-link">
                    <span class="svg-icon menu-icon fa fa-money-bill">
                    </span>
                    <span class="menu-text">Payments</span>
                </a>
            </li>
            @elsecan('isOwner')

            <li class="menu-item {{ request()->is('admin/property/*') || request()->is('admin/property') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{route('admin.property.index')}}" class="menu-link">
                    <span class="svg-icon menu-icon fa fa-home">
                    </span>
                    <span class="menu-text">My Property</span>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/tenant-list')? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{route('admin.tenant.list')}}" class="menu-link">
                    <span class="svg-icon menu-icon fa fa-users">
                    </span>
                    <span class="menu-text">Tenant list</span>
                </a>
            </li>

            <li class="menu-item {{ request()->is('admin/active-booking') ?'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{route('admin.booking.active')}}" class="menu-link">
                    <span class="svg-icon menu-icon fa fa-envelope">
                    </span>
                    <span class="menu-text">Active Booking</span>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/reported-issue')? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{route('admin.owner.issue')}}" class="menu-link">
                    <span class="svg-icon menu-icon fa fa-bug">
                    </span>
                    <span class="menu-text">Reported Issues</span>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/messages')? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{route('admin.message.owner')}}" class="menu-link">
                    <span class="svg-icon menu-icon fa fa-inbox">
                    </span>
                    <span class="menu-text">Message</span>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/payments')? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{route('admin.payment.owner')}}" class="menu-link">
                    <span class="svg-icon menu-icon fa fa-money-bill">
                    </span>
                    <span class="menu-text">Payments</span>
                </a>
            </li>
            @else
            <li class="menu-item {{ request()->is('admin/my-booking')? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{route('admin.booking.user.active')}}" class="menu-link">
                    <span class="svg-icon menu-icon fa fa-envelope">
                    </span>
                    <span class="menu-text">My Booking</span>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/report-issue')? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{route('admin.report-issue.index')}}" class="menu-link">
                    <span class="svg-icon menu-icon fa fa-bug">
                    </span>
                    <span class="menu-text">Report Issue</span>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/my-message')? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{route('admin.message.user')}}" class="menu-link">
                    <span class="svg-icon menu-icon fa fa-inbox">
                    </span>
                    <span class="menu-text">Message</span>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/my-payment')? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{route('admin.payment.user')}}" class="menu-link">
                    <span class="svg-icon menu-icon fa fa-money-bill">
                    </span>
                    <span class="menu-text">Payments</span>
                </a>
            </li>
            @endcan
           
                    </ul>
                </div>
            </li>
        </ul>
        <!--end::Menu Nav-->
    </div>
    <!--end::Menu Container-->
</div>
<!--end::Aside Menu-->