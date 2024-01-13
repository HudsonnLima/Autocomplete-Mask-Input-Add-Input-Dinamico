

$(function () {

    $(document).on('focus', '.maskMoney', function(){
        $(this).maskMoney({
            //prefix: 'R$ ',
            allowNegative: false,
            thousands: '.',
            decimal: ','
          }); 
    });

    $(document).on('focus', '.compras', function () {
        // este if verifica se o campo já tem autocomplete
        if (!$(this).hasClass("ui-autocomplete-input")) {

            
            $(this).autocomplete ({
                
                source: function (request, response) {
                    // Fetch data
                    
                    $.ajax({
                        url: "./db/search_data.php",
                        type: 'post',
                        dataType: "json",
                        data: {
                            produto: request.term
                        },
                        success: function (data) {
                            response(data);
                        }
                    });
                    
                },

                // Função para lidar com a seleção de um item do autocomplete
                select: function (event, ui) {
                    $(this).val(ui.item.label);
                    $(this).closest('.row').find('input[name^="produto_id"]').val(ui.item.produto_id);
                    
                    $(this).closest('.row').find('input[name^="quantidade"]').val(ui.item.quantidade);

                    return false;
                },

                // Função para lidar com o foco em um item do autocomplete
                focus: function (event, ui) {
                    $(this).val(ui.item.label);
                    $(this).closest('.row').find('input[name^="produto_id"]').val(ui.item.produto_id);
                    
                    $(this).closest('.row').find('input[name^="quantidade"]').val(ui.item.quantidade);
                    return false;
                },

            });
        }        
       
    });
    //ADD CAMPOS INPUT
// Função para adicionar campos dinamicamente
const divContent = $('#formulario');
const botaoAdicionar = $('a[data-id="1"]');
let i = 1;
 

// Evento de clique no botão de adicionar campos
botaoAdicionar.click(function () {
    
    // Cria uma nova linha com os campos dinâmicos
    const linha = $('<div class="row g-2 remover"><div class="col-md-7"><div class="form-floating"><input class="form-control compras" type="text" required name="produto[]' + i + '"/><label for="floatingInputGrid">Produto</label></div></div><div class="col-md-2"><div class="form-floating"><input class="form-control" type="text" name="quantidade[]' + i + '" required/><label for="floatingInputGrid">Quantidade</label></div></div><div class="col-md-2"><div class="form-floating"><input class="maskMoney form-control" type="text" maxlength="9" name="preco[]' + i + '" required/><label for="floatingInputGrid">Preço</label></div></div><input class="form-control" type="hidden" name="produto_id[]' + i + '" required/><a data-id="1" id="linkRemover" class="btn btn-danger col-md-1">Remover Campo</a></div></div>').appendTo(divContent);
    $('#removehidden').remove();
    i++;
    $('<input type="hidden" name="quantidadeCampos" value="' + i + '" id="removehidden">').appendTo(divContent);

    // Adiciona evento de clique ao botão "Remover Campo"
    linha.find("a").on("click", function () {
        $(this).parent(".remover").remove();
    });
});

});













