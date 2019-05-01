@extends('_layouts.master')

@section('body')

@include('splash')

<section class="text-center p-10 md:py-20 bg-purple border-t-4 border-white">
    <p class="text-white font-bold md:text-xl max-w-lg mx-auto">
        Yo Soy Más es un movimiento de mujeres Peruanas para mujeres Peruanas. Yo Soy Más cree que las mujeres del Perú son las heroínas del Perú. Queremos brindar ayuda, esperanza y sanidad a la identidad de las mujeres sin disminuir la identidad del hombre.
    </p>
</section>

<section class="text-center py-20 px-5 md:py-20">
    
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
            <ol class="list-reset font-bold">
                <li class="flex items-center mb-4">
                    <div class="px-4 bg-orange text-white text-4xl font-extrabold mr-2">1</div>
                    <div class="text-sm">Publica una foto “Soy Mas” y usa <span class="text-orange">#yosoymas</span></div>
                </li>
                 <li class="flex items-center mb-4">
                    <div class="px-4 bg-orange text-white text-4xl font-extrabold mr-2">2</div>
                    <div class="text-sm">Asiste al evento el 15 de Mayo</div>
                </li>
                 <li class="flex items-center">
                    <div class="px-4 bg-orange text-white text-4xl font-extrabold mr-2">3</div>
                    <div class="text-sm">Comparte tu historia con tus amigos en Instagram, Facebook, and Twitter</div>
                </li>
            </ol>
        </div>
        <div class="md:p-10 w-full md:w-1/2 text-center">
            <h3 class="text-xl uppercase tracking-wide font-extrabold text-light-blue text-center mb-4">Guarda y Comparta</h3>
            <p class="font-bold mb-4">Hemos creado rescursos para ayudarle a compartir tu historia.</p>
            <div class="flex mb-4">
                <a href="/assets/images/downloads/YSM-1x1-03.jpg" class="p-4 w-1/2 no-underline block" target="_blank" >
                    <img src="/assets/images/downloads/YSM-1x1-03.jpg" class="shadow hover:shadow-lg" />
                </a>
            </div>
            {{-- <a href="/descargas" class="inline-block w-auto px-10 py-2 bg-blue text-yellow no-underline hover:bg-light-blue hover:text-orange">mas descargas</a> --}}
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

{{-- <div class="-mt-8 text-center">
    <a href="#" class="no-underline mr-4">
        <svg class="group" width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M29.23 58.46C45.3733 58.46 58.46 45.3733 58.46 29.23C58.46 13.0867 45.3733 0 29.23 0C13.0867 0 0 13.0867 0 29.23C0 45.3733 13.0867 58.46 29.23 58.46Z" class="fill-current text-purple group-hover:text-orange"/>
            <path d="M41.9 15H16.57C15.7 15 15 15.7 15 16.57V41.9C15 42.77 15.7 43.47 16.57 43.47H30.21V32.46H26.51V28.15H30.21V24.98C30.21 21.3 32.46 19.3 35.74 19.3C37.31 19.3 38.66 19.42 39.06 19.47V23.31H36.8C35.01 23.31 34.67 24.16 34.67 25.4V28.14H38.94L38.38 32.45H34.67V43.46H41.91C42.78 43.46 43.48 42.76 43.48 41.89V16.57C43.47 15.7 42.77 15 41.9 15Z" class="fill-current text-light-blue group-hover:text-white"/>
        </svg>
    </a>

    <a href="#" class="no-underline mr-4">
        <svg class="group" width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M29.23 58.46C45.3733 58.46 58.46 45.3733 58.46 29.23C58.46 13.0867 45.3733 0 29.23 0C13.0867 0 0 13.0867 0 29.23C0 45.3733 13.0867 58.46 29.23 58.46Z" class="fill-current text-purple group-hover:text-orange"/>
            <path d="M29.23 16.2797C33.45 16.2797 33.95 16.2997 35.62 16.3697C37.16 16.4397 38 16.6997 38.55 16.9097C39.29 17.1997 39.81 17.5397 40.37 18.0897C40.92 18.6397 41.27 19.1697 41.55 19.9097C41.77 20.4697 42.02 21.2997 42.09 22.8397C42.17 24.5097 42.18 25.0097 42.18 29.2297C42.18 33.4497 42.16 33.9497 42.09 35.6197C42.02 37.1597 41.76 37.9997 41.55 38.5497C41.26 39.2897 40.92 39.8097 40.37 40.3697C39.82 40.9197 39.29 41.2697 38.55 41.5497C37.99 41.7697 37.16 42.0197 35.62 42.0897C33.95 42.1697 33.45 42.1797 29.23 42.1797C25.01 42.1797 24.51 42.1597 22.84 42.0897C21.3 42.0197 20.46 41.7597 19.91 41.5497C19.17 41.2597 18.65 40.9197 18.09 40.3697C17.54 39.8197 17.19 39.2897 16.91 38.5497C16.69 37.9897 16.44 37.1597 16.37 35.6197C16.29 33.9497 16.28 33.4497 16.28 29.2297C16.28 25.0097 16.3 24.5097 16.37 22.8397C16.44 21.2997 16.7 20.4597 16.91 19.9097C17.2 19.1697 17.54 18.6497 18.09 18.0897C18.64 17.5397 19.17 17.1897 19.91 16.9097C20.47 16.6897 21.3 16.4397 22.84 16.3697C24.51 16.2897 25.01 16.2797 29.23 16.2797ZM29.23 13.4297C24.94 13.4297 24.4 13.4497 22.71 13.5297C21.03 13.6097 19.88 13.8697 18.87 14.2597C17.83 14.6597 16.95 15.1997 16.07 16.0797C15.19 16.9597 14.65 17.8397 14.25 18.8797C13.86 19.8897 13.59 21.0297 13.52 22.7197C13.44 24.4097 13.42 24.9397 13.42 29.2397C13.42 33.5297 13.44 34.0697 13.52 35.7597C13.6 37.4397 13.86 38.5897 14.25 39.5997C14.65 40.6397 15.19 41.5197 16.07 42.3997C16.95 43.2797 17.83 43.8197 18.87 44.2197C19.88 44.6097 21.02 44.8797 22.71 44.9497C24.4 45.0297 24.93 45.0497 29.23 45.0497C33.53 45.0497 34.06 45.0297 35.75 44.9497C37.43 44.8697 38.58 44.6097 39.59 44.2197C40.63 43.8197 41.51 43.2797 42.39 42.3997C43.27 41.5197 43.81 40.6397 44.21 39.5997C44.6 38.5897 44.87 37.4497 44.94 35.7597C45.02 34.0697 45.04 33.5397 45.04 29.2397C45.04 24.9397 45.02 24.4097 44.94 22.7197C44.86 21.0397 44.6 19.8897 44.21 18.8797C43.81 17.8397 43.27 16.9597 42.39 16.0797C41.51 15.1997 40.63 14.6597 39.59 14.2597C38.58 13.8697 37.44 13.5997 35.75 13.5297C34.06 13.4497 33.53 13.4297 29.23 13.4297Z" class="fill-current text-light-blue group-hover:text-white"/>
            <path d="M29.23 21.1196C24.75 21.1196 21.11 24.7496 21.11 29.2396C21.11 33.7296 24.74 37.3596 29.23 37.3596C33.72 37.3596 37.35 33.7296 37.35 29.2396C37.35 24.7496 33.72 21.1196 29.23 21.1196ZM29.23 34.4996C26.32 34.4996 23.96 32.1396 23.96 29.2296C23.96 26.3196 26.32 23.9596 29.23 23.9596C32.14 23.9596 34.5 26.3196 34.5 29.2296C34.5 32.1396 32.14 34.4996 29.23 34.4996Z" class="fill-current text-light-blue group-hover:text-white"/>
            <path d="M37.67 22.6999C38.7194 22.6999 39.57 21.8492 39.57 20.7999C39.57 19.7506 38.7194 18.8999 37.67 18.8999C36.6207 18.8999 35.7701 19.7506 35.7701 20.7999C35.7701 21.8492 36.6207 22.6999 37.67 22.6999Z" class="fill-current text-light-blue group-hover:text-white"/>
        </svg>
    </a>

    <a href="#" class="no-underline">
        <svg class="group" width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M29.23 58.46C45.3733 58.46 58.46 45.3733 58.46 29.23C58.46 13.0867 45.3733 0 29.23 0C13.0867 0 0 13.0867 0 29.23C0 45.3733 13.0867 58.46 29.23 58.46Z" class="fill-current text-purple group-hover:text-orange"/>
            <path d="M46.86 16.8399C45.31 17.6199 43.72 18.1799 42.1 18.5099C36.68 13.1699 28.41 17.6699 29.68 25.0999C24.19 24.8599 19.02 23.0399 14.59 17.5999C12.6 22.2599 14.18 25.0699 16.92 27.2699C15.81 27.2799 14.71 26.9899 13.6 26.3999C13.74 30.6299 16.17 32.5399 19.49 33.6299C18.47 33.9099 17.36 33.9699 16.17 33.8599C17.42 37.1699 19.87 38.5099 22.95 38.7799C19.89 41.1799 16.26 42.3699 12.33 41.9199C27.24 50.5499 44.31 40.7099 44.26 23.3599C45.94 21.9999 47.41 20.6099 47.63 19.6499C46.24 20.1999 44.8 20.6799 43.59 20.7699C45.12 19.7399 46.23 18.3399 46.86 16.8399Z" class="fill-current text-light-blue group-hover:text-white"/>
        </svg>
    </a>

</div> --}}

@endsection
