<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Mostrar todas las categorias
    public function index()
    {
        $categories = Category::orderby('id', 'desc')->get();
        return view('admin.categories.index', compact('categories'));
    }

    // Mostrar el formulario para crear una nueva categoria
    public function create()
    {
        return view('admin.categories.create');
    }

    // Crear una nueva categoria
    public function store(Request $request)
    {
       $data = $request->validate([
            'name' => 'required|string|max:255|unique:categories',
        ]);

        $category = Category::create($data);

        session()->flash('swal',[
            'icon' => 'success',
            'title' => '¡Categoria creada!',
            'text' => 'La categoria se ha creado correctamente',
            'showConfirmButton' => true,
            'confirmButtonText' => 'Aceptar',
            'timer' => 3000,
            'timerProgressBar' => true
        ]);

        return redirect()->route('admin.categories.index');
    }

   // Mostrar una categoria especifica
    public function show(Category $category)
    {
        //
    }

    // Mostrar el formulario para editar una categoria
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    // Actualizar una categoria
    public function update(Request $request, Category $category)
    {
       $data = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
        ]);

        $category->update($data);

        session()->flash('swal',[
            'icon' => 'success',
            'title' => '¡Categoria actualizada!',
            'text' => 'La categoria se ha actualizado correctamente',
            'showConfirmButton' => true,
            'confirmButtonText' => 'Aceptar',
            'timer' => 3000,
            'timerProgressBar' => true
        ]);

        return redirect()->route('admin.categories.edit', $category->id);
    }

    // Eliminar una categoria
    public function destroy(Category $category)
    {
        $category->delete();

        session()->flash('swal',[
            'icon' => 'success',
            'title' => '¡Categoria eliminada!',
            'text' => 'La categoria se ha eliminado correctamente',
            'showConfirmButton' => true,
            'confirmButtonText' => 'Aceptar',
            'timer' => 3000,
            'timerProgressBar' => true
        ]);

        return redirect()->route('admin.categories.index');
    }
}
