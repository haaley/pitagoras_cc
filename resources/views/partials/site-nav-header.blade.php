<!--menu responsive-->
<ul>
    <li>
        <a href="{{route('index')}}">INÍCIO</a>
    </li>

    <li>
        <a href="{{route('sobre')}}">SOBRE</a>
    </li>

    <li>
        <a href="{{route('research.index')}}">PESQUISA</a>
    </li>

    <li>
        <a href="{{route('docente.index')}}">PROJETOS</a>
    </li>


    <li>
        <a href="{{route('discente.index')}}">EQUIPE</a>

        <ul class="nicdark_sub_menu">
            <li><a href="{{route('docente.index')}}">PROFESSORES</a></li>
            <li><a href="{{route('discente.index')}}">ALUNOS</a></li>
        </ul>
    </li>

    <li>
        <a href="{{route('discente.index')}}">EVENTOS</a>

        <ul class="nicdark_sub_menu">
            <li><a href="http://compweek.info" target="_blank">COMPWEEK</a></li>
            <li><a href="{{route('projetos')}}">PRE-COMPWEEK</a></li>
        </ul>
    </li>

    <li>
        <a href="{{route('post.index')}}">BLOG</a>
    </li>
    <li>
        <a href="{{route('contato')}}">CONTATO</a>
    </li>

</ul>
<!--END menu responsive-->
