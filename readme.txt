=== Ferramentas da página de destino ===
Colaboradores: (esta deve ser uma lista de IDs de usuário do wordpress.org)
Link para doação: https://example.com/
Tags: comentários, spam
Requer pelo menos: 4,5
Testado até: 6.3.1
Requer PHP: 5.6
Etiqueta estável: 0.1.0
Licença: GPLv2 ou posterior
URI de licença: https://www.gnu.org/licenses/gpl-2.0.html

Aqui está uma breve descrição do plugin. Não deve ter mais de 150 caracteres. Nenhuma marcação aqui.

== Descrição ==

Esta é a longa descrição. Não há limite e você pode usar Markdown (assim como nas seções a seguir).

Para compatibilidade com versões anteriores, se esta seção estiver faltando, o comprimento completo da breve descrição será usado e
Markdown analisado.

Algumas notas sobre as seções acima:

* "Contribuidores" é uma lista separada por vírgulas de nomes de usuários do wp.org/wp-plugins.org
* "Tags" é uma lista separada por vírgulas de tags que se aplicam ao plugin
* "Requer pelo menos" é a versão mais baixa em que o plugin funcionará
* "Testado até" é a versão mais recente que você *utilizou com sucesso para testar o plugin*. Observe que pode funcionar em
versões superiores... esta é apenas a mais alta que você verificou.
* A tag Stable deve indicar a "tag" do Subversion da versão estável mais recente, ou "trunk", se você usar `/trunk/` para
estábulo.

     Observe que o `readme.txt` da tag stable é aquele que é considerado definidor do plugin, então
se o arquivo `/trunk/readme.txt` disser que a tag estável é `4.3`, então será `/tags/4.3/readme.txt` que será usado
para exibir informações sobre o plugin. Nesta situação, a única coisa considerada no tronco `readme.txt`
é o ponteiro da tag estável. Assim, se você desenvolver no trunk, poderá atualizar o trunk `readme.txt` para refletir as alterações no
sua versão em desenvolvimento, sem que essas informações sejam divulgadas incorretamente sobre a versão estável atual
que não possui essas alterações - desde que o `readme.txt` do tronco aponte para a tag estável correta.

     Se nenhuma tag estável for fornecida, presume-se que o tronco seja estável, mas você deve especificar "tronco" se for esse o local
você coloca a versão estável, para tirar qualquer dúvida.

== Instalação ==

Esta seção descreve como instalar o plugin e fazê-lo funcionar.

por exemplo.

1. Faça upload de `plugin-name.php` para o diretório `/wp-content/plugins/`
1. Ative o plugin através do menu ‘Plugins’ do WordPress
1. Coloque `<?php do_action('plugin_name_hook'); ?>` em seus modelos

== Perguntas frequentes ==

= Uma pergunta que alguém possa ter =

Uma resposta para essa pergunta.

= E quanto ao foo bar? =

Resposta ao dilema foo bar.

== Capturas de tela ==

1. Esta descrição da captura de tela corresponde à captura de tela-1.(png|jpg|jpeg|gif). Observe que a captura de tela foi tirada de
o diretório /assets ou o diretório que contém o readme.txt estável (tags ou trunk). Capturas de tela em /assets
diretório tem precedência. Por exemplo, `/assets/screenshot-1.png` venceria `/tags/4.3/screenshot-1.png`
(ou jpg, jpeg, gif).
2. Esta é a segunda captura de tela

== Registro de alterações ==

= 1,0 =
* Uma mudança desde a versão anterior.
* Outra mudança.

= 0,5 =
* Liste as versões da mais recente na parte superior até a mais antiga na parte inferior.

== Aviso de atualização ==

= 1,0 =
Os avisos de atualização descrevem o motivo pelo qual um usuário deve atualizar. Não mais que 300 caracteres.

= 0,5 =
Esta versão corrige um bug relacionado à segurança. Atualize imediatamente.

== Seção arbitrária ==

Você pode fornecer seções arbitrárias, no mesmo formato das acima. Isto pode ser útil para situações extremamente complicadas
plug-ins onde é necessário transmitir mais informações que não se enquadram nas categorias de "descrição" ou
"instalação." As seções arbitrárias serão mostradas abaixo das seções integradas descritas acima.

== Um breve exemplo de redução ==

Lista ordenada:

1. Algum recurso
1. Outro recurso
1. Outra coisa sobre o plugin

Lista não ordenada:

* algo
* algo mais
*terceira coisa

Aqui está um link para [WordPress](https://wordpress.org/ "Seu software favorito") e outro para [Documentação de sintaxe do Markdown][sintaxe do markdown].
Os títulos são opcionais, naturalmente.

[sintaxe de marcação]: https://daringfireball.net/projects/markdown/syntax
             "Markdown é o que o analisador usa para processar grande parte do arquivo leia-me"

Markdown usa notação de estilo de e-mail para citações em bloco e me disseram:
> Asteriscos para *ênfase*. Duplique para **forte**.

`<?código php(); // entra em backticks ?>`
