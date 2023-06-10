<?php 
get_header();

$post_type = get_post_type();


$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$category_id = get_query_var('category_id') ? get_query_var('category_id') : "";

$cat_id = get_query_var('cat') ? get_query_var('cat') : "";

$current_url = getCurrentUrl();

$args = array(
	'post_type' => $post_type,
	'paged' => $paged,
	'posts_per_page' => 10,
    'orderby' => 'post_date',
    'order' => "DESC",
); 

if( !empty($cat_id) ) {
  $args['tax_query'] = [[
    'taxonomy' => 'category',
    'field' => 'term_id',
    'terms' => $cat_id
  ]];
}

?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="c-heading-visual c-content">
	<!-- c-content-medium -->
	<div class="c-content-medium">
		<!-- c-content__inner -->
		<div class="c-content__inner">
			<!-- c-heading-visual__body -->
			<div class="c-heading-visual__body">
				<div class="c-heading-visual__body__inner">
					<p class="c-heading-visual__title-en">information</p>
					<h1 class="c-heading-visual__title-jp">情報</h1>
				</div>
			</div>
			<!-- /c-heading-visual__body -->
			<!-- c-heading-visual__bg -->
			<div class="c-heading-visual__bg">
				<!-- c-heading-visual__bg__inner -->
				<div class="c-heading-visual__bg__inner">
					<picture>
						<source srcset="<?php echo get_template_directory_uri()?>/assets/image/main/build_02.jpg">
						<img src="<?php echo get_template_directory_uri()?>/assets/image/main/build_02.jpg" alt="株式会社オン・フォワード_情報" class="js-objectfit -size-fit js-objectfit-init js-objectfit-substituted">
					</picture>				
				</div>
				<!-- /c-heading-visual__bg__inner -->
			</div>
			<!-- /c-heading-visual__bg -->
		</div>
		<!-- /c-content__inner -->
	</div>
	<!-- /c-content-medium -->
	<!-- c-breadcrumb -->
	<nav class="c-breadcrumb">
		<ul>
			<li><a href="<?php echo home_url();?>" class="c-link-line">トップ</a></li>
			<li>ニュース</li>
		</ul>
	</nav>
	<!-- /c-breadcrumb -->
</div>

<main class="l-main">
			<!-- section -->
	<section class="u-mt-section">
		<!-- c-content-medium -->
		<div class="c-content-medium">
			<!-- c-content__inner -->
			<div class="c-content__inner">
				<!-- c-flex -->
				<div class="c-flex -type04">
					<!-- c-flex__block -->
					<div class="c-flex__block">
						<!-- l-aside -->
						<aside class="l-aside js-toggle-small">
							<!-- l-aside__header -->
							<header class="l-aside__header js-toggle__switch">
								<p class="l-aside__heading-en">category</p>
								<h2 class="l-aside__heading-jp">カテゴリー</h2>
								<span class="visible-small-less"></span>
							</header>
							<!-- /l-aside__header -->
							<nav class="js-toggle__body">
								<ul class="l-aside__list">
                                    <?php
                                        $current_slug = 'news';
                                        if( $cat_id ) {
                                            $current_cat = get_category($cat_id);
                                            $current_slug = $current_cat->slug;
                                        }
                                    ?>
									<li class="l-aside__list-item<?php echo ( $current_slug === 'news' ) ? ' is-current' : ''; ?>"><a href="<?php echo esc_url( home_url( 'category/news' ) ); ?>" class="c-icon -arrow3">ニュース</a></li>
									<li class="l-aside__list-item<?php echo ( $current_slug === 'blog' ) ? ' is-current' : ''; ?>"><a href="<?php echo esc_url( home_url( 'category/blog' ) ); ?>" class="c-icon -arrow3">スタッフブログ</a></li>
                                </ul>
							</nav>
						</aside>
						<!-- /l-aside -->
					</div>
					<!-- /c-flex__block -->
					<!-- c-flex__block -->
					<div class="c-flex__block">
							<!-- t-news-article__content -->
							<div class="t-news-article__content">
								<header class="t-news-article__heading">
									<div class="t-news-article__meta">
										<time class="t-news-article__time"><?php $day = new DateTime( get_the_time('Y-m-d') ); echo $day->format('Y.m.d'); ?></time>
                                        <?php $categories = get_the_terms(get_the_ID(), 'category');
                                                foreach ($categories as $category) :
                                            ?>
                                            <p class="t-news-article__category"><a><?php echo $category->name; ?></a></p>
                                        <?php endforeach; ?>
									</div>
									<h2 class="t-news-article__title" data-txtcrop="true"><?php the_title(); ?></h2>
								</header>
							</div>
							<!-- /t-news-article__content -->
							<!-- t-news-article__body -->
							<div class="t-news-article__body">
                                <p>
                                    <?php the_content(); ?>
                                    <picture>
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </picture>
                                </p>
							</div>
							<!-- /t-news-article__body -->
						</div>
						<!-- /c-flex__block -->
					<!-- /c-flex__block -->
				</div>
				<!-- /c-flex -->
			</div>
			<!-- /c-content__inner -->
		</div>
		<!-- /c-content-medium -->
	</section>
	<!--/ section -->
	<!-- c-content-medium2 -->
    <div class="c-content-medium2">
        <!-- c-content__inner -->
        <div class="c-content__inner -inner-clear">
            <div class="l-pagination -line u-mt-pagination -next-on -prev-on">
            
            </div>
            <!-- /l-pagination -->
        </div>
        <!-- /c-content__inner -->
    </div>
<!-- /c-content-medium2 -->
</main>

<?php endwhile; ?>
<?php get_footer(); ?>