<?php

use Illuminate\Support\Facades\Route;

/* SITE */

route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);
/* noticias */
Route::get('/noticias', ['as' => 'site.news', 'uses' => 'Site\NewsController@index']);
Route::get('/noticia/{title}', ['as' => 'site.news.show', 'uses' => 'Site\NewsController@show']);

/* noticias */
Route::get('/schools', ['as' => 'site.schools', 'uses' => 'Site\SchoolsController@index']);
Route::get('/schools/{title}', ['as' => 'site.schools.show', 'uses' => 'Site\SchoolsController@show']);


/* Galeria fotos */
Route::get('/galerias-de-imagem/', ['as' => 'site.gallery', 'uses' => 'Site\GalleryController@index']);
Route::get('/galeria-de-imagens/{name}', ['as' => 'site.gallery.show', 'uses' => 'Site\GalleryController@show']);
Route::get('/galeria-de-imagens/por-categoria/{name}', ['as' => 'site.insideGallery.show', 'uses' => 'Site\GalleryController@details']);
/* Galeria de Videos */
Route::get('/galeria-de-videos/', ['as' => 'site.videos', 'uses' => 'Site\VideoController@index']);

/**Contact */
Route::get('/contactos', ['as' => 'site.contact', 'uses' => 'Site\ContactController@index']);
route::post('site/help/email', ['as' => 'site.help.email', 'uses' => 'Site\Email\HelpController@send']);

Route::get('/audio/', ['as' => 'site.audio', 'uses' => 'Site\AudioController@index']);

/* policyPrivacy */
Route::get('/politicas-de-privacidade', ['as' => 'site.policyPrivacy', 'uses' => 'Site\PolicyPrivacyController@index']);

/*   about angola */
Route::get('/sobre-angola/', ['as' => 'site.aboutangola', 'uses' => 'Site\AboutAngolaController@index']);

/* turism */
Route::get('/turismo/', ['as' => 'site.turism', 'uses' => 'Site\TurismController@index']);

/* legislation */
Route::get('/legislação/', ['as' => 'site.legislation', 'uses' => 'Site\LegislationController@index']);

/* legislation */
Route::get('/angola/', ['as' => 'site.angola', 'uses' => 'Site\AngolaController@index']);

/* legislation */
Route::get('/angosat/', ['as' => 'site.angoSat', 'uses' => 'Site\AngoSatController@index']);

//legislation
Route::get('legislação', ['as' => 'site.legislation', 'uses' => 'Site\LegislationController@index']);

//petroleumRevenue
Route::get('investimentos-petroliferos', ['as' => 'site.petroleumRevenue', 'uses' => 'Site\PetroleumRevenueController@index']);
//DiamondRecipe
Route::get('investimentos-diamantiferos', ['as' => 'site.diamondRecipe', 'uses' => 'Site\DiamondRecipeController@index']);


//DiamondRecipe


Route::get('pesquisa', ['as' => 'site.search.show', 'uses' => 'Site\SearchController@index']);
Route::get('/pesquisar/find', ['as' => 'site.search.find', 'uses' => 'Site\SearchController@find']);

//Reservas Internacionais
Route::get('reservas-internacionais', ['as' => 'site.InternationalReserve', 'uses' => 'Site\InternationalReserveController@index']);

//dívidas públicas
Route::get('dividas-publicas', ['as' => 'site.publicDebt', 'uses' => 'Site\PublicDebtController@index']);


//pib
Route::get('pib', ['as' => 'site.pib', 'uses' => 'Site\PibController@index']);

//Inflação
Route::get('inflation', ['as' => 'site.inflation', 'uses' => 'Site\InflationController@index']);
//Câmbio
Route::get('câmbio', ['as' => 'site.exchange', 'uses' => 'Site\ExchangeController@index']);

//Banking
Route::get('banca', ['as' => 'site.banking', 'uses' => 'Site\BankingController@index']);

//Capital Market
Route::get('mercado-de-capital', ['as' => 'site.capitalMarket', 'uses' => 'Site\CapitalMarketController@index']);

//Safe
Route::get('seguro', ['as' => 'site.safe', 'uses' => 'Site\SafeController@index']);
//Mining
Route::get('recursos-minerais', ['as' => 'site.miningResources', 'uses' => 'Site\MiningController@index']);
//Oil and Gas
Route::get('petroleo-gas', ['as' => 'site.oilGa', 'uses' => 'Site\OilGaController@index']);
//economia Azul
Route::get('economia-azul', ['as' => 'site.blueEconomy', 'uses' => 'Site\BlueEconomyController@index']);

//economia Verde
Route::get('economia-verde', ['as' => 'site.greenEconomy', 'uses' => 'Site\GreenEconomyController@index']);

//Energy and Water
Route::get('energia-e-aguas', ['as' => 'site.energyWater', 'uses' => 'Site\EnergyWaterController@index']);

//EducationFinancial
Route::get('sector-bancario', ['as' => 'site.bankingArea', 'uses' => 'Site\EducationFinancialController@index']);
//EducationFinancial
Route::get('agronegocio', ['as' => 'site.agribusiness', 'uses' => 'Site\AgribusinessController@index']);

//External
Route::get('diplomatico-externo', ['as' => 'site.external', 'uses' => 'Site\ExternalController@index']);


//Kwenda
Route::get('kwenda', ['as' => 'site.kwenda', 'uses' => 'Site\KwendaController@index']);



//CulturalAndTouristic
Route::get('cultural-turistico', ['as' => 'site.culturalAndTouristic', 'uses' => 'Site\CulturalAndTouristicController@index']);


//Diplomatic
Route::get('economico', ['as' => 'site.economic', 'uses' => 'Site\EconomicController@index']);
//Diplomatic
Route::get('como-investir-em-angola', ['as' => 'site.investingAngola', 'uses' => 'Site\InvestingAngolaController@index']);

//Tic
Route::get('telecomunicacoes-e-tecnologias-da-informacao', ['as' => 'site.tic', 'uses' => 'Site\TicController@index']);

//Sport
Route::get('desporto', ['as' => 'site.sport', 'uses' => 'Site\SportController@index']);


//Tic
Route::get('sobre-nos', ['as' => 'site.about', 'uses' => 'Site\AboutController@index']);


//Tic
Route::get('capital-humano', ['as' => 'site.humanCapital', 'uses' => 'Site\HumanCapitalController@index']);


//Connect Angola
Route::get('conecta-angola', ['as' => 'site.connectAngola', 'uses' => 'Site\ConnectAngolaController@index']);


//Lobito Corridor
Route::get('corredor-do-lobito', ['as' => 'site.lobitoCorridor', 'uses' => 'Site\LobitoCorridorController@index']);

//Lobito Corridor
Route::get('digital-ao', ['as' => 'site.digitalAo', 'uses' => 'Site\DigitalAoController@index']);

//Cloud Govern
Route::get('cloud-do-governo', ['as' => 'site.governCloud', 'uses' => 'Site\GovernCloudController@index']);



//Visa
Route::get('vistos', ['as' => 'site.visa', 'uses' => 'Site\VisaController@index']);

//MadeInAngola
Route::get('feito-em-angola', ['as' => 'site.madeInAngola', 'uses' => 'Site\MadeInAngolaController@index']);


//NewAirport
Route::get('aeroporto-dr-agostinho-neto', ['as' => 'site.airPort', 'uses' => 'Site\AirPortController@index']);


//BarOfDande
Route::get('barra-do-dande', ['as' => 'site.barOfDande', 'uses' => 'Site\BarOfDandeController@index']);

//DamDande
Route::get('barragem-caculo-cabaca', ['as' => 'site.damCaculoCabaca', 'uses' => 'Site\DamCaculoCabacaController@index']);


//DamLauca
Route::get('barragem-do-lauca', ['as' => 'site.damLauca', 'uses' => 'Site\DamLaucaController@index']);

//photovoltaic plant
Route::get('centrais-fotovoltaica-do-biopio-e-baia-farta', ['as' => 'site.photovoltaicPlant', 'uses' => 'Site\PhotoVoltaicPlantController@index']);

//refineryOfCabinda
Route::get('refinaria-de-cabinda', ['as' => 'site.refineryOfCabinda', 'uses' => 'Site\RefineryOfCabindaController@index']);

//refineryOfSoyo
Route::get('refinaria-do-soyo', ['as' => 'site.refineryOfSoyo', 'uses' => 'Site\RefineryOfSoyoController@index']);

//refineryOfSoyo
Route::get('refinaria-de-petroleo-do-lobito', ['as' => 'site.refineryOfLobito', 'uses' => 'Site\RefineryOfLobitoController@index']);

//refineryOfGold
Route::get('refinaria-de-ouro-luanda', ['as' => 'site.refineryOfGold', 'uses' => 'Site\RefineryOfGoldController@index']);

//Development Hub of Namibe
Route::get('polo-de-desenvolvimento-de-rochas-ornamentais-do-namibe', ['as' => 'site.developmentHubOfNamibe', 'uses' => 'Site\DevelopmentHubOfNamibeController@index']);

//Development Hub of Saurimo
Route::get('polo-de-desenvolvimento-diamantifero-do-saurimo', ['as' => 'site.developmentHubOfSaurimo', 'uses' => 'Site\DevelopmentHubOfSaurimoController@index']);

//Ocean Terminal
Route::get('terminal-oceanico-da-barra-do-dande', ['as' => 'site.oceanTerminal', 'uses' => 'Site\OceanTerminalController@index']);

//angola Cables
Route::get('angola-cables', ['as' => 'site.angolaCables', 'uses' => 'Site\AngolaCablesController@index']);

//hospital
Route::get('hospital-dom-alexandre-do-nascimento', ['as' => 'site.hospital', 'uses' => 'Site\HospitalController@index']);


//frank Zone
Route::get('zona-franca', ['as' => 'site.frankZone', 'uses' => 'Site\FrankZoneController@index']);


//frank Zone
Route::get('hospital-neves-bendinha', ['as' => 'site.hospitalNevesBendinha', 'uses' => 'Site\HospitalNevesBendinhaController@index']);

Route::get('hospital-materno-infantil', ['as' => 'site.hospitalMaternoInfantil', 'uses' => 'Site\HospitalMaternoInfantilController@index']);

Route::get('hospital-dos-queimados', ['as' => 'site.firedHospital', 'uses' => 'Site\FiredHospitalController@index']);

Route::get('hospital-geral-de-cabinda', ['as' => 'site.cabindaHospital', 'uses' => 'Site\HospitalCabindaController@index']);

Route::get('hospital-dr-walter-strangway', ['as' => 'site.walterHospital', 'uses' => 'Site\HospitalStrangwayController@index']);

Route::get('instituto-hematologico-pediatrico-de-luanda', ['as' => 'site.instituteHematologic', 'uses' => 'Site\InstituteHematologicLuandaController@index']);

Route::get('plano-integrado-de-intervencao-nos-municipios', ['as' => 'site.piim', 'uses' => 'Site\PiimController@index']);


Route::get('agt-imposto-predial', ['as' => 'site.agt', 'uses' => 'Site\AgtController@index']);

Route::get('sessoes-tematicas', ['as' => 'site.themedSession', 'uses' => 'Site\ThemedSessionController@index']);



/**Ornamental Rocks */
Route::get('rochas-ornamentais', ['as' => 'site.ornamentalRocks', 'uses' => 'Site\OrnamentalRocksController@index']);

/**Diamonds */
Route::get('diamantes', ['as' => 'site.diamonds', 'uses' => 'Site\DiamondsController@index']);



/* Eventos */
Route::get('/eventos', ['as' => 'site.event', 'uses' => 'Site\EventController@index']);
Route::get('/evento/{title}', ['as' => 'site.event.show', 'uses' => 'Site\EventController@show']);
/**End Eventos */

/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';
