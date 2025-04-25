<x-layouts.admin>
    <div class="flex justify-between items-center mb-4">
        <flux:breadcrumbs >
            <flux:breadcrumbs.item href="{{route('admin.dashboard')}}">Dashboard</flux:breadcrumbs.item>
            <flux:breadcrumbs.item>Categorias</flux:breadcrumbs.item>
        </flux:breadcrumbs>
        <a class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded" href="{{route('admin.categories.create')}}">
            Crear Categoria
        </a>
    </div>


   <div class="relative overflow-x-auto shadow-lg sm:rounded-xl">
        <table class="w-full text-sm text-left text-gray-700 dark:text-gray-300">
            <thead class="text-xs uppercase bg-gray-100 dark:bg-gray-800 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-4">Categoria ID</th>
                    <th scope="col" class="px-6 py-4">Nombre</th>
                    <th scope="col" class="px-6 py-4 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{$category->id}}
                        </td>
                        <td class="px-6 py-4">
                            {{$category->name}}
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{route('admin.categories.edit', $category->id)}}" 
                            class="inline-flex items-center gap-2 px-3 py-1.5 text-sm font-medium text-gray-600 bg-gray-200 rounded-md hover:bg-gray-300 hover:text-gray-800 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M9 13l6-6m-6 6L3 21h6l6-6m0-6h.01" />
                                </svg>
                                Editar
                            </a>
                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" 
                                class="inline-flex items-center gap-2 px-3 py-1.5 text-sm font-medium text-red-600 bg-red-200 rounded-md hover:bg-red-300 hover:text-red-800 dark:bg-red-700 dark:text-red-100 dark:hover:bg-red-600 transition">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5-4h4m-4 0a1 1 0 00-1 1v1h6V4a1 1 0 00-1-1m-4 0h4" />
                                    </svg>
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                    
                @endforeach
                
            </tbody>
        </table>
    </div>




</x-layouts.admin>