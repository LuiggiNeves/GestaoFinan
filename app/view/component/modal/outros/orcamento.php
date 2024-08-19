<!-- Modal de Orçamento -->
<div class="central-modal" id="orcamentoModal">
    <div class="central-modal-content">

        <div class="header-orc">

            <div class="content-orc-head">
                <div class="title-modal">
                    <i>Orçamento</i>
                </div>
                <div class="container-close-modal">
                    <span class="close-modal" id="closeOrcamentoModal">&times;</span>
                </div>

            </div>
        </div>


        <div class="container-body-orc">
            <div class="body-orc">
                <div class="container-orcamento-fator">
                    <form action="">
                        <div>
                            <label for="tot_km">KM Total</label>
                            <input type="number" name="tot_km" id="">
                        </div>

                        <div>
                            <label for="valor_km">Valor KM</label>
                            <input type="number" name="valor_km">
                        </div>

                        <div>
                            <label for="valor_gasolina">Valor Gasolina</label>
                            <input type="number" name="" id="">
                        </div>

                        <div>
                            <label for="pedagio">Valores Pedagio</label>
                            <input type="number">
                        </div>
                    </form>
                </div>

                <div class="container-orcamento-mapa">
                    <div>
                        <form id="distanceForm">
                            <label for="address1">Endereço 1:</label>
                            <input type="text" id="address1" required>
                            <br><br>
                            <label for="address2">Endereço 2:</label>
                            <input type="text" id="address2" required>
                            <br><br>
                            <button type="submit">Calcular Distância</button>
                        </form>

                        <p id="result"></p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>