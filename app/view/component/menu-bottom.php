<div class="Menu_Fixed_Bottom_Container">
    <div class="button-container">
        <button class="button">
            <i class="bi bi-bookmarks"></i>
        </button>
        <button class="button">
            <i class="bi bi-plus-circle" id="menuButton"></i>
        </button>
        <button class="button">
            <i class="bi bi-person"></i>
        </button>
    </div>
</div>



<div class="square-menu" id="squareMenu">
    <div class="container-btn-menu">
        <input type="button" value="Recebimento" data-toggle="modal" data-target="#recebimentoModal">
        <input type="button" value="Gasto" data-toggle="modal" data-target="#gastoModal">
    </div>
</div>



<!-- Modal Recebimento -->
<div class="modal fade" id="recebimentoModal" tabindex="-1" aria-labelledby="recebimentoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recebimentoModalLabel">Recebimento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Informe o valor do recebimento:</p>
                <input type="text" class="form-control" placeholder="Valor">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Gasto -->
<div class="modal fade" id="gastoModal" tabindex="-1" aria-labelledby="gastoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div>
                <div>
                    <h5>Valor Gasto</h5>
                </div>

                <div class="d-flex">
                    <div>
                        <label for="bruto">Total</label>
                        <input type="number" name="bruto" id="">
                    </div>

                </div>
                <div>
                    <input type="button" value="OK">
                </div>
            </div>
        </div>
    </div>
</div>