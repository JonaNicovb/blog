<x-layouts.admin>
    <div class="mb-4">
        <flux:breadcrumbs>
            <flux:breadcrumbs.item href="{{ route('admin.dashboard') }}">Dashboard</flux:breadcrumbs.item>
            <flux:breadcrumbs.item href="{{ route('admin.categories.index') }}">Categorias</flux:breadcrumbs.item>
            <flux:breadcrumbs.item>Crear</flux:breadcrumbs.item>
        </flux:breadcrumbs>
    </div>

    <div class="px-6 py-8 rounded-lg shadow-lg bg-white/70 dark:bg-gray-800/70 backdrop-blur-md">
        <div>
            <h1 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Crear Categoria</h1>
        </div>

        <form 
            action="{{ route('admin.categories.store') }}" 
            method="post" 
            class="space-y-4"
        >
            @csrf
            <flux:input label="Nombre" name="name" value="{{ old('name') }}" />

            <div class="flex justify-end gap-4">
                <a 
                    href="{{ route('admin.categories.index') }}" 
                    class="btn bg-gray-500 text-white hover:bg-gray-700 dark:bg-gray-700 dark:hover:bg-gray-600"
                >
                    Volver
                </a>
                <flux:button type="submit" variant="primary">Crear Categoria</flux:button>
            </div>
        </form>
    </div>
</x-layouts.admin>
