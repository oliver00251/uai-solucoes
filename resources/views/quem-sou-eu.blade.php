<!-- Seção Quem Sou Eu -->
<section id="quem-sou" class="quem-sou-section">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!-- Imagem de Perfil -->
            <div class="col-lg-6 d-flex justify-content-center">
                <div class="quem-sou-img">
                    <img src="{{ asset('images/quem-sou-eu.jpg') }}" alt="Natã Oliveira" class="img-fluid rounded">
                </div>
            </div>
            <!-- Texto sobre você com Slides -->
            <div class="col-lg-6">
                <div class="quem-sou-texto">
                    <h1 class="display-4">Natã Oliveira - Analista de Sistemas</h1>
                    <div class="slides-container">
                        <!-- Slide 1 -->
                        <div class="slide active" id="slide1">
                            <h2>Quem sou eu</h2>
                            <p class="lead">
                                Sou Analista de Sistemas com mais de 10 anos de experiência no desenvolvimento de soluções tecnológicas, incluindo sistemas, websites e plataformas personalizadas, sempre focando na otimização de processos empresariais.                            </p>
                        </div>
                        <!-- Slide 2 -->
                        <div class="slide" id="slide2">
                            <h2>Trajetória e Experiência</h2>
                            <p>
                                Minha trajetória começou em 2010, quando iniciei meus estudos em programação no CEFET-MG. Ao longo dos anos, trabalhei em diversos projetos, incluindo o desenvolvimento de soluções para gestão de eventos e plataformas de ensino. Em 2020, durante a pandemia, passei a atender clientes de todo o Brasil e expandi minha atuação internacionalmente.
                            </p>
                        </div>
                        <!-- Slide 3 -->
                        <div class="slide" id="slide3">
                            <h2>Reconhecimento e Projetos</h2>
                            <p>
                                Em 2024, fui reconhecido no Prêmio Alma da Educação com o projeto "Seed Eduk", uma plataforma focada em preparar alunos para o ENEM, utilizando questões de provas anteriores e avaliando o desempenho do aluno. Além disso, criei a plataforma "Uai Resolve", com foco na solução de problemas urbanos.
                            </p>
                        </div>
                        <!-- Slide 4 -->
                        <div class="slide" id="slide4">
                            <h2>Tecnologias e Habilidades</h2>
                            <p>
                                Como Analista de Sistemas, sou especializado em tecnologias como Laravel, PHP, MySQL, desenvolvimento front-end com HTML, CSS, JavaScript e frameworks como Bootstrap. Também tenho experiência com WordPress, Elementor e integração com APIs.
                            </p>
                        </div>
                    </div>

                    <!-- Navegação -->
                    <div class="slide-controls">
                        <button class="prev" onclick="changeSlide(-1)">&#10094; Anterior</button>
                        <button class="next" onclick="changeSlide(1)">Próximo &#10095;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .quem-sou-section {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-color: #f4f4f4;
        padding: 0 50px;
    }

    .quem-sou-img img {
        width: 85%;
        max-width: 300px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .quem-sou-texto h1 {
        font-size: 2.5rem;
        color: #1B59E2;
        font-weight: bold;
    }

    .slides-container {
        position: relative;
    }

    .slide {
        display: none;
        text-align: left;
        color: #333;
    }

    .slide.active {
        display: block;
    }

    .slide h2 {
        font-size: 1.8rem;
        margin-bottom: 20px;
    }

    .slide p {
        font-size: 1.1rem;
        line-height: 1.6;
    }

    .slide-controls {
        margin-top: 30px;
        text-align: center;
    }

    .prev, .next {
        background-color: #1B59E2;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 1rem;
        cursor: pointer;
        margin: 0 10px;
        border-radius: 5px;
    }

    .prev:hover, .next:hover {
        background-color: #155ab3;
    }

    @media (max-width: 767px) {
        .quem-sou-section {
            padding: 0 20px;
        }

        .quem-sou-img img {
            width: 100%;
            max-width: 200px;
        }

        .quem-sou-texto h1 {
        font-size: 1.4rem;
        margin-top: 1rem;
    }

        .slide p {
            font-size: 1rem;
        }
    }
</style>

<script>
   let currentSlide = 0;  // Começa com 0, pois os índices começam de 0
const slides = document.querySelectorAll('.slide');
const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');

function changeSlide(direction) {
    // Remover a classe "active" do slide atual
    slides[currentSlide].classList.remove('active');

    // Atualizar o índice do slide atual
    currentSlide += direction;

    // Verificar se o índice está fora dos limites
    if (currentSlide >= slides.length) {
        currentSlide = 0;  // Vai para o primeiro slide
    }

    if (currentSlide < 0) {
        currentSlide = slides.length - 1;  // Vai para o último slide
    }

    // Adicionar a classe "active" ao novo slide
    slides[currentSlide].classList.add('active');

    // Atualizar a visibilidade dos botões de navegação
    updateNavigation();
}

function updateNavigation() {
    // Se estiver no primeiro slide, oculta o botão "Anterior"
    if (currentSlide === 0) {
        prevButton.style.display = 'none';
    } else {
        prevButton.style.display = 'inline-block';
    }

    // Se estiver no último slide, oculta o botão "Próximo"
    if (currentSlide === slides.length - 1) {
        nextButton.style.display = 'none';
    } else {
        nextButton.style.display = 'inline-block';
    }
}

// Inicializar estado da navegação
updateNavigation();

</script>
