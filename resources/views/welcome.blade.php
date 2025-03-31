@extends('layouts.app')
@section('content')
       <!-- Slider Section -->
       <section id="home" class="slider_section">
        <div id="customCarousel1" class="carousel " data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="img-box">
                        <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
                        <dotlottie-player src="https://lottie.host/e0890fc0-5c72-4bc5-b37c-6fe10f72697c/RRC5nD7YX9.lottie" background="transparent" speed="1" style="width: 100%; height: 100%" loop autoplay></dotlottie-player>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>Transforme seu Negócio com Soluções Digitais</h1>
                      <p>
                        Criação de sites, sistemas e soluções para gerenciar leads, otimizando processos e ajudando empresas a crescer.                      </p>
                      <div class="btn-box">
                        <a href="#" class="btn1" data-toggle="offcanvas" data-target="#contactModal">Fale Conosco</a>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </section>

  
      <!-- Seção Sobre -->
      @include('sobre')
      <!-- Seção Quem Sou Eu -->
      @include('quem-sou-eu')

  
     
@endsection
