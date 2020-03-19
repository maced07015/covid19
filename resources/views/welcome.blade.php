@extends('layouts.app')
@section('content')
<!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <h1>Cadastre seu e-mail para receber atualizações diárias</h1>

            <form class="form-inline" id="form">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="email" class="sr-only">E-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="E-mail">
                </div>

                <a href="javascript:;" onclick="$('#form').submit()" class="btn-get-started">Registrar</a>
            </form>

            <a href="#facts" class="btn-get-started">Casos Confirmados</a>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

    <!-- ======= Facts Section ======= -->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Facts</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->
  </main><!-- End #main -->
@endsection