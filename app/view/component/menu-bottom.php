
<!--Menu bottom conteudo-->
<div class="Menu_Fixed_Bottom_Container">
    <div class="button-container">
        <button class="button">
            <i class="bi bi-bookmarks" id="bookmarksButton"></i>
        </button>
        <button class="button">
            <i class="bi bi-plus-circle" id="menuButton"></i>
        </button>
        <button class="button">
            <i class="bi bi-person"></i>
        </button>
    </div>
</div>




<?php include 'modal/outros/orcamento.php' ?>
<?php include 'modal/menu-bottom.php'?>
<!--Input personalizado-->


<script>
    function toggleDropdown() {
        document.getElementById("dropdown").style.display = "block";
    }

    function selectOption(value) {
        document.getElementById("browser").value = value;
        document.getElementById("dropdown").style.display = "none";
    }

    function filterFunction() {
        const input = document.getElementById('browser');
        const filter = input.value.toLowerCase();
        const options = document.querySelectorAll('#dropdown option');
        let anyVisible = false;

        options.forEach(option => {
            if (option.innerText.toLowerCase().indexOf(filter) > -1) {
                option.style.display = "";
                anyVisible = true;
            } else {
                option.style.display = "none";
            }
        });

        if (!anyVisible) {
            document.getElementById("dropdown").style.display = "none";
        } else {
            document.getElementById("dropdown").style.display = "block";
        }
    }

    document.addEventListener('click', function(event) {
        if (!event.target.closest('.input-categoria')) {
            document.getElementById("dropdown").style.display = "none";
        }
    });
</script>