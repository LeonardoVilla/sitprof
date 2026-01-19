<section id="conteudos" class="max-w-7xl mx-auto px-6 py-16">
    <h3 class="text-3xl font-bold text-center mb-10">Últimos Conteúdos</h3>
    <div class="grid md:grid-cols-3 gap-8">
        @foreach ($posts as $post)
            <article class="bg-white p-6 rounded shadow hover:shadow-lg transition">
                <h4 class="text-xl font-semibold mb-2">{{ $post['titulo'] }}</h4>
                <p>{{ $post['resumo'] }}</p>
            </article>
        @endforeach

    </div>
</section>
