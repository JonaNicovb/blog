<x-layouts.admin>
    <div class="mb-4">
        <flux:breadcrumbs >
            <flux:breadcrumbs.item href="{{route('admin.dashboard')}}">Dashboard</flux:breadcrumbs.item>
            <flux:breadcrumbs.item href="{{route('admin.categories.index')}}">Categorias</flux:breadcrumbs.item>
            <flux:breadcrumbs.item>Editar</flux:breadcrumbs.item>
        </flux:breadcrumbs>

    </div>

    <div class="bg-white px-6 py-8 rounded-lg shadow-lg">
        <div>
            <h1 class="text-2xl font-bold mb-4">Editar Categoria</h1>
        </div>

        <form action="{{route('admin.categories.update', $category->id)}}" method="post" class="bg-white px-6 py-8 rounded-lg shadow-lg space-y-4">
            @csrf
            @method('PUT')

            <flux:input label="Nombre" name="name" value="{{old('name', $category->name)}}" />

            <div class="flex justify-end gap-4">
                <a href="{{ route('admin.categories.index') }}" class="btn bg-gray-500 text-white hover:bg-gray-700">
                        Volver
                </a>
                <flux:button type="submit" variant="primary"> Editar </flux:button>
            </div>

          
        </form>

        

    </div>

</x-layouts.admin>