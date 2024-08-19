<nav>
    <div id="container_content_navbar">
        <div class="container-div-menu">
            <div id="container_primary_menu">

                <div class="content-user d-flex">
                    <i class="bi bi-person-circle"></i>
                    <i>Luiggi Neves</i>
                </div>

                <div class="content-btn-reflash">
                    <i class="bi bi-arrow-repeat"></i>
                </div>


            </div>

            <div id="container_second_menu">
                <div id="container_date_select_input">

                    <div class="content-arrow-select content-arrow-left" onclick="previousMonth()">
                        <i class="bi bi-caret-left-fill"></i>
                    </div>
                    <div class="select-select-date">
                        <select id="fruits" name="fruits">
                            <option value="Janeiro">Janeiro</option>
                            <option value="Fevereiro">Fevereiro</option>
                            <option value="Março">Março</option>
                            <option value="Abril">Abril</option>
                            <option value="Maio">Maio</option>
                            <option value="Junho">Junho</option>
                            <option value="Julho">Julho</option>
                            <option value="Agosto">Agosto</option>
                            <option value="Setembro">Setembro</option>
                            <option value="Outubro">Outubro</option>
                            <option value="Novembro">Novembro</option>
                            <option value="Dezembro">Dezembro</option>
                        </select>
                    </div>
                    <div class="content-arrow-select content-arrow-right" onclick="nextMonth()">
                        <i class="bi bi-caret-right-fill"></i>
                    </div>

                </div>

                <div id="container_value_all_center">
                    <div id="content-value-all-center">
                        <div class="s-left">
                            R$
                        </div>
                        <div class="v-center">

                            <div>
                                <i class="VisibilityShowValue">2.543,00</i>
                            </div>

                            <div id="info-valor">
                                <i>Valor</i>
                            </div>
                        </div>
                        <div class="e-right">
                            <i class="bi bi-eye" onclick="toggleVisibility()"></i>
                            <i class="bi bi-eye-slash" style="display:none;" onclick="toggleVisibility()"></i>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <div id="container_cube_values">
            <div id="content_cube_values">
                <div class="cube-generic">
                    <div class="d-flex">
                        <div class="cube-ico-s">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                        <i>Lucro</i>
                    </div>
                    <div class="cube-value">
                        <i class="VisibilityShowValue">1.324,28</i>
                    </div>
                    <div class="cube-comp-months">
                        90%
                    </div>
                </div>

                <div class="cube-generic">
                    <div class="d-flex">
                        <div class="cube-ico-s">
                            <i class="bi bi-percent"></i>
                        </div>
                        <i>Média</i>
                    </div>
                    <div class="cube-value">
                        <i>25%</i>
                    </div>
                    <div class="cube-comp-months">
                        -30%
                    </div>
                </div>

                <div class="cube-generic">
                    <div class="d-flex">
                        <div class="cube-ico-s">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                        <i>Gasto</i>
                    </div>
                    <div class="cube-value">
                        <i class="VisibilityShowValue">2.050,00</i>
                    </div>
                    <div class="cube-comp-months">
                        -10%
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>


<!-- Script para avançar os mêses nas setas-->
 
<script>
    const months = [
        "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
        "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
    ];

    function setDefaultMonth() {
        const select = document.getElementById("fruits");
        const currentMonth = new Date().getMonth();
        select.selectedIndex = currentMonth;
    }

    function previousMonth() {
        const select = document.getElementById("fruits");
        const currentIndex = select.selectedIndex;
        const newIndex = (currentIndex - 1 + months.length) % months.length;
        select.selectedIndex = newIndex;
    }

    function nextMonth() {
        const select = document.getElementById("fruits");
        const currentIndex = select.selectedIndex;
        const newIndex = (currentIndex + 1) % months.length;
        select.selectedIndex = newIndex;
    }

    document.addEventListener('DOMContentLoaded', setDefaultMonth);
</script>


<!-- Script para esconder valores-->

<script>
    let isHidden = false;

    function toggleVisibility() {
        const valueElements = document.querySelectorAll(".VisibilityShowValue");
        const eyeIcon = document.querySelector(".bi-eye");
        const eyeSlashIcon = document.querySelector(".bi-eye-slash");

        valueElements.forEach(element => {
            if (isHidden) {
                // Mostrar o valor real
                element.textContent = element.getAttribute("data-original-value");
            } else {
                // Esconder o valor
                element.setAttribute("data-original-value", element.textContent);
                element.textContent = "-.---,--";
            }
        });

        eyeIcon.style.display = isHidden ? "inline" : "none";
        eyeSlashIcon.style.display = isHidden ? "none" : "inline";
        isHidden = !isHidden;
    }
</script>