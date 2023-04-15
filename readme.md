  <h1> Desenho no console etapa 2 - freelance PHP</h1>
<div>
  <h2>Breve descrição de quem sou eu</h2>
  <p>
    Olá! sou Thiago Fernandes, desenvolvedor web com foco no front-end e possuo habilidades em ferramentas como: react, next.js, styled-components, express e por aí vai... Gosto de jogos de pc e sou um apaixonado por desenho (mesmo não tendo muita habilidade com isso).
  </p>
</div>
<br/>

<div>
  <h2>Como rodar o projeto</h2>
  <p>Após escolher e abrir no terminal o diretório onde o código ficará armazenado, rode os seguintes comandos:</p>
  <pre>
    <code>
git clone git@github.com:Th-Fernandes/desenho-console-php.git
cd desenho-console-php
php index.php
    </code>
  </pre>

  <p>
    feito isso, em seu terminal deve aparecer a seguinte mensagem:
  </p>

  <pre>
* - - - *
- * - * -
- - * - -
- * - * -
* - - - *

- - * - -
- * * * -
- - * - -
- - * - -
- - * - -
  </pre>
</div>
<br/>

<div>
  <h2>Como criar os desenhos</h2>

  <p>em index.php, faça uma nova instância da classe CharacterBasedDrawing, passando as coordenadas</p>
  <code>$draw = new CharacterBasedDrawing([1, 3], [0, 4], [1, 3]);</code>
  <p>
  Imagine os desenhos nos consoles como linhas (rows), onde para cada argumento passado para a classe,
  está sendo definido quais pontos (coordenadas) devem ser desenhadas em cada linha. No exemplo acima, a linha 1
  será desenhada nos pontos 1 e 3.
  </p>
</div>
<br/>