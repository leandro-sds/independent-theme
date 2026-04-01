<?php get_header(); ?>

<div class="site-content"><div class="container">
  <main id="primary" role="main">
    <article class="error-404 not-found">
      <header class="page-header">
        <h1><?php esc_html_e('Ops! Página não encontrada', 'independent-theme'); ?></h1>
      </header>

      <div class="page-content">
        <p><?php esc_html_e('Desculpe, não conseguimos encontrar o que você procurava.', 'independent-theme'); ?></p>
        <p>
          <?php esc_html_e('Você pode tentar uma busca ou voltar para a', 'independent-theme'); ?>
          <a href="<?php echo esc_url( home_url('/') ); ?>"><?php esc_html_e('página inicial', 'independent-theme'); ?></a>.
        </p>

        <?php independent_back_link(); ?>

        <?php get_search_form(); ?>
      </div>
    </article>
  </main>
</div></div>

<?php get_footer(); ?>
