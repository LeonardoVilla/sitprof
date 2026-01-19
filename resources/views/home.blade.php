<!-- resources/views/welcome.blade.php -->
<x-home.header />
<x-home.hero :bio="$bio" :foto="$foto" />
<x-home.sobre :bio="$bio" :foto="$foto" />
<x-home.cursos :cursos="$cursos"/>
<x-home.conteudos :posts="$posts"/>
<x-home.contato />
<x-home.footer />