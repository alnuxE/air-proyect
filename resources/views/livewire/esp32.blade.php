<div>

    {{-- {{dd($response)}} --}}
    {{-- estadisticas en tiempo real --}}
    <div class="bg-slate-400 w-full h-screen flex flex-col justify-center items-center">
        <h1
            class="mb-4 text-4xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Estadísticas en Tiempo Real</h1>
        <div class="w-full h-1/2 flex flex-wrap justify-center items-center gap-x-10">

            <div
                class="w-1/3 max-w-60 h-40 bg-slate-600 text-center py-5 rounded-xl flex flex-col justify-center items-center shadow-lg">
                <svg class="w-20" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M621.7 451.6m-129.5 0a129.5 129.5 0 1 0 259 0 129.5 129.5 0 1 0-259 0Z" fill="#F4CE26">
                        </path>
                        <path
                            d="M621.7 607.4c-85.9 0-155.8-69.9-155.8-155.8s69.9-155.8 155.8-155.8 155.8 69.9 155.8 155.8S707.6 607.4 621.7 607.4z m0-258.9c-56.8 0-103.1 46.2-103.1 103.1s46.3 103.1 103.1 103.1 103-46.3 103-103.2-46.2-103-103-103z"
                            fill="#333333"></path>
                        <path
                            d="M502.1 198c11.8-6.8 26.9-2.8 33.7 9l24.7 42.7c6.8 11.8 2.8 26.9-9 33.7-11.8 6.8-26.9 2.8-33.7-9l-24.7-42.7c-6.9-11.9-2.8-26.9 9-33.7zM807.8 406.4c3.5 13.2 17 21 30.2 17.4l47.6-12.8c13.2-3.5 21-17 17.4-30.2-3.5-13.2-17-21-30.2-17.4l-47.6 12.8c-13.1 3.5-20.9 17-17.4 30.2zM794.6 517.3c-3.5 13.2 4.3 26.7 17.4 30.2l47.6 12.8c13.2 3.5 26.7-4.3 30.2-17.4 3.5-13.2-4.3-26.7-17.4-30.2l-47.6-12.8c-13.1-3.5-26.6 4.3-30.2 17.4zM665.7 161.8c13.6 0 24.7 11 24.7 24.7v49.3c0 13.6-11 24.7-24.7 24.7-13.6 0-24.7-11-24.7-24.7v-49.3c0-13.6 11-24.7 24.7-24.7zM832.8 231.3c-9.6-9.6-25.2-9.6-34.9 0L763 266.2c-9.6 9.6-9.6 25.2 0 34.9 9.6 9.6 25.2 9.6 34.9 0l34.9-34.9c9.7-9.7 9.7-25.3 0-34.9z"
                            fill="#333333"></path>
                        <path
                            d="M264.5 740.8c-2.2 0.2-4.3 0.4-6.5 0.5-60.5 3.4-111-49.7-111-111s49.7-111 111-111c4.2 0 8.4 0.2 12.5 0.7-0.1-2.3-0.1-4.6-0.1-6.9 0-85.1 69-154.1 154.1-154.1 75.2 0 137.8 53.8 151.4 125 6.9-1.1 14-1.7 21.2-1.7 71.5 0 129.5 58 129.5 129.5-0.2 45.7-23.8 85.9-59.6 108.9-20.2 13-44.2 21.3-70 20.5-3.5-0.1-6.9-0.3-10.3-0.7-1.1 0.1-2.3 0.1-3.4 0.1H264.5z"
                            fill="#FFFFFF"></path>
                        <path
                            d="M252.4 767.8c-32.4 0-63.3-12.5-87.9-35.8-27.9-26.4-43.9-63.5-43.9-101.7 0-71.3 54.7-130.2 124.3-136.7 9.8-90.3 86.5-160.9 179.4-160.9 78.4 0 147 50.6 171.2 123.3h1.4c86 0 155.9 69.9 155.9 155.8 0 53.3-26.7 102.3-71.5 131.1-26.5 17.1-56.1 25.6-85.1 24.7-3.4-0.1-6.7-0.3-10-0.6-1 0-2 0.1-3 0.1H265.8c-2.1 0.2-4.2 0.4-6.3 0.5-2.4 0.1-4.7 0.2-7.1 0.2z m5.5-222.1c-46.6 0-84.6 38-84.6 84.6 0 23.8 10 46.9 27.4 63.4 15.7 14.9 35.7 22.5 55.7 21.2 1.7-0.1 3.5-0.2 5.2-0.4l2.8-0.2h324.9c2.8 0.3 5.6 0.5 8.4 0.6 23.2 0.8 42.8-8.5 54.9-16.4 29.8-19 47.5-51.4 47.5-86.7 0-56.8-46.3-103.1-103.1-103.1-5.7 0-11.4 0.5-16.9 1.4l-25.4 4.2-4.8-25.3c-11.5-60-64.2-103.6-125.5-103.6-70.5 0-127.8 57.3-127.8 127.8 0 1.9 0 3.8 0.1 5.7l1.4 30.9-30.7-3.5c-3.1-0.4-6.2-0.6-9.5-0.6z"
                            fill="#333333"></path>
                    </g>
                </svg>
                <h1>Calidad del aire</h1>
                <p>{{ $response['calidad'] }} ppm</p>
            </div>
            <div
                class="w-1/3 max-w-60 h-40 bg-slate-600 text-center py-5 rounded-xl flex flex-col justify-center items-center shadow-lg">
                <svg class="w-20" viewBox="0 0 1024 1024" class="icon" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M226.5 179.4m-35.7 0a35.7 35.7 0 1 0 71.4 0 35.7 35.7 0 1 0-71.4 0Z" fill="#154B8B">
                        </path>
                        <path d="M397.2 687.6m-35.7 0a35.7 35.7 0 1 0 71.4 0 35.7 35.7 0 1 0-71.4 0Z" fill="#154B8B">
                        </path>
                        <path d="M71.8 314.2m-35.7 0a35.7 35.7 0 1 0 71.4 0 35.7 35.7 0 1 0-71.4 0Z" fill="#154B8B">
                        </path>
                        <path d="M551.9 552.8m-35.7 0a35.7 35.7 0 1 0 71.4 0 35.7 35.7 0 1 0-71.4 0Z" fill="#154B8B">
                        </path>
                        <path d="M57.8 518.9m-35.7 0a35.7 35.7 0 1 0 71.4 0 35.7 35.7 0 1 0-71.4 0Z" fill="#154B8B">
                        </path>
                        <path d="M566 348.2m-35.7 0a35.7 35.7 0 1 0 71.4 0 35.7 35.7 0 1 0-71.4 0Z" fill="#154B8B">
                        </path>
                        <path d="M192.5 673.6m-35.7 0a35.7 35.7 0 1 0 71.4 0 35.7 35.7 0 1 0-71.4 0Z" fill="#154B8B">
                        </path>
                        <path d="M431.2 193.5m-35.7 0a35.7 35.7 0 1 0 71.4 0 35.7 35.7 0 1 0-71.4 0Z" fill="#154B8B">
                        </path>
                        <path d="M311.9 433.5m-169.4 0a169.4 169.4 0 1 0 338.8 0 169.4 169.4 0 1 0-338.8 0Z"
                            fill="#9BCFDD">
                        </path>
                        <path
                            d="M311.7 617c-27.9 0-55.7-6.5-81.5-19.3-43.9-21.8-76.6-59.4-92.2-105.8s-12.2-96.2 9.6-140c21.8-43.9 59.4-76.6 105.8-92.2 46.4-15.6 96.2-12.2 140 9.6 43.9 21.8 76.6 59.4 92.2 105.8 32.2 95.9-19.6 200-115.4 232.2-19.1 6.5-38.9 9.7-58.5 9.7z m0.3-339c-16.7 0-33.4 2.7-49.7 8.2-39.4 13.2-71.2 41-89.7 78.2s-21.4 79.3-8.2 118.7c13.2 39.4 41 71.2 78.2 89.7s79.3 21.4 118.7 8.2c81.3-27.3 125.2-115.6 97.9-196.9-13.2-39.4-41-71.2-78.2-89.7-21.8-10.9-45.3-16.4-69-16.4z"
                            fill="#154B8B"></path>
                        <path
                            d="M652.7 208c-182.5 0-330.4 147.9-330.4 330.4 0 2.3 0.1 4.6 0.2 6.8H215.2c-89 0-161.8 72.8-161.8 161.8 0 89 72.8 161.8 161.8 161.8h405.6c4.2 0 8.2-0.3 12.3-0.6 6.5 0.4 13 0.6 19.6 0.6 182.5 0 330.4-147.9 330.4-330.4C983 355.9 835.1 208 652.7 208z"
                            fill="#FCFCFC"></path>
                        <path
                            d="M652.7 882.7c-6 0-12.4-0.2-19.5-0.6-4 0.3-8.1 0.6-12.4 0.6H215.2c-46.8 0-90.8-18.3-124.1-51.6S39.5 753.8 39.5 707s18.3-90.8 51.6-124.1 77.4-51.6 124.1-51.6h93.2c1.8-89.3 37.4-173 100.8-236.4 65-65 151.5-100.9 243.5-100.9s178.4 35.8 243.5 100.9c65 65 100.9 151.5 100.9 243.5s-35.8 178.4-100.9 243.5-151.6 100.8-243.5 100.8z m-19.6-28.5h0.8c6.9 0.4 13.1 0.6 18.8 0.6 84.5 0 164-32.9 223.7-92.7 59.8-59.8 92.7-139.2 92.7-223.7s-32.9-164-92.7-223.7C816.6 254.9 737.2 222 652.7 222s-164 32.9-223.7 92.7c-59.8 59.8-92.7 139.2-92.7 223.7 0 1.2 0 2.4 0.1 3.7 0 0.9 0.1 1.9 0.1 2.8 0.1 3.8-1.4 7.4-4 10.1-2.6 2.7-6.2 4.2-10 4.2H215.2c-39.3 0-76.4 15.4-104.4 43.4S67.4 667.7 67.4 707c0 39.3 15.4 76.4 43.4 104.4s65.1 43.4 104.4 43.4h405.6c3.6 0 7.2-0.3 11.1-0.6h1.2z"
                            fill="#144884"></path>
                    </g>
                </svg>
                <h1>Humedad</h1>
                <p>{{ $response['humedad'] }} %</p>
            </div>
            <div
                class="w-1/3 max-w-60 h-40 bg-slate-600 text-center py-5 rounded-xl flex flex-col justify-center items-center shadow-lg">
                <svg class="w-20" viewBox="0 0 1024 1024" class="icon" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M440.277481 390.185208V626.592988l-83.151447 60.801898L323.222878 776.847429l41.997715 137.757747 84.311922 59.814055 101.041317 10.869471 94.270275-53.394674s50.168999-82.211558 51.633181-88.224932c1.464182-6.013375-3.500609-108.544448-5.700078-114.164603s-25.11487-62.950217-25.11487-62.950217l-72.809466-51.150448 0.127876-218.987856"
                            fill="#cc9071"></path>
                        <path d="M432.876651 310.262633h160.100902V377.234554h-160.100902z" fill="#cc9071"></path>
                        <path d="M440.277481 233.536961h143.860635V300.508882h-143.860635z" fill="#cc9071"></path>
                        <path
                            d="M512.911117 1007.651038c-116.942712 0-212.082545-95.139833-212.082545-212.082545 0-77.224389 42.592339-148.588855 109.653773-185.669732V117.793088c0-56.49567 45.949087-102.460741 102.428772-102.460741s102.428772 45.961874 102.428772 102.460741v492.102476c67.058237 37.071287 109.653773 108.43895 109.653773 185.672929 0 116.942712-95.139833 212.082545-212.082545 212.082545z m0-947.562049c-31.799594 0-57.67213 25.885324-57.67213 57.704099v505.813993a22.384715 22.384715 0 0 1-12.921882 20.284349c-58.762274 27.391065-96.731891 86.926989-96.731891 151.677063 0 92.262621 75.063282 167.325903 167.325903 167.325903s167.325903-75.060086 167.325903-167.325903c0-64.762861-37.96642-124.301982-96.725497-151.677063a22.36873 22.36873 0 0 1-12.928276-20.284349V117.793088c0-31.818776-25.872536-57.704099-57.67213-57.704099z"
                            fill="#000000"></path>
                        <path
                            d="M512.911117 933.77061c-74.193725 0-134.557647-60.37671-134.557647-134.589617 0-52.055172 30.517636-99.935188 77.748681-121.97144a22.378321 22.378321 0 1 1 18.925666 40.562306c-31.540645 14.715345-51.917705 46.671587-51.917705 81.412331 0 49.532815 40.284175 89.832974 89.801005 89.832975s89.801005-40.296962 89.801006-89.832975a22.378321 22.378321 0 1 1 44.756642 0c0 74.209709-60.363922 134.586419-134.557648 134.58642zM512.911117 179.173626H432.860666a22.378321 22.378321 0 1 1 0-44.756642h80.050451a22.378321 22.378321 0 1 1 0 44.756642zM592.833692 255.899298H432.860666a22.378321 22.378321 0 1 1 0-44.756642h159.973026a22.378321 22.378321 0 1 1 0 44.756642zM592.833692 332.62497H432.860666a22.378321 22.378321 0 1 1 0-44.756642h159.973026a22.378321 22.378321 0 1 1 0 44.756642zM592.833692 409.350642H432.860666a22.378321 22.378321 0 1 1 0-44.756642h159.973026a22.378321 22.378321 0 1 1 0 44.756642z"
                            fill="#000000"></path>
                    </g>
                </svg>
                <h1>Temperatura</h1>
                <p>{{ $response['temperatura'] }} °C</p>
            </div>
        </div>
    </div>

    {{-- grafica humedad --}}

    <div class="bg-slate-400 w-full h-auto pb-20 flex flex-col justify-center items-center gap-10 px-5 shadow-2xl">
        <h1
            class="mb-4 text-4xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Humedad
        </h1>

        <div class="bg-white p-8 rounded-lg shadow-lg w-full">
            <h2 class="text-2xl font-bold mb-4">Humedad vs. Días</h2>
            <canvas id="humidityDaysChart" class="w-full"></canvas>
        </div>
    </div>

    {{-- {grafica temperatura} --}}

    <div class="bg-slate-400 w-full h-auto pb-20 flex flex-col justify-center items-center gap-10 px-5 shadow-2xl">
        <h1
            class="mb-4 text-4xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Temperatura
        </h1>

        <div class="bg-white p-8 rounded-lg shadow-lg w-full">
            <h2 class="text-2xl font-bold mb-4">Temperatura vs. Días</h2>
            <canvas id="temperatureDaysChart" class="w-full"></canvas>
        </div>
    </div>

    {{-- {grafica Calidad Aire} --}}

    <div class="bg-slate-400 w-full h-auto pb-20 flex flex-col justify-center items-center gap-10 px-5 shadow-2xl">
        <h1
            class="mb-4 text-4xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Calidad del Aire
        </h1>

        <div class="bg-white p-8 rounded-lg shadow-lg w-full">
            <h2 class="text-2xl font-bold mb-4">Calidad del Aire vs. Días</h2>
            <canvas id="airQualityDaysChart" class="w-full"></canvas>
        </div>
    </div>


    {{-- {grafica de regresion lineal} --}}

    <div class="bg-slate-400 w-full h-auto pb-20 flex flex-col justify-center items-center gap-10 px-5 shadow-2xl">
        <h1
            class="mb-4 text-4xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
             Dispersion de datos
        </h1>

        <div class="bg-white p-8 rounded-lg shadow-lg w-full">
            <h2 class="text-2xl font-bold mb-4">Temperatura, Humedad y Calidad del Aire vs. Días</h2>
            <canvas id="multiLineChart" class="w-full"></canvas>
        </div>
    </div>





    <script>
        function holaJs() {
            @this.hola();
        }

        // Ejecuta la función holaJs cada 5000 milisegundos (5 segundos)
        setInterval(holaJs, 1000);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/humedad.js') }}"></script>
    <script src="{{ asset('js/temperatura.js') }}"></script>
    <script src="{{ asset('js/calidad.js') }}"></script>
    <script src="{{ asset('js/regresion.js') }}"></script>


</div>
