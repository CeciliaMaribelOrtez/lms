<section class='select-none'>
    <div class='bg-gray-200 p-4 rounded-lg shadow-2xl'>
        <h2 class='border-b-2 border-ugreen-500 p-4 uppercase font-semibold text-[1.2rem]'>Datos generales</h2>

        <div class='flex flex-col gap-4 mt-2'>
            <div>
                <span class='font-bold text-ugreen-700'>Titulo: </span>
                <span>{{$libro->titulo}}</span>
            </div>
            <div>
                <span class='font-bold text-ugreen-700'>Autor: </span>
                <span>{{$libro->titulo}}</span>
            </div>
            <div>
                <span class='font-bold text-ugreen-700'>Categoria: </span>
                <span>{{\App\Enums\CategoriasLibrosEnum::getName($libro->categoria)}}</span>
            </div>
        </div>
    </div>

    <div class='bg-gray-200 p-4 rounded-lg shadow-2xl mt-6'>
        <h2 class='border-b-2 border-ugreen-500 p-4  uppercase font-semibold text-[1.2rem]'>Atenciones registradas</h2>
    </div>
</section>
