<ul class="menu-list flex-grow-1 mt-3">
    <li>
        <a class="m-link profile-link {{ request()->is('/') ? 'active' : '' }}" href="/">
            <i class="icofont-ui-home"></i><span>Dashboard</span>
        </a>
    </li>

    <li class="collapsed auth-required" style="display: none;">
        <a class="m-link profile-link {{ request()->is('profile*') ? 'active' : '' }}" data-bs-toggle="collapse" data-bs-target="#menu-Profile" href="#">
            <i class="icofont-user"></i><span>Profile</span>
            <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span>
        </a>
        <ul class="sub-menu collapse {{ request()->is('profile*') ? 'show' : '' }}" id="menu-Profile">
            <li><a class="ms-link profile-link {{ request()->routeIs('profile.index') ? 'active' : '' }}" href="{{ route('profile.index') }}"><span>My Profile</span></a></li>
            <li><a class="ms-link profile-link {{ request()->routeIs('profile.edit') ? 'active' : '' }}" href="{{ route('profile.edit') }}"><span>Edit Profile</span></a></li>
            <li><a class="ms-link profile-link {{ request()->routeIs('profile.settings') ? 'active' : '' }}" href="{{ route('profile.settings') }}"><span>Settings</span></a></li>
            <li><a class="ms-link profile-link {{ request()->routeIs('profile.notifications') ? 'active' : '' }}" href="{{ route('profile.notifications') }}"><span>Notifications</span></a></li>
            <li><a class="ms-link profile-link {{ request()->routeIs('profile.password.change') ? 'active' : '' }}" href="{{ route('profile.password.change') }}"><span>Change Password</span></a></li>
        </ul>
    </li>

    <li class="collapsed auth-required" style="display: none;">
        <a class="m-link profile-link {{ request()->is('courses*') ? 'active' : '' }}" data-bs-toggle="collapse" data-bs-target="#menu-Courses" href="#">
            <i class="icofont-certificate"></i><span>Courses</span>
            <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span>
        </a>
        <ul class="sub-menu collapse {{ request()->is('courses*') ? 'show' : '' }}" id="menu-Courses">
            <li><a class="ms-link profile-link {{ request()->routeIs('courses.index') ? 'active' : '' }}" href="{{ route('courses.index') }}"><span>All Courses</span></a></li>
            <li><a class="ms-link profile-link {{ request()->routeIs('courses.enrolled') ? 'active' : '' }}" href="{{ route('courses.enrolled') }}"><span>My Enrollments</span></a></li>
            <li><a class="ms-link profile-link {{ request()->routeIs('courses.progress') ? 'active' : '' }}" href="{{ route('courses.progress') }}"><span>My Progress</span></a></li>
        </ul>
    </li>

    <li class="auth-required" style="display: none;">
        <a class="m-link" href="{{ env('URL_CLA_L0GOUT') }}">
            <i class="icofont-logout"></i> <span>Logout</span>
        </a>
    </li>
</ul>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get the URL parameters
        const urlParams = new URLSearchParams(window.location.search);
        const authToken = urlParams.get("auth_token");

        if (authToken) {
            // Show elements that require authentication
            document.querySelectorAll(".auth-required").forEach(el => {
                el.style.display = "block";
            });

            // Append auth_token to profile-related links
            document.querySelectorAll(".profile-link").forEach(link => {
                const href = link.getAttribute("href");
                link.setAttribute("href", `${href}?auth_token=${authToken}`);
            });
        }
    });
</script>
