
<!-- Footer -->
<footer class="text-center text-lg-start card dark:bg-gray-800 text-muted ">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="footer-left">
        UTJ Tikets | &nbsp;<span id="clock"></span> - {{ date('d/m/Y') }}
        
    </div>
      <!-- Left -->
  
      <!-- Right -->
      <div class="inline-flex items-center">
        <a href="javascript:void(0)" class="me-4 link-secondary">
            <i class="fab fa-github"></i>
          </a>
        <a href="/Developer" style="font-size: 11px;" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
          </svg>
          Developer
        </a>

      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  

    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <div class="container text-center text-md-start">
        <!-- Grid row -->
        <div class="row ">
          <div class=" py-8 sm:py-8">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <h3 class="fw-bold mb-4 text-center text-lg font-semibold leading-8 text-gray-900">
                    <a href="/home"> <img src="{{asset('images/utj.png')}}" width="60" class="fas fa-gem me-2 text-secondary"> </a>  
                   </h3>
                   <div class="text-center  mb-2 leading-4 ">
                    <a href="/legal"> All rights reserved</a> &copy; {{ date('Y') }}
                   </div>  
              
              <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="{{asset('images/UTyP.png')}}" alt="Transistor" width="148" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="{{asset('images/logo_sep.png')}}" alt="Reform" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="{{asset('images/jalisco.png')}}" alt="Tuple" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="{{asset('images/PMO.png')}}" alt="SavvyCal" width="158" height="48">
                <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="{{asset('images/logo_shape.png')}}" alt="Statamic" width="158" height="48">
              </div>
            </div>
          </div>
        </div>
        <!-- Grid row -->
      </div>
    </section>

  </footer>
  <!-- Footer -->
<script>
    function updateClock() {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();
        var ampm = hours >= 12 ? 'PM' : 'AM';

        // Convertir las horas de formato de 24 horas a formato de 12 horas
        hours = hours % 12;
        hours = hours ? hours : 12;

        // Asegurarse de que los valores de minutos y segundos siempre tengan dos dígitos
        minutes = (minutes < 10 ? "0" : "") + minutes;
        seconds = (seconds < 10 ? "0" : "") + seconds;

        var timeString = hours + ":" + minutes + ":" + seconds + " " + ampm;

        document.getElementById("clock").textContent = timeString;
    }

    // Actualizar el reloj cada segundo
    setInterval(updateClock, 1000);
</script>