<x-layouts.admin>
    <div class="mb-4">
        <flux:breadcrumbs>
            <flux:breadcrumbs.item href="{{ route('admin.dashboard') }}">Dashboard</flux:breadcrumbs.item>
            <flux:breadcrumbs.item href="{{ route('admin.posts.index') }}">Post</flux:breadcrumbs.item>
            <flux:breadcrumbs.item>Nuevo</flux:breadcrumbs.item>
        </flux:breadcrumbs>
    </div>

    <div class="px-6 py-8 rounded-lg shadow-lg bg-white/70 dark:bg-gray-800/70 backdrop-blur-md">
        <div>
            <h1 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Crear Post</h1>
        </div>

        <form 
            action="{{ route('admin.posts.store') }}" 
            method="post" 
            class="space-y-4"
        >
            @csrf
            <flux:input label="Titulo" name="title" value="{{ old('title') }}" />
            <flux:input label="Slug" name="slug" value="{{ old('slug') }}" />
            <flux:select label="Categoría" name="category_id">
                <flux:select.option  value="">Seleccione una categoría</flux:select.option>
                 @foreach ($categories as $category)
                     <flux:select.option value="{{ $category->id }}">{{ $category->name }}</flux:select.option>
                 @endforeach
            </flux:select>

            <div class="flex justify-end gap-4">
                <a 
                    href="{{ route('admin.posts.index') }}" 
                    class="btn bg-gray-500 text-white hover:bg-gray-700 dark:bg-gray-700 dark:hover:bg-gray-600"
                >
                    Volver
                </a>
                <flux:button type="submit" variant="primary">Crear</flux:button>
            </div>
        </form>
    </div>
</x-layouts.admin>
