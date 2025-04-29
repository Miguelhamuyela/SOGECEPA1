<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




/* Grupo de rotas autenticadas */

Route::middleware(['auth'])->group(function () {
    /* Manager Dashboard  */
    route::get('admin/painel', ['as' => 'admin.home', 'uses' => 'Admin\DashboardController@index']);

    Route::middleware(['Administrador'])->group(function () {

        /* User */
        Route::get('admin/user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index']);
        Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware(['Administrador']);

        Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware(['Administrador']);
        Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update'])->withoutMiddleware(['Administrador']);

        Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy']);
        /* end user */
    });
    Route::middleware(['Imprensa'])->group(function () {

        /* news */
        Route::get('admin/news/index', ['as' => 'admin.news.index', 'uses' => 'Admin\NewsController@list']);
        Route::get('admin/news/show/{id}', ['as' => 'admin.news.show', 'uses' => 'Admin\NewsController@show']);

        Route::get('admin/news/create', ['as' => 'admin.news.create', 'uses' => 'Admin\NewsController@create']);
        Route::post('admin/news/store', ['as' => 'admin.news.store', 'uses' => 'Admin\NewsController@store']);

        Route::get('admin/news/edit/{id}', ['as' => 'admin.news.edit', 'uses' => 'Admin\NewsController@edit']);
        Route::put('admin/news/update/{id}', ['as' => 'admin.news.update', 'uses' => 'Admin\NewsController@update']);

        Route::get('admin/news/delete/{id}', ['as' => 'admin.news.delete', 'uses' => 'Admin\NewsController@destroy']);
        /* end news */
             /* Events */
        Route::get('admin/event/index', ['as' => 'admin.event.index', 'uses' => 'Admin\EventController@list']);
        Route::get('admin/event/show/{id}', ['as' => 'admin.event.show', 'uses' => 'Admin\EventController@show']);

        Route::get('admin/event/create', ['as' => 'admin.event.create', 'uses' => 'Admin\EventController@create']);
        Route::post('admin/event/store', ['as' => 'admin.event.store', 'uses' => 'Admin\EventController@store']);

        Route::get('admin/event/edit/{id}', ['as' => 'admin.event.edit', 'uses' => 'Admin\EventController@edit']);
        Route::put('admin/event/update/{id}', ['as' => 'admin.event.update', 'uses' => 'Admin\EventController@update']);

        Route::get('admin/event/delete/{id}', ['as' => 'admin.event.delete', 'uses' => 'Admin\EventController@destroy']);
        /* end Events */
    });

    Route::middleware(['Editor'])->group(function () {
        /* gallery */
        Route::get('admin/gallery/index', ['as' => 'admin.gallery.index', 'uses' => 'Admin\GalleryController@list']);
        Route::get('admin/gallery/show/{id}', ['as' => 'admin.gallery.show', 'uses' => 'Admin\GalleryController@show']);

        Route::get('admin/gallery/create', ['as' => 'admin.gallery.create', 'uses' => 'Admin\GalleryController@create']);
        Route::post('admin/gallery/store', ['as' => 'admin.gallery.store', 'uses' => 'Admin\GalleryController@store']);

        Route::get('admin/gallery/edit/{id}', ['as' => 'admin.gallery.edit', 'uses' => 'Admin\GalleryController@edit']);
        Route::put('admin/gallery/update/{id}', ['as' => 'admin.gallery.update', 'uses' => 'Admin\GalleryController@update']);

        Route::get('admin/gallery/delete/{id}', ['as' => 'admin.gallery.delete', 'uses' => 'Admin\GalleryController@destroy']);
        /* end gallery */

        /* imageGallery */
        Route::get('admin/imageGallery/create/{id}', ['as' => 'admin.imageGallery.create', 'uses' => 'Admin\ImageGalleryController@create']);
        Route::post('admin/imageGallery/store/{id}', ['as' => 'admin.imageGallery.store', 'uses' => 'Admin\ImageGalleryController@store']);

        Route::get('admin/imageGallery/delete/{id}', ['as' => 'admin.imageGallery.delete', 'uses' => 'Admin\ImageGalleryController@destroy']);
        /* End imageGallery */


        /* imagesKwenda */
        Route::get('admin/imagens-em-projecto-kwenda/create/{id}', ['as' => 'admin.KwendaImages.create', 'uses' => 'Admin\KwendaImagesController@create']);
        Route::post('admin/imagens-em-projecto-kwenda/store/{id}', ['as' => 'admin.KwendaImages.store', 'uses' => 'Admin\KwendaImagesController@store']);

        Route::get('admin/imagens-em-projecto-kwenda/delete/{id}', ['as' => 'admin.KwendaImages.delete', 'uses' => 'Admin\KwendaImagesController@destroy']);
        /* End imagesKwenda */



        /* insideGallery */
        Route::get('admin/categoria-da-galeria/create/{id}', ['as' => 'admin.insideGallery.create', 'uses' => 'Admin\InsideGalleryController@create']);
        Route::post('admin/categoria-da-galeria/store/{id}', ['as' => 'admin.insideGallery.store', 'uses' => 'Admin\InsideGalleryController@store']);
        Route::get('admin/categoria-da-galeria/index', ['as' => 'admin.insideGallery.index', 'uses' => 'Admin\InsideGalleryController@list']);

        Route::get('admin/categoria-da-galeria/edit/{id}', ['as' => 'admin.insideGallery.edit', 'uses' => 'Admin\InsideGalleryController@edit']);
        Route::put('admin/categoria-da-galeria/update/{id}', ['as' => 'admin.insideGallery.update', 'uses' => 'Admin\InsideGalleryController@update']);

        Route::get('admin/categoria-da-galeria/delete/{id}', ['as' => 'admin.insideGallery.delete', 'uses' => 'Admin\InsideGalleryController@destroy']);
        /* End insideGallery */

        /* imageGallery */
        Route::get('admin/imagens-em-galeria/create/{id}', ['as' => 'admin.insideImageGallery.create', 'uses' => 'Admin\InsideImageGalleryController@create']);
        Route::post('admin/imagens-em-galeria/store/{id}', ['as' => 'admin.insideImageGallery.store', 'uses' => 'Admin\InsideImageGalleryController@store']);

        Route::get('admin/imagens-em-galeria/delete/{id}', ['as' => 'admin.insideImageGallery.delete', 'uses' => 'Admin\InsideImageGalleryController@destroy']);
        Route::get('admin/imagens-em-galeria/details/{id}', ['as' => 'admin.insideImageGallery.details', 'uses' => 'Admin\InsideImageGalleryController@details']);

        Route::get('admin/imagens-em-galeria/edit/{id}', ['as' => 'admin.insideImageGallery.edit', 'uses' => 'Admin\InsideImageGalleryController@edit']);
        Route::put('admin/imagens-em-galeria/update/{id}', ['as' => 'admin.insideImageGallery.update', 'uses' => 'Admin\InsideImageGalleryController@update']);
        /* End imageGallery */

        /* video */
        Route::get('admin/video/index', ['as' => 'admin.video.index', 'uses' => 'Admin\VideoController@list']);
        Route::get('admin/video/show/{id}', ['as' => 'admin.video.show', 'uses' => 'Admin\VideoController@show']);

        Route::get('admin/video/create', ['as' => 'admin.video.create', 'uses' => 'Admin\VideoController@create']);
        Route::post('admin/video/store', ['as' => 'admin.video.store', 'uses' => 'Admin\VideoController@store']);

        Route::get('admin/video/edit/{id}', ['as' => 'admin.video.edit', 'uses' => 'Admin\VideoController@edit']);
        Route::put('admin/video/update/{id}', ['as' => 'admin.video.update', 'uses' => 'Admin\VideoController@update']);

        Route::get('admin/video/delete/{id}', ['as' => 'admin.video.delete', 'uses' => 'Admin\VideoController@destroy']);
        /* end video */



        /* slideshow */
        Route::get('admin/slideshow/index', ['as' => 'admin.slideshow.index', 'uses' => 'Admin\SlideShowController@list']);
        Route::get('admin/slideshow/show/{id}', ['as' => 'admin.slideshow.show', 'uses' => 'Admin\SlideShowController@show']);

        Route::get('admin/slideshow/create', ['as' => 'admin.slideshow.create', 'uses' => 'Admin\SlideShowController@create']);
        Route::post('admin/slideshow/store', ['as' => 'admin.slideshow.store', 'uses' => 'Admin\SlideShowController@store']);

        Route::get('admin/slideshow/edit/{id}', ['as' => 'admin.slideshow.edit', 'uses' => 'Admin\SlideShowController@edit']);
        Route::put('admin/slideshow/update/{id}', ['as' => 'admin.slideshow.update', 'uses' => 'Admin\SlideShowController@update']);

        Route::get('admin/slideshow/delete/{id}', ['as' => 'admin.slideshow.delete', 'uses' => 'Admin\SlideShowController@destroy']);
        /* end slideshow */



        /* audio*/
        Route::get('admin/audio/index', ['as' => 'admin.audio.index', 'uses' => 'Admin\AudioController@list']);
        Route::get('admin/audio/show/{id}', ['as' => 'admin.audio.show', 'uses' => 'Admin\AudioController@show']);

        Route::get('admin/audio/create', ['as' => 'admin.audio.create', 'uses' => 'Admin\AudioController@create']);
        Route::post('admin/audio/store', ['as' => 'admin.audio.store', 'uses' => 'Admin\AudioController@store']);

        Route::get('admin/audio/edit/{id}', ['as' => 'admin.audio.edit', 'uses' => 'Admin\AudioController@edit']);
        Route::put('admin/audio/update/{id}', ['as' => 'admin.audio.update', 'uses' => 'Admin\AudioController@update']);

        Route::get('admin/audio/delete/{id}', ['as' => 'admin.audio.delete', 'uses' => 'Admin\AudioController@destroy']);
        /* end audio */




        /* parceiros */
        Route::get('admin/parceiros/index', ['as' => 'admin.partners.index', 'uses' => 'Admin\PartnersController@index']);
        Route::get('admin/parceiros/show/{id}', ['as' => 'admin.partners.show', 'uses' => 'Admin\PartnersController@show']);
        Route::get('admin/parceiros/create', ['as' => 'admin.partners.create', 'uses' => 'Admin\PartnersController@create']);
        Route::post('admin/parceiros/store', ['as' => 'admin.partners.store', 'uses' => 'Admin\PartnersController@store']);
        Route::get('admin/parceiros/edit/{id}', ['as' => 'admin.partners.edit', 'uses' => 'Admin\PartnersController@edit']);
        Route::put('admin/parceiros/update/{id}', ['as' => 'admin.partners.update', 'uses' => 'Admin\PartnersController@update']);
        Route::get('admin/parceiros/delete/{id}', ['as' => 'admin.partners.delete', 'uses' => 'Admin\PartnersController@destroy']);
        /* end parceiros */




        /* aboutangola */
        Route::get('admin/aboutangola/index', ['as' => 'admin.aboutangola.index', 'uses' => 'Admin\AboutangolaController@list']);
        Route::get('admin/aboutangola/show/{id}', ['as' => 'admin.aboutangola.show', 'uses' => 'Admin\AboutangolaController@show']);

        Route::get('admin/aboutangola/create', ['as' => 'admin.aboutangola.create', 'uses' => 'Admin\AboutangolaController@create']);
        Route::post('admin/aboutangola/store', ['as' => 'admin.aboutangola.store', 'uses' => 'Admin\AboutangolaController@store']);

        Route::get('admin/aboutangola/edit/{id}', ['as' => 'admin.aboutangola.edit', 'uses' => 'Admin\AboutangolaController@edit']);
        Route::put('admin/aboutangola/update/{id}', ['as' => 'admin.aboutangola.update', 'uses' => 'Admin\AboutangolaController@update']);

        Route::get('admin/aboutangola/delete/{id}', ['as' => 'admin.aboutangola.delete', 'uses' => 'Admin\AboutangolaController@destroy']);
        /* end aboutangola */




        /* configuration */
        Route::get('admin/configuration/show', ['as' => 'admin.configuration.show', 'uses' => 'Admin\ConfigurationController@show']);

        Route::get('admin/configuration/edit/{id}', ['as' => 'admin.configuration.edit', 'uses' => 'Admin\ConfigurationController@edit']);
        Route::put('admin/configuration/update/{id}', ['as' => 'admin.configuration.update', 'uses' => 'Admin\ConfigurationController@update']);
        /* end configuration */


        /* configuration */
        Route::get('admin/visto/show', ['as' => 'admin.visa.show', 'uses' => 'Admin\VisaController@show']);

        Route::get('admin/visto/edit/{id}', ['as' => 'admin.visa.edit', 'uses' => 'Admin\VisaController@edit']);
        Route::put('admin/visto/update/{id}', ['as' => 'admin.visa.update', 'uses' => 'Admin\VisaController@update']);
        /* end configuration */

        /* configuration */
        Route::get('admin/cloud-do-governo/show', ['as' => 'admin.cloudGovern.show', 'uses' => 'Admin\CloudGovernController@show']);

        Route::get('admin/cloud-do-governo/edit/{id}', ['as' => 'admin.cloudGovern.edit', 'uses' => 'Admin\CloudGovernController@edit']);
        Route::put('admin/cloud-do-governo/update/{id}', ['as' => 'admin.cloudGovern.update', 'uses' => 'Admin\CloudGovernController@update']);
        /* end configuration */

        /* configuration */
        Route::get('admin/corredor-do-lobito/show', ['as' => 'admin.corridorLobito.show', 'uses' => 'Admin\LobitoCorridorController@show']);

        Route::get('admin/corredor-do-lobito/edit/{id}', ['as' => 'admin.corridorLobito.edit', 'uses' => 'Admin\LobitoCorridorController@edit']);
        Route::put('admin/corredor-do-lobito/update/{id}', ['as' => 'admin.corridorLobito.update', 'uses' => 'Admin\LobitoCorridorController@update']);
        /* end configuration */



        /* configuration */
        Route::get('admin/turismo/show', ['as' => 'admin.tourism.show', 'uses' => 'Admin\TourismController@show']);

        Route::get('admin/turismo/edit/{id}', ['as' => 'admin.tourism.edit', 'uses' => 'Admin\TourismController@edit']);
        Route::put('admin/turismo/update/{id}', ['as' => 'admin.tourism.update', 'uses' => 'Admin\TourismController@update']);
        /* end configuration */


        /* configuration */
        Route::get('admin/angosat/show', ['as' => 'admin.angosat.show', 'uses' => 'Admin\AngosatController@show']);

        Route::get('admin/angosat/edit/{id}', ['as' => 'admin.angosat.edit', 'uses' => 'Admin\AngosatController@edit']);
        Route::put('admin/angosat/update/{id}', ['as' => 'admin.angosat.update', 'uses' => 'Admin\AngosatController@update']);
        /* end configuration */


        /* configuration */
        Route::get('admin/projecto-kwenda/show', ['as' => 'admin.kwenda.show', 'uses' => 'Admin\KwendaController@show']);

        Route::get('admin/projecto-kwenda/edit/{id}', ['as' => 'admin.kwenda.edit', 'uses' => 'Admin\KwendaController@edit']);
        Route::put('admin/projecto-kwenda/update/{id}', ['as' => 'admin.kwenda.update', 'uses' => 'Admin\KwendaController@update']);
        /* end configuration */


        /* madeInAngola */
        Route::get('admin/feito-em-angola/show', ['as' => 'admin.madeInAngola.show', 'uses' => 'Admin\MadeInAngolaController@show']);

        Route::get('admin/feito-em-angola/edit/{id}', ['as' => 'admin.madeInAngola.edit', 'uses' => 'Admin\MadeInAngolaController@edit']);
        Route::put('admin/feito-em-angola/update/{id}', ['as' => 'admin.madeInAngola.update', 'uses' => 'Admin\MadeInAngolaController@update']);
        /* end madeInAngola */


        /* damLauca */
        Route::get('admin/barragem-de-lauca/show', ['as' => 'admin.DamLauca.show', 'uses' => 'Admin\DamLaucaController@show']);

        Route::get('admin/barragem-de-lauca/edit/{id}', ['as' => 'admin.DamLauca.edit', 'uses' => 'Admin\DamLaucaController@edit']);
        Route::put('admin/barragem-de-lauca/update/{id}', ['as' => 'admin.DamLauca.update', 'uses' => 'Admin\DamLaucaController@update']);
        /* end damLauca */


        /* Usina */
        Route::get('admin/centrais-fotovoltaica-do-biopio-e-baia-farta/show', ['as' => 'admin.BiopioAndBaiaFartaPhotovoltaicPlants.show', 'uses' => 'Admin\BiopioAndBaiaFartaPhotovoltaicPlantsController@show']);

        Route::get('admin/centrais-fotovoltaica-do-biopio-e-baia-farta/edit/{id}', ['as' => 'admin.BiopioAndBaiaFartaPhotovoltaicPlants.edit', 'uses' => 'Admin\BiopioAndBaiaFartaPhotovoltaicPlantsController@edit']);
        Route::put('admin/centrais-fotovoltaica-do-biopio-e-baia-farta/update/{id}', ['as' => 'admin.BiopioAndBaiaFartaPhotovoltaicPlants.update', 'uses' => 'Admin\BiopioAndBaiaFartaPhotovoltaicPlantsController@update']);
        /* end Usina */

        /* Usina */
        Route::get('admin/barragem-caculo-cabaca/show', ['as' => 'admin.DamCaculoCabaca.show', 'uses' => 'Admin\DamCaculoCabacaController@show']);

        Route::get('admin/barragem-caculo-cabaca/edit/{id}', ['as' => 'admin.DamCaculoCabaca.edit', 'uses' => 'Admin\DamCaculoCabacaController@edit']);
        Route::put('admin/barragem-caculo-cabaca/update/{id}', ['as' => 'admin.DamCaculoCabaca.update', 'uses' => 'Admin\DamCaculoCabacaController@update']);
        /* end Usina */


        /* Usina */
        Route::get('admin/energia-e-aguas/show', ['as' => 'admin.energyAndWater.show', 'uses' => 'Admin\EnergyAndWaterController@show']);

        Route::get('admin/energia-e-aguas/edit/{id}', ['as' => 'admin.energyAndWater.edit', 'uses' => 'Admin\EnergyAndWaterController@edit']);
        Route::put('admin/energia-e-aguas/update/{id}', ['as' => 'admin.energyAndWater.update', 'uses' => 'Admin\EnergyAndWaterController@update']);
        /* end Usina */


        /* Agt */
        Route::get('admin/agt-imposto-predial/show', ['as' => 'admin.agt.show', 'uses' => 'Admin\AgtController@show']);
        Route::get('admin/agt-imposto-predial/edit/{id}', ['as' => 'admin.agt.edit', 'uses' => 'Admin\AgtController@edit']);
        Route::put('admin/agt-imposto-predial/update/{id}', ['as' => 'admin.agt.update', 'uses' => 'Admin\AgtController@update']);
        /* end Agt */






        /* Banners */
        Route::get('admin/banner-publicitario/index', ['as' => 'admin.publicityBanner.index', 'uses' => 'Admin\PublicityBannerController@list']);
        Route::get('admin/banner-publicitario/show/{id}', ['as' => 'admin.publicityBanner.show', 'uses' => 'Admin\PublicityBannerController@show']);

        Route::get('admin/banner-publicitario/create', ['as' => 'admin.publicityBanner.create', 'uses' => 'Admin\PublicityBannerController@create']);
        Route::post('admin/banner-publicitario/store', ['as' => 'admin.publicityBanner.store', 'uses' => 'Admin\PublicityBannerController@store']);

        Route::get('admin/banner-publicitario/edit/{id}', ['as' => 'admin.publicityBanner.edit', 'uses' => 'Admin\PublicityBannerController@edit']);
        Route::put('admin/banner-publicitario/update/{id}', ['as' => 'admin.publicityBanner.update', 'uses' => 'Admin\PublicityBannerController@update']);

        Route::get('admin/banner-publicitario/delete/{id}', ['as' => 'admin.publicityBanner.delete', 'uses' => 'Admin\PublicityBannerController@destroy']);
        /* end Banners */

        Route::get('admin/legislacao/index', ['as' => 'admin.legislation.index', 'uses' => 'Admin\LegislationController@list']);
        Route::get('admin/legislacao/show/{id}', ['as' => 'admin.legislation.show', 'uses' => 'Admin\LegislationController@show']);

        Route::get('admin/legislacao/create', ['as' => 'admin.legislation.create', 'uses' => 'Admin\LegislationController@create']);
        Route::post('admin/legislacao/store', ['as' => 'admin.legislation.store', 'uses' => 'Admin\LegislationController@store']);

        Route::get('admin/legislacao/edit/{id}', ['as' => 'admin.legislation.edit', 'uses' => 'Admin\LegislationController@edit']);
        Route::put('admin/legislacao/update/{id}', ['as' => 'admin.legislation.update', 'uses' => 'Admin\LegislationController@update']);

        Route::get('admin/legislacao/delete/{id}', ['as' => 'admin.legislation.delete', 'uses' => 'Admin\LegislationController@destroy']);

        /* legislation */
        Route::get('admin/texto-em-legislacao/show', ['as' => 'admin.legislationText.show', 'uses' => 'Admin\LegislationTextController@show']);
        Route::get('admin/texto-em-legislacao/edit/{id}', ['as' => 'admin.legislationText.edit', 'uses' => 'Admin\LegislationTextController@edit']);
        Route::put('admin/texto-em-legislacao/update/{id}', ['as' => 'admin.legislationText.update', 'uses' => 'Admin\LegislationTextController@update']);
        /* end legislation */
    });
});
