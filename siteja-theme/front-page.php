<?php get_header(); ?>

<section class="hero" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/hero.jpg')">
  <div class="overlay">
    <h2>Seu site profissional em até 72 horas</h2>
    <p>Sites rápidos, modernos e prontos para vender.</p>
    <a class="btn" href="#planos">Ver Planos</a>
  </div>
</section>

<section id="como-funciona" class="section">
  <h3>Como funciona</h3>
  <div class="grid">
    <div>Escolha o plano</div>
    <div>Envie as informações</div>
    <div>Site pronto em 72h</div>
  </div>
</section>

<section id="planos" class="section dark">
  <h3>Nossos Planos</h3>

  <div class="cards">
    <div class="card">
      <h4>Landing Page</h4>
      <p class="price">R$ 599</p>
      <a href="https://buy.stripe.com/dRmeVd01mfLT9Eg5Oy1B600" class="btn">Contratar</a>
    </div>

    <div class="card destaque">
      <h4>Site Essencial</h4>
      <p class="price">R$ 799</p>
      <a href="https://buy.stripe.com/eVqbJ101m0QZ2bOfp81B601" class="btn">Contratar</a>
    </div>

    <div class="card">
      <h4>Site Profissional</h4>
      <p class="price">R$ 999</p>
      <a href="https://buy.stripe.com/14A6oH01mbvDdUw6SC1B602" class="btn">Contratar</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
