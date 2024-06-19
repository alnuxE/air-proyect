<div>
    @vite('resources/css/app.css')

    <div class="w-screen h-screen flex justify-center items-center bg-slate-400">
        <div class="w-8/12 h-auto min-w-1/2  bg-slate-300 shadow-xl flex items-center justify-center gap-5 rounded-3xl flex-wrap p-10">

            <div class="bg-slate-800 basis-5/12 flex flex-col justify-center items-center  h-1/2 rounded-3xl space-y-3 font-medium shadow-2xl min-w-96 p-20 max-w-20">
                <h1>Calidad Del Aire</h1>
                <h1>{{$response['respuesta']}}</h1>
            </div>
            <div class="bg-slate-800 basis-5/12 flex flex-col justify-center items-center  h-1/2 rounded-3xl space-y-3 font-medium shadow-2xl min-w-96 p-20 max-w-20">
                <h1>Calidad Del Aire</h1>
                <h1>{{$response['respuesta']}}</h1>
            </div>

        </div>
    </div>
</div>
