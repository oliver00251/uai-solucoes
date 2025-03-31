<!-- Seção de Depoimentos -->
<div class="container min-vh-100 d-none" >
    <section id="depoimentos" class="depoimentos_section">
        <div class="container">
            <h2 class="section-title text-center">O que dizem sobre meu trabalho</h2>
    
            <div class="depoimentos-wrapper">
                <button class="scroll-btn left" onclick="scrollDepoimentos(-300)">&#10094;</button>
                
                <div class="depoimentos-container">
                    @php
                        $depoimentos = [
                            
                            ["data" => "08/03/2025 - 23:10", "comentario" => "Ótimo profissional!! Natã foi muito atencioso e paciente em todos os momentos, desde o início até a finalização do trabalho."],
                            ["data" => "01/03/2025 - 13:26", "comentario" => "O Natã foi rápido e eficiente. Ele tem uma ótima comunicação e é muito prestativo. Super recomendo!"],
                            ["data" => "13/02/2025 - 21:34", "comentario" => "Excelente profissional! Recomendo a todos."],
                            ["data" => "05/02/2025 - 22:15", "comentario" => "Atencioso e competente na realização do trabalho. Recomendo."],
                            ["data" => "01/02/2025 - 10:07", "comentario" => "Excelente profissional! Entregou antes da data e resolveu o problema."],
                            ["data" => "24/09/2024 - 22:13", "comentario" => "Profissional excelente, conseguiu desenvolver o trabalho além das expectativas, recomendo a todos, não tem erro, pode confiar!"],
                            ["data" => "05/07/2024 - 22:21", "comentario" => "Entregou o serviço conforme solicitado. Responde rápido e foi solícito. Recomendo o profissional!"],
                            ["data" => "25/06/2024 - 20:57", "comentario" => "Trabalho muito profissional e com muito capricho. Recomendo!"],
                            ["data" => "23/10/2023 - 09:30", "comentario" => "Ficou muito bom, obrigada!"],
                            ["data" => "10/10/2023 - 05:45", "comentario" => "Excelente profissional. Recomendo!"],
                            ["data" => "26/07/2023 - 19:28", "comentario" => "Ótimo serviço, recomendo!!"],
                            ["data" => "07/05/2023 - 22:08", "comentario" => "Bem, se procura um bom profissional o Natã é a pessoa certa, de brinde vem uma pessoa muito profissional, educada e inteligente. Excelente pessoa, recomendo a todos!"],
                            ["data" => "02/05/2023 - 21:00", "comentario" => "Profissional comprometido e responsável. Demonstrou confiança e compromisso com a finalização do serviço conforme o solicitado. Recomendo e faria serviços novamente com ele."],
                            ["data" => "17/04/2023 - 13:58", "comentario" => "Rápido e atencioso. Super indico."],
                            ["data" => "08/11/2022 - 13:23", "comentario" => "Ótimo, recomendo."],
                            ["data" => "04/11/2022 - 13:33", "comentario" => "Muito bom e atencioso, fez exatamente como combinado e entregou antes do prazo."],
                            ["data" => "03/11/2022 - 20:27", "comentario" => "O Natã entregou o serviço muito rápido, antes mesmo do prazo. Foi super atencioso, tirou todas as minhas dúvidas. Superou as expectativas, trabalho de profissional, recomendo!"],
                            ["data" => "30/10/2022 - 17:16", "comentario" => "Excelente profissional, cuidadoso, atencioso e eficiente. Super indico."],
                            ["data" => "16/02/2022 - 16:03", "comentario" => "Excelente profissional. Competente e justo com o trabalho. Obrigado."],
                        ];
                    @endphp
    
                    @foreach($depoimentos as $dep)
                        <div class="depoimento-card">
                            <p class="depoimento-text">"{{ $dep['comentario'] }}"</p>
                            <span class="depoimento-date">{{ $dep['data'] }}</span>
                        </div>
                    @endforeach
                </div>
    
                <button class="scroll-btn right" onclick="scrollDepoimentos(300)">&#10095;</button>
            </div>
        </div>
    </section>
</div>

<style>
    .depoimentos_section {
    background: #f8f9fa;
    padding: 50px 0;
    margin-bottom: 10vh;
    border-radius: 7px;
    min-width: 80vw !important;
}

.section-title {
    font-size: 28px;
    font-weight: bold;
    color: #1B59E2;
    margin-bottom: 30px;
}

.depoimentos-wrapper {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

.depoimentos-container {
    display: flex;
    overflow-x: auto;
    scroll-behavior: smooth;
    gap: 15px;
    padding: 10px;
    width: 90%;
    scrollbar-width: none; /* Remove barra de rolagem no Firefox */
}

.depoimentos-container::-webkit-scrollbar {
    display: none; /* Remove barra de rolagem no Chrome e Safari */
}

.depoimento-card {
    min-width: 250px;
    max-width: 300px;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    flex-shrink: 0;
}

.depoimento-text {
    font-size: 16px;
    font-style: italic;
    color: #333;
}

.depoimento-date {
    display: block;
    font-size: 14px;
    color: #666;
    margin-top: 10px;
}

.scroll-btn {
    background-color: #1B59E2;
    color: white;
    border: none;
    padding: 5px 15px;
    cursor: pointer;
    font-size: 20px;
    border-radius: 50%;
    position: absolute;
}

.scroll-btn.left {
    left: 10px;
}

.scroll-btn.right {
    right: 10px;
}

.scroll-btn:hover {
    background-color: #1548B5;
}

@media (max-width: 767px) {
    .depoimento-card {
        min-width: 285px;
        max-width: 280px;
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        flex-shrink: 0;
    }

    .container.min-vh-100 {
    min-height: 10vh !important;
}
}


</style>
<script>
    function scrollDepoimentos(valor) {
        document.querySelector('.depoimentos-container').scrollBy({ left: valor, behavior: 'smooth' });
    }
</script>

