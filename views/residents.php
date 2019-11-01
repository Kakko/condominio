<div class="section_top">
    <h3>Moradores</h3>
</div>
<div class="container-fluid">
    <button class="btn btn-success add" onclick="add_resident()">Adicionar Novo Morador</button>
    <hr/>
    <div class="cards">
        <div class="card_title_prop">
            <h4>Proprietários</h4>
        </div>
    </div>
    <div class="cards">
        <div class="card_title_rent">
            <h4>Inquilinos</h4>
        </div>
    </div>
    <div class="cards">
        <div class="card_title_func">
            <h4>Funcionários</h4>
        </div>
    </div>
</div>
<!--Modal -->
<div class="modal fade" id="modal_resident">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Adicionar Novo Morador</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form method="POST" class="form-group" id="form_resident"><br />
				<!-- Modal body -->
				<div class="modal-body">
					<div class="row">
                        <div class="col-sm-6">
                            <label for="name">Nome:</label>
                            <input type="text" name="acao_resident" value="cadastrar" hidden>
                            <input type="text" name="id" hidden>
                            <input type="text" class="form-control form-control-sm" name="name" placeholder="Digite o nome do morador">
                        </div>
                        <div class="col-sm-6">
                            <label for="email">E-mail:</label>
                            <input type="email" class="form-control form-control-sm" name="email" placholder="Digite o e-mail do morador (Se tiver)">
                        </div>
                    </div><hr/>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="Telefone 1">Telefone 1:</label>
                            <input type="text" class="form-control form-control-sm" name="phone1" placehoder="Digite o Telefone (Fixo ou Celular) do morador">
                        </div>
                        <div class="col-sm-4">
                            <label for="Telefone 2">Telefone 2:</label>
                            <input type="text" class="form-control form-control-sm" name="phone2" placehoder="Digite o Telefone (Fixo ou Celular) do morador">
                        </div>
                        <div class="col-sm-4">
                            <label for="owner_locator">Proprietário ou Inquilino:</label>
                            <select class="form-control form-control-sm" name="owner_locator">
                                <option>Selecione:</option>
                                <option>Proprietário</option>
                                <option>Inquilino</option>
                            </select>
                        </div>
                    </div><hr/>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="landlord_name">Nome do Proprietário:</label>
                            <input type="text" class="form-control form-control-sm" name="landlord_name" placeholder="Digite o nome do proprietário">
                        </div>
                    </div>
				</div>
				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					<button type="submit" class="btn btn-success">Salvar</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	function editar_setor(id) {
		$.post('<?php echo BASE_URL ?>cadastros/setor', {
			acao_setor: 'editar',
			id: id
		}, function(data) {

			let dados = JSON.parse(data);
			$("[name='id']").val(dados.id);
			$("[name='nome']").val(dados.nome);

			$("[name='acao_setor']").val('atualizar');
			$('#modal_setor').modal('show');
		});
	}

	function excluir_setor(id) {
		let c = confirm("Deseja excluir?")
		if (c == true) {
			$.post('<?php echo BASE_URL ?>cadastros/setor', {
				acao_setor: 'excluir',
				id: id
			}, function(data) {
				window.location.reload();
			});
		}
	}

	function add_resident() {
		$('#form_resident')[0].reset();
		$("[name='acao_resident']").val('cadastrar');
		$('#modal_resident').modal('show');
	}
</script>