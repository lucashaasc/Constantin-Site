<?php 
add_action('init', 'produto_register_post_type');
  function produto_register_post_type() {
    register_post_type('produto', array(
      'labels' => array(
      'name' => 'Produto',
      'singular_name' => 'Produto',
      'add_new' => 'Adicionar Novo',
      'edit_item' => 'Editar',
      'new_item' => 'Nova',
      'view_item' => 'Visualizar',
      'search_items' => 'Buscar',
      'not_found' => 'Não foi encontrada a loja',
      'not_found_in_trash' => 'A loja não foi encontrada no lixo'
    ),
    'public' => true,
    'supports' => array('title','editor','author','thumbnail','excerpt','comments', 'post-formats'),
    'taxonomies' => array('category', 'post_tag') // this is IMPORTANT
    ));

} ?>