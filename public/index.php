<?php
require_once dirname($_SERVER['DOCUMENT_ROOT'], 1) . DIRECTORY_SEPARATOR . 'config/init.php';
try {
	if(!isset($_GET['path'])){$_GET['path'] = '/';}
	echo match ($_GET['path']) {
		'photogallery' => $twig->render('photogallery.twig', ['h1' => 'Photogallery', 'year' => date("Y"), 'photos' => ['https://get.wallhere.com/photo/beautiful-birds-fantastic-nature-night-snow-tent-tree-view-winter-1568697.jpg', 'https://get.wallhere.com/photo/forest-field-trees-nature-mother-nature-sunset-hd-wallpapers-fog-smoke-atmospheric-evening-walk-grassland-wood-darkness-fir-tree-pine-summer-greenwood-tree-sky-wheat-wheatfield-beautiful-bokeh-plants-atmospheric-river-blue-sky-airplane-clouds-high-moody-grass-green-autumn-in-bloom-evening-leaves-railway-1520111.jpg', 'https://get.wallhere.com/photo/hd-4kwallpaper-nature-flower-forest-flowers-ocean-river-sea-beach-water-sky-mountains-Aurora-bridges-landscape-lakes-cliffs-skyscrapers-forests-sunset-towers-skylines-fog-waterfalls-jungle-icebergs-canyons-1500663.jpg', 'https://get.wallhere.com/photo/nature-flower-forest-flowers-ocean-river-sea-beach-water-sky-mountains-Aurora-bridges-landscape-lakes-cliffs-skyscrapers-forests-sunset-towers-skylines-fog-waterfalls-jungle-icebergs-canyons-1501189.jpg'],]),
		default => $twig->render('mainpage.twig', ['h1' => 'HOME', 'year' => date("Y"),]),
	};
} catch (\Twig\Error\LoaderError|\Twig\Error\RuntimeError|\Twig\Error\SyntaxError $e) {
	print_r($e);
}