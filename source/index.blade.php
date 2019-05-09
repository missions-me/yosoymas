@extends('_layouts.master')

@section('body')

@include('splash')

<section class="text-center p-10 md:py-20 bg-purple border-t-4 border-white" style="padding-bottom: 300px;">
    <p class="text-white font-bold md:text-xl max-w-lg mx-auto">
        Yo Soy Más es un movimiento de mujeres Peruanas para mujeres Peruanas. Yo Soy Más cree que las mujeres del Perú son las heroínas del Perú. Queremos brindar ayuda, esperanza y sanidad a la identidad de las mujeres sin disminuir la identidad del hombre.
    </p>
</section>

<section class="text-center py-20 px-5 md:py-20">
    
    <div class="shadow hover:shadow-lg mb-24 mx-auto relative text-white hover:text-orange modal-btn cursor-pointer hoverable" style="max-width: 400px; margin-top: -300px">
        <div class="flex w-full h-full absolute justify-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current inherit w-24 h-24" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM7 6l8 4-8 4V6z"/></svg>
        </div>
        <img src="/assets/images/yo-soy-mas-video-thumb.png" class="w-full h-auto"/>
    </div>
    
    <div class="max-w-md mx-auto md:mb-24 mb-4">
        <h2 class="text-lg font-extrabold uppercase tracking-wide text-purple mb-2">Violencia Contra La Mujer</h2>
        <p>La violencia contra las mujeres es un problema social de grandes dimensiones, es una forma de discriminación, maltrato y abuso sexual que en el Perú ha alcanzado cifras alarmantes.</p>
    </div>
    
    <div class="flex flex-wrap max-w-3xl mx-auto">
        <div class="w-full lg:w-1/3 md:px-16">
            <h3 class="text-5xl font-extrabold tracking-wide text-orange">52</h3>
            <p class="mb-4">Entre enero y abril de 2019, <strong class="font-bold">52</strong> mujeres han sido asesinadas como consecuencia de la violencia doméstica.</p>
        </div>
        
        <div class="w-full lg:w-1/3 md:px-16">
            <h3 class="text-5xl font-extrabold tracking-wide text-green">133,600</h3>
            <p class="mb-4">Solo en los “Centro de Emergencia Mujer” del ministerio de la mujer se atendieron a <strong class="font-bold">133,600</strong> mujeres en el año 2018.</p>
        </div>
        
        <div class="w-full lg:w-1/3 md:px-16">
            <h3 class="text-5xl font-extrabold tracking-wide text-light-blue">81,600</h3>
            <p>En 2018 la linea “100” recibió más de <strong class="font-bold">81,000</strong> llamadas telofónicas legítimas, denunciando actos de violencia contra la mujer.</p>
        </div>
    </div>

</section>

<section class="text-center p-10 font-bold bg-blue text-white">
Es hora de que las mujeres del Perú sean protegidas, empoderadas y elevadas.
</section>

<section class="max-w-3xl mx-auto md:py-20">
    <div class="flex flex-wrap">
        
        <div class="w-full md:w-1/2 py-20 px-5">
            <h2 class="text-4xl uppercase tracking-wide font-extrabold text-light-blue text-center md:text-left mb-2">
                Somos Mas
            </h2>
            <h3 class="text-lg uppercase tracking-wide font-extrabold text-orange text-center md:text-left mb-4">
                Talento. Experiencia. Concociminto. Influencia.
            </h3>
            <p>
                Mujeres de gran influencia de todo el mundo se han comprometido a dar apoyo a las mujeres del Perú y a declarar que es hora de que cada mujer se convierta en todo para lo que fue creada. Somos más que madres, más que esposas, más que maestras, más que mujeres de negocios, más que creativas, más que profesionales de servicios. Más que nuestro pasado y más que nuestras circunstancias.
            </p>
        </div>

        <div class="w-full md:w-1/2 bg-orange md:bg-white px-5 py-20 w-full text-white md:text-orange text-center flex items-center flex-col justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current inherit mb-4" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M17 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h2V3a1 1 0 1 1 2 0v1h6V3a1 1 0 0 1 2 0v1zm-2 2H9v1a1 1 0 1 1-2 0V6H5v4h14V6h-2v1a1 1 0 0 1-2 0V6zm4 6H5v8h14v-8z"/></svg>
            <h2 class="text-4xl uppercase tracking-wide font-extrabold">
                <span class="block text-lg">Separa la Fecha</span>
                15 De Mayo
            </h2>

            <p class="font-bold text-lg mb-8">De 3 a 10 PM</p>

            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current inherit mb-4" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M5.64 16.36a9 9 0 1 1 12.72 0l-5.65 5.66a1 1 0 0 1-1.42 0l-5.65-5.66zm11.31-1.41a7 7 0 1 0-9.9 0L12 19.9l4.95-4.95zM12 14a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
            <p class="font-bold max-w-xs">Complejo Deportivo Municipal Niño Héroe Manuel Bonilla</p>
        </div>

    </div>
</section>

<h2 class="text-lg font-extrabold uppercase tracking-wide text-right md:text-center text-light-blue px-5 pt-10 md:mb-8">
    Presentadoras
</h2>

<section class="bg-orange md:py-20 pb-20">
<div id="presentadoras" class="flex flex-wrap max-w-3xl mx-auto">
        <div class="px-5 pt-10 w-full md:w-1/3 pb-200 md:pb-10 bg-white md:bg-orange">
            <h3 class="text-2xl font-extrabold uppercase tracking-wide text-orange md:text-white mb-4">
                Gisela<br> Valcárcel
            </h3>
            <img src="/assets/images/gisela-valcarcel.png" class="mb-4" />
            <img src="/assets/images/statements/ysm-infl-statements-04.svg" class="max-w-xs block mb-4" />
            <p class="md:text-white text-black">
                Anfitriona y productora de televisión, escritora, empresaria, madre, considerada por el diario “El Comercio” como la mujer más influyente del Perú.
            </p>
        </div>

        <div class="px-5 py-10 w-full md:w-1/3 -mt-200 md:mt-0">
            <h3 class="text-2xl font-extrabold uppercase tracking-wide text-orange md:text-white mb-4">
                <br>Yuri
            </h3>
            <img src="/assets/images/yuri.png" class="mb-4" />
            <img src="/assets/images/statements/ysm-infl-statements-05.svg" class="max-w-xs block mb-4" />
            <p class="text-white">
                Cantante popular, actriz y presentadora de televisión mexicana, sus éxitos y producciones musicales la han mantenido en vigor durante más de 30 años.
            </p>
        </div>

        <div class="px-5 py-10 w-full md:w-1/3">
            <h3 class="text-2xl font-extrabold uppercase tracking-wide text-white mb-4">
                Lisa<br> Bevere
            </h3>
            <img src="/assets/images/lisa-bevere.png" class="mb-4" />
            <img src="/assets/images/statements/ysm-infl-statements-06.svg" class="max-w-xs block mb-4" />
            <p class="text-white">
                Comunicadora de renombre mundial, autora de máximas ventas del New York Times, como: ¨Se despierta la Leona¨, y ¨Mujeres con espadas¨,títulos que estan en las manos de millones de mujeres alrededor del mundo.
            </p>
        </div>
</div>
</section>

<section class="max-w-3xl mx-auto py-20 px-5">
    <div id="campaign" class="flex flex-wrap">
        <div class="md:p-10 mb-8 md:mb-0 w-full md:w-1/2">
            <h2 class="text-xl uppercase tracking-wide font-extrabold text-light-blue text-center md:text-left mb-8">
                Únete a La Campaña
            </h2>
            <ol class="list-reset font-bold mb-4">
                <li class="flex items-center mb-4">
                    <div class="px-4 bg-orange text-white text-4xl font-extrabold mr-2">1</div>
                    <div class="text-sm">Publicando el gráfico de Yo Soy Más en cualquiera de las plataformas sociales y usa el hashtag <span class="text-orange">#yosoymas</span></div>
                </li>
                 <li class="flex items-center mb-4">
                    <div class="px-4 bg-orange text-white text-4xl font-extrabold mr-2">2</div>
                    <div class="text-sm">Publicando un video “estilo selfie” compartiendo tu historia (hablar por los que no pueden)</div>
                </li>
                 <li class="flex items-center">
                    <div class="px-4 bg-orange text-white text-4xl font-extrabold mr-2">3</div>
                    <div class="text-sm">Completando la frase: “Yo Soy Mas Que ______.”</div>
                </li>
            </ol>
            <img src="/assets/images/ysmq-example.jpg" width="300" class="shadow" />
        </div>
        <div class="md:p-10 w-full md:w-1/2 text-center">
            <h3 class="text-xl uppercase tracking-wide font-extrabold text-light-blue text-center mb-4">Guarda y Comparta</h3>
            <p class="font-bold mb-4">Hemos creado rescursos para ayudarle a compartir tu historia.</p>
            <div class="flex mb-4">
                <a href="/assets/images/downloads/ysm-que-02.jpg" class="p-4 w-1/2 no-underline block" target="_blank" >
                    <img src="/assets/images/downloads/ysm-que-02.jpg" class="shadow hover:shadow-lg hoverable" />
                </a>
                <a href="/assets/images/downloads/YSM-1x1-03.jpg" class="p-4 w-1/2 no-underline block" target="_blank" >
                    <img src="/assets/images/downloads/YSM-1x1-03.jpg" class="shadow hover:shadow-lg hoverable" />
                </a>
            </div>
            <a href="/descargas" class="inline-block w-auto px-10 py-2 bg-blue text-yellow no-underline hover:bg-light-blue hover:text-orange">mas descargas</a>
        </div>
    </div>
</section>

<section class="bg-green p-10 md:py-20 text-center text-purple">
    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current inherit mb-4" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M6 14H4a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v13a1 1 0 0 1-1.7.7L16.58 18H8a2 2 0 0 1-2-2v-2zm0-2V8c0-1.1.9-2 2-2h8V4H4v8h2zm14-4H8v8h9a1 1 0 0 1 .7.3l2.3 2.29V8z"/></svg>
    <p class="italic text-xl">
        Mientras nos unamos juntos, podemos cambiar la historia de nuestras futuras hijas.
    </p>
</section>

<section id="heroinas" class="py-20 px-5">
    <h2 class="text-4xl uppercase tracking-wide font-extrabold text-light-blue text-center mb-8 leading-tight">
        Las Mujeres Son Las Heroínas del Perú
    </h2>
    <h3 class="text-lg uppercase tracking-wide font-extrabold text-purple text-center mb-8">
        Unidas con una Visión y una Voz.
    </h3>
    <p class="max-w-lg text-left md:text-center mx-auto">
        “Yo Soy Más” es un movimiento creado por y para las mujeres del Perú. A pesar de los antecedentes, las circunstancias desafiantes o las probabilidades insuperables, estas heroínas nacionales están defendiendo a todas las hijas,madres y abuelas de la nación.
    </p>
</section>

<section class="bg-purple pb-20 md:py-20 md:px-5 border-b-4 border-white">
<div class="flex flex-wrap max-w-3xl mx-auto">
        <div class="md:px-10 px-5 pt-10 w-full md:w-1/3 pb-200 md:pb-10 bg-white md:bg-purple">
            <h3 class="text-2xl font-extrabold uppercase tracking-wide text-purple md:text-white mb-4">
                Evangelina<br> Chamorro
            </h3>
            <img src="/assets/images/evangelina-chamorro.png" class="mb-4" />
            <img src="/assets/images/statements/ysm-infl-statements.svg" class="max-w-xs block mb-4" />
            <p class="md:text-white text-black">
                Luchó contra la muerte, en medio de un Huaico que devastó todo menos su Fe.
            </p>
        </div>

        <div class="md:px-10 px-5 py-10 w-full md:w-1/3 -mt-200 md:mt-0">
            <h3 class="text-2xl font-extrabold uppercase tracking-wide md:text-white text-purple mb-4">
                Andrea<br> Llosa
            </h3>
            <img src="/assets/images/andrea-llosa.png" class="mb-4" />
            <img src="/assets/images/statements/ysm-infl-statements-03.svg" class="max-w-xs block mb-4" />
            <p class="text-white">
                Periodista, conductora y directora del programa “Nunca Más” y del programa de entrevistas “Andrea al Mediodía.”
            </p>
        </div>

        {{-- <div class="md:px-10 px-5 py-10 w-full md:w-1/3">
            
        </div> --}}
</div>
</section>

<section id="social" class="bg-light-blue p-10 text-center text-4xl text-purple font-extrabold uppercase tracking-wide">
    #yosoymas
</section>

<section id="sponsors" class="md:flex flex-wrap items-center px-10 py-20 max-w-5xl">
    <div class="lg:w-1/6 md:w-1/3 w-full text-center p-5">
        <img src="/assets/images/logos/lima.png" style="max-height: 100px;" />
    </div>
    <div class="lg:w-1/6 md:w-1/3 w-full text-center p-5">
        <img src="/assets/images/logos/cabecera-mimp-lazo.png" style="max-height: 100px;" />
    </div>
    <div class="lg:w-1/6 md:w-1/3 w-full text-center p-5">
        <img src="/assets/images/logos/unsoloperu-logo.png" style="max-height: 100px;" />
    </div>
    <div class="lg:w-1/6 md:w-1/3 w-full text-center p-5">
        <img src="/assets/images/logos/Emblem_of_the_Peruvian_Army.png" style="max-height: 100px;" />
    </div>
    <div class="lg:w-1/6 md:w-1/3 w-full text-center p-5">
        <img src="/assets/images/logos/perfectura-de-lima.jpg" style="max-height: 100px;" />
    </div>
    <div class="lg:w-1/6 md:w-1/3 w-full text-center p-5">
        <img src="/assets/images/logos/UNMSM-logo.jpg" style="max-height: 100px;" />
    </div>
</section>

<div class="modal">
  <div class="modal-content">
    <span class="modal-close">&times;</span>
    <div class="container mx-auto">
        <div class="video-outer">
          <div class="video-inner">
            <iframe src="https://player.vimeo.com/video/335246316" width="640" height="640" frameborder="0" allow="fullscreen" allowfullscreen></iframe>
          </div>
        </div>
    </div>
  </div>
</div>

@endsection
