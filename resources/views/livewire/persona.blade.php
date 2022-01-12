
<div class="bg-gray-300 w-full p-9  ">
  <form action="" >
 
    @include('mensajes.success')
      <div class="relative mt-1 ">
        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
          <svg class="w-5 h-5  text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" 
          xmlns="http://www.w3.org/2000/svg">
          <path fillRule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clipRule="evenodd" /></svg>
        </div>
        <input type="text"  wire:model="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Ingresar nombres" required>
      </div>
      <span class="bg-red-100 text-red-800 text-xs font-semibold rounded dark:bg-red-200 dark:text-red-900">
        @error('nombre') <span class="error">{{ $message }}</span> @enderror
      </span>
      <div class="relative mt-1">
          <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
              <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" 
              xmlns="http://www.w3.org/2000/svg">
              <path fillRule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clipRule="evenodd" /></svg>
            </div>
          <input type="text"  wire:model="apellido" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Ingresar apellidos" required>
        </div>
      <span class="bg-red-100 text-red-800 text-xs font-semibold rounded dark:bg-red-200 dark:text-red-900">
        @error('apellido') <span class="error">{{ $message }}</span> @enderror
      </span>
        <div class="relative mt-1">
          <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" 
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fillRule="evenodd" d="M3 4a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm2 2V5h1v1H5zM3 13a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1v-3zm2 2v-1h1v1H5zM13 3a1 1 0 00-1 1v3a1 1 0 001 1h3a1 1 0 001-1V4a1 1 0 00-1-1h-3zm1 2v1h1V5h-1z" clipRule="evenodd" />
            <path d="M11 4a1 1 0 10-2 0v1a1 1 0 002 0V4zM10 7a1 1 0 011 1v1h2a1 1 0 110 2h-3a1 1 0 01-1-1V8a1 1 0 011-1zM16 9a1 1 0 100 2 1 1 0 000-2zM9 13a1 1 0 011-1h1a1 1 0 110 2v2a1 1 0 11-2 0v-3zM7 11a1 1 0 100-2H4a1 1 0 100 2h3zM17 13a1 1 0 01-1 1h-2a1 1 0 110-2h2a1 1 0 011 1zM16 17a1 1 0 100-2h-3a1 1 0 100 2h3z" />
          </svg>
          </div>
          <input type="text"  wire:model="cedula" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Ingresar número de cédula" required>
        </div>
      <span class="bg-red-100 text-red-800 text-xs font-semibold rounded dark:bg-red-200 dark:text-red-900">
        @error('cedula') <span class="error">{{ $message }}</span> @enderror
      </span>
        <div class="relative mt-1">
          <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" />
              <path d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z" />
            </svg>
          </div>
          <input type="text"  wire:model="direccion"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Ingresar domicilio" required>
        </div>
        <span class="bg-red-100 text-red-800 text-xs font-semibold  rounded dark:bg-red-200 dark:text-red-900">
          @error('direccion') <span class="error">{{ $message }}</span> @enderror
        </span>
        <div class="relative mt-1">
          <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
          </svg>
          </div>
          <input type="text"  wire:model="telefono" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Ingresar número de teléfono" required>
        </div>
        <span class="bg-red-100 text-red-800 text-xs font-semibold  rounded dark:bg-red-200 dark:text-red-900">
          @error('telefono') <span class="error">{{ $message }}</span> @enderror
        </span>
        <div></div>
        @if($edit)
            <button type="submit" wire:click.prevent="guardar"
              class="mt-4 text-white 
              bg-green-700 
              hover:bg-green-500 
              font-medium rounded-lg text-sm px-5 py-2.5 text-center 
              dark:bg-green-500 dark:hover:bg-green-500 dark:focus:bg-green-500">
              Registrar
            </button>
            @else
            <button type="submit" wire:click.prevent="guardar"
              class="mt-4 text-white 
              bg-green-700 
              hover:bg-green-500 
              font-medium rounded-lg text-sm px-5 py-2.5 text-center 
              dark:bg-green-500 dark:hover:bg-green-500 dark:focus:bg-green-500">
              Editar
            </button>
        @endif
      
  </form>

<div class="flex flex-col mt-8">
  <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
      <div
          class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
          <table class="min-w-full">
              <thead>
                  <tr>
                      <th
                          class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                          Nombre</th>
                      <th
                          class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                          Apellido</th>
                      <th
                          class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                          Cédula</th>
                      <th
                          class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                          Dirección</th>
                          <th
                          class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                          Teléfono</th>
                      <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                  </tr>
              </thead>

              <tbody class="bg-white">

                @foreach($personas as $persona)
                    
              
                  <tr>
                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                          <div class="flex items-center">
                              <div class="ml-4">
                                  <div class="text-sm leading-5 font-medium text-gray-900">
                                    {{ $persona->nombre }}
                                  </div>
                              </div>
                          </div>
                      </td>

                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                          <div class="text-sm leading-5 text-gray-900">
                             {{$persona->apellido}}
                          </div>
                          
                      </td>

                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="text-sm leading-5 text-gray-900">
                            {{$persona->cedula}}
                         </div>
                      </td>

                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="text-sm leading-5 text-gray-900">
                            {{$persona->direccion}}
                         </div>
                      </td>

                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="text-sm leading-5 text-gray-900">
                            {{$persona->telefono}}
                         </div>
                      </td>
                      <td class="actions-cell">
                        <div class="buttons right nowrap">
                          <button class="button small green --jb-modal" wire:click="edit({{ $persona->id }})" type="button">
                            <span class="icon"><i class="mdi mdi-eye"></i></span>
                          </button>
                          <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                            <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                          </button>
                        </div>
                      </td>
                  </tr>
                  
                  @endforeach
                
                
              </tbody>
          </table>
      </div>
  </div>



{{-- 
    
    <div id="authentication-modal" aria-hidden="true"
      class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center h-modal md:h-full md:inset-0">
      <div class="relative px-4 p-6 w-full max-w-md h-full md:h-auto">
    
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <div class="flex justify-end p-2">
            <button type="button"
              class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
              data-modal-toggle="authentication-modal">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <form action="" class="p-6">
            <h3 class="text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>
            @include('mensajes.success')
              <div class="relative mt-1 ">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5  text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" 
                  xmlns="http://www.w3.org/2000/svg">
                  <path fillRule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clipRule="evenodd" /></svg>
                </div>
                <input type="text"  wire:model="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Ingresar nombres" required>
              </div>
              <span class="bg-red-100 text-red-800 text-xs font-semibold rounded dark:bg-red-200 dark:text-red-900">
                @error('nombre') <span class="error">{{ $message }}</span> @enderror
              </span>
              <div class="relative mt-1">
                  <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                      <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" 
                      xmlns="http://www.w3.org/2000/svg">
                      <path fillRule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clipRule="evenodd" /></svg>
                    </div>
                  <input type="text"  wire:model="apellido" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Ingresar apellidos" required>
                </div>
              <span class="bg-red-100 text-red-800 text-xs font-semibold rounded dark:bg-red-200 dark:text-red-900">
                @error('apellido') <span class="error">{{ $message }}</span> @enderror
              </span>
                <div class="relative mt-1">
                  <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" 
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fillRule="evenodd" d="M3 4a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm2 2V5h1v1H5zM3 13a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1v-3zm2 2v-1h1v1H5zM13 3a1 1 0 00-1 1v3a1 1 0 001 1h3a1 1 0 001-1V4a1 1 0 00-1-1h-3zm1 2v1h1V5h-1z" clipRule="evenodd" />
                    <path d="M11 4a1 1 0 10-2 0v1a1 1 0 002 0V4zM10 7a1 1 0 011 1v1h2a1 1 0 110 2h-3a1 1 0 01-1-1V8a1 1 0 011-1zM16 9a1 1 0 100 2 1 1 0 000-2zM9 13a1 1 0 011-1h1a1 1 0 110 2v2a1 1 0 11-2 0v-3zM7 11a1 1 0 100-2H4a1 1 0 100 2h3zM17 13a1 1 0 01-1 1h-2a1 1 0 110-2h2a1 1 0 011 1zM16 17a1 1 0 100-2h-3a1 1 0 100 2h3z" />
                  </svg>
                  </div>
                  <input type="text"  wire:model="cedula" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Ingresar número de cédula" required>
                </div>
              <span class="bg-red-100 text-red-800 text-xs font-semibold rounded dark:bg-red-200 dark:text-red-900">
                @error('cedula') <span class="error">{{ $message }}</span> @enderror
              </span>
                <div class="relative mt-1">
                  <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" />
                      <path d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z" />
                    </svg>
                  </div>
                  <input type="text"  wire:model="direccion"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Ingresar domicilio" required>
                </div>
                <span class="bg-red-100 text-red-800 text-xs font-semibold  rounded dark:bg-red-200 dark:text-red-900">
                  @error('direccion') <span class="error">{{ $message }}</span> @enderror
                </span>
                <div class="relative mt-1">
                  <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                  </svg>
                  </div>
                  <input type="text"  wire:model="telefono" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Ingresar número de teléfono" required>
                </div>
                <span class="bg-red-100 text-red-800 text-xs font-semibold  rounded dark:bg-red-200 dark:text-red-900">
                  @error('telefono') <span class="error">{{ $message }}</span> @enderror
                </span>
                <div></div>
              <button type="submit" wire:click.prevent="guardar"
                  class="mt-4 text-white 
                  bg-green-700 
                  hover:bg-green-500 
                  font-medium rounded-lg text-sm px-5 py-2.5 text-center 
                  dark:bg-green-500 dark:hover:bg-green-500 dark:focus:bg-green-500">
                  Registrar
              </button>
          </form>
        </div>
      </div>
    </div> --}}
    
  </div>
</div>
