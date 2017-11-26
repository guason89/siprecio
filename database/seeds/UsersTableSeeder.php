<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$nombres =  array("Juan Perez", "Ricardo Sosa", "Maria Bernal", "Jose Peña","Juan Manuel","Jaime Isalco","Pilar Arevalo","Josefina Delgado","Marta Luz","Gustavo Fernandez","Ricarda Ricarda","Sergio Guillen");

    	$emails =  array("Juan@mail.com", "Ricardo@mail.com", "Maria@mail.com", "Jose@mail.com","Manuel@mail.com","Isalco@mail.com","Arevalo@mail.com","Delgado@mail.com","Luz@mail.com","Fernandez@mail.com","Ricarda@mail.com","Guillen@mail.com");

    	$observaciones = array("Excelente Aplicación", "Me ayudo mucho a asignarle precio a mi aplicación", "Solo es un estimado", "No me sirvió","Vendi mi aplicación en un valor similar al que me mostró","Bien Bien","genial test, muy acertado","El que hizo este sitio es un genio","Pruebenlo ustedes diran","Excelente recomiendo el sitio","ahhahahahahahah","No funciona");

    	$calificaciones = array(4, 4, 2, 1,4,3,4,4,3,4,2,1);

        for($i=0;$i<12;$i++)
        {
        	$usuario = new User();
        	$usuario->name= $nombres[$i];
        	$usuario->email = $emails[$i];
        	$usuario->password=bcrypt(123456);
        	$usuario->observacion = $observaciones[$i];
        	$usuario->calificacion=$calificaciones[$i];
        	$usuario->imagen = "assets/img/avatar/avatar-".$i.".jpg";
        	$usuario->save();
        }

        /*insertar usuario admin*/
        $usuario = new User();
        $usuario->name= "Administrador del sitema";
        $usuario->email = "admin@mail.com";
        $usuario->password=bcrypt(123456);
        $usuario->type='admin';     
        $usuario->save();
    }
}
