<aside id="sidebar-wrapper" class="dark:bg-gray-800 rounded">
    <div class="sidebar-brand">
        <a href="{{ url('/') }}"> 
            <img class="navbar-brand-full app-header-logo centered-image" src="{{asset('images/utj.png')}}" width="66"  alt=""/>
        </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ url('/') }}" class="small-sidebar-text">
            <img class="navbar-brand-full centered-image" src="{{asset('images/utj.png')}}" width="29"  alt=""/>
        </a>
    </div>
    <ul class="sidebar-menu mt-3">
        @include('layouts.menu')
    </ul>
</aside>
<style>
    .centered-image {
    display: block;
    margin: 10px auto 0; /* Esto centrará la imagen horizontalmente */
    text-align: center; /* Esto centrará la imagen verticalmente en caso de que sea menor que el alto del contenedor */
}
</style>