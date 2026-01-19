<section id="contato" class="max-w-7xl mx-auto px-6 py-16">
    <h3 class="text-3xl font-bold text-center mb-10">Contato</h3>
    <form action="#" method="POST" class="max-w-lg mx-auto bg-gray-100 p-6 rounded">
        @csrf
        <input type="text" name="nome" placeholder="Seu nome" class="w-full mb-4 p-2 border rounded">
        <input type="email" name="email" placeholder="Seu email" class="w-full mb-4 p-2 border rounded">
        <textarea name="mensagem" placeholder="Mensagem" class="w-full mb-4 p-2 border rounded"></textarea>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Enviar</button>
    </form>
</section>
