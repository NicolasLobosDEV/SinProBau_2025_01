@extends("layouts.main")

@section("title", "SINPROBAU - Notícias")

@section("content")
    <div class="px-5 md:px-20 py-10 md:py-20 flex flex-col gap-8">
        <div class="flex flex-col gap-2">
            <h1 class="text-3xl font-bold">Notícias em alta</h1>
            <div class="flex flex-col md2:flex-row mt-4 shadow-md rounded-2xl overflow-hidden">
                <div class="md2:w-1/2">
                    <img src="/images/image.png" class="w-full h-full object-cover" alt="">
                </div>
                <div class="md2:w-1/2 flex flex-col gap-4 px-6 md:px-14 md2:px-20 py-10">
                    <p>22 Abril 2022</p>
                    <h1 class="text-xl md2:text-2xl md:text-3xl font-bold">Professor: Você conhece a composição do seu salário?</h1>
                    <button class="w-fit text-white bg-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] font-medium rounded text-base px-5 py-2.5 text-center">Ler notícia</button>
                </div>
            </div>
        </div>
        <div class="w-full flex flex-col justify-between gap-6">
            @foreach ($news as $new)
                <div class="flex flex-col md2:flex-row mt-4 shadow-md rounded-2xl overflow-hidden">
                    <div class="md2:w-1/3">
                        <img src="/images/news/{{ $new["image"] }}" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="md2:w-2/3 flex flex-col gap-4 px-6 py-5 flex-1">
                        <p>{{ $new["date"] }}</p>
                        <h1 class="text-xl font-bold">{{ $new["title"] }}</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio cum ut quos ad numquam. Mollitia, in obcaecati. Obcaecati libero enim temporibus repudiandae! Est sed nulla reprehenderit tempora, eum quis earum.
                        </p>
                        <button class="w-fit mt-auto text-[#138942] hover:text-white border border-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] font-medium rounded text-base px-5 py-2.5 text-center">Saiba mais</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
