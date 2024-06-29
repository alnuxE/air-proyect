<div>
    {{-- menu --}}
    <nav class="w-full bg-slate-700 fixed z-100">
        <div class="h-20 flex justify-between items-center">
            <div>
                <svg id="btn" class="w-7 ml-5 cursor-pointer" viewBox="0 0 20 20" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <title>hamburger</title>
                        <desc>Created with Sketch Beta.</desc>
                        <defs> </defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                            sketch:type="MSPage">
                            <g id="Icon-Set-Filled" sketch:type="MSLayerGroup"
                                transform="translate(-212.000000, -888.000000)" fill="#ffffff">
                                <path
                                    d="M230,904 L214,904 C212.896,904 212,904.896 212,906 C212,907.104 212.896,908 214,908 L230,908 C231.104,908 232,907.104 232,906 C232,904.896 231.104,904 230,904 L230,904 Z M230,896 L214,896 C212.896,896 212,896.896 212,898 C212,899.104 212.896,900 214,900 L230,900 C231.104,900 232,899.104 232,898 C232,896.896 231.104,896 230,896 L230,896 Z M214,892 L230,892 C231.104,892 232,891.104 232,890 C232,888.896 231.104,888 230,888 L214,888 C212.896,888 212,888.896 212,890 C212,891.104 212.896,892 214,892 L214,892 Z"
                                    id="hamburger" sketch:type="MSShapeGroup"> </path>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <h2 class="text-2xl font-extrabold dark:text-white mr-10">Air proyect</h2>
        </div>
        <ul id="menu"
            class="w-full bg-slate-700 transition-all duration-1000 overflow-hidden flex flex-col items-center justify-center absolute top-full left-0 transform -translate-x-full">
            <li class="h-12"><a class="w-full text-lg font-extrabold text-white h-5" href="{{route('principal')}}">Principal</a></li>
            <li class="h-12"><a class="text-lg font-extrabold text-white" href="{{route('datos')}}">Datos en Tiempo Real</a></li>
            <li class="h-12"><a class="text-lg font-extrabold text-white" href="{{route('graficas')}}">Historial</a></li>
            <li class="h-12"><a class="text-lg font-extrabold text-white" href="{{route('controles')}}">Controles</a></li>
        </ul>
    </nav>

    <script src="{{ asset('js/main.js') }}"></script>
</div>
