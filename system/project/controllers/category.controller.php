<?php

// get category id from URL
$category_id = request::get('id');

// retrieve category object from database
$category = Category_Model::retrieveById($category_id);

// category information
$info = new view('category/information');
$info->category = $category;

// top products from category
$top_products = new view('category/top_products');

// list of sub-categories
$categories_view = new view('home/categories');
$categories_view->categories = Category_Model::getSubcategories($category_id);

$page_layout = new view('category/page_layout');
$page_layout->information = $info;
$page_layout->top_products = $top_products;
$page_layout->categories = $categories_view;

presenter::present($page_layout);


