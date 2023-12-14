    $(".heading-compose").click(function() {
      $(".side-two").css({
        "left": "0"
      });
    });

    $(".newMessage-back").click(function() {
      $(".side-two").css({
        "left": "-100%"
      });
    });

$(".heading-compose").click(function() {
    // Antes de abrir a barra lateral, faça uma chamada à API do Bitrix24 para obter informações
    getBitrixInfoAndUpdateUI();

    // Abra a barra lateral
    $(".side-two").css({
        "left": "0"
    });
});

$(".newMessage-back").click(function() {
    // Feche a barra lateral
    $(".side-two").css({
        "left": "-100%"
    });
});

// Função para obter informações do Bitrix24 e atualizar a interface do usuário
function getBitrixInfoAndUpdateUI() {
    // Adapte esta função conforme necessário para fazer chamadas à API do Bitrix24
    // e atualizar a interface do usuário com as informações obtidas.
}
