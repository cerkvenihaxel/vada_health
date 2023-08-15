<div>
    <!--
      This example requires some changes to your config:

      ```
      // tailwind.config.js
      module.exports = {
        // ...
        plugins: [
          // ...
          require('@tailwindcss/forms'),
        ],
      }
      ```
    -->
    <p class="text-sm px-2 mb-9 mt-12 bg-cyan-800 h-full text-gray-100">* Gestión médica / Solicitudes / Crear nueva solicitud</p>

    <form class="mx-12 mt-24 mb-12">
        <div class="text-3xl font-extrabold">
        <h3>Crear nueva solicitud</h3>
        </div>
        <div class="space-y-12  mt-12 sm:space-y-16">
            <div>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Seleccione al afiliado y asegúrese de completar todos los datos</h2>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-600">La información está protegida por la Ley 255910.</p>

                <div class="mt-10 space-y-8 border-b border-gray-900/10 pb-12 sm:space-y-0 sm:divide-y sm:divide-gray-900/10 sm:border-t sm:pb-0">
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="username" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Afiliado</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-orange-600 sm:max-w-md">
                                <input type="text" name="username" id="username" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="about" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Diagnóstico</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <textarea id="about" name="about" rows="3" class="block w-full max-w-2xl rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6"></textarea>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Escriba el diagnóstico del paciente</p>
                        </div>
                    </div>



                </div>
            </div>

            <div>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Datos personales</h2>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-600">Escriba los datos personales restantes y añada los items del pedido.</p>

                <div class="mt-10 space-y-8 border-b border-gray-900/10 pb-12 sm:space-y-0 sm:divide-y sm:divide-gray-900/10 sm:border-t sm:pb-0">
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Nombre completo</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Nro. de afiliado</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Correo electrónico</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:max-w-md sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Localidad</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option>Capital</option>
                                <option>Chilecito</option>
                                <option>Chamical</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Dirección</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:max-w-xl sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="city" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Teléfono</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="region" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Zona de residencia</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">ID Pedido médico</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Pedido</h2>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-600">Seleccione que tipo de pedido desea realizar: Medicamento, Prótesis, Oxigenoterapia</p>

                <div class="mt-10 space-y-10 border-b border-gray-900/10 pb-12 sm:space-y-0 sm:divide-y sm:divide-gray-900/10 sm:border-t sm:pb-0">
                    <fieldset>
                        <legend class="sr-only">Tipo de pedido</legend>
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:py-6">
                            <div class="text-sm font-semibold leading-6 text-gray-900" aria-hidden="true">Tipo de pedido</div>
                            <div class="mt-4 sm:col-span-2 sm:mt-0">
                                <div class="max-w-lg space-y-6">
                                    <div class="relative flex gap-x-3">
                                        <div class="flex h-6 items-center">
                                            <input id="comments" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-600">
                                        </div>
                                        <div class="text-sm leading-6">
                                            <label for="comments" class="font-medium text-gray-900">Medicamento</label>
                                        </div>
                                    </div>
                                    <div class="relative flex gap-x-3">
                                        <div class="flex h-6 items-center">
                                            <input id="candidates" name="candidates" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-600">
                                        </div>
                                        <div class="text-sm leading-6">
                                            <label for="candidates" class="font-medium text-gray-900">Prótesis</label>
                                        </div>
                                    </div>
                                    <div class="relative flex gap-x-3">
                                        <div class="flex h-6 items-center">
                                            <input id="offers" name="offers" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-600">
                                        </div>
                                        <div class="text-sm leading-6">
                                            <label for="offers" class="font-medium text-gray-900">Óxigenoterapia</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <livewire:front.profile.doctor.components.form-table-add/>


                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{route('profile.doctor-home')}}">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
            </a>
            <button type="submit" class="inline-flex justify-center rounded-md bg-orange-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Crear pedido</button>
        </div>
    </form>
</div>
