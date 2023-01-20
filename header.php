<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>ION Nutre - Foco no resultado</title>
	<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header>
            <section class="top-contatos">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-md-9">
                            <ul class="contatos">
                                <li><img src="<?php bloginfo('template_directory'); ?>/midia/images/email.png" /> claudia.gomes@ionnutri.com.br</li>
                                <li><img src="<?php bloginfo('template_directory'); ?>/midia/images/email.png" /> contato@ionnutri.com.br</li>
                                <li><img src="<?php bloginfo('template_directory'); ?>/midia/images/phone.png" /> (11) 3164-1214</li>
                                <li><img src="<?php bloginfo('template_directory'); ?>/midia/images/phone.png" /> (11) 9 1081-3015</li>
                            </ul>
                        </div>
                        <div class="col-md-3 alinhar-carrinho">
                            <div class="carrinho">
                                <span><img src="<?php bloginfo('template_directory'); ?>/midia/images/cart.png" /> Carrinho</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			<section class="top-bar">
				<div class="container">
					<div class="row d-flex align-itens-center">
						<div class="brand col-md-2 text-center text-md-left">
							<?php if (has_custom_logo()): ?>
								<?php the_custom_logo(); ?>
							<?php else: ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<p class="site-title"><?php bloginfo( 'title' ); ?></p>
								</a>
								<span><?php bloginfo( 'description' ); ?></span>
							<?php endif; ?>		
						</div>
						<div class="site-menu col-md-8">
							<nav class="main-menu navbar navbar-expand-md navbar-light" role="navigation">
								<!-- Brand and toggle get grouped for better mobile display -->
								<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'FanceLab' ); ?>">
									<span class="navbar-toggler-icon"></span>
								</button>
									<?php
									wp_nav_menu( array(
										'theme_location'    => 'fancelab_menu_principal',
										'depth'             => 3,
										'container'         => 'div',
										'container_class'   => 'collapse navbar-collapse justify-content-md-center',
										'container_id'      => 'bs-example-navbar-collapse-1',
										'menu_class'        => 'nav navbar-nav',
										'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
										'walker'            => new WP_Bootstrap_Navwalker(),
									) );
									?>
							</nav>							
						</div>
                        <div class="site-compra col-md-2">
                            <a href="#" target="_blank"><button class="botao-compra">Comprar Kit</button></a>
                        </div>
					</div>	
				</div>
			</section>
		</header>