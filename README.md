<h2> Oque você verá aqui? </h2>

• Uma pequena forma de demonstrar como funciona um gerenciamento com banco de dados </b><br>
• Aqui você poderá adicionar ou excluir os nomes(alunos) e cores(faixas) </b><br>
• Conteúdo feito na aula de <b>Programacao WEB II </b><br>
• Ministrado pelo  Professor <b> Tone </b><br>


**Comando SQL :**
<pre>
<code>
CREATE DATABASE acadjiujitsu;
use acadjiujitsu;
CREATE TABLE alunos(
    id int(10) PRIMARY KEY AUTO_INCREMENT,
    nome varchar(255) NOT null
    );
    </code>
    
<code>
use acadjiujitsu;
CREATE TABLE faixas(
    id int(10) PRIMARY KEY AUTO_INCREMENT,
    cor varchar(255) NOT null
    );
    </code>
</pre>
