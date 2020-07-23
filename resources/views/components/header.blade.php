@include('components.login')
@include('components.register')
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a href="/"><img class="logo" src="/assets/images/logo.png" alt="logo"></a>
    @csrf
    @method('POST')
    <button type="button" data-toggle="dropdown" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
      class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

    <div id="navbarSupportedContent" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">

        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
          <li class="nav-item">
            <a class="nav-link" style="cursor: pointer" data-toggle="modal" data-target="#loginModal">{{ __('Accedi') }}
            </a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" style="cursor: pointer" data-toggle="modal"
              data-target="#registerModal">{{ __('Registrati') }}
            </a>
          </li>
          @endif
          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" v-pre>
              <div class="user-menu">
                <div class="user-name">
                  <span class="userimg">
                    <img src="/assets/images/placeholder.png" alt="">
                  </span>
                  {{ Auth::user()->name }} <span class="caret"></span>
                </div>
              </div>

            </a>

            {{-- metto ul link al profilo --}}

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('show_profile')}}">Dashboard</a>
              <a class="dropdown-item" href="{{route('create_apartment')}}">Inserisci nuovo appartamento </a>
              <a class="dropdown-item" href="{{route('showMessages')}}">Mostra messaggi ricevuti</a>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
          @endguest
        </ul>
      </ul>
    </div>
  </div>
  </div>
</nav>
@yield('scripts')

{{-- @section('scripts')
  @parent
  
  <script>
  $(function () {
      $('#registerForm').submit(function (e) {
          e.preventDefault();
          let formData = $(this).serializeArray();
          $(".invalid-feedback").children("strong").text("");
          $("#registerForm input").removeClass("is-invalid");
          $.ajax({
              method: "POST",
              headers: {
                  Accept: "application/json"
              },
              url: "{{ route('register') }}",
data: formData,
success: () => window.location.assign("{{ route('home') }}"),
error: (response) => {
if(response.status === 422) {
let errors = response.responseJSON.errors;
Object.keys(errors).forEach(function (key) {
$("#" + key + "Input").addClass("is-invalid");
$("#" + key + "Error").children("strong").text(errors[key][0]);
});
} else {
window.location.reload();
}
}
})
});
})
</script>
@endsection --}}