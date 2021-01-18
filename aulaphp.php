<?php
// echo significa mostrar na tela
// <br> significa quebra de linha
// está instrução está sendo realizada no sistema Linux, se for usar no windows é necessario a instalação do git para Widows.
// estas duas barras antes dos comentarios significam , comentarios 
// sempre que terminar uma instrução utilize ponto virgula ;
// As strings são escrita entres aspas duplas ou simples, por enquanto elas ainda não fazem diferenças


// espero que a cada progresso, eu retorne neste arquivo e ir atualizando, de forma que este inicio permaneça..



echo " *Curso aula php <br>";
echo " *aprendendo e configurando git <br>";
echo " *primeiros passos <br>";
echo " *criar uma pasta chamado exemplo<br>";
echo " *acesse a pasta exemplo e abra o terminal e digite o comando $ git init <br>";
echo " *para verificar se o comando foi aceito, na barra que localiza a pasta que criou adicione /.git <br>";
echo " *exemplo: a pasta com nome exemplo foi criada em $ /opt/lampp/htdocs/exemplo. para verificar o camando ficara da seguinte forma $ /opt/lampp/htdocs/exemplo/.git<br>";
echo "aparecer algumas pastas e arquivos, mas não se preoculpe<br>";

echo "agora como armazenar diretorio local em uma sala de espera <br> para poder jogar na conexao remota<br>";
echo "No terminal utilize o  comando $ git add 'e o nome do seu arquivo' <br>";
echo "Suponhamos que tenha criadoum arquivo chamado aula.php dentro da pasta exemplo<br>";
echo "então devera digitar o seguinte comando no terminal  $ git add aula.php<br>";
echo "para adicionar todos seus arquivos sem precisar fazer um de cada vez no terminal utilize o comando $ git add --all <br>";
echo "e para confirmar suas configuraçoes, no terminal utilize o comando $ git commit -m  'e o nome que queira atribuir'<br>";
echo "exemplo: $ git commit -m 'estou criando meu primeiro repositorio'<br>";
echo "prximo passo = $ git remote add origin e o link do seu repositorio criado no site github <br>";
echo "exemplo $ git remote add origin https://github.com/eddie4ikau/estudoPHP.git <br>";
echo "proximo passo é empurrar seu arquivo para a conexão remota, que no caso é o github<br>";
echo  "se o passo anterior esta ok. este proximo passo ira solicitar que digite seu email e passoword da sua conta no github <br>
após isso, aparecerá uma mensagem confirmando seu processo da seguinte forma:<br>
Username for 'https://github.com': bruno.....@gmail.com<br>
Password for 'https://brunocallthirteen@gmail.com@github.com': <br>
Enumerating objects: 3, done.<br>
Counting objects: 100% (3/3), done.<br>
Delta compression using up to 4 threads<br>
Compressing objects: 100% (2/2), done.<br>
Writing objects: 100% (3/3), 778 bytes | 778.00 KiB/s, done.<br>
Total 3 (delta 0), reused 0 (delta 0)<br>
To https://github.com/eddie4ikau/estudoPHP.git<br>
 * [new branch]      master -> master <br>";

echo "Agora iremos editar este arquivo na conexão remota, ou seja editar este arquivo aqui no site do github <br> ";
echo " depois de atualizar/editar este arquivo na conexao remota , salve o arquivo como update deste arquivo<br>

depois, retorne para o terminal de comando  e digite o seguinte $ git pull origin master e enter: aparecerá <br>
uma tela parecida com essa abaixo confirmando que houve atuaizaçções:<br>
remote: Enumerating objects: 5, done.<br>
remote: Counting objects: 100% (5/5), done.<br>
remote: Compressing objects: 100% (2/2), done.<br>
remote: Total 3 (delta 0), reused 0 (delta 0), pack-reused 0<br>
Unpacking objects: 100% (3/3), 1.87 KiB | 958.00 KiB/s, done.<br>
From https://github.com/eddie4ikau/estudoPHP<br>
 * branch            master     -> FETCH_HEAD<br>
   359cbdf..0863943  master     -> origin/master<br>
Updating 359cbdf..0863943<br>
Fast-forward<br>
 aulaphp.php | 33 ++++++++++++++++++++++++++++++++-<br>
 1 file changed, 32 insertions(+), 1 deletion(-)<br>";
