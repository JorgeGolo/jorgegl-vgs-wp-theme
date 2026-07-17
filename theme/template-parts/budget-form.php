<!-- SECCIÓN PRINCIPAL (Fondo gris claro) -->
<section class="relative bg-[#E8EDEF] pt-16 pb-12 px-6 md:px-12">
    <div class="max-w-6xl mx-auto">
        
        <!-- Título con trazo subrayado -->
        <div class="text-center mb-12 flex flex-col items-center">
            <h2 class="text-3xl md:text-4xl font-semibold text-azul flex flex-wrap justify-center gap-x-2">
                Pide <span class="text-verde relative font-bold">PRESUPUESTO</span>
            </h2>
            <!-- El trazo azul pintoresco de debajo del texto -->
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/decorative/blue-brush.svg' ); ?>" 
                 alt="" class="w-56 md:w-[265px] mt-2 select-none relative left-8" loading="lazy">
        </div>

        <!-- FORMULARIO -->
        <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-3 gap-x-6 gap-y-8 mb-8">
            
            <!-- Campo: Nombre -->
            <div class="flex flex-col gap-1.5">
                <label class="font-semibold text-lg mb-1">Nombre<span class="text-azul">*</span></label>
                <input type="text" name="nombre" placeholder="Nombre" required
                       class="w-full px-4 py-3 rounded-lg border-0 bg-white placeholder-azul-tenue/50 focus:ring-2 focus:ring-azul focus:outline-none shadow-[0px_0px_4px_0px_#0000000D]">
            </div>

            <!-- Campo: Teléfono -->
            <div class="flex flex-col gap-1.5">
                <label class="font-semibold text-lg mb-1">Teléfono</label>
                <input type="tel" name="telefono" placeholder="+34"
                       class="w-full px-4 py-3 rounded-lg border-0 bg-white placeholder-azul-tenue/50 focus:ring-2 focus:ring-azul focus:outline-none shadow-[0px_0px_4px_0px_#0000000D]">
            </div>

            <!-- Campo: Correo -->
            <div class="flex flex-col gap-1.5">
                <label class="font-semibold text-lg mb-1">Correo electrónico<span class="text-azul">*</span></label>
                <input type="email" name="email" placeholder="mail@mail.com" required
                       class="w-full px-4 py-3 rounded-lg border-0 bg-white placeholder-azul-tenue/50 focus:ring-2 focus:ring-azul focus:outline-none shadow-[0px_0px_4px_0px_#0000000D]">
            </div>

            <!-- Campo: Material (Select) -->
            <div class="flex flex-col gap-1.5">
                <label class="font-semibold text-lg mb-1">Material<span class="text-azul">*</span></label>
                <div class="relative">
                    <select name="material" required
                            class="w-full px-4 py-3 rounded-lg border-0 bg-white text-azul-tenue/50 focus:ring-2 focus:ring-azul focus:outline-none shadow-[0px_0px_4px_0px_#0000000D] appearance-none cursor-pointer">
                        <option value="" disabled selected>Material</option>
                        <option value="madera">Madera</option>
                        <option value="metal">Metal</option>
                    </select>
                    <!-- Icono flecha select personalizado (Verde) -->
                    <div class="absolute right-2 top-1/2 -translate-y-1/2 pointer-events-none text-verde">
                        <svg class="w-8 h-8 fill-current" viewBox="0 0 20 20">
                            <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Campo: Metros cuadrados -->
            <div class="flex flex-col gap-1.5">
                <label class="font-semibold text-lg mb-1">Metros cuadrados<span class="text-azul">*</span></label>
                <input type="text" name="metros" placeholder="m2" required
                       class="w-full px-4 py-3 rounded-lg border-0 bg-white placeholder-azul-tenue/50 focus:ring-2 focus:ring-azul focus:outline-none shadow-[0px_0px_4px_0px_#0000000D]">

            </div>

            <!-- Campo: Provincia (Select) -->
            <div class="flex flex-col gap-1.5">
                <label class="font-semibold text-lg mb-1">Provincia de entrega<span class="text-azul">*</span></label>
                <div class="relative">
                    <select name="provincia" required
                       class="w-full px-4 py-3 rounded-lg border-0 bg-white text-azul-tenue/50 focus:ring-2 focus:ring-azul focus:outline-none shadow-[0px_0px_4px_0px_#0000000D] appearance-none cursor-pointer">
                        <option value="" disabled selected class="text-azul-tenue">Seleccione provincia</option>
                        <option value="madrid">Madrid</option>
                        <option value="barcelona">Barcelona</option>
                    </select>
                    <!-- Icono flecha select personalizado (Verde) -->
                    <div class="absolute right-2 top-1/2 -translate-y-1/2 pointer-events-none text-verde">
                        <svg class="w-8 h-8 fill-current" viewBox="0 0 20 20">
                            <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- CHECKBOXES (Ocupan todo el ancho en desktop) -->
            <div class="md:col-span-3 flex flex-col gap-3 mt-4">
                <!-- Checkbox 1 -->
                <label class="flex items-start gap-3 text-base cursor-pointer select-none">
                    <input type="checkbox" name="comercial" class="mt-1 w-5 h-5 rounded border-0 text-azul focus:ring-azul">
                    <span>Acepto recibir información comercial, así como descuentos, promociones y actualizaciones de producto pertinentes.</span>
                </label>
                <!-- Checkbox 2 -->
                <label class="flex items-start gap-3 text-base cursor-pointer select-none">
                    <input type="checkbox" name="comercial" class="mt-1 w-5 h-5 rounded border-0 text-azul focus:ring-azul" checked>
                    <span>Confirmo que he leído y aceptado la <a href="#" class="underline font-semibold text-azul hover:text-azul-tenue">política de privacidad y venta</a>.*</span>
                </label>
            </div>
        </form>

    </div>

    <!-- EL BOTÓN "A CABALLO" -->
    <!-- Colocado de forma absoluta abajo del todo, centrado con left-1/2 y -translate-x-1/2, y desplazado hacia abajo a la mitad de su tamaño gracias a translate-y-1/2 -->
    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 z-10">
        <button type="submit" class="bg-azul hover:bg-azul/90 text-white font-bold px-12 py-4 rounded-full shadow-lg transition-all text-lg tracking-[-0.008em] uppercase whitespace-nowrap ">
            Pide Presupuesto
        </button>
    </div>
</section>

<!-- SECCIÓN INFERIOR DE APOYO (Para que el botón tenga fondo blanco debajo y no quede flotando en el vacío de la web) -->
<div class="bg-white h-16"></div>