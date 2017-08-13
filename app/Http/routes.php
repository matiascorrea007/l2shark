<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| post , get , delete , put
*/
//activando la proteccion token contra ataques a formularios


//rutas , el primer parammetro es el nombre de la ruta
//el segundo parametro llama a la funcion dentro de frontController
use Soft\Categoria;
use Soft\Categoriasub;
use Soft\Http\Requests;
use Soft\Http\Requests\Request;



//sistema de logue para laravel 5.2
Route::auth();

Route::get('conexion','AdminController@index');
    
Route::get('/','PaginasController@home');
Route::get('galeria-imagen','PaginasController@GaleriaImagenes');
Route::get('galeria-video','PaginasController@GaleriaVideos');
Route::get('demo-usuario','PaginasController@demoUsuario');
Route::get('demo-admin','PaginasController@demoAdmin');
Route::get('descargas','PaginasController@Download');
Route::get('donar','PaginasController@Donaciones');
Route::get('reglas','PaginasController@Reglas');
Route::get('soporte','PaginasController@Soporte');
Route::get('informacion','PaginasController@Informacion');
Route::get('registrarse','PaginasController@Registrarse');
Route::get('boss','BossController@boss');
Route::get('siege','SiegeController@siege');


Route::get('como-jugar','PaginasController@comoJugar');
Route::get('noticias','PaginasController@noticias');
Route::get('ingresar','PaginasController@ingresar');



/*---------------estadisticas-------------*/
Route::get('top-pvp','EstadisticasController@rankingPVP');
Route::get('top-pk','EstadisticasController@rankingPK');
Route::get('top-clan','EstadisticasController@rankingClan');
Route::get('top-hp','EstadisticasController@rankingHp');
Route::get('top-mp','EstadisticasController@rankingMp');
Route::get('top-mas-activos','EstadisticasController@rankingActivos');
Route::get('player-online','EstadisticasController@rankingOnline');
Route::get('top-donadores','EstadisticasController@rankingDonadores');
Route::get('top-heroes','EstadisticasController@rankingHeroes');
Route::get('top-olympiad','EstadisticasController@rankingOlympiad');
/*---------------END estadisticas-------------*/




Route::get('blog','PaginasController@post');
Route::get('blogdetail-post{id}',[
'as'=>'paginas.postDetalle',
'uses'=>'WebPostController@postDetalle'
	]);


//rutas para la traduccion 
Route::get('lang/{lang}', function ($lang) {
        session(['lang' => $lang]);
        return \Redirect::back();
    })->where([
        'lang' => 'en|es'
    ]);






/*------------------contactenos-----------------------*/
Route::get('contacto','PaginasController@contacto');
Route::post('mail','MailController@send');
/*------------------contactenos-----------------------*/
/*------------------newsletter-----------------------*/
Route::post('subscribirse','MailController@subscribirse');
Route::get('newsletter','MailController@newsletter');
Route::post('newsletter-enviar','MailController@newsletterEnviar');
/*------------------newsletter-----------------------*/












Route::group(array('middleware' => 'auth'), function(){
    Route::controller('filemanager', 'FilemanagerLaravelController');
});






Route::group(['middleware' =>['auth']], function () {


Route::get('skines','SkinController@index');
Route::get('skin-create','SkinController@create');
Route::post('skin-store','SkinController@store');
Route::put('skin-update/{id}','SkinController@update');
Route::delete('skin-destroy/{id}','SkinController@destroy');


//backup 
Route::get('backup', 'BackupController@index');

Route::get('panel', 'AdminController@admin');
Route::get('panel/{character}','AdminController@ObtenerCharacter');
Route::post('panel/{character}','AdminController@ObtenerCharacter');

Route::get('panel-config','AdminController@Config');
Route::get('panel-paginas','AdminController@Paginas');

/*Servicios*/
Route::get('servicios','ServiciosController@index');
Route::get('servicios/{charnombre}','ServiciosController@ObtenerCharacter');
Route::put('servicios-coin-update','ServiciosController@CoinServicioUpdate');

Route::post('nicknamecolor-edit','ServiciosController@NickNameColor');
Route::post('titlecolor-edit','ServiciosController@TitleNameColor');
Route::post('removekarma-edit','ServiciosController@RemoveKarma');
Route::post('pkcounter-edit','ServiciosController@PkCounter');
Route::put('nickname-edit','ServiciosController@NickName');
Route::post('clanname-edit','ServiciosController@ClanName');
Route::post('sex-edit','ServiciosController@Sex');
Route::post('unstuck-edit','ServiciosController@Unstuck');
Route::post('noblesse-edit','ServiciosController@Noblesse');
Route::post('hero-edit','ServiciosController@Hero');
Route::post('vip-edit','ServiciosController@Vip');
/*END Servicios*/



Route::get('db-config','DbController@index');
Route::get('db-check','DbController@ProbarConexion');
Route::post('db-config-store','DbController@store');
Route::put('db-config-update/{id}','DbController@update');


Route::get('donaciones','DonacionesController@index');
Route::match(['get','post'],'donaciones-create','DonacionesController@create');

Route::get('donaciones-listar','DonacionesController@listar');
Route::get('donaciones-hechas','DonacionesController@hechas');
Route::get('donaciones-pendientes','DonacionesController@pendientes');

Route::get('transferir-coin','DonacionesController@TransferirCoin');
Route::post('transferir-coin-player','DonacionesController@TransferirCoinPlayer');
Route::post('transferir-coin-cuenta','DonacionesController@TransferirCoinCuenta');
Route::get('transfererencias-realizadas','DonacionesController@TransferenciasRealizadas');

Route::post('donacion-cambiar-status/{id}','DonacionesController@Status');
Route::delete('donaciones-destroy/{id}','DonacionesController@destroy');
Route::delete('my-donaciones-destroy/{id}','DonacionesController@destroyMyDonacion');

Route::get('paypal-store','PaypalController@store');

Route::get('categoria','CategoriaController@index');
Route::get('categoria-create','CategoriaController@create');
Route::post('categoria-store','CategoriaController@store');
Route::put('categoria-update/{id}','CategoriaController@update');
Route::delete('categoria-destroy/{id}','CategoriaController@destroy');

Route::get('combo','ComboController@index');
Route::get('combo-ver-{id}','ComboController@ComboVer');
Route::get('combo-create','ComboController@Combocreate');
Route::post('combo-store','ComboController@Combostore');
Route::get('combo-edit-{idcombo}','ComboController@ComboEdit');
Route::put('combo-update-item-{idcombo}','ComboController@ComboUpdateItem');
Route::put('combo-update-{idcombo}','ComboController@ComboUpdate');
Route::delete('combo-destroy/{id}','ComboController@Combodestroy');

Route::post('combo-comprar','ComboController@ComboComprar');

Route::get('combo-item-add/{id}','ComboController@ComboItemAdd');
Route::get('combo-item-trash','ComboController@ComboItemTrash');

//busqueda por ajax
Route::get('search-id/{id}','ComboController@SearchId');
Route::get('search-nombre/{nombre}','ComboController@SearchNombre');
//busqueda con formulario
Route::get('search-item','ComboController@SearchItem');


Route::get('paginas','ConfigPaginasController@index');
Route::get('paginas-create','ConfigPaginasController@create');
Route::post('paginas-store','ConfigPaginasController@store');
Route::put('paginas-update/{id}','ConfigPaginasController@update');
Route::put('paginas-destroy/{id}','ConfigPaginasController@destroy');



/*--------ticket----------*/
Route::get('administrar-tickets','TicketController@index');
Route::get('tickets-completados','TicketController@TicketCompletados');
Route::post('tickets-cambiar-status/{id}','TicketController@TicketCambiarStatus');
Route::get('tickets-responder-{id}','TicketController@TicketResponder');
Route::put('tickets-comentario/{id}','TicketController@TicketComentario');

Route::get('user-ticket','TicketController@UserTicket');
Route::post('user-ticket-crear','TicketController@UserTicketCrear');
Route::get('user-ticket-responder-{id}','TicketController@UserTicketResponder');
Route::put('user-ticket-comentario/{id}','TicketController@UserTicketComentario');
/*--------ticket----------*/

Route::post('serverinfo-store','ServidorinfoController@store');
Route::put('serverinfo-update/{id}','ServidorinfoController@update');


Route::post('mercadopago-store','MercadoPagoController@store');
Route::put('mercadopago-update/{id}','MercadoPagoController@update');

Route::post('recaptcha-store','RecaptchaController@store');
Route::put('recaptcha-update/{id}','RecaptchaController@update');

Route::get('usuario-config','UsuarioController@usuarioConfig');
Route::put('cambiar-password/{id}','UsuarioController@cambiarPassword');
Route::put('cambiar-email/{id}','UsuarioController@cambiarEmail');
Route::put('asociar-cuenta/{id}','UsuarioController@asociarCuenta');

Route::get('voto','VotosController@index');
Route::get('voto-create','VotosController@create');
Route::post('voto-store','VotosController@store');
Route::put('voto-update/{id}','VotosController@update');
Route::delete('voto-destroy/{id}','VotosController@destroy');


Route::get('facebook','WebFacebookController@index');
Route::get('facebook-create','WebFacebookController@create');
Route::post('facebook-store','WebFacebookController@store');
Route::put('facebook-update/{id}','WebFacebookController@update');
Route::delete('facebook-destroy/{id}','WebFacebookController@destroy');

Route::get('logo','WebLogoController@index');
Route::get('logo-create','WebLogoController@create');
Route::post('logo-store','WebLogoController@store');
Route::put('logo-update/{id}','WebLogoController@update');
Route::delete('logo-destroy/{id}','WebLogoController@destroy');


Route::get('post','WebPostController@index');
Route::get('post-edit-{id}','WebPostController@edit');
Route::get('post-create','WebPostController@create');
Route::post('post-store','WebPostController@store');
Route::put('post-update','WebPostController@update');
Route::delete('post-destroy','WebPostController@destroy');


Route::get('galeria','GaleriaController@index');

Route::get('galeria-imagen-show','GaleriaController@showImagen');
Route::get('galeria-imagen-edit-{id}','GaleriaController@editImagen');
Route::get('galeria-imagen-create','GaleriaController@createImagen');
Route::post('galeria-imagen-store','GaleriaController@storeImagen');
Route::put('galeria-imagen-update/{id}','GaleriaController@updateImagen');
Route::delete('galeria-imagen-destroy/{id}','GaleriaController@destroyImagen');

Route::get('galeria-video-show','GaleriaController@showVideo');
Route::get('galeria-video-edit-{id}','GaleriaController@editVideo');
Route::get('galeria-video-create','GaleriaController@createVideo');
Route::post('galeria-video-store','GaleriaController@storeVideo');
Route::put('galeria-video-update/{id}','GaleriaController@updateVideo');
Route::delete('galeria-video-destroy/{id}','GaleriaController@destroyVideo');
/*---------------WEB CONFIG------------*/





/*---------------reportes Pdf------------*/
//agregado pdf
Route::get('reportes', 'PdfController@index');
Route::get('crear_reporte_porpais/{tipo}', 'PdfController@crear_reporte_porpais');
/*---------------reportes Pdf------------*/

/*--------------------------------REPORTES GRAFICAS------------------------------*/
Route::get('listado_graficas', 'GraficasController@index');
Route::get('grafica_registros/{anio}/{mes}', 'GraficasController@registros_mes');
Route::get('grafica_publicaciones', 'GraficasController@total_publicaciones');
/*--------------------------------REPORTES GRAFICAS------------------------------*/


/*---------------Excel import/export ------------*/
/*--------user --------*/
Route::get('/userExport','ExcelController@userExport');
Route::get('/userImport','ExcelController@userImport');
Route::post('/userImport','ExcelController@userImport');


/*---------------Excel import/export ------------*/


 });



Route::group(['middleware' =>['auth']], function () {

/*---------------login------------*/

//para redireccionar si ya esta logueado y trata de entrar al login
Route::get('logged', 'LoginController@logged');
Route::get('login-redirect', 'LoginController@LoginRedirect');


/*---------------login------------*/

});
