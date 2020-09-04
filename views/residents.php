<div class="section_top">
    <h3>Moradores</h3>
</div>
<div class="container-fluid">
    <button class="btn btn-success add" onclick="add_resident()">Adicionar Novo Morador</button>
    <hr/>
    <div class="cards">
        <div class="card_title_prop">
            <h4>Proprietários</h4>
            <?php echo $ownerQtd; ?>
        </div>
    </div>
    <div class="cards">
        <div class="card_title_rent">
            <h4>Inquilinos</h4>
            <?php echo $locatorQtd; ?>
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
                        <div class="col-sm">
                            <label for="Telefone 1">Telefone 1:</label>
                            <input type="text" class="form-control form-control-sm" name="phone1" placeholder="(XX) XXXX-XXXX">
                        </div>
                        <div class="col-sm">
                            <label for="Telefone 2">Telefone 2:</label>
                            <input type="text" class="form-control form-control-sm" name="phone2" placeholder="(XX) XXXX-XXXX">
                        </div>
                        <div class="col-sm">
                            <label for="owner_locator">Proprietário ou Inquilino:</label>
                            <select class="form-control form-control-sm" name="owner_locator">
                                <option>Selecione:</option>
                                <option value="owner">Proprietário</option>
                                <option value="locator">Inquilino</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label for="apt_number">Nº Apartamento:</label>
                            <input type="number" class="form-control form-control-sm" name="apt_number" placeholder="Nº">
                        </div>
                    </div><hr/>
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
<script src="<?php echo BASE_URL; ?>assets/js/residents.js"></script>