<header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
  <div class="container">
    <div class="relative flex items-center justify-between">
      <div class="px-4">
        <a href="/" class="block py-6 text-lg font-semibold text-secondary">
          Dia<span class="text-primary">Care</span>.
        </a>
      </div>
      <div class="flex items-center px-4">
        <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
          <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
          <span class="hamburger-line transition duration-300 ease-in-out"></span>
          <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
        </button>
        <nav id="nav-menu"
          class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none">
          <ul class="block lg:flex">
            <li class="group">
              <a href="/" class="text-dark mx-8 flex py-2 text-base group-hover:text-secondary">Home</a>
            </li>
            <li class="group">
              <a href="/diagnose" class="text-dark mx-8 flex py-2 text-base group-hover:text-secondary">Diagnose</a>
            </li>

            @if (auth()->user() !== null)
              <li class="group">
                <a href="/dashboard" class="text-dark mx-8 flex py-2 text-base group-hover:text-secondary">Dashboard</a>
              </li>
            @endif

            @if (auth()->user() !== null && auth()->user()->is_admin == 1)
              <li class="group">
                <a href="/adminDashboard" class="text-dark mx-8 flex py-2 text-base group-hover:text-secondary">Admin
                  Dashboard</a>
              </li>
            @endif

            <li class="group">
              <a href="/medicinesPage"
                class="text-dark mx-8 flex py-2 text-base group-hover:text-secondary">Medicines</a>
            </li>
            <li class="group">
              <a href="/about"
                class="text-dark mx-8 mb-3 flex py-2 text-base group-hover:text-secondary lg:mb-0">About</a>
            </li>

            @if (auth()->user() !== null)
              <li class="group">
                <form action='/logout' method="post">
                  @csrf
                  <button type="submit"
                    class="btnnn ml-5 rounded-sm border-2 border-black bg-black py-2 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black">
                    Logout
                  </button>
                </form>
              </li>
            @else
              <li class="group">
                <button
                  class="btnnn ml-5 rounded-sm border-2 border-black bg-black py-2 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black">
                  <a href="/login">Login</a>
                </button>
              </li>
            @endif

          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
