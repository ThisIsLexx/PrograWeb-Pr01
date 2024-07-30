<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <style>
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .animate-scroll {
            animation: scroll 20s linear infinite;
        }

        @keyframes typewriter {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        @keyframes blink {
            50% {
                border-color: transparent;
            }
        }

        #changing-text {
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
            animation: blink 0.75s step-end infinite;
        }

        .typewriter-text {
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
            border-right: .10em solid white;
            animation: typewriter 3s steps(30, end) 1 normal both;
        }
    </style>
</head>

<body>
    <div class="flex space-x-2 justify-end p-5 relative">
        <a href="#about-me" class="text-indigo-700 hover:text-indigo-700/80">Sobre mi</a>
        <a href="#portafolio" class="text-indigo-700 hover:text-indigo-700/80">Mis proyectos</a>
    </div>
    {{-- INICIO: Header --}}
    <section
        class="flex justify-center items-center p-10 w-full bg-gradient-to-r from-blue-800 via-purple-800 to-pink-800">
        <div class="text-center">
            <h1 class="text-white font-bold text-5xl mb-4">Hola! Soy Alexis Guzmán,</h1>
            <h2 id="changing-text"
                class="text-white text-3xl overflow-hidden border-r-4 border-white whitespace-nowrap"></h2>
        </div>
    </section>
    {{-- FIN: Header --}}
    {{-- INICIO: Sección sobre mi --}}
    <section class="flex bg-gray-300 p-10 w-full">
        <div class="basis-1/3 flex flex-col items-center text-center">
            <span class="text-2xl uppercase font-semibold text-gray-800 mb-4">Sobre mí</span>
            <img src="https://via.placeholder.com/150" alt="Foto de perfil"
                class="rounded-full border-4 border-white shadow-lg mb-4">
        </div>
        <div class="basis-2/3 text-justify text-lg text-gray-700">
            <p>Hola! Mi nombre es <span class="font-bold">Alexis Omar Guzmán Castillo</span>, soy un estudiante de la
                Universidad de Guadalajara que se encuentra estudiando la carrera de Ingeniería Informática.
                Me apasiona el desarrollo web y la programación en general, me gusta aprender cosas nuevas y estar en
                constante crecimiento.
                Actualmente me encuentro aprendiendo sobre el desarrollo de aplicaciones web utilizando diferentes
                tecnologías como lo son
                <span class="font-semibold italic">Laravel</span>,
                <span class="font-semibold italic">Vue.js</span>,
                <span class="font-semibold italic">TailwindCSS</span>,
                <span class="font-semibold italic">Livewire</span>, etc.
            </p>
        </div>
    </section>
    {{-- FIN: Sección sobre mi --}}
    {{-- INICIO: Sección portafolio --}}
    <section class="flex flex-col bg-gray-700 p-10 w-full">
        <span class="text-4xl text-white font-semibold text-center mb-10">Proyectos en los que<br>he trabajado</span>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div
                class="p-5 rounded-md bg-gray-100 hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                <h3 class="text-xl font-semibold mb-2">Credenciales FEU</h3>
                <p class="text-gray-700">Sistema desarrollado con Vue.js y php, para credencializar información de
                    miembros de la federación estudiantil universitaria</p>
            </div>
            <div
                class="p-5 rounded-md bg-gray-100 hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                <h3 class="text-xl font-semibold mb-2">Proyecto 2</h3>
                <p class="text-gray-700">Descripción breve del proyecto.</p>
            </div>
            <div
                class="p-5 rounded-md bg-gray-100 hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                <h3 class="text-xl font-semibold mb-2">Proyecto 3</h3>
                <p class="text-gray-700">Descripción breve del proyecto.</p>
            </div>
        </div>
    </section>
    {{-- FIN: Sección portafolio --}}
    {{-- INICIO: Sección tecnologías --}}
    <section class="bg-gray-300 p-10 w-full">
        <div class="flex justify-center mb-10">
            <span class="text-4xl uppercase font-semibold text-gray-800">Tecnologías</span>
        </div>
        <div class="overflow-hidden relative w-full max-w-4xl mx-auto">
            <div id="carousel" class="flex space-x-6 animate-scroll">
                <div class="flex flex-col items-center min-w-[100px]">
                    <img src="https://via.placeholder.com/50" alt="MySQL" class="mb-2">
                    <span class="text-lg font-semibold text-gray-700">MySQL</span>
                </div>
                <div class="flex flex-col items-center min-w-[100px]">
                    <img src="https://via.placeholder.com/50" alt="SQL" class="mb-2">
                    <span class="text-lg font-semibold text-gray-700">SQL</span>
                </div>
                <div class="flex flex-col items-center min-w-[100px]">
                    <img src="https://via.placeholder.com/50" alt="Laravel" class="mb-2">
                    <span class="text-lg font-semibold text-gray-700">Laravel</span>
                </div>
                <div class="flex flex-col items-center min-w-[100px]">
                    <img src="https://via.placeholder.com/50" alt="TailwindCSS" class="mb-2">
                    <span class="text-lg font-semibold text-gray-700">TailwindCSS</span>
                </div>
                <div class="flex flex-col items-center min-w-[100px]">
                    <img src="https://via.placeholder.com/50" alt="Livewire" class="mb-2">
                    <span class="text-lg font-semibold text-gray-700">Livewire</span>
                </div>
                <div class="flex flex-col items-center min-w-[100px]">
                    <img src="https://via.placeholder.com/50" alt="Vue.js" class="mb-2">
                    <span class="text-lg font-semibold text-gray-700">Vue.js</span>
                </div>
                <div class="flex flex-col items-center min-w-[100px]">
                    <img src="https://via.placeholder.com/50" alt="PHP" class="mb-2">
                    <span class="text-lg font-semibold text-gray-700">PHP</span>
                </div>
                <div class="flex flex-col items-center min-w-[100px]">
                    <img src="https://via.placeholder.com/50" alt="XML" class="mb-2">
                    <span class="text-lg font-semibold text-gray-700">XML</span>
                </div>
            </div>
        </div>
    </section>
    {{-- FIN: Sección tecnologías --}}
</body>

</html>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const carousel = document.getElementById('carousel');
        const items = carousel.children;
        let index = 0;

        function showNextItem() {
            index = (index + 1) % items.length;
            carousel.style.transform = `translateX(-${index * 100}%)`;
        }

        setInterval(showNextItem, 2000); // Cambiar cada 3 segundos
    });
    document.addEventListener("DOMContentLoaded", function() {
        const texts = ["Desarrollador web...", "Ingeniero en Software...", "Entusiasta de la Tecnología...",
            "Aprendiz de por Vida..."
        ];
        let index = 0;
        const element = document.getElementById('changing-text');

        function updateText() {
            element.classList.remove('typewriter-text');
            void element.offsetWidth; // Trigger reflow to restart animation
            element.textContent = texts[index];
            element.classList.add('typewriter-text');
            index = (index + 1) % texts.length;
        }

        updateText(); // Initialize with the first text
        setInterval(updateText, 4000); // Change text every 4 seconds
    });
</script>
