<section class="h-full w-full border-box transition-all duration-500 linear lg:px-24 md:px-20 px-8 py-8 bg-white"
style="  border-bottom: 1px solid #EBEBEB;">

<div class="navbar-1-5" style="font-family: 'Poppins', sans-serif;">
    <div class="container mx-auto flex flex-wrap flex-row items-center justify-between">
        <a href=""
        class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center lg:items-center lg:justify-left">
        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M3.50001 15.75C3.50001 8.98451 8.98452 3.5 15.75 3.5H29.75C30.7165 3.5 31.5 4.2835 31.5 5.25C31.5 6.2165 30.7165 7 29.75 7H15.75C10.9175 7 7.00001 10.9175 7.00001 15.75V29.75C7.00001 30.7165 6.21651 31.5 5.25001 31.5C4.28351 31.5 3.50001 30.7165 3.50001 29.75V15.75Z"
            fill="#27c499" />
          <path
            d="M10.5 17.5C10.5 13.634 13.634 10.5 17.5 10.5H31.5C35.366 10.5 38.5 13.634 38.5 17.5V31.5C38.5 35.366 35.366 38.5 31.5 38.5H17.5C13.634 38.5 10.5 35.366 10.5 31.5V17.5Z"
            fill="#27c499" />
        </svg>
      </a>
      <nav
        class="lg:flex hidden lg:w-2/5 flex-wrap items-center text-base md:ml-auto lg:space-y-0 space-y-6 lg:space-x-12 space-x-0">
        <a href="{{url('/')}}" class="nav-link block active">Home</a>
        <a href="{{url('/movies')}}" class="nav-link block">Movie</a>
        <a href="{{url('/casts')}}" class="nav-link block">Cast</a>
        <a href="{{url('/directors')}}" class="nav-link block">Director</a>
        <a href="{{url('/channels')}}" class="nav-link block">Channel</a>
      </nav>
      
      <label for="menu-toggle" class="cursor-pointer lg:hidden block">
        <svg class="w-6 h-6" fill="none" stroke="#092A33" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </label>
      <input class="hidden" type="checkbox" id="menu-toggle" />

      <div class="hidden w-full flex-wrap items-center text-base justify-center" id="menu">
        <nav
          class="lg:space-x-12 space-x-0 lg:flex items-center justify-between text-base pt-8 lg:pt-0 lg:space-y-0 space-y-6">
          <a href="{{url('/')}}" class="nav-link block active">Home</a>
        <a href="{{url('/movies')}}" class="nav-link block">Movie</a>
        <a href="{{url('/casts')}}" class="nav-link block">Cast</a>
        <a href="{{url('/directors')}}" class="nav-link block">Director</a>
        <a href="{{url('/channels')}}" class="nav-link block">Channel</a>
        </nav>
      </div>

      <div class="lg:w-2/5 lg:inline-flex lg:justify-end ml-0 hidden lg:items-center lg:w-auto w-full" id="menu">
        <button
          class="btn-fill text-white items-center border-0 py-3 px-8 focus:outline-none rounded-2xl font-medium text-base mt-6 lg:mt-0">Streaming
        </button>
      </div>
    </div>
  </div>
</section>