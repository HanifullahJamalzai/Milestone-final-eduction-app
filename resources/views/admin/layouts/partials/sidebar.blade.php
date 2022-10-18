
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.index') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @can('admin')
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('wcm.index') }}">
          <i class="bi bi-grid"></i>
          <span>WCM</span>
        </a>
      </li>
      @endcan
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('trainer.index') }}">
          <i class="bi bi-grid"></i>
          <span>Trainer</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('course.index') }}">
          <i class="bi bi-grid"></i>
          <span>Course</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-grid"></i>
          <span>Event</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-grid"></i>
          <span>Hero</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-grid"></i>
          <span>LandingTitle</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-grid"></i>
          <span>Message</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-grid"></i>
          <span>Setting</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-grid"></i>
          <span>Message</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-grid"></i>
          <span>Subscribe</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-grid"></i>
          <span>Contact</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-grid"></i>
          <span>Logout</span>
        </a>
      </li>

    </ul>

  </aside><!-- End Sidebar-->
