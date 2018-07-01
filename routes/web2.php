<?php
Route::get("/",[
    "as" => "public.home",
    "uses" => "HomeController@index",
]);
Route::get("/home",[
    "as" => "public.home",
    "uses" => "WorkflowController@index",
]);

//Route::get('/home', function () {
//    return view('panel.workflow.index');
//})->name('public.home');

Route::get("/logout",[
    "as" => "logout",
    "uses" => "HomeController@logOut",
]);

Route::get("/explore",[
    "as" => "public.explore",
    "uses" => "HomeController@explore",
]);

//Route::get('/explore', function () {
//    return view('public.explore.explore');
//})->name('public.explore');

//Route::get(["prefix" => "/", "middleware" => ["auth", "viewer"]],function(){
//    Route::get("/",[
//        "as" => "panel.dashboard",
//        "uses" => "WorkflowController@index",
//    ]);
//});

Route::get("/",[
    "as" => "public.home",
    "uses" => "WorkflowController@index",
    "middleware" => "auth",
]);

Route::group(["prefix" => "panel", "middleware" => ["auth", "viewer"]],function(){

    Route::get("/",[
        "as" => "panel.dashboard",
        "uses" => "WorkflowController@index",
    ]);

    /*    Route::get('/dashboard', function () {
            return view('panel.workflow.index');
        });*/

    Route::get('/product-detail', function () {
        return view('panel/product-detail');
    })->name('panel.product-detail');

    Route::get("/logout",[
        "as" => "logout",
        "uses" => "HomeController@logOut",
    ]);

    //GROUP KEY VISUALS
    Route::group(["prefix" => "keyvisuals", "middleware" => "admin"],function(){
        Route::get("/",[
            "as" => "panel.keyvisuals.index",
            "uses" => "KeyVisualController@index",
        ]);
        Route::get("/download/{id}",[
            "as" => "panel.keyvisuals.download",
            "uses" => "KeyVisualController@download",
        ]);
        Route::get("/index",[
            "as" => "panel.keyvisuals.index",
            "uses" => "KeyVisualController@index",
        ]);
        Route::get("/create",[
            "as" => "panel.keyvisuals.create",
            "uses" => "KeyVisualController@create",
        ]);
        Route::get("/edit/{id}",[
            "as" => "panel.keyvisuals.edit",
            "uses" => "KeyVisualController@edit",
        ]);
        Route::put("/update/{id}",[
            "as" => "panel.keyvisuals.update",
            "uses" => "KeyVisualController@update",
        ]);
        Route::post("/store",[
            "as" => "panel.keyvisuals.store",
            "uses" => "KeyVisualController@store",
        ]);
        Route::delete("/destroy/{id}",[
            "as" => "panel.keyvisuals.destroy",
            "uses" => "KeyVisualController@destroy",
        ]);
    });
    // END GROUP KEY VISUALS

    //GROUP BRANDS
    Route::group(["prefix" => "brands", "middleware" => "admin"],function(){
        Route::get("/",[
            "as" => "panel.brands.index",
            "uses" => "BrandController@index",
        ]);
        Route::get("/index",[
            "as" => "panel.brands.index",
            "uses" => "BrandController@index",
        ]);
        Route::get("/create",[
            "as" => "panel.brands.create",
            "uses" => "BrandController@create",
        ]);
        Route::get("/edit/{id}",[
            "as" => "panel.brands.edit",
            "uses" => "BrandController@edit",
        ]);
        Route::put("/update/{id}",[
            "as" => "panel.brands.update",
            "uses" => "BrandController@update",
        ]);
        Route::post("/store",[
            "as" => "panel.brands.store",
            "uses" => "BrandController@store",
        ]);
        Route::delete("/destroy/{id}",[
            "as" => "panel.brands.destroy",
            "uses" => "BrandController@destroy",
        ]);
        // END GROUP BRANDS
    });

    //GROUP Subbrands
    Route::group(["prefix" => "subbrands", "middleware" => "admin"],function(){
        Route::get("/{brandId}",[
            "as" => "panel.subbrands.index",
            "uses" => "SubbrandController@index",
        ]);

        Route::get("/create/{brandId}",[
            "as" => "panel.subbrands.create",
            "uses" => "SubbrandController@create",
        ]);
        Route::get("/edit/{id}",[
            "as" => "panel.subbrands.edit",
            "uses" => "SubbrandController@edit",
        ]);
        Route::put("/update/{id}",[
            "as" => "panel.subbrands.update",
            "uses" => "SubbrandController@update",
        ]);
        Route::post("/store",[
            "as" => "panel.subbrands.store",
            "uses" => "SubbrandController@store",
        ]);
        Route::delete("/destroy/{id}",[
            "as" => "panel.subbrands.destroy",
            "uses" => "SubbrandController@destroy",
        ]);
        // END GROUP SKUs
    });


    //GROUP CATEGORY
    Route::group(["prefix" => "categories", "middleware" => "admin"],function(){
        Route::get("/",[
            "as" => "panel.categories.index",
            "uses" => "CategoryController@index",
        ]);
        Route::get("/index",[
            "as" => "panel.categories.index",
            "uses" => "CategoryController@index",
        ]);
        Route::get("/create",[
            "as" => "panel.categories.create",
            "uses" => "CategoryController@create",
        ]);
        Route::get("/edit/{id}",[
            "as" => "panel.categories.edit",
            "uses" => "CategoryController@edit",
        ]);
        Route::put("/update/{id}",[
            "as" => "panel.categories.update",
            "uses" => "CategoryController@update",
        ]);
        Route::post("/store",[
            "as" => "panel.categories.store",
            "uses" => "CategoryController@store",
        ]);
        Route::delete("/destroy/{id}",[
            "as" => "panel.categories.destroy",
            "uses" => "CategoryController@destroy",
        ]);
        // END GROUP BRANDS
    });

    //GROUP subcategories
    Route::group(["prefix" => "subcategories"],function(){
        Route::get("/{categoryId}",[
            "as" => "panel.subcategories.index",
            "uses" => "SubcategoryController@index",
        ]);

        Route::get("/create/{categoryId}",[
            "as" => "panel.subcategories.create",
            "uses" => "SubcategoryController@create",
        ]);
        Route::get("/edit/{id}",[
            "as" => "panel.subcategories.edit",
            "uses" => "SubcategoryController@edit",
        ]);
        Route::put("/update/{id}",[
            "as" => "panel.subcategories.update",
            "uses" => "SubcategoryController@update",
        ]);
        Route::post("/store",[
            "as" => "panel.subcategories.store",
            "uses" => "SubcategoryController@store",
        ]);
        Route::delete("/destroy/{id}",[
            "as" => "panel.subcategories.destroy",
            "uses" => "SubcategoryController@destroy",
        ]);

    });


    //GROUP SKUs
    Route::group(["prefix" => "skus", "middleware" => "publisher"],function(){
        Route::get("/",[
            "as" => "panel.skus.index",
            "uses" => "SkuController@index",
        ]);
        Route::get("/index",[
            "as" => "panel.skus.index",
            "uses" => "SkuController@index",
        ]);
        Route::get("/create",[
            "as" => "panel.skus.create",
            "uses" => "SkuController@create",
        ]);
        Route::get("/edit/{id}",[
            "as" => "panel.skus.edit",
            "uses" => "SkuController@edit",
        ]);
        Route::put("/update/{id}",[
            "as" => "panel.skus.update",
            "uses" => "SkuController@update",
        ]);
        Route::post("/store",[
            "as" => "panel.skus.store",
            "uses" => "SkuController@store",
        ]);
        Route::delete("/destroy/{id}",[
            "as" => "panel.skus.destroy",
            "uses" => "SkuController@destroy",
        ]);
        Route::post("/search",[
            "as" => "panel.skus.search",
            "uses" =>"SkuController@searchProduct"
        ]);
        Route::get("/deleteKeyword/{id}",[
            "as"  => "panel.skus.deleteKeyword",
            "uses"=> "SkuController@deleteKeyword"
        ]);
        Route::get("/deleteAllKeywords",[
            "as"  => "panel.skus.deleteAllKeywords",
            "uses"=> "SkuController@deleteAllKeywords"
        ]);
    });
    // END GROUP SKUs

    //GROUP SEARCH
    Route::group(["prefix" => "search"],function(){
        Route::get("/",[
            "as" => "panel.search.index",
            "uses" => "SearchController@searchAll",
        ]);
        Route::post("/",[
            "as" => "panel.search.all",
            "uses" => "SearchController@searchAll",
        ]);
        Route::get("/deleteKeyword/{id}",[
            "as"  => "panel.search.deleteKeyword",
            "uses"=> "SearchController@deleteKeyword"
        ]);
    });
    // END GROUP SKUs

    //GROUP ECONTENTS
    Route::group(["prefix" => "econtents", "middleware" =>  "viewer"],function(){
        Route::get("/",[
            "as" => "panel.econtents.index",
            "uses" => "EcontentController@index",
            'middleware' => 'admin',
        ]);
        Route::get("/index",[
            "as" => "panel.econtents.index",
            "uses" => "EcontentController@index",
        ]);
        Route::get("/create",[
            "as" => "panel.econtents.create",
            "uses" => "EcontentController@create",
        ]);
        Route::get("/edit/{id}",[
            "as" => "panel.econtents.edit",
            "uses" => "EcontentController@edit",
        ]);
        Route::put("/update/{id}",[
            "as" => "panel.econtents.update",
            "uses" => "EcontentController@update",
        ]);
        Route::post("/store",[
            "as" => "panel.econtents.store",
            "uses" => "EcontentController@store",
        ]);
        Route::delete("/destroy/{id}",[
            "as" => "panel.econtents.destroy",
            "uses" => "EcontentController@destroy",
        ]);
        Route::delete("/destroySubbrand/{id}",[
            "as" => "panel.econtents.destroySubbrand",
            "uses" => "EcontentController@destroySubbrand",
        ]);
        Route::post("/addsubbrand",[
            "as" => "panel.econtents.addsubbrand",
            "uses" => "EcontentController@addSubbrand",
        ]);
        Route::post("/addKeyvisual",[
            "as" => "panel.econtents.addKeyvisual",
            "uses" => "EcontentController@addKeyvisual",
        ]);
        Route::delete("/destroyKeyvisual",[
            "as" => "panel.econtents.destroyKeyvisual",
            "uses" => "EcontentController@destroyKeyvisual",
        ]);
    });
    // END GROUP ECONTENTs

    //GROUP PRODUCTS
    Route::group(["prefix" => "products"],function(){
        Route::get("/",[
            "as" => "panel.products.index",
            "uses" => "ProductController@index",
        ]);
        Route::get("/info/{id?}",[
            "as" => "panel.products.info",
            "uses" => "ProductController@index",
        ]);
        Route::get("/images/{id}",[
            "as" => "panel.products.images",
            "uses" => "ProductController@editImages",
        ]);
        Route::get("/qas/{id}",[
            "as" => "panel.products.qas",
            "uses" => "QAController@edit",
        ]);
        Route::get("/dynamicData/{id}",[
            "as" => "panel.products.dynamicData",
            "uses" => "DynamicDataController@edit",
        ]);
        Route::get("/create/{skuid?}",[
            "as" => "panel.products.create",
            "uses" => "ProductController@create",
        ]);
        Route::get("/edit/{id}",[
            "as" => "panel.products.edit",
            "uses" => "ProductController@edit",
        ]);
        Route::put("/update/{id}",[
            "as" => "panel.products.update",
            "uses" => "ProductController@update",
        ]);
        Route::put("/updateQa/{id}",[
            "as" => "panel.products.updateQa",
            "uses" => "QAController@update",
        ]);
        Route::put("/updateImage/{id}",[
            "as" => "panel.products.updateImage",
            "uses" => "PublicImageController@update",
        ]);
        Route::put("/updateDynamic/{id}",[
            "as" => "panel.products.updateDynamic",
            "uses" => "DynamicDataController@update",
        ]);
        Route::post("/store",[
            "as" => "panel.products.store",
            "uses" => "ProductController@store",
        ]);
        Route::post("/storeQa",[
            "as" => "panel.products.storeQa",
            "uses" => "QAController@store",
        ]);
        Route::post("/storeImage",[
            "as" => "panel.products.storeImage",
            "uses" => "PublicImageController@store",
        ]);
        Route::post("/storeDynamic",[
            "as" => "panel.products.storeDynamic",
            "uses" => "DynamicDataController@store",
        ]);
        Route::delete("/destroy/{id}",[
            "as" => "panel.products.destroy",
            "uses" => "ProductController@destroy",
        ]);
        Route::delete("/destroyQa/{id}",[
            "as" => "panel.products.destroyQa",
            "uses" => "QAController@destroy",
        ]);
        Route::delete("/destroyImage/{id}",[
            "as" => "panel.products.destroyImage",
            "uses" => "PublicImageController@destroy",
        ]);
        Route::delete("/destroyDynamic/{id}",[
            "as" => "panel.products.destroyDynamic",
            "uses" => "DynamicDataController@destroy",
        ]);
        Route::post("/search",[
            "as" => "panel.products.search",
            "uses" =>"ProductController@searchProduct"
        ]);
        Route::get("/deleteKeyword/{id}",[
            "as"  => "panel.products.deleteKeyword",
            "uses"=> "ProductController@deleteKeyword"
        ]);
        Route::get("/deleteAllKeywords",[
            "as"  => "panel.products.deleteAllKeywords",
            "uses"=> "ProductController@deleteAllKeywords"
        ]);
    });
    // END GROUP PRODUCTS

    //GROUP ROLES
    Route::group(["prefix" => "roles"],function(){
        Route::get("/",[
            "as" => "panel.roles.index",
            "uses" => "RoleController@index",
        ]);

        Route::put("/update/{id}",[
            "as" => "panel.roles.update",
            "uses" => "UserController@update",
        ]);
    });
    // END GROUP ROLES

    //DATA COMPLAINT
    Route::group(["prefix" => "datacomplaints"],function(){
        Route::get("/",[
            "as" => "panel.datacomplaints.index",
            "uses" => "DataComplaintController@index",
        ]);

        Route::put("/update/{id}",[
            "as" => "panel.datacomplaints.update",
            "uses" => "DataComplaintController@update",
        ]);
        Route::post("/store",[
            "as" => "panel.datacomplaints.store",
            "uses" => "DataComplaintController@store",
        ]);
        Route::get("/edit/{id}",[
            "as" => "panel.datacomplaints.edit",
            "uses" => "DataComplaintController@edit",
        ]);
    });
    // END DATA COMPLAINT

    //WORKFLOW
    Route::group(["prefix" => "workflow"],function(){
        Route::get("/",[
            "as" => "panel.workflow.index",
            "uses" => "WorkflowController@index",
        ]);
        Route::get("/filter/{filter}",[
            "as" => "panel.workflow.filter",
            "uses" => "WorkflowController@addFilter",
        ]);
    });
    // END WORKFLOW

    //USER SUBBRANDS
    Route::group(["prefix" => "userssubrands", "middleware" =>  "admin"],function(){
        Route::get("/",[
            "as" => "panel.userssubrands.index",
            "uses" => "UsersSubbrandsController@index",
        ]);
        Route::get("/getsubbrands",[
            "as" => "panel.userssubrands.getSubbrands",
            "uses" => "UsersSubbrandsController@getSubbrands",
        ]);
        Route::post("/setSubbrands",[
            "as" => "panel.userssubrands.setSubbrands",
            "uses" => "UsersSubbrandsController@setSubbrands",
        ]);
    });

    //HELP
    Route::get('/help', function () {
        return view('panel.help');
    })->name('panel.help');

}); // END GROUP PANEL


Route::group(["prefix" => "api"],function() {

    Route::get('/subbrands-dropdown/{brandId}', 'ApiController@subbrandsDropDownData');

    Route::get('/subbrands-econtent-dropdown/{brandId}', 'ApiController@subbrandsDropDownDataNotUsedInEcontent');

    Route::get('/subcategories-dropdown/{categoryId}', 'ApiController@subcategoriesDropDownData');
});

Auth::routes();
//Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');
//Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');


Auth::routes();


