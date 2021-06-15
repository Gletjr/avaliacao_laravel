<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PrqTech</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            
        </style>
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Entrar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrar</a>
                        @endif
                    @endauth
                </div>
            @endif

        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 1080 640" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M129.92 456.26c125.49,0.72 102.95,14.55 102.95,-114.62 0,-62.96 -5.15,-151.43 0.73,-212.11l87.52 -0.05c7.32,59.73 12.03,65.52 75.32,65.28 22.05,-0.08 43.18,1.64 60.31,-8.86 14.92,-9.15 30.01,-21.39 49.39,-5.54 24.88,20.36 5.08,79.53 -46.15,46.15 -20.87,-13.6 -96.87,-15.8 -123.07,-7.92l1.39 16.84c17.8,5.59 45.34,-1.81 61.27,6.16l0.72 14.04c-23.41,9.41 -54.46,2.64 -72.56,-9.77 -60.38,-41.37 -74.72,71.74 -13.63,55.87 21.96,-5.71 15.49,-20.57 62.84,-20.26 55.87,0.36 45.84,-13.98 65.61,-19.9 62.06,-18.58 50.04,93.5 -10.76,54.39 -16.71,-10.75 -44.42,-20.51 -68.21,-9.85l1.57 15.29c18.29,8.8 40.05,-0.63 53.09,5.13 5.86,2.58 22.29,20.12 -24.99,19.6 -106.65,-1.18 -59.36,-4.4 -98.59,-19.06 -40.79,-15.24 -60.64,37.33 -31.05,57.11 27.69,18.51 44.56,-15.91 87.5,-16.37 33.47,-0.36 81.98,6.63 107.43,-9.15 53.11,-32.94 64.28,17.08 55.11,35.43 -19.63,39.26 -57.16,-1.48 -81.8,-4.36 -17.18,-2.01 -40.15,-0.54 -58.03,-0.7 -19.79,-0.17 -38.01,-6.1 -37.24,16.08 16.13,14 41.65,0.04 63.76,9.93l-0.59 14.12c-23.89,10.38 -57.69,-6.74 -72.68,17.22 -14.88,23.78 0.7,42.22 -26.79,60.3 -26.73,17.58 -131.6,10.63 -170.43,10.46l0.05 -60.88zm513.17 -101.72c9.08,-83 -22.23,-186.71 -75.83,-241.78 -24.89,-25.57 -49.33,-51.98 -88.65,-72.53 -35.75,-18.69 -74.67,-33.71 -122.39,-38.51 -187.74,-18.87 -338.19,120.19 -354.56,286.94 -18.55,188.98 120,336.61 287.2,354.36 128.13,13.61 258.47,-55.35 315.47,-164.38 19.41,-37.13 33.36,-74.69 38.76,-124.1z " fill="blue" stroke="black"/>
                            
                        </g>
                    </svg>
                </div>

               <div class="mt-12 bg-white dark:bg-gray-800  shadow" style="width: 59rem;">
                <div class="row">
                    <div class="card" style="width: 15rem;">
                        <img class="card-img-top" style="width: auto;" src="https://www.ibe.edu.br/wp-content/uploads/2019/12/big-tech-1-680x380.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Parques tecnológicos</h5>
                          <p class="card-text">Os parques oferecem oportunidades para as empresas transformarem pesquisas em produtos</p>
                          <a href="{{ route('login') }}" class="btn btn-primary">Veja aqui</a>
                        </div>
                      </div>
                      <div class="card" style="width: 15rem;">
                        <img class="card-img-top" style="width: auto;" src="https://www.ibe.edu.br/wp-content/uploads/2019/02/tech-1-680x380.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">SLIT Jales</h5>
                          <p class="card-text">O Sistema Local de Inovação Tecnológica é composto por entidades que representam instituições de ensino e pesquisa</p>
                          <a href="{{ route('login') }}" class="btn btn-primary">Conheça-nos</a>
                        </div>
                      </div>
                      <div class="card" style="width: 15rem;">
                        <img class="card-img-top" style="width: auto;" src="http://www.unitech-rio.com.br/blog/wp-content/uploads/2020/07/284387-tudo-o-que-voce-precisa-saber-sobre-a-estrategia-multicloud-680x380.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Vantagem de Implantação</h5>
                          <p class="card-text">Incrementar a riqueza nas comunidades e estimular a transferência de tecnologia e a competitividade; 
                            </p>
                          <a href="{{ route('login') }}" class="btn btn-primary">Informe-se</a>
                        </div>
                      </div>
                              <div class="card" style="width: 15rem;">
                    <img class="card-img-top" style="width: auto;" src="https://www.ibe.edu.br/wp-content/uploads/2021/01/venture-capital-1-1-680x380.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">CoMIT Jales</h5>
                      <p class="card-text">O Conselho Municipal de Inovação Tecnológica é formado por instituições educacionais, poder público e sociedade civil</p>
                      <a href="{{ route('login') }}"  class="btn btn-primary">Faça parte</a>
                    </div>
                  </div>
               </div>
                </div>

                <!--
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold">Documentation</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <a href="https://www.fatecjales.edu.br/" class="badge badge-success" target="_blank">
                                FATEC Jales
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Sistema para Atividade Avaliativa Tópios Especiais 2 - Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
