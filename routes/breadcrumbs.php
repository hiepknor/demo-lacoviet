<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Category;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Product;

// Trang chu
Breadcrumbs::for('trang-chu', function ($trail) {
    $trail->push('Trang chủ', route('trang-chu'));
});

// Trang chu > Gioi thieu
Breadcrumbs::for('gioi-thieu', function ($trail) {
    $trail->parent('trang-chu');
    $trail->push('Giới thiệu', route('gioi-thieu'));
});

// Trang chu > Tin tuc
Breadcrumbs::for('tin-tuc', function ($trail) {
    $trail->parent('trang-chu');
    $trail->push('Tin tức', route('tin-tuc'));
});

// Trang chu > San pham
Breadcrumbs::for('san-pham', function ($trail) {
    $trail->parent('trang-chu');
    $trail->push('Sản phẩm', route('san-pham'));
});

// Trang chu > Hoat dong
Breadcrumbs::for('hoat-dong', function ($trail) {
    $trail->parent('trang-chu');
    $trail->push('Hoạt động', route('hoat-dong'));
});

// Trang chu > Dai ly
Breadcrumbs::for('tuyen-si-dai-ly', function ($trail) {
    $trail->parent('trang-chu');
    $trail->push('Tuyển sỉ, đại lý', route('tuyen-si-dai-ly'));
});

// Trang chu > Lien he
Breadcrumbs::for('lien-he', function ($trail) {
    $trail->parent('trang-chu');
    $trail->push('Liên hệ', route('lien-he'));
});

// Trang chu > San pham > Ten danh muc
Breadcrumbs::for('danh-muc', function ($trail, $categorySlug) {
    $trail->parent('trang-chu');
    $category = Category::where('slug', $categorySlug)->first();
    $trail->push($category->name, route('danh-muc', $categorySlug));
});

// Trang chu > San pham > Ten danh muc > Ten san pham
Breadcrumbs::for('chi-tiet-san-pham', function ($trail, $categorySlug, $productSlug) {
    $trail->parent('san-pham');
    $product = Product::where('slug', $productSlug)->first();
    $trail->push($product->name, route('chi-tiet-san-pham', [$categorySlug, $productSlug]));
});

// Trang chu > Gio hang
Breadcrumbs::for('gio-hang', function ($trail) {
    $trail->parent('trang-chu');
    $trail->push('Giỏ hàng', route('gio-hang'));
});

// Trang chu > Thanh toan
Breadcrumbs::for('thanh-toan', function ($trail) {
    $trail->parent('trang-chu');
    $trail->push('Thanh toán', route('thanh-toan'));
});
