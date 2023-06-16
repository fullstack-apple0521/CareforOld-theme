		<footer id="footer"></footer>
        <div id="fixedbtn">
            <ul>
                <li class="hv">
                    <a href="tel:0120−76−3788" target="_blank">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/fixed/fixed_btn01.png" alt="無料相談">
                        <p class="tel_num">
                            <span class="tel">0120−76−3788</span>
                        </p>
                        <p class="date">平日 9:00〜19:00 / 土日対応可能<br>（要予約）</p>
                    </a>
                </li>
                <li class="hv">
                    <a href="<?php echo esc_url( home_url( 'contact' ) ); ?>">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/fixed/fixed_btn02.png" alt="家族パンフレットダウンロード">
                    </a>
                </li>
                <li class="hv">
                    <a href="https://lin.ee/JBzNvcf" target="_blank">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/fixed/fixed_btn03.png" alt="LINEで資料請求＆無料相談実施中" class="fixed_btn03">
                    </a>
                </li>
            </ul>
        </div>
        <div id="pagetop">
            <a href="#">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/footer/pagetop.png" alt="PAGETOP">
            </a>
        </div>
        <!-- CSS -->
        <!-- アイコンフォンt -->
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <!-- 電話番号FONT -->
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto+Condensed:700">
        <!-- END CSS -->
        <!-- jquery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <!-- jquery -->
        
        <script src="<?php echo get_template_directory_uri()?>/assets/js/common.js"></script>
        <script src="<?php echo get_template_directory_uri()?>/assets/js/page.js"></script>
		<script src="<?php echo get_template_directory_uri()?>/assets/js/custom.js"></script>
        <script>
			$(document).ready(function(){
                
			const d_width = $(window).width(); console.log(d_width)
			
			if(d_width < 768) {
				$("#header").append(
					'<div class="inner cf">'+
						'<ul>'+
							'<li class="logo">'+
								'<p class="text">神戸市、芦屋市で相続、家族信託に関するお悩み、ご相談</p>'+
								'<h1><a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()?>/assets/img/header/n-logo390.png" class="w100p" alt="神戸市、芦屋市で相続、家族信託に関するお悩み、ご相談"></a></h1>'+
								'<p class="text"><span>運営：司法書士、家族信託専門士 冨本隆介　JR住吉駅から北へ徒歩8分</span></p>'+
							'</li>'+
							'<li class="acs_btn"><a href="<?php echo home_url('#access');?>" class="btn"><img src="<?php echo get_template_directory_uri()?>/assets/img/header/hd_btn.png" class="w100p" alt="アクセス"></a></li>'+
						'</ul>'+
					'</div>'
				);
                $('#access').prepend(
                    '<h2>アクセス</h2>'
                );
                $("#access_pc").remove();
                $('#fixedbtn').remove();
                $('#footer').append(
                    '<div class="inner cf">'+
                        '<ul style="height: 25vw;">'+
                            '<li class="logo">'+
                                '<p class="text">神戸市、芦屋市で相続、家族信託に関するお悩み、ご相談</p>'+
                                '<h1><a href="<?php echo esc_url( home_url( ) ); ?>"><img src="<?php echo get_template_directory_uri()?>/assets/img/header/n-logo390.png" class="w100p" alt="神戸市、芦屋市で相続、家族信託に関するお悩み、ご相談 "></a></h1>'+
                                '<p class="text"><span>運営：司法書士、家族信託専門士 冨本隆介　JR住吉駅から北へ徒歩8分</span></p>'+
                            '</li>'+
                            '<li class="acs_btn"><a href="<?php echo home_url( '#access' );?>" class="btn"><img src="<?php echo get_template_directory_uri()?>/assets/img/header/hd_btn.png" class="w100p" alt="アクセス"></a></li>'+
                        '</ul>'+
                    '</div>'+
                    '<div class="copy">'+
                        '<p>Copyright © 神戸、芦屋家族信託・相続サポートセンター All Rights Reserved.</p>'+
                    '</div>'
                );
                $('#footer').before(
                    '<div class="fixed_btn">'+
                        '<ul class="cf">'+
                            '<li><a href="<?php echo home_url( 'contact' );?>"><img src="<?php echo get_template_directory_uri()?>/assets/img/footer/fixed_btn05.png" class="w100p" alt="家族パンフレットダウンロード"></a></li>'+
                            '<li><a href="https://lin.ee/JBzNvcf" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/img/footer/fixed_btn07.png" class="w100p" alt="LINEで24時間相談 見積もりOK"></a></li>'+
                            '<li><a href="tel:0120−76−3788"><img src="<?php echo get_template_directory_uri()?>/assets/img/footer/fixed_btn06.png" class="w100p" alt="電話無料相談"></a></li>'+
                        '</ul>'+
                    '</div>'
                );
			} else {
				$("#header").append(
					'<div class="wrap cf">'+
						'<div class="wrap cf">'+
							'<div class="cmn_logo">'+
								'<h1>神戸市、芦屋市で相続、家族信託に関するお悩み、ご相談</h1>'+
								'<a href="<?php echo home_url();?>" class="hv">'+
									'<img src="<?php echo get_template_directory_uri()?>/assets/img/header/n-logo390.png" alt="【15万円定額制】神戸家族信託専門センター"></a>'+
								'<p>運営：司法書士、家族信託専門士 冨本隆介　<span>JR住吉駅から北へ徒歩8分</span></p>'+
							'</div>'+
				
							'<div class="func_box">'+
								'<b>相続、家族信託に関する無料相談 お気軽にお問い合わせ下さい</b>'+
								'<p class="tel_num"><span id="phone_number_holder_0" class="tel">0120−76−3788</span>&nbsp;</p>'+
								'<p class="txt">平日 9:00〜19:00 / 土日対応可能（要予約）</p>'+
								'<a class="btn hv" href="<?php echo home_url( "contact" );?>">無料相談はこちら</a>'+
							'</div>'+
						'</div>'+
					'</div>'
				);
                $("#gn").append(
                    '<div class="wrap">'+
                        '<ul id="menu-global-navi01" class="cf">'+
                            '<li class="hv">'+
                                '<a href="<?php echo home_url( "#before" );?>"><span>生前対策</span></a>'+
                            '</li>'+
                            '<li class="hv">'+
                                '<a href="<?php echo home_url( "#after" );?>"><span>相続後の対策</span></a>'+
                            '</li>'+
                            '<li class="hv">'+
                                '<a href="<?php echo home_url( "#cost" );?>"><span>費用について</span></a>'+
                            '</li>'+
                            '<li class="hv">'+
                                '<a href="<?php echo home_url( "#flow" );?>"><span>相続の流れ</span></a>'+
                            '</li>'+
                            '<li class="hv">'+
                                '<a href="<?php echo home_url( "#other" );?>"><span>終活とは</span></a>'+
                            '</li>'+
                            '<li class="hv">'+
                                '<a href="<?php echo home_url( "#quiz" );?>"><span>よくある質問</span></a>'+
                            '</li>'+
                            '<li class="hv">'+
                                '<a href="<?php echo home_url( "#access" );?>"><span>アクセス</span></a>'+
                            '</li>'+
                            '<li class="hv">'+
                                '<a href="<?php echo home_url( "contact" );?>"><span>お問合せ</span></a>'+
                            '</li>'+
                        '</ul>'+
                    '</div>'
                )
                $("#footer").append(
                    '<div class="wrap cf">'+
                        '<div class="cmn_logo">'+
                            '<h1>神戸市、芦屋市で相続、家族信託に関するお悩み、ご相談</h1>'+
                            '<a href="<?php echo esc_url( home_url( ) ); ?>" class="hv">'+
                                '<img src="<?php echo get_template_directory_uri()?>/assets/img/header/n-logo390.png" alt="神戸市、芦屋市で相続、家族信託に関するお悩み、ご相談">'+
                            '</a>'+
                            '<p>'+
                                '運営：司法書士、家族信託専門士 冨本隆介　<span>JR住吉駅から北へ徒歩8分</span>'+
                            '</p>'+
                        '</div>'+
                        '<div class="func_box">'+
                            '<b>相続、家族信託に関する無料相談 お気軽にお問い合わせ下さい</b>'+
                            '<p class="tel_num">'+
                                '<span id="phone_number_holder_2" class="tel">0120−76−3788</span>'+
                                '&nbsp;'+
                            '</p>'+
                            '<p class="txt">平日 9:00〜19:00 / 土日対応可能（要予約）</p>'+
                            '<a class="btn hv" href="<?php echo esc_url( home_url( 'contact' ) ); ?>">'+
                                '無料相談はこちら'+
                            '</a>'+
                        '</div>'+
                    '</div>'+
                    '<div class="copy">'+
                        '<p>Copyright © 神戸、芦屋家族信託・相続サポートセンター All Rights Reserved.</p>'+
                    '</div>'
                )
			}
		})
		</script>

		<?php wp_footer() ?>
	</body>
</html>
