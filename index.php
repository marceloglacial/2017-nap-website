<?php get_header(); ?>

<div id="Hero">
  <header>
    <h1><?php bloginfo('name'); ?></h1>
  </header>
  <a href="#Quem" class="arrow">Scroll down</a>
</div>

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Mobile / Sandwich Menu -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#Top"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo_small.png" alt="logo small"></a>
    </div>

    <?php wp_nav_menu( array(
      'container_id'     => 'navbar',
      'container_class'  => 'collapse navbar-collapse',
      'menu_id'          => 'navbar',
      'menu_class'       => 'nav nav-pills nav-justified',
    ) ); ?>
  </div>
</nav>

<section class="container">
  <div id="Quem" class="content">
    <h2>Quem Somos</h2>
    <span class="line"></span>
    <div class="col-md-6">
      <p>Há muitos anos um expoente da área de avaliação psicológica sonhava em oferecer uma formação de qualidade para os colegas psicólogos e desenvolver trabalhos clínicos nesse contexto. </p>
      <p>Após algum tempo, o sonho passou a ser de duas, mas ainda não era a hora. Porém, em 2014 o sonho passou a tornar-se realidade quando um grupo de 3 gerações se uniram num propósito de alavancar a avaliação psicológica no Ceará, mostrando todo seu empenho e cuidado no atendimento clínico e na formação de novos avaliadores.</p>
      <p>Foi assim que nasceu o Núcleo de Avaliação Psicológica (NAP) e hoje damos vida a esse movimento com o apoio de vocês. </p>
      <p>Nosso objetivo é trabalhar os eixos da formação técnica, acadêmica e científica, através de atendimentos, grupos de estudo, cursos e supervisões clínicas nas grandes áreas da Avaliação Psicológica e da Psicologia.</p>
    </div>
    <div class="col-md-6">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/bigbluecloud.png" alt="clouds" class="img-responsive">
    </div>
  </div><!-- NOTE: /quem -->

  <div id="Equipe" class="content">
    <h2 class="text-center">Nossa Equipe</h2>
    <span class="line"></span>
    <div class="col-md-6 text-right">
      <div class="card">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/equipe_cristina.png" alt="Cristina" class="img-circle">
        <h3>Ana Cristina Espíndola Rodrigues Montenegro</h3>
        <p>Psicóloga (CRP 11/10239)</p>
        <p>Pós-graduanda em Psicoterapia Psicanalítica, com formação em Clínica Psicanalítica com Adolescentes e Avaliação Psicológica.</p>
      </div>
      <div class="card">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/equipe_catarina.png" alt="Catarina">
        <h3>Catarina Nívea Bezerra Menezes</h3>
        <p>Psicóloga (CRP 11/06161)</p>
        <p>Doutora e Mestre em Psicobiologia, com formação em Terapia Cognitiva Comportamental. Docente em cursos de graduação e pós-graduação com ênfase em avaliação psicológica e psicodiagnóstico. </p>
      </div>
      <div class="card">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/equipe_cristiane.png" alt="Cristiane">
        <h3>Cristiane Maria Gondim Vasconcelos</h3>
        <p>Psicóloga (CRP 11/0439)</p>
        <p>Mestre em Psicologia, com formação em Psicanálise. Docente em cursos de graduação e pós graduação com ênfase em avaliação psicológica e psicodiagnóstico.</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/equipe_marcela.png" alt="Marcela">
        <h3>Marcela Helena de Freitas Clementino</h3>
        <p>Psicóloga (CRP 11/09404)</p>
        <p>Especialista em Transtornos Alimentares e Obesidade. Tutora COGMED. Formação em Análise do Comportamento e em Avaliação Psicológica. Pós-Graduanda em Terapia Cognitivo Comportamental.</p>
      </div>
      <div class="card">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/equipe_scarlet.png" alt="Scarlett">
        <h3>Scarlett Borges Fernandes</h3>
        <p>Psicóloga (CRP 11/09551)</p>
        <p>Mestranda em Educação, Pós-graduanda em Psicoterapia Psicanalítica, Especialista em Neuropsicologia, com Formação em Psicoterapia Breve Focal e Avaliação Psicológica.</p>
      </div>
      <div class="card">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/equipe_tatiana.png" alt="Tatiana">
        <h3>Tatiana Tostes Vieira da Costa</h3>
        <p>Psicóloga (CRP 11/02173)</p>
        <p>Doutora e Mestre em Psicologia Especialista em Psicopedagogia e em Docência no Ensino Superior, Formação em Avaliação psicológica e em Psicanálise. Tutora COGMED, Docente em cursos de graduação e pós-graduação com ênfase em avaliação psicológica e psicodiagnóstico.</p>
      </div>
    </div>
  </div><!-- NOTE: /equipe -->

  <div id="Servicos" class="content">
    <h2 class="text-center">Nossos Serviços</h2>
    <span class="line"></span>
    <div class="col-md-6 text-right">
      <h3>Avaliação Psicológica</h3>
      <ul>
        <li>Avaliação Psicológicas em crianças, adolescentes, adultos e idosos</li>
        <li>Avaliação Neuropsicológica</li>
        <li>Avaliação voltada para a Orientação Profissional</li>
        <li>Avaliação da Personalidade</li>
        <li>Avaliação de Investigação de Transtornos Emocionais</li>
        <li>Avaliação de Potencial de Desempenho</li>
        <li>Avaliação Psicológica para o contexto Organizacional</li>
        <li>Suporte técnico para Concursos e Psicotécnico</li>
        <li>Avaliação Psicológica em Procedimentos Cirúrgicos</li>
        <li>Avaliação Psicológica Familiar</li>
        <li>Perícia Psicológica</li>
        <li>Psicodiagnóstico Compreensivo</li>
        <li>Consultoria utilizando o Teste Psicológico PMK</li>
        <li>Consultoria em Instrumentos Psicológicos</li>
      </ul>

      <h3>Centro de Serviço COGMED</h3>
      <ul>
        <li>Treinamento COGMED</li>
        <li>Formação de novos Tutores</li>
      </ul>
    </div>

    <div class="col-md-6">
      <h3>Projetos em Empresas e Escolas</h3>
      <h3>Atendimento Clínico</h3>
      <ul>
        <li>Psicoterapia em criança, adolescente, adulto e Idoso.</li>
        <li>Psicoterapia Breve Focal</li>
        <li>Terapia Cognitivo Comportamental</li>
        <li>Psicoterapia Psicanalítica</li>
      </ul>

      <h3>Acadêmico</h3>
      <ul>
        <li>Formação em Avaliação Psicológica</li>
        <li>Cursos de Testes Psicológicos</li>
        <li>Grupos de Estudo</li>
        <li>Supervisões clínica</li>
      </ul>

      <h3>Testoteca</h3>
      <ul>
        <li>Locação de testes Neuropsicológicos</li>
        <li>Locação de testes Cognitivos</li>
        <li>Locação de testes Projetivos</li>
        <li>Locação de testes Inventários</li>
      </ul>
    </div>
  </div><!-- NOTE: /servicos -->

  <div id="Contato" class="content text-center">
    <h2 class="">Entre em contato</h2>
    <span class="line"></span>
    <address>
      <div class="col-md-12">
        <strong>NAP - Núcleo de Avaliação Psicológica</strong><br>
        R. Oswaldo Cruz, 01, Sala 706<br>
        Edifício Trade Center - 60125-150 - Meireles<br>
        Fortaleza - Ceará - Brasil<br>
        +55 85 3025 0353 <br>
        <a href="mailto:nucleodeavaliacaopsicologica@gmail.com">nucleodeavaliacaopsicologica@gmail.com</a><br>
        <a href="https://www.facebook.com/Núcleo-de-Avaliação-Psicológica-NAP-1499518490327219/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/facebook.svg" alt="facebook icon"></a>
        <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/instagram.svg" alt="instagram icon"></a>
        <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/twitter.svg" alt="twitter icon"></a>
      </div>
    </address>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.3853883435377!2d-38.49917274990416!3d-3.7258630972759295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7486fb522ceb9%3A0xfbc1227ae97a795f!2sR.+Osvaldo+Cruz%2C+01+-+Meireles%2C+Fortaleza+-+CE%2C+60125-160!5e0!3m2!1spt-BR!2sbr!4v1485825776053" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div><!-- NOTE: /contato -->
</section>

<?php get_footer(); ?>
