<?php
/**
 * Template do formulário de busca.
 *
 * Acessibilidade:
 * - Label para leitores de tela
 * - Campo type="search"
 * - Botão com texto (não só ícone)
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

$unique_id = wp_unique_id( 'search-form-' );
?>

<form role="search" method="get" class="search-form header-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label for="<?php echo esc_attr( $unique_id ); ?>">
    <span class="screen-reader-text">
      <?php echo esc_html_x( 'Pesquisar por:', 'label', 'independent-theme' ); ?>
    </span>
  </label>

  <input
    type="search"
    id="<?php echo esc_attr( $unique_id ); ?>"
    class="search-field"
    placeholder="<?php echo esc_attr_x( 'Buscar…', 'placeholder', 'independent-theme' ); ?>"
    value="<?php echo esc_attr( get_search_query() ); ?>"
    name="s"
    inputmode="search"
    autocomplete="off"
    aria-label="<?php echo esc_attr_x( 'Campo de busca', 'aria-label', 'independent-theme' ); ?>"
  />

  <button
    type="submit"
    class="search-submit"
    aria-label="<?php echo esc_attr_x( 'Realizar busca', 'button aria-label', 'independent-theme' ); ?>"
  >
    <?php echo esc_html_x( 'Buscar', 'submit button', 'independent-theme' ); ?>
  </button>
</form>
