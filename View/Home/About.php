<h1> About</h1>
<pre>
$(function() {

  // Adjust elements so the footer sticks to the bottom of short pages
  // See CSS for associated styling

  $('body').wrapInner('<-div id="root">');
  $('<-div id="footerhack">').appendTo('#root');
  $('#footer').detach().insertAfter('#root');

  // CSS Adjustments for Safari/Chrome & Mozilla
  var chrome = (navigator.userAgent.toLowerCase().indexOf('chrome') != -1) ? true : false;
  if($.browser.safari || chrome) {
    $('#menu .menu-links a').css('line-height', '34px');
    $('.open-gray-main-btn').css('line-height', '25px');
  } else if($.browser.mozilla) {
    $('#menu .menu-links a').css('line-height', '36px');
  }
  
  // submit search form
  $(".btn-search-go").click(function(){
    $("#searchaptana").submit();
    return false;
  });
});
</pre>
<pre>
<h5>
Diferença entre require(), require_once(), include, include_once()
Pô, quando eu comecei a programar em PHP eu não sabia qual era a diferença dessas funções, e achei a minha resposta com muito esforço. Então aí vai, rapidinho, quanl a diferença.

include(): Tenta incluir uma página. Caso de algum erro, o script retorna um warning (aviso) e prossegue com a execução do script. Aceita a passagem de variáveis (GET) na string. Pode ser utilizado em uma estrutura de condicionais que terá seu efeito perpetuado todas as vezes que for chamado.

Require(): Tenta incluir uma página. Caso de algum erro, o script retorna um fatal error(erro fatal) (Que maravilha!) e aborta a execução do script. Aborta mesmo, já era não roda nada mais dali pra frente. Não aceita a passagem de variáveis (GET) na string. Não recomendo que utilizem nas estruturas condicionais, a menos que se deseje o seu efeito, de ser executada apenas uma vez.

include_once() e require_once(): Idênticas as suas funções simples, porém se o arquivo referenciado já foi incluso na página anteriormente, a função retorna ‘false’ e o arquivo não é incluido. É bom quando temos muitos includes e já estamos perdidos, sem saber o que está incluindo o que.
</h5></pre>