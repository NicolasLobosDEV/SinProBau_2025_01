@extends("layouts.system")

@section("title", "SINPROBAU - Sistema")

@section("content")
    <div class="max-w-7xl mx-auto w-full h-full flex flex-col justify-center gap-8 p-7 md:px-20 md:py-20">
        <h1 class="text-3xl font-bold text-center">Cadastrar Diretor(a)</h1>
        <form id="form" method="POST" action="/sistema/registrar-diretor" enctype="multipart/form-data" class="w-full flex flex-col gap-10 md:px-4 py-4">
            @csrf
            @method("POST")
            <div class="flex flex-col gap-4 mb-6">
                <div class="flex flex-col gap-2">
                    <x-input
                        :name="'name'"
                        :type="'text'"
                        :label="'Nome'"
                        :placeholder="'Digite o nome do(a) diretor(a)'"
                    />
                    @error("name")
                        <x-error :message="$message" />
                    @enderror
                </div>
            </div>
            <div class="flex flex-col gap-4 mb-6">
                <div class="flex flex-col gap-2">
                    <x-input
                        :name="'role'"
                        :type="'text'"
                        :label="'Cargo'"
                        :placeholder="'Digite o cargo do(a) diretor(a)'"
                    />
                    @error("name")
                        <x-error :message="$message" />
                    @enderror
                </div>
            </div>
            <button
                type="submit"
                class="text-white bg-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] font-medium rounded text-base w-full px-5 py-2.5 text-center"
            >Cadastrar diretor(a)</button>
        </form>
    </div>
@endsection
