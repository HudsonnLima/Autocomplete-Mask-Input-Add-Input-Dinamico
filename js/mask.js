// Função principal para lidar com o DOM quando estiver pronto

$(function () { 
    $(".maskMoney").maskMoney({
      //prefix: 'R$ ',
      allowNegative: false,
      thousands: '.',
      decimal: ','
    });
   
  });


