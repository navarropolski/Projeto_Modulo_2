<div class="container">
    <br><br><br><br>
    <h2>Especifique o problema:</h2>
    <h2>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Selecione o produto com que você está tendo problemas:
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul>
                            <li class="btn-botao w-100 selectable" data-target="selected-button-one">Dark Legacy</li>
                            <li class="btn-botao w-100 selectable" data-target="selected-button-one">LabFy Gize</li>
                            <li class="btn-botao w-100 selectable" data-target="selected-button-one">Snake Game</li>
                            <li class="btn-botao w-100 selectable" data-target="selected-button-one">Deep Rock Galactic</li>
                            <li class="btn-botao w-100 selectable" data-target="selected-button-one">Elden Ring</li>
                            <li class="btn-botao w-100 selectable" data-target="selected-button-one">Counter Strike 2</li>
                            <li class="btn-botao w-100 selectable" data-target="selected-button-one">Dota 2</li>
                            <li class="btn-botao w-100 selectable" data-target="selected-button-one">DayZ</li>
                            <li class="btn-botao w-100 selectable" data-target="selected-button-one">Shadow of War</li>
                            <li class="btn-botao w-100 selectable" data-target="selected-button-one">Age of Empires II: Definitive Edition</li>
                            <li class="btn-botao w-100 selectable" data-target="selected-button-one">Hearts of Iron IV</li>
                            <li class="btn-botao w-100 selectable" data-target="selected-button-one">Rust</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-4">
                        <h5></h>
                        <p id="selected-button-one" class="btn-botao w-100">Nenhum produto selecionado.</p>
                </div>
               
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Qual problema você está tendo com esse produto?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                            <li class="btn-botao w-100 selectable" data-target="selected-button-two">Não consigo acessar a página de compra.</li>
                            <li class="btn-botao w-100 selectable" data-target="selected-button-two">Não estou conseguindo jogar.</li>
                            <li class="btn-botao w-100 selectable" data-target="selected-button-two">Não consigo acessar a página deste jogo.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                        <h5></h>
                        <p id="selected-button-two" class="btn-botao w-100">Nenhum produto selecionado.</p>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Informações adicionais:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <p class="text-center">
                <button type="button" class="btn btn-botao" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Enviar requisição
                </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Recebemos sua requisição e responderemos o mais breve possível, obrigado!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            </p>
    </h2>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
       
        function handleButtonClick(event) {
            const button = event.currentTarget;
            const targetId = button.getAttribute('data-target');
            const buttons = document.querySelectorAll(`button[data-target='${targetId}']`);
            const displayElement = document.getElementById(targetId);

            buttons.forEach(btn => btn.classList.remove('selected'));
            button.classList.add('selected');

            displayElement.textContent = button.textContent;

            const accordionCollapse = button.closest('.accordion-collapse');
            const accordionInstance = bootstrap.Collapse.getOrCreateInstance(accordionCollapse);
            accordionInstance.hide();
        }

        document.querySelectorAll('.selectable').forEach(button => {
            button.addEventListener('click', handleButtonClick);
        });
    </script>

    <script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const buttons = document.querySelectorAll('.accordion-body .btn-botao');
        
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const accordionCollapse = document.getElementById('flush-collapseOne');
                const bsCollapse = new bootstrap.Collapse(accordionCollapse, {
                    toggle: false
                });
                bsCollapse.hide();
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const buttons = document.querySelectorAll('.accordion-body .btn-botao');
        
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const accordionCollapse = document.getElementById('flush-collapseTwo');
                const bsCollapse = new bootstrap.Collapse(accordionCollapse, {
                    toggle: false
                });
                bsCollapse.hide();
            });
        });
    });
</script>

</div>