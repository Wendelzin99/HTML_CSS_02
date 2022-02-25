<?php require __DIR__ . "/_header.php"; ?>

<h2>Listas</h2>

<h3>Índice:</h3>
<ul>
    <li>Listas não ordenadas</li>
    <li>Listas ordenadas</li>
    <li>Listas de definição</li>
</ul>

<h3>Lista não ordenada</h3>
<p><strong>ul</strong> &rarr; Unordered List.</p>
<p><strong>li</strong> &rarr; List item.</p>

<ul>
    <li>Casa</li>
    <li>Apartamento</li>
    <li>Barraco</li>
    <li>Cabana</li>
</ul>

<h3>Lista ordenada</h3>
<p><strong>ol</strong> &rarr; Ordered List.</p>
<p><strong>li</strong> &rarr; List item.</p>

<ol>
    <li>Casa</li>
    <li>Apartamento</li>
    <li>Barraco</li>
    <li>Cabana</li>
</ol>

<h3>Definindo marcador</h3>

<ul>
    <li type="circle">Circle</li>
    <li type="square">Square</li>
    <li type="disc">Disc</li>
    <li type="none">None</li>
</ul>

<h3>Listas hierarquicas</h3>

<ul>
    <li>Primeiro nível</li>
    <ul>
        <li>Segundo nível</li>
        <ul>
            <li>Terceiro nível</li>
            <ul>
                <li>Quarto nível</li>
            </ul>
        </ul>
    </ul>
</ul>

<h3>Listas ordenadas (parte 2)</h3>

<ol>
    <li type="1">Numérica</li>
    <li type="A">Alfabética maiúscula</li>
    <li type="a">Alfabética minúscula</li>
    <li type="I">Algarismos romanos maiúsculos</li>
    <li type="i">Algarismos romanos minúsculos</li>
</ol>

<ol type="i">
    <li>Casa</li>
    <li>Carro </li>
    <li>Moto</li>
    <li>Bicicleta</li>
</ol>

<h3>Lista hierarquica ordenada</h3>

<ol>
    <li>Primeiro nível</li>
    <ul>
        <li>Segundo nível</li>
        <ul>
            <li>Terceiro nível</li>
            <ul>
                <li>Quarto nível</li>
            </ul>
        </ul>
    </ul>
</ol>

<h3>Lista de definições</h3>

<p><strong>dl</strong> &rarr; Definition list</p>
<p><strong>dt</strong> &rarr; Termo a ser definido</p>
<p><strong>dd</strong> &rarr; Definição do termo</p>

<dl>
    <dt>HTML</dt>
    <dd>Linguagem que cria as estruturas de um documento de Internet.</dd>

    <dt>CSS</dt>
    <dd>Linguagem que formata visualmente os elementos do HTML.</dd>
</dl>

<h3>Exercícios:</h3>
<ol>
    <li>Crie uma lista não ordenada com os nomes dos alunos da turma.</li>
    <li>Crie uma lista ordenada das tarefas a serem executadas na manhã de amanhã.</li>
    <li>Crie uma lista definindo cada uma das tags usadas em listas HTML.</li>
</ol>

<li>Crie uma lista não ordenada com os nomes dos alunos da turma.</li>

<ul>
    <li>Wendel</li>
    <li>Vinicius</li>
    <li>Luca</li>
    <li>Davi</li>
</ul>

<li>Crie uma lista ordenada das tarefas a serem executadas na manhã de amanhã.</li>

<ol>
    <li>Cafe da manha</li>
    <li>Trabalho</li>
    <li>Almoço</li>
    <li>Faculdade</li>
</ol>

<li>Crie uma lista definindo cada uma das tags usadas em listas HTML.</li>


<dl>
    <dt> ul</dt>
    <dd>unordered list</dd>

    <dt>ol</dt>
    <dd>order list</dd>

    <dt>dl</dt>
    <dd>definition list</dd>

</dl>

<?php require __DIR__ . "/_footer.php"; ?>
