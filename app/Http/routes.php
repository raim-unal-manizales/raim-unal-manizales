<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect()->route('Public.searchOa');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
	Route::group(['middleware' => ['web','auth','administrador'],'prefix' => 'Admin'],function(){

		Route::get('/', function () {
		    return view('admin.index');
		});


		Route::resource('Rol','RolController');
			Route::get('Rol/{id}/delete',[
				'uses' 	=> 'RolController@delete',
				'as'	=> 'Admin.Rol.delete'
			]);

		Route::resource('User','UserController');
			Route::get('User/{id}/delete',[
				'uses' 	=> 'UserController@delete',
				'as'	=> 'Admin.User.delete'
			]);
      Route::get('User/{id}/editAll',[
        'uses' 	=> 'UserController@editAll',
        'as'	=> 'Admin.User.editAll'
      ]);
      Route::get('User/{id}/estilosEdit',[
        'uses' 	=> 'UserController@estilosEdit',
        'as'	=> 'Admin.User.estilosEdit'
      ]);
      Route::get('User/{id}/estilosCreate',[
        'uses' 	=> 'UserController@estilosCreate',
        'as'	=> 'Admin.User.estilosCreate'
      ]);
      Route::post('User/{id}/storeEstilosEdit',[
        'uses' 	=> 'UserController@storeEstilosEdit',
        'as'	=> 'Admin.User.storeEstilosEdit'
      ]);
      Route::post('User/{id}/storeEstilosCreate',[
        'uses' 	=> 'UserController@storeEstilosCreate',
        'as'	=> 'Admin.User.storeEstilosCreate'
      ]);
      Route::get('User/{id}/needEdit',[
        'uses' 	=> 'UserController@needEdit',
        'as'	=> 'Admin.User.needEdit'
      ]);
      Route::get('User/{id}/needCreate',[
        'uses' 	=> 'UserController@needCreate',
        'as'	=> 'Admin.User.needCreate'
      ]);
      Route::post('User/{id}/storeNeedEdit',[
        'uses' 	=> 'UserController@storeNeedEdit',
        'as'	=> 'Admin.User.storeNeedEdit'
      ]);
      Route::post('User/{id}/storeNeedCreate',[
        'uses' 	=> 'UserController@storeNeedCreate',
        'as'	=> 'Admin.User.storeNeedCreate'
      ]);
			Route::get('User',[
				'uses' 	=> 'UserController@index',
				'as'	=> 'Admin.User.index'
			]);

		Route::resource('Aplication','AplicationController');
			Route::get('Aplication/{id}/delete',[
				'uses' 	=> 'AplicationController@delete',
				'as'	=> 'Admin.Aplication.delete'
			]);

		Route::resource('Table','TableController');
			Route::get('Table/{id}/delete',[
				'uses' 	=> 'TableController@delete',
				'as'	=> 'Admin.Table.delete'
			]);
			/*
			Route::get('Table/index',[
				'uses' 	=> 'TableController@index',
				'as'	=> 'Admin.Table.index'
			]);*/

		Route::resource('Option','OptionController');
			Route::get('Option/{id}/delete',[
				'uses' 	=> 'OptionController@delete',
				'as'	=> 'Admin.Option.delete'
			]);

		Route::resource('TypeField','TypeFieldController');
			Route::get('TypeField/{id}/delete',[
				'uses' 	=> 'TypeFieldController@delete',
				'as'	=> 'Admin.TypeField.delete'
			]);

		Route::resource('FieldTable','FieldTableController');
			Route::get('FieldTable/{id}/delete',[
				'uses' 	=> 'FieldTableController@delete',
				'as'	=> 'Admin.FieldTable.delete'
			]);
		Route::resource('FieldUser','FieldUserController');
			Route::get('FieldUser/{id}/delete',[
				'uses' 	=> 'FieldUserController@delete',
				'as'	=> 'Admin.FieldUser.delete'
			]);
			Route::get('FieldUser/{id}/EditApps',[
				'uses' 	=> 'FieldUserController@editApps',
				'as'	=> 'Admin.FieldUser.EditApps'
			]);
			Route::POST('FieldUser/updateAll',[
				'uses' 	=> 'FieldUserController@updateAll',
				'as'	=> 'Admin.FieldUser.UpdateAll'
			]);
			Route::POST('FieldUser/data',[
				'uses' 	=> 'FieldUserController@data',
				'as'	=> 'Admin.FieldUser.data'
			]);





	});




	Route::group(['middleware' => ['web','auth','creador'],'prefix' => 'Creador'],function(){


		Route::get('/',[
				'uses' 	=> 'CreadorController@index',
				'as'	=> 'Creador.index'
			]);
		Route::get('/{id_user}',[
				'uses' 	=> 'CreadorController@show',
				'as'	=> 'Creador.show'
			]);
		Route::get('/{FieldUser}/edit',[
				'uses' 	=> 'CreadorController@edit',
				'as'	=> 'Creador.edit'
			]);
		Route::put('/{user}',[
				'uses' 	=> 'CreadorController@update',
				'as'	=> 'Creador.update'
			]);
		Route::get('/{id}/EditApps',[
				'uses' 	=> 'CreadorController@editApps',
				'as'	=> 'Creador.EditApps'
			]);
		Route::POST('/updateAll',[
				'uses' 	=> 'CreadorController@updateAll',
				'as'	=> 'Creador.UpdateAll'
			]);

      Route::get('/{id}/editAll',[
        'uses' 	=> 'CreadorController@editAll',
        'as'	=> 'Creador.editAll'
      ]);

      Route::get('{id}/estilosEdit',[
        'uses' 	=> 'CreadorController@estilosEdit',
        'as'	=> 'Creador.estilosEdit'
      ]);
      Route::get('User/{id}/estilosCreate',[
        'uses' 	=> 'CreadorController@estilosCreate',
        'as'	=> 'Creador.estilosCreate'
      ]);
      Route::post('User/{id}/storeEstilosEdit',[
        'uses' 	=> 'CreadorController@storeEstilosEdit',
        'as'	=> 'Creador.storeEstilosEdit'
      ]);
      Route::post('User/{id}/storeEstilosCreate',[
        'uses' 	=> 'CreadorController@storeEstilosCreate',
        'as'	=> 'Creador.storeEstilosCreate'
      ]);
      Route::get('User/{id}/needEdit',[
        'uses' 	=> 'CreadorController@needEdit',
        'as'	=> 'Creador.needEdit'
      ]);
      Route::get('/{id}/needCreate',[
        'uses' 	=> 'CreadorController@needCreate',
        'as'	=> 'Creador.needCreate'
      ]);
      Route::post('/{id}/storeNeedEdit',[
        'uses' 	=> 'CreadorController@storeNeedEdit',
        'as'	=> 'Creador.storeNeedEdit'
      ]);
      Route::post('/{id}/storeNeedCreate',[
        'uses' 	=> 'CreadorController@storeNeedCreate',
        'as'	=> 'Creador.storeNeedCreate'
      ]);

		//Route::patch($uri, $callback);
		//Route::delete($uri, $callback);


	});


Route::group(['middleware' => ['web','auth','estudiante'],'prefix' => 'Estudiante' ],function(){

	Route::get('/', function () {
	    return redirect()->route('Public.searchOa');
	});

	Route::get('/index',[
				'uses' 	=> 'EstudianteController@index',
				'as'	=> 'Estudiante.index'
	]);

	Route::get('/listAplications',[
		'uses' 	=> 'EstudianteController@IndexAplication',
		'as'	=> 'Estudiante.listAplications'
	]);

	Route::get('/{id_user}',[
		'uses' 	=> 'EstudianteController@show',
		'as'	=> 'Estudiante.show'
	]);


	Route::get('/{FieldUser}/edit',[
		'uses' 	=> 'EstudianteController@edit',
		'as'	=> 'Estudiante.edit'
	]);
	Route::put('/{user}',[
		'uses' 	=> 'EstudianteController@update',
		'as'	=> 'Estudiante.update'
	]);
	Route::get('/{id}/EditApps',[
		'uses' 	=> 'EstudianteController@editApps',
		'as'	=> 'Estudiante.EditApps'
	]);
  Route::get('/{id}/editAll',[
    'uses' 	=> 'EstudianteController@editAll',
    'as'	=> 'Estudiante.editAll'
  ]);

	Route::POST('/updateAll',[
		'uses' 	=> 'EstudianteController@updateAll',
		'as'	=> 'Estudiante.UpdateAll'
	]);
  Route::get('{id}/estilosEdit',[
    'uses' 	=> 'EstudianteController@estilosEdit',
    'as'	=> 'Estudiante.estilosEdit'
  ]);
  Route::get('User/{id}/estilosCreate',[
    'uses' 	=> 'EstudianteController@estilosCreate',
    'as'	=> 'Estudiante.estilosCreate'
  ]);
  Route::post('User/{id}/storeEstilosEdit',[
    'uses' 	=> 'EstudianteController@storeEstilosEdit',
    'as'	=> 'Estudiante.storeEstilosEdit'
  ]);
  Route::post('User/storeEstilosCreate',[
    'uses' 	=> 'EstudianteController@storeEstilosCreate',
    'as'	=> 'Estudiante.storeEstilosCreate'
  ]);
  Route::get('User/{id}/needEdit',[
    'uses' 	=> 'EstudianteController@needEdit',
    'as'	=> 'Estudiante.needEdit'
  ]);
  Route::get('/{id}/needCreate',[
    'uses' 	=> 'EstudianteController@needCreate',
    'as'	=> 'Estudiante.needCreate'
  ]);
  Route::post('/{id}/storeNeedEdit',[
    'uses' 	=> 'EstudianteController@storeNeedEdit',
    'as'	=> 'Estudiante.storeNeedEdit'
  ]);
  Route::post('/{id}/storeNeedCreate',[
    'uses' 	=> 'EstudianteController@storeNeedCreate',
    'as'	=> 'Estudiante.storeNeedCreate'
  ]);



});

	Route::group(['middleware' => ['web'],'prefix' => 'Public' ],function(){

		Route::get('/',[
			'uses' 	=> 'PublicController@index',
			'as'	=> 'Public.index'
		]);

	//Formularios necesarios para el registro de usuarios

		// formulario para los estilos de aprendizaje.

		Route::get('/learning_style',[
			'uses' 	=> 'LearningStyleController@create',
			'as'	=> 'Public.learning_style'
		]);

		Route::post('/store_learning_style',[
				'uses' 	=> 'LearningStyleController@store',
				'as'	=> 'Public.store_learning_style'
			]);

		// formulario para la personalizacion de la interfaz de usuario.

		Route::get('/personalizacion',[
			'uses' 	=> 'PersonalizationController@create',
			'as'	=> 'Public.personalizacion'
		]);

		Route::post('/store_personalizacion',[
				'uses' 	=> 'PersonalizationController@store',
				'as'	=> 'Public.store_personalizacion'
			]);

		// formulario para la personalizacion de la interfaz de usuario.

		Route::get('/need',[
			'uses' 	=> 'NeedController@create',
			'as'	=> 'Public.need'
		]);

		Route::post('/store_need',[
				'uses' 	=> 'NeedController@store',
				'as'	=> 'Public.store_need'
			]);

		// formulario para el reguistro de usuario.

		Route::get('/register_user',[
			'uses' 	=> 'RegistrerContoller@create',
			'as'	=> 'Public.register_user'
		]);

		Route::post('/store_register_user',[
				'uses' 	=> 'RegistrerContoller@store',
				'as'	=> 'Public.store_need'
			]);

		Route::post('/store_create_user',[
				'uses' 	=> 'RegistrerContoller@createUser',
				'as'	=> 'Public.store_create_user'
			]);


	//fin de rutas necesarios para el registro de usuarios




		Route::get('/objectives',[
			'uses' 	=> 'PublicController@objectives',
			'as'	=> 'Public.objectives'
		]);

		Route::get('/advisers',[
			'uses' 	=> 'PublicController@advisers',
			'as'	=> 'Public.advisers'
		]);

		Route::get('/reporting',[
			'uses' 	=> 'PublicController@reporting',
			'as'	=> 'Public.reporting'
		]);

		Route::get('/publications',[
			'uses' 	=> 'PublicController@publications',
			'as'	=> 'Public.publications'
		]);

		Route::get('/others',[
			'uses' 	=> 'PublicController@others',
			'as'	=> 'Public.others'
		]);

		Route::get('/searchOa/{id_user?}',[
				'uses' 	=> 'PublicController@searchOa',
				'as'	=> 'Public.searchOa'
			]);

		Route::get('/listAplications',[
				'uses' 	=> 'PublicController@IndexAplication',
				'as'	=> 'Public.listAplications'
			]);

		Route::post('/store',[
				'uses' 	=> 'PublicController@store',
				'as'	=> 'Public.store'
			]);
		Route::get('/create',[
				'uses' 	=> 'PublicController@create',
				'as'	=> 'Public.create'
			]);
		Route::get('/{id_user}',[
				'uses' 	=> 'PublicController@show',
				'as'	=> 'Public.show'
			]);
		Route::post('/storeAll',[
				'uses' 	=> 'PublicController@storeAll',
				'as'	=> 'Public.storeAll'
			]);







	});



	Route::group(['middleware' => 'web'], function () {

	    Route::auth();

	    Route::get('/home', 'HomeController@index');


	});




	Route::group(['middleware' => 'web','prefix' => 'Lo'],function(){

		Route::post('/save_calification',[
			'uses' 	=> 'LoController@save_calification',
			'as'	=> 'Lo.save_calification'
		]);

		Route::post('/save_visited',[
			'uses' 	=> 'LoController@save_visited',
			'as'	=> 'Lo.save_visited'
		]);

		Route::post('/save_search',[
			'uses' 	=> 'LoController@save_search',
			'as'	=> 'Lo.save_search'
		]);

	});


	Route::group(['prefix' => 'RedirectRoute'],function(){

		Route::post('/session',[
			'uses' 	=> 'RedirectController@session',
			'as'	=> 'RedirectRoute.session'
		]);

		Route::post('/session_create',[
			'uses' 	=> 'RedirectController@session_create',
			'as'	=> 'RedirectRoute.session_create'
		]);

	});
