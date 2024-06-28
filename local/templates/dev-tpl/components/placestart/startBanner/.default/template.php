<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

use Placestart\ComponentHelper;

$helper = new Placestart\ComponentHelper($component);
?>
<section class="start-banner">
	<img src="<?= SITE_TEMPLATE_PATH ?>/src/images/4kBanner.jpg" class="start-banner__image" alt="">
	<div class="container-1920 start-banner__container-1920">
		<div class="container start-banner__container">
			<div class="start-banner__content">
				<div class="start-banner__text">
					<p class="start-banner__text-top">3-х звездочная гостиница</p>
					<h1 class="start-banner__text-center">Центральная</h1>
					<p class="start-banner__text-bottom">В самом центре на берегу реки</p>
				</div>
				<div class="start-banner__widget" id="widgetBnovo">
					<div class="div_for__bn_widget_adaptive" id="div_for__bn_widget_adaptive">
						<div id="absolute_div_for__bn_widget_adaptive">
							<div class="left" id="_bn_widget_adaptive">
							</div>
						</div>
					</div>
					<div style="height: 89px; display: none;" class="div_for__bn_widget_adaptive"></div>
					<script src="//widget.reservationsteps.ru/js/bnovo.js"></script>
					<script type="text/javascript">
						(function () {
							Bnovo_Widget.init(function () {
								Bnovo_Widget.open('_bn_widget_adaptive', {
									type: "horizontal",
									uid: "040cfc98-4079-44dc-b73e-dbc5688e6401",
									lang: "ru",
									width: "100%",
									background: "#eaece5",
									bg_alpha: "0",
									padding: "0",
									padding_mobile: "0",
									border_radius: "20",
									font_type: "inter",
									title_color: "#000000",
									title_size: "30",
									without_title: "on",
									inp_color: "#4c4e48",
									inp_bordhover: "#edeeea",
									inp_bordcolor: "#edeeea",
									inp_alpha: "70",
									btn_background: "#ffffff",
									btn_background_over: "#768254",
									btn_textcolor: "#000000",
									btn_textover: "#ffffff",
									btn_text: "Найти",
									btn_bordcolor: "#768254",
									btn_bordhover: "#768254",
									adults_default: "1",
									dates_preset: "on",
									dfrom_tomorrow: "on",
									dto_nextday: "on",
									url: "https://xn----8sbfefc6bcweb5byj.xn--p1ai/booking/",
									switch_mobiles: "on",
									switch_mobiles_width: "980"
								});
							});
						})();
					</script>
					<style>
						/* .start-banner__content,
						.start-banner__widget {
							width: 100%;
						}

						.start-banner__content {
							bottom: 50%;
							transform: translateY(50%);
						}

						@media screen and (min-width: 980px) {
							#div_for__bn_widget_adaptive {
								width: 100%;
								max-width: 100%;
								margin: auto;
							}

							#absolute_div_for__bn_widget_adaptive {
								position: absolute;
								width: 100%;
								max-width: 100%;
								z-index: 10;
							}

							.div_for__bn_widget_adaptive {
								height: 89px;
							}
						}

						@media screen and (max-width: 1280px) {
							#absolute_div_for__bn_widget_adaptive {
								width: calc(100% - 60px);
							}
						}

						@media screen and (max-width: 980px) {

							.start-banner__content,
							.start-banner__widget {
								margin: 0 !important;
							}

							#div_for__bn_widget_adaptive {
								width: 100%;
								max-width: calc(100% - 40px);
								margin: auto;
							}

							#absolute_div_for__bn_widget_adaptive {
								position: relative;
								width: 100%;
								max-width: 100%;
								z-index: 10;
							}

							.div_for__bn_widget_adaptive {
								height: 280px;
							}
						} */
					</style>
				</div>
			</div>
		</div>
	</div>
</section>