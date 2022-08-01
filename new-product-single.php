<style>
    /**
    Ocultar media menu sidebar
     */
    div#uip-folder-app
    {
        display:none!important;
    }



    .drop-zone {
        max-width: 200px;
        height: 200px;
        padding: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-family: "Quicksand", sans-serif;
        font-weight: 500;
        font-size: 20px;
        cursor: pointer;
        color: #cccccc;
        border: 4px dashed #009578;
        border-radius: 10px;
    }

    .drop-zone--over {
        border-style: solid;
    }

    .drop-zone__input {
        display: none;
    }

    .drop-zone__thumb {
        width: 100%;
        height: 100%;
        border-radius: 10px;
        overflow: hidden;
        background-color: #cccccc;
        background-size: cover;
        position: relative;
    }

    .drop-zone__thumb::after {
        content: attr(data-label);
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 5px 0;
        color: #ffffff;
        background: rgba(0, 0, 0, 0.75);
        font-size: 14px;
        text-align: center;
    }
</style>





<!--
* Change Buttons Form
* Mudar cores dos botões do formulário de envio dos dados do produto
*
 -->
<style>
    a.dokan-save-attribute
    {
        background-color: #0e9138!important;
    }
    input#publish
    {
        background-color: #0e9138!important;
    }
</style>
<!-- Fim Change Buttons Form -->



<!--
*
* Effects Borders Inputs:
* Efeitos para as bordas dos inputs de formulário de envio dos dados de produto para cadastro.
*
 -->
<style>
    /**
     * Input de Preço
    */
    .wc_input_price:focus
    {
        outline: 2px solid green!important;
    }

    .dokan-form-control:focus
    {
        outline: 2px solid green!important;
    }




    .select2-search__field:focus
    {
        outline: 2px solid green;
    }

    [aria-selected="true"]
    {
        background-color: #FCD723!important;
    }



    /*:focus-visible {*/
    /*    outline: 2px solid green;*/
    /*}*/

    /*:focus:not(:focus-visible) {*/
    /*    outline: 2px solid green;*/
    /*    background-color: #f1f2f6;*/
    /*}*/



    :focus{outline: none;}

    .col-3{position: relative;} /* necessary to give position: relative to parent. */
    input[type="text"]{font: 15px/24px "Lato", Arial, sans-serif; color: #333; width: 100%; box-sizing: border-box; letter-spacing: 1px;}


    .effect-21{border: 1px solid #ccc; padding: 7px 14px; transition: 0.4s; background: transparent;}

    .effect-19 ~ .focus-border:before,
    .effect-19 ~ .focus-border:after{content: ""; position: absolute; top: -1px; left: 50%; width: 0; height: 2px; background-color: #0E9139; transition: 0.4s;}
    .effect-19 ~ .focus-border:after{top: auto; bottom: 0;}
    .effect-19 ~ .focus-border i:before,
    .effect-19 ~ .focus-border i:after{content: ""; position: absolute; top: 50%; left: 0; width: 2px; height: 0; background-color: #0E9139; transition: 0.6s;}
    .effect-19 ~ .focus-border i:after{left: auto; right: 0;}
    .effect-19:focus ~ .focus-border:before,
    .effect-19:focus ~ .focus-border:after,
    .has-content.effect-19 ~ .focus-border:before,
    .has-content.effect-19 ~ .focus-border:after{left: 0; width: 100%; transition: 0.4s;}
    .effect-19:focus ~ .focus-border i:before,
    .effect-19:focus ~ .focus-border i:after,
    .has-content.effect-19 ~ .focus-border i:before,
    .has-content.effect-19 ~ .focus-border i:after{top: -1px; height: 100%; transition: 0.6s;}
    .effect-19 ~ label{position: absolute; left: 14px; width: 100%; top: 10px; color: #aaa; transition: 0.3s; z-index: -1; letter-spacing: 0.5px;}
    .effect-19:focus ~ label, .has-content.effect-19 ~ label{top: -18px; left: 0; font-size: 12px; color: #0e9139; transition: 0.3s;}


    .effect-21 ~ .focus-border:before,
    .effect-21 ~ .focus-border:after{content: ""; position: absolute; top: 0; right: 0; width: 0; height: 2px; background-color: #0e9139; transition: 0.2s; transition-delay: 0.2s;}
    .effect-21 ~ .focus-border:after{top: auto; bottom: 0; right: auto; left: 0; transition-delay: 0.6s;}
    .effect-21 ~ .focus-border i:before,
    .effect-21 ~ .focus-border i:after{content: ""; position: absolute; top: 0; left: 0; width: 2px; height: 0; background-color: #0e9139; transition: 0.2s;}
    .effect-21 ~ .focus-border i:after{left: auto; right: 0; top: auto; bottom: 0; transition-delay: 0.4s;}
    .effect-21:focus ~ .focus-border:before,
    .effect-21:focus ~ .focus-border:after,
    .has-content.effect-21 ~ .focus-border:before,
    .has-content.effect-21 ~ .focus-border:after{width: 100%; transition: 0.2s; transition-delay: 0.6s;}
    .effect-21:focus ~ .focus-border:after,
    .has-content.effect-21 ~ .focus-border:after{transition-delay: 0.2s;}
    .effect-21:focus ~ .focus-border i:before,
    .effect-21:focus ~ .focus-border i:after,
    .has-content.effect-21 ~ .focus-border i:before,
    .has-content.effect-21 ~ .focus-border i:after{height: 100%; transition: 0.2s;}
    .effect-21:focus ~ .focus-border i:after,
    .has-conten.effect-21 ~ .focus-border i:after{transition-delay: 0.4s;}
    .effect-21 ~ label{position: absolute; left: 14px; width: 100%; top: 10px; color: #aaa; transition: 0.3s; z-index: -1; letter-spacing: 0.5px;}
    .effect-21:focus ~ label, .has-content.effect-21 ~ label{top: -18px; left: 0; font-size: 12px; color: #3399FF; transition: 0.3s;}
</style>
<!-- Fim Effects Borders Inputs  -->




<?php

/**
 * @class CategoryDropdownSingle
 * @class TaxonomyDropdownSingle
 */
use WeDevs\Dokan\Walkers\CategoryDropdownSingle;
use WeDevs\Dokan\Walkers\TaxonomyDropdown;

/**
 * @var global $post
 */
global $post;

$from_shortcode = false;


/**
 * Si não existe um $post_id(id do produto) dispara Acesso denegado, produto não encontrado.
 */
if ( !isset( $post->ID ) && ! isset( $_GET['product_id'] ) ) {
    wp_die( esc_html__( 'Access Denied, No product found', 'dokan-lite' ) );
}

/**
 * Si está definida a varíavel $post_id e o tipo de post é um *Produto*
 * cria as variáveis
 */
if ( isset( $post->ID ) && $post->ID && 'product' == $post->post_type ) {
    $post_id      = $post->ID;
    $post_title   = $post->post_title;
    $post_content = $post->post_content;
    $post_excerpt = $post->post_excerpt;
    $post_status  = $post->post_status;
    $product      = wc_get_product( $post_id );
}
/**
 * Método HTTP GET que recebe o *product_id* desde o formulário anterior Passo 1
 * Si foi definida a variável product_id pelo método GET
 * declare as seguintes variáveis
 */
if ( isset( $_GET['product_id'] ) ) {
    $post_id        = intval( $_GET['product_id'] );
    $post           = get_post( $post_id );
    $post_title     = $post->post_title;
    $post_content   = $post->post_content;
    $post_excerpt   = $post->post_excerpt;
    $post_status    = $post->post_status;
    /**
     * @function wc_get_product:
     * Devolve os valores especificados do produto, utiliza a classe WC_Product_Factory que lida com
     * produtos individuais
     */
    $product        = wc_get_product( $post_id );
    /**
     * Habilita a variável $from_shortcode
     */
    $from_shortcode = true;
}



if ( ! dokan_is_product_author( $post_id ) ) {
    wp_die( esc_html__( 'Access Denied', 'dokan-lite' ) );
    exit();
}

$_regular_price         = get_post_meta( $post_id, '_regular_price', true );
$_sale_price            = get_post_meta( $post_id, '_sale_price', true );
$is_discount            = !empty( $_sale_price ) ? true : false;
$_sale_price_dates_from = get_post_meta( $post_id, '_sale_price_dates_from', true );
$_sale_price_dates_to   = get_post_meta( $post_id, '_sale_price_dates_to', true );

$_sale_price_dates_from = !empty( $_sale_price_dates_from ) ? date_i18n( 'Y-m-d', $_sale_price_dates_from ) : '';
$_sale_price_dates_to   = !empty( $_sale_price_dates_to ) ? date_i18n( 'Y-m-d', $_sale_price_dates_to ) : '';
$show_schedule          = false;

if ( !empty( $_sale_price_dates_from ) && !empty( $_sale_price_dates_to ) ) {
    $show_schedule = true;
}

$_featured        = get_post_meta( $post_id, '_featured', true );
$terms            = wp_get_object_terms( $post_id, 'product_type' );

// Iniciando produto como variable
$product_type     = ( ! empty( $terms ) ) ? sanitize_title( current( $terms )->name ): 'simple';
$variations_class = ($product_type == 'simple' ) ? 'dokan-hide' : '';
$_visibility      = ( version_compare( WC_VERSION, '2.7', '>' ) ) ? $product->get_catalog_visibility() : get_post_meta( $post_id, '_visibility', true );

if ( ! $from_shortcode ) {
    get_header();
}

if ( ! empty( $_GET['errors'] ) ) {
    dokan()->dashboard->templates->products->set_errors( array_map( 'sanitize_text_field', wp_unslash( $_GET['errors'] ) ) );
}

/**
 *  dokan_dashboard_wrap_before hook
 *
 *  @since 2.4
 */
do_action( 'dokan_dashboard_wrap_before', $post, $post_id );
?>

<?php do_action( 'dokan_dashboard_wrap_start' ); ?>

<div class="dokan-dashboard-wrap" style="padding: 0% 15% 0% 15%!important;">

    <?php

    /**
     *  Hide Menu Lateral:
     *  Comentadas a linhas que iniciam os hooks de renderização
     *  dokan_dashboard_content_before hook
     *  dokan_before_product_content_area hook
     *
     *  @hooked get_dashboard_side_navigation
     *
     *  @since 2.4
     */
    //    do_action( 'dokan_dashboard_content_before' );
    do_action( 'dokan_before_product_content_area' );
    ?>

    <div class="dokan-dashboard-content dokan-product-edit dokan-edit-row" style="padding: 5% 2% 4% 1%!important;">

        <?php

        /**
         *  dokan_product_content_inside_area_before hook
         *
         *  @since 2.4
         */
        do_action( 'dokan_product_content_inside_area_before' );
        ?>

        <!--
        * **********
        * Editar Produto
        * **********
         -->
        <!-- Passo 2 -->
        <header class="dokan-dashboard-header dokan-clearfix">
            <h1 class="entry-title">
                <?php esc_html_e( 'Passo 2', 'dokan-lite' ); ?>
                <span class="dokan-label <?php echo esc_attr( dokan_get_post_status_label_class( $post->post_status ) ); ?> dokan-product-status-label">
                        <?php echo esc_html( dokan_get_post_status( $post->post_status ) ); ?>
                    </span>

                <?php if ( $post->post_status == 'publish' ) { ?>
                    <span class="dokan-right">
                            <a class="dokan-btn dokan-btn-theme dokan-btn-sm" href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" target="_blank" style="display: inline!important; background-color: #0e9138!important;"><?php esc_html_e( 'View Product', 'dokan-lite' ); ?></a>
                        </span>
                <?php } ?>

                <?php if ( $_visibility == 'hidden' ) { ?>
                    <span class="dokan-right dokan-label dokan-label-default dokan-product-hidden-label"><i class="far fa-eye-slash"></i> <?php esc_html_e( 'Hidden', 'dokan-lite' ); ?></span>
                <?php } ?>
            </h1>


        </header><!-- .entry-header -->
        <!--
        * **********
        * Fim Editar Produto
        * **********
        -->




        <div class="product-edit-new-container product-edit-container">
            <?php if ( dokan()->dashboard->templates->products->has_errors() ) { ?>
                <div class="dokan-alert dokan-alert-danger">
                    <a class="dokan-close" data-dismiss="alert">&times;</a>

                    <?php foreach ( dokan()->dashboard->templates->products->get_errors() as $error ) { ?>
                        <strong><?php esc_html_e( 'Error!', 'dokan-lite' ); ?></strong> <?php echo esc_html( $error ) ?>.<br>
                    <?php } ?>
                </div>
            <?php } ?>

            <?php if ( isset( $_GET['message'] ) && $_GET['message'] == 'success') { ?>
                <div class="dokan-message">
                    <button type="button" class="dokan-close" data-dismiss="alert">&times;</button>
                    <strong><?php esc_html_e( 'Success!', 'dokan-lite' ); ?></strong> <?php esc_html_e( 'The product has been saved successfully.', 'dokan-lite' ); ?>

                    <?php if ( $post->post_status == 'publish' ) { ?>
                        <a href="<?php echo esc_url( get_permalink( $post_id ) ); ?>" target="_blank"><?php esc_html_e( 'View Product &rarr;', 'dokan-lite' ); ?></a>
                    <?php } ?>
                </div>
            <?php } ?>

            <?php
            $can_sell = apply_filters( 'dokan_can_post', true );

            if ( $can_sell ) {

            if ( dokan_is_seller_enabled( get_current_user_id() ) ) { ?>

            <!--
            * ***************
            * Formulario
            * ***************
            -->
            <form class="dokan-product-edit-form" role="form" method="post" id="post">
                <!-- Ocultando Panel Tabs -->
                <?php do_action( 'dokan_product_data_panel_tabs' ); ?>
                <?php do_action( 'dokan_product_edit_before_main' ); ?>

                <div class="dokan-form-top-area">


                    <div class="content-half-part dokan-product-meta" style="width: 100%!important;">

                        <div id="dokan-product-title-area" class="dokan-form-group">
                            <!--
                             * *************
                             * Get $post_id
                             * *************
                             -->
                            <input type="hidden" name="dokan_product_id" id="dokan-edit-product-id" value="<?php echo esc_attr( $post_id ); ?>"/>

                            <!-- Nome do produto -->
                            <label for="post_title" class="form-label"><?php esc_html_e( 'Nome de seu Produto', 'dokan-lite' ); ?></label>
                            <div class="col-3 input-effect">
                                <?php dokan_post_input_box( $post_id, 'post_title', array(
                                    'placeholder'   =>  __( 'Product name..', 'dokan-lite' ),
                                    'value'         =>  $post_title,
                                    'class'         =>  'dokan-form-control effect-21',
                                ) );
                                ?>

                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>
                            <!-- Fim nome do produto -->

                            <!-- Alerta de Erro Nome do produto -->
                            <div class="dokan-product-title-alert dokan-hide">
                                <?php esc_html_e( 'Please enter product title!', 'dokan-lite' ); ?>
                            </div>
                            <!-- Alerta de erro Nome do produto -->

                        </div>





                        <div class="clearfix"></div>

                        <!-- Product Type -->
                        <?php $product_types = apply_filters( 'dokan_product_types', [ 'simple' => __( 'Simple', 'dokan-lite' ) ] ); ?>

                        <?php if( is_array( $product_types ) && count( $product_types ) === 1 && array_key_exists( 'simple', $product_types ) ): ?>
                            <input type="hidden" id="product_type" name="product_type" value="simple">
                        <?php elseif ( is_array( $product_types ) ): ?>
                            <div class="dokan-form-group">
                                <label for="product_type" class="form-label"><?php esc_html_e( 'Product Type', 'dokan-lite' ); ?> <i class="fas fa-question-circle tips" aria-hidden="true" data-title="<?php esc_html_e( 'Choose Variable if your product has multiple attributes - like sizes, colors, quality etc', 'dokan-lite' ); ?>"></i></label>
                                <select name="product_type" class="dokan-form-control" id="product_type">
                                    <?php foreach ( $product_types as $key => $value ) { ?>
                                        <option value="<?php echo esc_attr( $key ) ?>" <?php selected( $product_type, $key ) ?>><?php echo esc_html( $value ) ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        <?php endif; ?>
                        <!-- Fim Product Type -->

                        <?php do_action( 'dokan_product_edit_after_title', $post, $post_id ); ?>



                        <?php do_action( 'dokan_product_edit_after_pricing', $post, $post_id ); ?>

                        <!-- Categoria -->
                        <?php if ( dokan_get_option( 'product_category_style', 'dokan_selling', 'single' ) == 'single' ): ?>
                            <div class="dokan-form-group">
                                <label for="product_cat" class="form-label"><?php esc_html_e( 'Category', 'dokan-lite' ); ?></label>
                                <?php
                                $product_cat = -1;
                                $term = array();
                                $term = wp_get_post_terms( $post_id, 'product_cat', array( 'fields' => 'ids') );

                                if ( $term ) {
                                    $product_cat = reset( $term );
                                }
                                include_once DOKAN_LIB_DIR.'/class.category-walker.php';

                                $category_args =  array(
                                    'show_option_none' => __( '- Select a category -', 'dokan-lite' ),
                                    'hierarchical'     => 1,
                                    'hide_empty'       => 0,
                                    'name'             => 'product_cat',
                                    'id'               => 'product_cat',
                                    'taxonomy'         => 'product_cat',
                                    'orderby'          => 'name',
                                    'title_li'         => '',
                                    'class'            => 'product_cat dokan-form-control dokan-select2',
                                    'exclude'          => '',
                                    'selected'         => $product_cat,
                                    'walker'           => new CategoryDropdownSingle( $post_id )
                                );

                                wp_dropdown_categories( apply_filters( 'dokan_product_cat_dropdown_args', $category_args ) );
                                ?>
                                <div class="dokan-product-cat-alert dokan-hide">
                                    <?php esc_html_e('Please choose a category!', 'dokan-lite' ); ?>
                                </div>
                            </div>
                        <?php elseif ( dokan_get_option( 'product_category_style', 'dokan_selling', 'single' ) == 'multiple' ): ?>
                            <div class="dokan-form-group">
                                <label for="product_cat" class="form-label"><?php esc_html_e( 'Category', 'dokan-lite' ); ?></label>
                                <?php
                                $term = array();
                                // @function wp_get_post_terms: Recupera os termos de uma postagem.
                                $term = wp_get_post_terms( $post_id, 'product_cat', array( 'fields' => 'ids') );
                                include_once DOKAN_LIB_DIR.'/class.taxonomy-walker.php';
                                $drop_down_category = wp_dropdown_categories( apply_filters( 'dokan_product_cat_dropdown_args', array(
                                    'show_option_none' => __( '', 'dokan-lite' ),
                                    'hierarchical'     => 1,
                                    'hide_empty'       => 0,
                                    'name'             => 'product_cat[]',
                                    'id'               => 'product_cat',
                                    'taxonomy'         => 'product_cat',
                                    'orderby'          => 'name',
                                    'title_li'         => '',
                                    'class'            => 'product_cat dokan-form-control dokan-select2',
                                    'exclude'          => '',
                                    'selected'         => $term,
                                    'echo'             => 0,
                                    'walker'           => new TaxonomyDropdown( $post_id )
                                ) ) );

                                echo str_replace( '<select', '<select data-placeholder="' . esc_html__( 'Select product category', 'dokan-lite' ) . '" multiple="multiple" ', $drop_down_category ); // phpcs:ignore WordPress.XSS.EscapeOutput.OutputNotEscaped
                                ?>
                            </div>
                        <?php endif; ?>
                        <!-- Fim Categoria -->



                        <!-- Marcas -->
                        <?php do_action( 'dokan_product_edit_after_product_tags', $post, $post_id ); ?>
                        <!-- Fim Marcas -->





                        <!-- Upload Images Teste  -->

                        <!--
                                                <!-- Fim Upload Images Teste -->




                        <!-- Upload images Images -->
                        <div class="featured-image">

                            <div class="dokan-feat-image-upload dokan-new-product-featured-img">
                                <?php
                                $wrap_class        = ' dokan-hide';
                                $instruction_class = '';
                                $feat_image_id     = 0;

                                if ( has_post_thumbnail( $post_id ) ) {
                                    $wrap_class        = '';
                                    $instruction_class = ' dokan-hide';
                                    $feat_image_id     = get_post_thumbnail_id( $post_id );
                                }
                                ?>

                                <div class="instruction-inside<?php echo esc_attr( $instruction_class ); ?>">

                                    <input type="hidden" name="feat_image_id" class="dokan-feat-image-id" value="<?php echo esc_attr( $feat_image_id ); ?>">

                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <a href="#" class="dokan-feat-image-btn btn btn-sm"><?php esc_html_e( 'Upload a product cover image', 'dokan-lite' ); ?></a>
                                </div>

                                <div class="image-wrap<?php echo esc_attr( $wrap_class ); ?>">
                                    <a class="close dokan-remove-feat-image" style="line-height: 35%!important;">&times;</a>
                                    <?php if ( $feat_image_id ) { ?>
                                        <?php echo get_the_post_thumbnail( $post_id, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ),
                                            array(
                                                'height'    => '',
                                                'width'     => '',
                                            )
                                        ); ?>
                                    <?php } else { ?>
                                        <img height="" width="" src="" alt="">
                                    <?php } ?>
                                </div>
                            </div><!-- .dokan-feat-image-upload -->

                            <div class="dokan-product-gallery">
                                <div class="dokan-side-body" id="dokan-product-images">
                                    <div id="product_images_container">
                                        <ul class="product_images dokan-clearfix">
                                            <?php
                                            $product_images = get_post_meta( $post_id, '_product_image_gallery', true );
                                            $gallery = explode( ',', $product_images );

                                            if ( $gallery ) {
                                                foreach ($gallery as $image_id) {
                                                    if ( empty( $image_id ) ) {
                                                        continue;
                                                    }

                                                    $attachment_image = wp_get_attachment_image_src( $image_id, 'thumbnail' );
                                                    ?>
                                                    <li class="image" data-attachment_id="<?php echo esc_attr( $image_id ); ?>">
                                                        <img src="<?php echo esc_url( $attachment_image[0] ); ?>" alt="">
                                                        <a href="#" class="action-delete" title="<?php esc_attr_e( 'Delete image', 'dokan-lite' ); ?>">&times;</a>
                                                    </li>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            <li class="add-image add-product-images tips" data-title="<?php esc_html_e( 'Add gallery image', 'dokan-lite' ); ?>">
                                                <a href="#" class="add-product-images"><i class="fas fa-plus" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>

                                        <input type="hidden" id="product_image_gallery" name="product_image_gallery" value="<?php echo esc_attr( $product_images ); ?>">
                                    </div>
                                </div>
                            </div> <!-- .product-gallery -->

                            <?php do_action( 'dokan_product_gallery_image_count' );?>

                        </div><!-- .content-half-part -->
                        <!-- Fim Images Upload -->



                        <!-- Botão Prosseguir -->
                        <!--                                    <a href="#step3" class="dokan-btn dokan-btn-default dokan-btn-theme dokan-save-attribute">Prosseguir</a>-->
                        <div class="elementor-button-wrapper" style="margin-left: 40%!important; margin-top: 5%!important;">
                            <a href="#step3" class="elementor-button-link elementor-button elementor-size-sm" role="button" style="background-color: #0e9138!important;">
						                    <span class="elementor-button-content-wrapper">
							                    <span class="elementor-button-icon elementor-align-icon-right">
				                                        <i aria-hidden="true" class="fas fa-arrow-right"></i>
                                                </span>
						                    <span class="elementor-button-text">Prosseguir</span>
		                                    </span>
                            </a>
                        </div>
                        <!-- Fim Botão Prosseguir -->


                        <!-- Fim Passo 2 -->











                        <!-- Passo 3: Preço e envío -->
                        <!-- Preços -->
                        <!-- visualizar preços -->
                        <!--                                    <div class="show_if_simple dokan-clearfix show_if_external">-->
                        <!-- Title Passo 3 -->
                        <h1 class="entry-title" style="margin-top: 20%!important;" id="step3"> Passo 3: Preços e Descrição </h1>
                        <!-- Fim Title Passo 3 -->
                        <div class="hide_if_variable dokan-clearfix">

                            <div class="dokan-form-group dokan-clearfix dokan-price-container">

                                <div class="content-half-part regular-price dokan-edit-row" style="padding: 4% 2% 5% 5%!important;">
                                    <label for="_regular_price" class="form-label">
                                        <?php esc_html_e( 'Price', 'dokan-lite' ); ?>
                                        <span class="vendor-earning simple-product" data-commission="<?php echo esc_attr( dokan()->commission->get_earning_by_product( $post_id ) ); ?>" data-product-id="<?php echo esc_attr( $post_id ); ?>">
                                           ( <?php esc_html_e( ' You Earn : ', 'dokan-lite' ) ?>
                                            <?php echo esc_html( get_woocommerce_currency_symbol() ); ?>
                                                <span class="vendor-price">
                                                    <?php echo esc_html( wc_format_localized_price( esc_attr( dokan()->commission->get_earning_by_product( $post_id ) ) ) ); ?>
                                                </span>
                                           )
                                        </span>
                                    </label>
                                    <div class="dokan-input-group">
                                        <span class="dokan-input-group-addon"><?php echo esc_html( get_woocommerce_currency_symbol() ); ?></span>
                                        <?php dokan_post_input_box( $post_id, '_regular_price',
                                            array(
                                                'class' => 'dokan-product-regular-price',
                                                'placeholder' => __( '0.00', 'dokan-lite' ),
                                            ),
                                            'price' ); ?>
                                    </div>
                                </div>

                                <div class="content-half-part sale-price dokan-edit-row" style="padding: 4% 2% 5% 5%!important;"">
                                <!-- Preço com Desconto -->
                                <label for="_sale_price" class="form-label">
                                    <?php esc_html_e( 'Discounted Price', 'dokan-lite' ); ?>
                                    <!-- Agendar -->
                                    <a href="#" class="sale_schedule <?php echo ($show_schedule ) ? 'dokan-hide' : ''; ?>"><?php esc_html_e( 'Schedule', 'dokan-lite' ); ?></a>
                                    <!-- Fim Agendar -->
                                    <!-- Cancelar -->
                                    <a href="#" class="cancel_sale_schedule <?php echo ( ! $show_schedule ) ? 'dokan-hide' : ''; ?>"><?php esc_html_e( 'Cancel', 'dokan-lite' ); ?></a>
                                    <!-- Fim cancelar -->
                                </label>
                                <!-- Preço com Desconto -->

                                <div class="dokan-input-group">
                                    <span class="dokan-input-group-addon"><?php echo esc_html( get_woocommerce_currency_symbol() ); ?></span>
                                    <?php dokan_post_input_box( $post_id, '_sale_price', array( 'class' => 'dokan-product-sales-price','placeholder' => __( '0.00', 'dokan-lite' ) ), 'price' ); ?>
                                </div>
                            </div>
                        </div>

                        <div class="dokan-form-group dokan-clearfix dokan-price-container">
                            <div class="dokan-product-less-price-alert dokan-hide">
                                <?php esc_html_e('Product price can\'t be less than the vendor fee!', 'dokan-lite' ); ?>
                            </div>
                        </div>

                        <div class="sale_price_dates_fields dokan-clearfix dokan-form-group <?php echo ( ! $show_schedule ) ? 'dokan-hide' : ''; ?>">
                            <div class="content-half-part from">
                                <div class="dokan-input-group">
                                    <span class="dokan-input-group-addon"><?php esc_html_e( 'From', 'dokan-lite' ); ?></span>
                                    <input type="text" name="_sale_price_dates_from" class="dokan-form-control dokan-start-date" value="<?php echo esc_attr( $_sale_price_dates_from ); ?>" maxlength="10" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" placeholder="<?php esc_html_e( 'YYYY-MM-DD', 'dokan-lite' ); ?>">
                                </div>
                            </div>

                            <div class="content-half-part to">
                                <div class="dokan-input-group">
                                    <span class="dokan-input-group-addon"><?php esc_html_e( 'To', 'dokan-lite' ); ?></span>
                                    <input type="text" name="_sale_price_dates_to" class="dokan-form-control dokan-end-date" value="<?php echo esc_attr( $_sale_price_dates_to ); ?>" maxlength="10" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" placeholder="<?php esc_html_e( 'YYYY-MM-DD', 'dokan-lite' ); ?>">
                                </div>
                            </div>
                        </div><!-- .sale-schedule-container -->
                    </div>
                    <!-- Fim Preços -->




                </div><!-- .content-half-part -->




        </div><!-- .dokan-form-top-area -->

        <div class="dokan-product-short-description">
            <!-- Alterando label -->
            <!--                                <label for="post_excerpt" class="form-label">--><?php //esc_html_e( 'Short Description', 'dokan-lite' ); ?><!--</label>-->
            <label for="post_excerpt" class="form-label"><?php esc_html_e( 'Breve descrição de seu produto (Até 50 palavras)', 'dokan-lite' ); ?></label>
            <!-- Alterando editor para textarea -->
            <!--                                --><?php //wp_editor( $post_excerpt , 'post_excerpt', apply_filters( 'dokan_product_short_description', array( 'editor_height' => 50, 'quicktags' => false, 'media_buttons' => false, 'teeny' => true, 'editor_class' => 'post_excerpt' ) ) ); ?>
            <textarea name="post_excerpt" id="post-excerpt" maxlength="500" rows="4" class="dokan-form-control" placeholder="<?php esc_attr_e( 'Short description of the product...', 'dokan-lite' ); ?>"><?= $post_excerpt;?></textarea>
            <!-- Fim Alterando editor para textarea -->
        </div>

        <div class="dokan-product-description">
            <!-- Alterando Descrição de seu produto -->
            <!--                                <label for="post_content" class="form-label">--><?php //esc_html_e( 'Description', 'dokan-lite' ); ?><!--</label>-->
            <label for="post_content" class="form-label"><?php esc_html_e( 'Descrição de seu Produto (Até 120 palavras)', 'dokan-lite' ); ?></label>
            <!-- Alterando editor para textarea -->
            <?php wp_editor( $post_content , 'post_content', apply_filters( 'dokan_product_description', array( 'editor_height' => 50, 'quicktags' => false, 'media_buttons' => true, 'teeny' => true, 'editor_class' => 'post_content' ) ) ); ?>
            <!--                                --><?php //wp_editor( $post_content , 'post_content', apply_filters( 'dokan_product_description', array( 'editor_height' => 50, 'quicktags' => false, 'media_buttons' => false, 'teeny' => true, 'editor_class' => 'post_content' ) ) ); ?>
            <!--            <textarea name="post_content" id="post-content" maxlength="800" rows="4" class="dokan-form-control" placeholder="--><?php //esc_attr_e( 'Descrição do  seu Produto (Até 120 palavras)...', 'dokan-lite' ); ?><!--">--><?//= $post_content; ?><!--</textarea>-->
        </div>

    <!-- Botão Prosseguir -->
    <!--                                    <a href="#step3" class="dokan-btn dokan-btn-default dokan-btn-theme dokan-save-attribute">Prosseguir</a>-->
        <div class="elementor-button-wrapper" style="margin-left: 45%!important; margin-top: 5%!important;">
            <a href="#step4" class="elementor-button-link elementor-button elementor-size-sm" role="button" style="background-color: #0e9138!important;">
						                    <span class="elementor-button-content-wrapper">
							                    <span class="elementor-button-icon elementor-align-icon-right">
				                                        <i aria-hidden="true" class="fas fa-arrow-right"></i>
                                                </span>
						                    <span class="elementor-button-text">Prosseguir</span>
		                                    </span>
            </a>
        </div>

    <!-- Fim Passo 3 -->
    <!-- Fim Botão Prosseguir -->

    <!-- Title Passo 4 -->
        <h1 class="entry-title" style="margin-top:20%!important;" id="step4"> Passo 4: <span class="h4">Estoque, Formas de Envio e Atributos de seu Produto</span> </h1>
        <!-- Fim Title Passo 4 -->


    <?php do_action( 'dokan_new_product_form', $post, $post_id ); ?>
        <!-- Estoque -->
    <?php do_action( 'dokan_product_edit_after_main', $post, $post_id ); ?>
        <!-- Fim Estoque -->

        <!--
        * **********************
        * Deixar Visível ou não o Produto
        * *********************
        -->
    <?php do_action( 'dokan_product_edit_after_inventory_variants', $post, $post_id ); ?>
        <!--
        * **********************
        * Fim Deixar Visível ou não o Produto
        * *********************
        -->

        <!--
         *
         * Ocultando Anuncie seu Produto
         *
         -->
    <?php if ( $post_id ): ?>
        <?php  //do_action( 'dokan_product_edit_after_options', $post_id ); ?>
    <?php endif; ?>
        <!--
         *
         * Fim Ocultando Anuncie seu Produto
         *
         -->

        <!--
        *
        * **********
        * Tags
        * **********
        *
        -->
        <div class="dokan-form-group">
            <label for="product_tag" class="form-label"><?php esc_html_e( 'Tags (As Tags servem para melhorar a busca de seu Produto. Exemplo: Nike Air, TV 4K, etc)', 'dokan-lite' ); ?></label>
            <?php
            require_once DOKAN_LIB_DIR.'/class.taxonomy-walker.php';
            $terms            = wp_get_post_terms( $post_id, 'product_tag', array( 'fields' => 'all' ) );
            $can_create_tags  = dokan_get_option( 'product_vendors_can_create_tags', 'dokan_selling' );
            $tags_placeholder = 'on' === $can_create_tags ? __( 'Select tags/Add tags', 'dokan-lite' ) : __( 'Select product tags', 'dokan-lite' );

            $drop_down_tags = array(
                'hide_empty' => 0,
            );
            ?>
            <select multiple="multiple" name="product_tag[]" id="product_tag_search" class="product_tag_search product_tags dokan-form-control dokan-select2" data-placeholder="<?php echo esc_attr( $tags_placeholder ); ?>">
                <?php if ( ! empty( $terms ) ) : ?>
                    <?php foreach ( $terms as $tax_term ) : ?>
                        <option value="<?php echo esc_attr( $tax_term->term_id ); ?>" selected="selected" ><?php echo esc_html( $tax_term->name ); ?></option>
                    <?php endforeach ?>
                <?php endif ?>
            </select>
        </div>
        <!--
        *
        * **********
        * Fim Tags
        * **********
        *
        -->

        <!--
         *
         * @function wp_nonce_field: valida o conteúdo do formulário para saber se veio do local do site atual e não de outro lugar.
         * @return string
         -->
    <?php wp_nonce_field( 'dokan_edit_product', 'dokan_edit_product_nonce' ); ?>

        <!--hidden input for Firefox issue-->
    <input type="hidden" name="dokan_update_product" value="<?php esc_attr_e( 'Save Product', 'dokan-lite' ); ?>"/>
    <input type="submit" name="dokan_update_product" id="publish" class="dokan-btn dokan-btn-theme dokan-btn-lg dokan-right" value="<?php esc_attr_e( 'Save Product', 'dokan-lite' ); ?>"/>
    <!--        <div class="dokan-clearfix"></div>-->
        </form>
        <!--
        * ***************
        * Fim Formulario
        * ***************
        -->
    <?php } else { ?>
        <div class="dokan-alert dokan-alert">
            <?php echo esc_html( dokan_seller_not_enabled_notice() ); ?>
        </div>
    <?php } ?>

    <?php } else { ?>

        <?php do_action( 'dokan_can_post_notice' ); ?>

    <?php } ?>
    </div> <!-- #primary .content-area -->

    <?php

    /**
     *  dokan_product_content_inside_area_after hook
     *
     *  @since 2.4
     */
    do_action( 'dokan_product_content_inside_area_after' );
    ?>
</div>

<?php

/**
 *  Hide Menu Lateral
 *  dokan_dashboard_content_after hook
 *  dokan_after_product_content_area hook
 *
 *  @since 2.4
 */
// do_action( 'dokan_dashboard_content_after' );
do_action( 'dokan_after_product_content_area' );
?>

</div><!-- .dokan-dashboard-wrap -->

<?php do_action( 'dokan_dashboard_wrap_end' ); ?>

<div class="dokan-clearfix"></div>



<!--
 *
 * *****************
 * Style css MiSCapu
 * *****************
 -->
<?php
function style_miscapu()
{
    ?>
    <style>
        label[for="secondname"]
        {
            display:none;
        }
        .dokan-discount-options
        {
            display: none!important;
        }
        .dokan-rma-options
        {
            display: none!important;
        }
        .dokan-linked-product-options
        {
            display: none!important;
        }
        /*.dokan-dash-sidebar*/
        /*{*/
        /*    display: none!important;*/
        /*}*/
        .featured-image
        {
            width: 50%!important;
        }
        .product-edit-container .dokan-feat-image-upload img {
            max-width: 50%!important;
        }
        .attachment-shop_single {
            margin-left: 20%;
        }
        div.dokan-variation-wholesale
        {
            display: none!important;
        }
        label[for="variable_product_wise_activation[0]"]
        {
            display: none!important;
        }
        label[for="variable_min_quantity[0]"]
        {
            display: none!important;
        }
        input.variable_min_quantity
        {
            display: none!important;
        }
        label[for="variable_max_quantity[0]"]
        {
            display: none!important;
        }
        input.variable_max_quantity
        {
            display: none!important;
        }
        label[for="variable_min_amount[0]"]
        {
            display: none!important;
        }
        input.variable_min_amount
        {
            display: none!important;
        }
        label[for="variable_max_amount[0]"]
        {
            display: none!important;
        }
        input.variable_max_amount
        {
            display: none!important;
        }
        label[for="variable__donot_count[0]"]
        {
            display: none!important;
        }
        input.variable__donot_count
        {
            display: none!important;
        }
        label[for="variable_ignore_from_cat[0]"]
        {
            display: none!important;
        }
        input.variable_ignore_from_cat
        {
            display: none!important;
        }

        button.save-variation-changes
        {
            display: none!important;

        }
        button.cancel-variation-changes
        {
            display: none!important;
        }

        .dokan-save-attribute
        {
            background-color: #0e9138!important;
        }


    </style>





    <?php
}
add_action( 'wp_footer', 'style_miscapu' );
?>

<!-- Scripts MiSCapu -->





<!-- Script Upload Image -->

<script>
    document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
        const dropZoneElement = inputElement.closest(".drop-zone");

        dropZoneElement.addEventListener("click", (e) => {
            inputElement.click();
        });

        inputElement.addEventListener("change", (e) => {
            if (inputElement.files.length) {
                updateThumbnail(dropZoneElement, inputElement.files[0]);
            }
        });

        dropZoneElement.addEventListener("dragover", (e) => {
            e.preventDefault();
            dropZoneElement.classList.add("drop-zone--over");
        });

        ["dragleave", "dragend"].forEach((type) => {
            dropZoneElement.addEventListener(type, (e) => {
                dropZoneElement.classList.remove("drop-zone--over");
            });
        });

        dropZoneElement.addEventListener("drop", (e) => {
            e.preventDefault();

            if (e.dataTransfer.files.length) {
                inputElement.files = e.dataTransfer.files;
                updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
            }

            dropZoneElement.classList.remove("drop-zone--over");
        });
    });

    /**
     * Updates the thumbnail on a drop zone element.
     *
     * @param {HTMLElement} dropZoneElement
     * @param {File} file
     */
    function updateThumbnail(dropZoneElement, file) {
        let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

        // First time - remove the prompt
        if (dropZoneElement.querySelector(".drop-zone__prompt")) {
            dropZoneElement.querySelector(".drop-zone__prompt").remove();
        }

        // First time - there is no thumbnail element, so lets create it
        if (!thumbnailElement) {
            thumbnailElement = document.createElement("div");
            thumbnailElement.classList.add("drop-zone__thumb");
            dropZoneElement.appendChild(thumbnailElement);
        }

        thumbnailElement.dataset.label = file.name;

        // Show thumbnail for image files
        if (file.type.startsWith("image/")) {
            const reader = new FileReader();

            reader.readAsDataURL(file);
            reader.onload = () => {
                thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
            };
        } else {
            thumbnailElement.style.backgroundImage = null;
        }
    }
</script>

<!-- Script Upload Image -->





<?php

/**
 *  dokan_dashboard_content_before hook
 *
 *  @since 2.4
 */
do_action( 'dokan_dashboard_wrap_after', $post, $post_id );

wp_reset_postdata();

if ( ! $from_shortcode ) {
    get_footer();
}