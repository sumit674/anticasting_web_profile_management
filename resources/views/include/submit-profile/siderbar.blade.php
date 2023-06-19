<div class="sidebar active">
    <div class="d-flex align-items-center p-3">
        <a href="{{ route('home') }}">
            @if (isset(auth()?->user()?->profile->image1))
              <img src="{{asset('upload/profile/'.auth()?->user()?->profile->image1)}}" alt="User Image" class="user-image" />
              @else
              <img src="{{ asset('assets/images/default-user.jfif') }}" alt="User Image" class="user-image" />
            @endif

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
