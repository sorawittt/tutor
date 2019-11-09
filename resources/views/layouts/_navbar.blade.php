<nav class="navbar navbar-custom navbar-expand-sm">
        <a class="navbar-brand" href="/">Tutor</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      @if (Auth::check())
        <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto flex-nowrap">
            <li class="nav-item">
              <a class="nav-link" href="/courses">คอร์สเรียนทั้งหมด <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/allStudent">รายชื่อนักเรียนทั้งหมด</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/payment">สถานะการชำระเงิน</a>
            </li>
            @if (Gate::allows('create-staff'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">เพิ่มพนักงาน</a>
              </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('ออกจากระบบ') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            </li>
          </ul>
        </div>
      @endif
      </nav>