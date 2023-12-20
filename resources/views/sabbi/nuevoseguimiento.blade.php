    <x-navbar />

    <main class="mx-[500px]">
        <h1 class="mt-[30px] mb-[30px] text-[#141470ff] text-[30px] font-medium" >Nuevo Seguimiento</h1>
        <form class="bg-[#ffffff] rounded-[10px] shadow-lg w-full" action="">
            <div class="p-[20px]">
                <div>
                    <h2 class="text-[#141470ff] uppercase font-medium">Detalles</h2>
                </div>
                <div class="mt-[15px] border-t border-gray-400 w-full"></div>

                <div class="mt-[15px] flex flex-col text-[#3e3e45ff] font-medium">
                    <label class="mb-[5px]" for="asunto">*Asunto</label>
                    <div class="flex items-center mb-[20px]">
                        <div>
                            <input class="border border-solid border-[#868b96ff] rounded-[5px] shadow-lg w-[350px] h-[40px] " type="text" id="asunto">
                        </div>
                        <div>
                            <input class="ml-2 border border-solid border-[#868b96ff]" type="checkbox" id="check">
                            <label class="ml-1 font-normal " for="check">¿Es importante?</label>
                        </div>
                    </div>
                    <div class="flex flex-col mb-[20px]">
                        <label class="mb-[5px]" for="detalles">*Detalles</label>
                        <input class="border border-solid border-[#868b96ff] rounded-[5px] shadow-lg h-[100px]" type="text" id="detalles">
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-[5px]" for="actividad">Tipo de actividad</label>
                        <select class="border border-solid border-[#868b96ff] rounded-[5px] shadow-lg w-1/2 p-3 font-normal " id="actividad" name="actividad">
                            <option disabled selected hidden >Selecciona una Opción</option>
                            <option value="opcion1">Opción 1</option>
                            <option value="opcion2">Opción 2</option>
                            <option value="opcion3">Opción 3</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <script src="{{ asset('js/menu.js') }}" defer></script>
