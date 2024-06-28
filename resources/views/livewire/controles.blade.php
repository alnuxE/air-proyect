<div class="w-full h-screen flex items-center justify-start gap-x-10 gap-y-10 flex-col pt-28">
    <h1
        class="mb-4 text-4xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
        Controles Led
    </h1>

    <div class="w-auto h-auto p-5 rounded-3xl flex flex-col items-center justify-center gap-y-5 bg-slate-700">
        <svg class="w-20" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path fill="#ff0000"
                    d="M256 20.5c-45.5 0-74.137 18.276-92.676 44.23C144.784 90.685 137 125 137 155.5v151h238v-151c0-30.5-7.785-64.815-26.324-90.77C330.136 38.776 301.5 20.5 256 20.5zm8.756 11.885c1.285 0 2.554.018 3.812.047A184 235.5 0 0 0 145.91 160.336c1.113-28.645 9.045-59.746 26.17-83.72 18.54-25.955 47.176-44.23 92.676-44.23zM105 324.5v46h302v-46H105zm78 64v39h-7v32h7v32h18v-32h7v-32h-7v-39h-18zm128 0v39h-7v32h7v32h18v-32h7v-32h-7v-39h-18z">
                </path>
            </g>
        </svg>
        <h1 class="text-white mb-4 text-2xl text-center font-extrabold leading-none"> Led Rojo</h1>
        <button wire:click='ledROn'
            class="btn overflow-hidden  w-64 bg-red-500 text-white py-4 px-4 rounded-xl font-bold ">
            <span>Encender</span>
        </button>
        <button wire:click="ledROff"
            class="btn overflow-hidden  w-64 bg-red-500 text-white py-4 px-4 rounded-xl font-bold ">
            <span>Apagar</span>
        </button>
    </div>

    <div class="w-auto h-auto p-5 rounded-3xl flex flex-col items-center justify-center gap-y-5 bg-slate-700">
        <svg class="w-20" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path fill="#ffdd00"
                    d="M256 20.5c-45.5 0-74.137 18.276-92.676 44.23C144.784 90.685 137 125 137 155.5v151h238v-151c0-30.5-7.785-64.815-26.324-90.77C330.136 38.776 301.5 20.5 256 20.5zm8.756 11.885c1.285 0 2.554.018 3.812.047A184 235.5 0 0 0 145.91 160.336c1.113-28.645 9.045-59.746 26.17-83.72 18.54-25.955 47.176-44.23 92.676-44.23zM105 324.5v46h302v-46H105zm78 64v39h-7v32h7v32h18v-32h7v-32h-7v-39h-18zm128 0v39h-7v32h7v32h18v-32h7v-32h-7v-39h-18z">
                </path>
            </g>
        </svg>
        <h1 class="text-white mb-4 text-2xl text-center font-extrabold leading-none"> Led Amarillo</h1>
        <button wire:click='ledAOn'
            class="btn overflow-hidden  w-64 bg-yellow-500 text-white py-4 px-4 rounded-xl font-bold ">
            <span class="relative">Encender</span>
        </button>
        <button wire:click="ledAOff"
            class="btn overflow-hidden  w-64 bg-yellow-500 text-white py-4 px-4 rounded-xl font-bold ">
            <span class="relative">Apagar</span>
        </button>
    </div>

    <div class="w-auto h-auto p-5 rounded-3xl flex flex-col items-center justify-center gap-y-5 bg-slate-700">
        <svg class="w-20" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path fill="#00ff04"
                    d="M256 20.5c-45.5 0-74.137 18.276-92.676 44.23C144.784 90.685 137 125 137 155.5v151h238v-151c0-30.5-7.785-64.815-26.324-90.77C330.136 38.776 301.5 20.5 256 20.5zm8.756 11.885c1.285 0 2.554.018 3.812.047A184 235.5 0 0 0 145.91 160.336c1.113-28.645 9.045-59.746 26.17-83.72 18.54-25.955 47.176-44.23 92.676-44.23zM105 324.5v46h302v-46H105zm78 64v39h-7v32h7v32h18v-32h7v-32h-7v-39h-18zm128 0v39h-7v32h7v32h18v-32h7v-32h-7v-39h-18z">
                </path>
            </g>
        </svg>
        <h1 class="text-white mb-4 text-2xl text-center font-extrabold leading-none"> Led Verde</h1>
        <button wire:click='ledVOn'
            class="btn overflow-hidden  w-64 bg-green-500 text-white py-4 px-4 rounded-xl font-bold ">
            <span class="relative">Encender</span>
        </button>
        <button wire:click="ledVOff"
            class="btn overflow-hidden  w-64 bg-green-500 text-white py-4 px-4 rounded-xl font-bold ">
            <span class="relative">Apagar</span>
        </button>
    </div>


</div>
