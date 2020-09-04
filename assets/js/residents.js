function add_resident() {
    $('#form_resident')[0].reset();
    $("[name='acao_resident']").val('cadastrar');
    $('#modal_resident').modal('show');
}