# calculadora_imc - Charles Müller da Silva
 
## Backend criado em PHP, frontend em html, css, bootstrap e jquery.

### Para executar em windows:

- Baixar xampp (https://www.apachefriends.org/pt_br/download.html);
- No xampp ativar o apache e o ;
- Inserir os arquivos clonados do github dentro da pasta htdocs que está dentro da pasta onde o xampp foi instalado no pc (geralmente no disco C:);
- Abrir o navegador em localhost/calculadora_imc


### Para executar em linux:

- Baixar xampp (https://www.apachefriends.org/pt_br/download.html) para linux;
- Após baixado o arquivo vá na pasta downloads e clique com o botão direito do mouse e "abrir no terminal", após escreva o comando: chmod 755 xampp-linux-*-installer.run e pressione enter. Em seguida escreva o comando: sudo ./xampp-linux-*-installer.run e pressione enter, o wizard de instalação irá surgir para instalar corretamente.
- No xampp ativar o apache (se tiver problemas ao ativar o apache, vá na guia "manage servers" > clique sobre "apache web server" > configure > e altere a porta para 8080;
- Após ativado o apache com o xampp, agora é preciso clonar do github dentro da pasta htdocs que está dentro da pasta onde o xampp foi instalado. A pasta fica no caminho /opt/lampp/htdocs;
- Se não for possível clonar os arquivos na pasta htdocs, será necessário mudar as permissões da pasta;
- Para mudar as permissões da pasta vá até a pasta "outros locais" dentro dos arquivos do linux, depois clique em "computador" e depois acesse /opt/lamp > clique direito dentro da pasta lampp e selecione abrir com terminal e no terminal digite: sudo chmod 777 htdocs -R;
- Abrir o navegador em localhost:8080/calculadora_imc.
