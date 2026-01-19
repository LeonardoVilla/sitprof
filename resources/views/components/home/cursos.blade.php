<!-- resources/views/components/cursos.blade.php -->
<section id="cursos" class="bg-gray-100 py-16">
    <div class="max-w-7xl mx-auto px-6">
        <h3 class="text-3xl font-bold text-center mb-10">Cursos Ministrados</h3>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach($cursos as $curso)
                <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-2">{{ $curso['titulo'] }}</h4>
                    <p>{{ $curso['descricao'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>