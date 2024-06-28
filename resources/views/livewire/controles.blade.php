<div class="w-full h-screen flex items-center justify-center gap-x-10 flex-col">
    <h1
        class="mb-4 text-4xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
        Controles Led
    </h1>

    <div class="flex items-center justify-center gap-x-10 mt-10">
        <div wire:click='ledROn' class="bg-slate-600 p-10 rounded-3xl cursor-pointer">
            <svg class="w-20" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path fill="#ff0000"
                        d="M256 20.5c-45.5 0-74.137 18.276-92.676 44.23C144.784 90.685 137 125 137 155.5v151h238v-151c0-30.5-7.785-64.815-26.324-90.77C330.136 38.776 301.5 20.5 256 20.5zm8.756 11.885c1.285 0 2.554.018 3.812.047A184 235.5 0 0 0 145.91 160.336c1.113-28.645 9.045-59.746 26.17-83.72 18.54-25.955 47.176-44.23 92.676-44.23zM105 324.5v46h302v-46H105zm78 64v39h-7v32h7v32h18v-32h7v-32h-7v-39h-18zm128 0v39h-7v32h7v32h18v-32h7v-32h-7v-39h-18z">
                    </path>
                </g>
            </svg>
            <h1 class="mt-3 text-white">Led Rojo</h1>
        </div>
        <div wire:click='ledVOn' class="bg-slate-600 p-10 rounded-3xl cursor-pointer">
            <svg class="w-20" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path fill="#2acf2d"
                        d="M256 20.5c-45.5 0-74.137 18.276-92.676 44.23C144.784 90.685 137 125 137 155.5v151h238v-151c0-30.5-7.785-64.815-26.324-90.77C330.136 38.776 301.5 20.5 256 20.5zm8.756 11.885c1.285 0 2.554.018 3.812.047A184 235.5 0 0 0 145.91 160.336c1.113-28.645 9.045-59.746 26.17-83.72 18.54-25.955 47.176-44.23 92.676-44.23zM105 324.5v46h302v-46H105zm78 64v39h-7v32h7v32h18v-32h7v-32h-7v-39h-18zm128 0v39h-7v32h7v32h18v-32h7v-32h-7v-39h-18z">
                    </path>
                </g>
            </svg>
            <h1 class="mt-3 text-white">Led Verde</h1>
        </div>
        <div wire:click='ledAOn' class="bg-slate-600 p-10 rounded-3xl cursor-pointer">
            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path fill="#ddd73c"
                        d="M256 20.5c-45.5 0-74.137 18.276-92.676 44.23C144.784 90.685 137 125 137 155.5v151h238v-151c0-30.5-7.785-64.815-26.324-90.77C330.136 38.776 301.5 20.5 256 20.5zm8.756 11.885c1.285 0 2.554.018 3.812.047A184 235.5 0 0 0 145.91 160.336c1.113-28.645 9.045-59.746 26.17-83.72 18.54-25.955 47.176-44.23 92.676-44.23zM105 324.5v46h302v-46H105zm78 64v39h-7v32h7v32h18v-32h7v-32h-7v-39h-18zm128 0v39h-7v32h7v32h18v-32h7v-32h-7v-39h-18z">
                    </path>
                </g>
            </svg>
            <h1 class="mt-3 text-white">Led amarillo</h1>
        </div>
    </div>

</div>
