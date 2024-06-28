<div class="pt-32">
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/humedad.js') }}"></script>
    <script src="{{ asset('js/temperatura.js') }}"></script>
    <script src="{{ asset('js/calidad.js') }}"></script>
    <script src="{{ asset('js/regresion.js') }}"></script>
</div>
