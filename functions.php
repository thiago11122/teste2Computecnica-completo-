<?php
/* WIDGETS */
 
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}

add_action( 'init', 'register_cpt_produto' );
function register_cpt_produto() {
    register_post_type( 'produto',
        array(
            'labels' => array(
                'name' => __( 'Produtos' ),
                'singular_name' => __( 'Produto' )
            ),
            'public' => true,
            'menu_icon' => 'dashicons-products',
            'supports'	=>  array('title','thumbnail', 'page-attributes'),
        )
);
}

add_action( 'init', 'register_cliente' );
function register_cliente() {
    register_post_type( 'cliente',
        array(
            'labels' => array(
                'name' => __( 'Clientes' ),
                'singular_name' => __( 'Cliente' )
            ),
            'public' => true,
            'has_archive' => true,
	     'menu_icon'  => 'dashicons-universal-access',
             'supports'	=>  array('title','thumbnail', 'page-attributes'),
        )
);
}

add_action( 'init', 'register_pedidos' );
function register_pedidos() {
    register_post_type( 'pedido',
        array(
            'labels' => array(
                'name' => __( 'Pedidos' ),
                'singular_name' => __( 'Pedido' )
            ),
            'public' => true,
            'has_archive' => true,
	     'menu_icon'  => 'dashicons-cart',
             'supports'	=>  array('title', 'editor','thumbnail', 'page-attributes'),
        )
);
}
 
?>


