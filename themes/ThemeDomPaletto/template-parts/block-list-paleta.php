<?php
// Crie uma instância de WP_Query
$args = array(
    'post_type' => 'paletas', // Tipo de post (pode ser personalizado)
    'posts_per_page' => -1, // -1 para listar todos os posts ou um número para limitar
);

$query = new WP_Query($args);

// Verifique se existem posts
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        // Aqui você pode exibir informações do post
        the_title(); // Título do post
        the_content(); // Conteúdo do post
    endwhile;
    wp_reset_postdata(); // Restaure os dados originais do post
else :
    echo 'Não foram encontrados posts.';
endif;
?>
