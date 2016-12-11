/**
 * Created by magir on 3/04/2016.
 */

function UserProfile(){

    var existe_perfil_usuario;

    var idioma;
    var nivel_escolaridad;

    //Estilo de aprendizaje
    var id_estilo_aprendizaje;
    var estilo_aprendizaje;
    var ls_vark;
    var ls_dicotomia;
    var ls_visual;
    var ls_kinestesico;
    var ls_auditivo;
    var ls_lector;
    var ls_global;
    var ls_secuencial;

    //Need
    var need;       //Presenta alguna need

    var need_visual;
    var need_v1;    //Visión nula
    var need_v2;    //Vision baja

    var need_auditiva;
    var need_a1;    //
    var need_a2;    //
    var need_a3;    //

    var need_motriz;
    var need_m1;    //Manipula teclado
    var need_m2;    //Manipula mouse
    var need_m3;    //Manipula tecnologías asistivas

    var need_cognitiva;
    var need_c1;    //Dificultad comprender textos
    var need_c2;    //Dificultad seguir instrucciones
    var need_c3;    //Dificultad concentración

    var need_etnica;
    var need_e1;    //Étnia a la que pertenece

}

function varificarLs(userProfile){

    switch(userProfile.id_estilo_aprendizaje) {
        case '1':
            userProfile.estilo_aprendizaje = 'No definido';
            userProfile.ls_vark = '';
            userProfile.ls_dicotomia = '';
            break;
        case '2':
            userProfile.estilo_aprendizaje = 'Auditivo-Global';
            userProfile.ls_vark = 'A';
            userProfile.ls_dicotomia = 'G';
            break;
        case '3':
            userProfile.estilo_aprendizaje = 'Auditivo-Secuencial';
            userProfile.ls_vark = 'A';
            userProfile.ls_dicotomia = 'S';
            break;
        case '4':
            userProfile.estilo_aprendizaje = 'Kinestesico-Global';
            userProfile.ls_vark = 'K';
            userProfile.ls_dicotomia = 'G';
            break;
        case '5':
            userProfile.estilo_aprendizaje = 'Kinestesico-Secuencial';
            userProfile.ls_vark = 'K';
            userProfile.ls_dicotomia = 'S';
            break;
        case '6':
            userProfile.estilo_aprendizaje = 'Lector-Global';
            userProfile.ls_vark = 'L';
            userProfile.ls_dicotomia = 'G';
            break;
        case '7':
            userProfile.estilo_aprendizaje = 'Lector-Secuencial';
            userProfile.ls_vark = 'L';
            userProfile.ls_dicotomia = 'S';
            break;
        case '8':
            userProfile.estilo_aprendizaje = 'Visual-Global';
            userProfile.ls_vark = 'V';
            userProfile.ls_dicotomia = 'G';
            break;
        case '9':
            userProfile.estilo_aprendizaje = 'Visual-Secuencial';
            userProfile.ls_vark = 'V';
            userProfile.ls_dicotomia = 'S';

    }

    return userProfile;
}