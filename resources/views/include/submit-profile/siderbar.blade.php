<div class="sidebar active">
    <div class="d-flex align-items-center p-3">
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/website/frontend/user.png') }}" alt="User Image" class="user-image" />
        </a>
        <div class="user-details">
        <p class="user-name">{{auth()->user()?->first_name." ".auth()->user()?->last_name}}</p>
      </div>
    </div>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="{{route('users.change-password')}}">Change Password</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('users.logout')}}">Logout</a>
      </li>
    </ul>
</div>
