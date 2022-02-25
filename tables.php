<?php require __DIR__ . "/_header.php"; ?>

<style>
    table, tr, th, td {
        border: 1px solid black;
    }
</style>

<h2>Tabelas</h2>

<h3>Referências:</h3>
<ul>
    <li><a href="https://www.w3schools.com/html/html_tables.asp" target="_blank">Tabelas no W3Schools</a></li>
</ul>

<p><strong>table</strong> &rarr; Cria uma tabela.</p>
<p><strong>tr</strong> &rarr; table row &rarr; Cria uma linha na tabela.</p>
<p><strong>th</strong> &rarr; table header &rarr; Cria uma célula de cabeçalho dentro da linha.</p>
<p><strong>td</strong> &rarr; table data &rarr; Cria uma célula de dados dentro da linha.</p>
<p><strong>colspan</strong> &rarr; Expande coluna &rarr; Esse atributo espande uma célula na mesma linha.</p>
<p><strong>rowspan</strong> &rarr; Expande linha &rarr; Esse atributo espande uma célula para a linha seguinte.</p>

<table>

    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Nascimento</th>
    </tr>

    <tr>
        <td>Joca da Silva</td>
        <td>joca@silva.com</td>
        <td>10/11/1980</td>
    </tr>

    <tr>
        <td>Setembrino Trocatapas</td>
        <td>set@brino.com</td>
        <td>23/12/1979</td>
    </tr>

    <tr>
        <td>Marineuza Siriliano</td>
        <td>mari@neuza.com</td>
        <td>02/02/2000</td>
    </tr>

    <tr>
        <td>Edilineuza Carmisona</td>
        <td>edir@carmo.com</td>
        <td>10/04/1971</td>
    </tr>

</table>

<h3>Outra tabela</h3>

<table>

    <tr>
        <th>Produto</th>
        <th>Preço</th>
        <th>Seção</th>
        <th>Subseção</th>
    </tr>

    <tr>
        <td>Bicicleta</td>
        <td>R$1000,00</td>
        <td colspan="2">Veículos</td>
    </tr>

    <tr>
        <td>Bola</td>
        <td>R$20,00</td>
        <td>Esportes</td>
        <td>Bolas</td>
    </tr>

    <tr>
        <td>Patins</td>
        <td>R$500,00</td>
        <td colspan="2" rowspan="2">Veículos</td>
    </tr>

    <tr>
        <td>Patinete</td>
        <td>R$700,00</td>
    </tr>

</table>

<p><strong>Exercício 1:</strong> Crie mais uma tabela simples representando dados em 4 colunas e 6 linhas.</p>

<table>

    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Nascimento</th>
        <th>Produto</th>

    </tr>

    <tr>
        <td>Joca da Silva</td>
        <td>joca@silva.com</td>
        <td>10/11/2000</td>
        <td>Bicicleta</td>
    
    </tr>

    <tr>
        <td>Setembrino Trocatapas</td>
        <td>set@brino.com</td>
        <td>23/12/1979</td>
        <td>Garrafa</td>
    </tr>

    <tr>
        <td>Marineuza Siriliano</td>
        <td>mari@neuza.com</td>
        <td>02/02/2000</td>
        <td>Almofada</td>
    </tr>

    <tr>
        <td>Edilineuza Carmisona</td>
        <td>edir@carmo.com</td>
        <td>10/04/1971</td>
        <td>Celular</td>
    </tr>


    <tr>
        <td>Wendel</td>
        <td>Wend@wed.com</td>
        <td>11/11/2011</td>
        <td>PS5</td>

        <tr>
        <td>PP</td>
        <td>pp@pp.com</td>
        <td>10/10/2010</td>
        <td>Mochila</td>

</table>


<p><strong>Exercício 2:</strong> Crie uma pequena lista de compras para o brunch das crianças.</p>

<table>

    <tr>
        <th>Produto</th>
        <th>Preço</th>

    </tr>

    <tr>
        <td>Salaminho</td>
        <td>R$200,00</td>
    
    </tr>

    <tr>
        <td>Cereal</td>
        <td>R$1500,00</td>
    </tr>

    <tr>
        <td>Ovo</td>
        <td>R$5000,00</td>
    </tr>

    <tr>
        <td>Pao</td>
        <td>R$140,00</td>
    </tr>
<table>
    
<?php require __DIR__ . "/_footer.php"; ?>