@extends('layouts.app')

@section('title','Dashboard')
@section('content')
    <section class="section dark:bg-gray-800">
        <div class="section-header dark:bg-gray-800">
            <h1 class="page__heading text-black dark:text-white font-semibold">Dashboard</h1>
        </div>
    </section>
    
        <div class="section-body card  dark:bg-gray-800/50 dark:bg-gradient-to-bl  via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex  transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500"> 
          <div class="row">
            <div class="flex flex-col text-center w-full mb-2 mt-6"> 
            <h2 class="text-xs text-indigo-500 tracking-widest font-medium  title-font mb-1">UTJ CCD</h2>
          </div>
                <div class="col-lg-12">
                        <div class=" card-body dark:bg-gray-800 ">    
                            <div class="row"> 
                              <div class="col-md-2 col-xl-4">
                                <div class="card bg-c-marketing motion-safe:hover:scale-[1.01] order-card">
                                    <div class="card-block">
                                        <div class="grid grid-cols-2 items-center"> <!-- Utilizamos una cuadrícula para alinear el texto y el ícono -->
                                            <div class="col-span-1">
                                                <h5 class="text-center text-black dark:text-white font-semibold ">Usuarios</h5>
                                            </div>
                                            <div class="col-span-1">
                                                <h2 class="text-right"><i class="bi bi-caret-right-fill text-black"></i><span></span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                                    <div class="col-md-2 col-xl-4">
                                      <div class="card bg-c-pink motion-safe:hover:scale-[1.01] order-card">
                                          <div class="card-block">
                                              <div class="grid grid-cols-2 items-center"> <!-- Utilizamos una cuadrícula para alinear el texto y el ícono -->
                                                  <div class="col-span-1">
                                                      <h5 class="text-center text-black dark:text-white font-semibold">Roles</h5>
                                                  </div>
                                                  <div class="col-span-1">
                                                      <h2 class="text-right"><i class="bi bi-caret-right-fill text-black"></i><span></span></h2>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                <div class="col-md-2 col-xl-4">
                                  <div class="card bg-c-blue motion-safe:hover:scale-[1.01] order-card">
                                      <div class="card-block">
                                         <a href="{{ route('soportes.index') }}"> <div class="grid grid-cols-2 items-center"> <!-- Utilizamos una cuadrícula para alinear el texto y el ícono -->
                                              <div class="col-span-1">
                                                  <h5 class="text-center text-black dark:text-white font-semibold">Soporte Técnico</h5>
                                              </div>
                                              <div class="col-span-1">
                                                  <h2 class="text-right"><i class="bi bi-caret-right-fill text-black"></i><span></span></h2>
                                              </div>
                                          </div></a>
                                      </div>
                                  </div>
                              </div>
                                <div class="col-md-2 col-xl-4">
                                  <div class="card bg-c-pink motion-safe:hover:scale-[1.01] order-card">
                                      <div class="card-block">
                                          <div class="grid grid-cols-2 items-center"> <!-- Utilizamos una cuadrícula para alinear el texto y el ícono -->
                                              <div class="col-span-1">
                                                  <h5 class="text-center text-black dark:text-white font-semibold">Solicitud de Espacios y Aulas</h5>
                                              </div>
                                              <div class="col-span-1">
                                                  <h2 class="text-right"><i class="bi bi-caret-right-fill text-black"></i><span></span></h2>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                                <div class="col-md-2 col-xl-4">
                                  <div class="card bg-c-blue motion-safe:hover:scale-[1.01] order-card">
                                      <div class="card-block">
                                          <div class="grid grid-cols-2 items-center"> <!-- Utilizamos una cuadrícula para alinear el texto y el ícono -->
                                              <div class="col-span-1">
                                                  <h5 class="text-center text-black dark:text-white font-semibold">Finanzas</h5>
                                              </div>
                                              <div class="col-span-1">
                                                  <h2 class="text-right"><i class="bi bi-caret-right-fill text-black"></i><span></span></h2>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-2 col-xl-4">
                                  <div class="card bg-c-marketing motion-safe:hover:scale-[1.01] order-card">
                                      <div class="card-block">
                                          <div class="grid grid-cols-2 items-center"> <!-- Utilizamos una cuadrícula para alinear el texto y el ícono -->
                                              <div class="col-span-1">
                                                  <h5 class="text-center text-black dark:text-white font-semibold">Quejas</h5>
                                              </div>
                                              <div class="col-span-1">
                                                  <h2 class="text-right"><i class="bi bi-caret-right-fill text-black"></i><span></span></h2>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div> 
                        </div>
                </div>
            </div>
        </div>
    
    
        <section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
          <div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20"></div>
          <div class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center"></div>
          <div class="mx-auto max-w-2xl lg:max-w-4xl">
              <img class="mx-auto h-36" src="{{asset('images/Universidad.png')}}" alt="">
              <figure class="mt-10">
                  <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                      <p>“No dejes que la falta de recursos te impida alcanzar tus metas académicas. Ofrecemos opciones de becas y asistencia financiera para ayudarte en tu camino hacia el éxito.”</p>
                  </blockquote>
                  <figcaption class="mt-10">
                      <img class="mx-auto h-20 w-20 rounded-full" src="{{asset('images/dir.png')}}" alt="">
                      <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                          <div class="font-semibold text-gray-900">Dr. Héctor Pulido González </div>
                          <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
                              <circle cx="1" cy="1" r="1" />
                          </svg>
                          <div class="text-gray-600"> Rector de la Universidad</div>
                      </div>
                  </figcaption>
              </figure>
          </div>
      </section>

@endsection

