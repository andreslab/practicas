<?php 
//previsualización de los datos de las tablas
define("CARRERA_VIEW","SELECT * FROM carrera");
define("DOCENTE_TUTOR_VIEW","SELECT * FROM docente_tutor");
define("EMPRESA_VIEW","SELECT * FROM empresa");
define("ESTUDIANTE_VIEW","SELECT * FROM estudiante");
define("FACULTAD_VIEW","SELECT * FROM facultad");
define("MATERIA_VIEW","SELECT * FROM materia");
define("SEMESTRE_VIEW","SELECT * FROM semestre");
define("USUARIO_VIEW","SELECT * FROM usuario");

define("CARRERA_INFO","SELECT * FROM carrera WHERE codigo_carrera=");
define("DOCENTE_TUTOR_INFO","SELECT * FROM docente_tutor WHERE codigo_docente=");
define("EMPRESA_INFO","SELECT * FROM empresa WHERE codigo_empresa=");
define("ESTUDIANTE_INFO","SELECT * FROM estudiante WHERE codigo_estudiante=");
define("FACULTAD_INFO","SELECT * FROM facultad WHERE codigo_facultad=");
define("MATERIA_INFO","SELECT * FROM materia WHERE codigo_materia=");
define("SEMESTRE_INFO","SELECT * FROM semestre WHERE codigo_semestre=");
define("USUARIO_INFO","SELECT * FROM usuario WHERE codigo_usuario=");

//Añadir registros a las tablas
define("CARRERA_ADD","INSERT INTO carrera VALUES (?,?)");
define("DOCENTE_TUTOR_ADD","INSERT INTO docente_tutor VALUES (?,?,?,?)");
define("EMPRESA_ADD","INSERT INTO empresa VALUES (?,?,?,?,?,?,?,?)");
define("ESTUDIANTE_ADD","INSERT INTO estudiante VALUES (?,?,?,?)");
define("FACULTAD_ADD","INSERT INTO facultad VALUES (?,?,?,?,?,?)");
define("MATERIA_ADD","INSERT INTO materia VALUES (?,?,?,?)");
define("SEMESTRE_ADD","INSERT INTO semestre VALUES (?,?,?,?)");
define("USUARIO_ADD","INSERT INTO usuario VALUES (?,?,?)");





//Actualizar registros a las tablas
class updateData{
	static public function CARRERA_UP($locate, $nombre_carrera){
		return "UPDATE carrera SET nombre_carrera='".$nombre_carrera."' WHERE codigo_carrera='".$locate."'"; 
	} 
	static public function DOCENTE_TUTOR_UP($locate, $nombre_docente, $apellido_docente, $email_docente){
		return "UPDATE carrera SET 
		nombre_docente='".$nombre_docente."', 
		apellido_docente='".$apellido_docente."', 
		email_docente='".$email_docente."' 
		WHERE codigo_docente='".$locate."'"; 
	}
	static public function EMPRESA_UP($locate, $nombre_empresa, $representante_empresa, $cedula_representante, $tipo_empresa, $direccion_empresa, $telefono_empresa, $web_empresa){
		return "UPDATE empresa SET 
		nombre_empresa='".$nombre_empresa."', 
		representante_empresa='".$representante_empresa."', 
		cedula_representante='".$cedula_representante."',
		tipo_empresa='".$tipo_empresa."', 
		direccion_empresa='".$direccion_empresa."', 
		telefono_empresa='".$telefono_empresa."',
		web_empresa='".$web_empresa."'  
		WHERE codigo_empresa='".$locate."'"; 
	}  
	static public function ESTUDIANTE_UP($locate, $nombre_estudiante, $apellido_estudiante, $cedula_estudiante){
		return "UPDATE estudiante SET 
		nombre_estudiante='".$nombre_estudiante."', 
		apellido_estudiante='".$apellido_estudiante."', 
		cedula_estudiante='".$cedula_estudiante."', 
		WHERE codigo_docente='".$locate."'"; 
	}
	static public function FACULTAD_UP($locate, $nombre_facultad, $direciion_facultad, $telefono_facultad, $email_facultad, $web_facultad){
		return "UPDATE facultad SET 
		nombre_facultad='".$nombre_facultad."', 
		direciion_facultad='".$direciion_facultad."', 
		telefono_facultad='".$telefono_facultad."' ,
		email_facultad='".$email_facultad."', 
		web_facultad='".$web_facultad."' 
		WHERE codigo_facultad='".$locate."'"; 
	}
	static public function MATERIA_UP($locate, $nombre_materia, $curso_materia, $hora_materia){
		return "UPDATE materia SET 
		nombre_materia='".$nombre_materia."', 
		curso_materia='".$curso_materia."', 
		hora_materia='".$hora_materia."' 
		WHERE codigo_materia='".$locate."'"; 
	}
	static public function SEMESTRE_UP($locate, $nombre_semestre, $inicio_semestre, $final_semestre){
		return "UPDATE semestre SET 
		nombre_semestre='".$nombre_semestre."', 
		inicio_semestre='".$inicio_semestre."', 
		final_semestre='".$final_semestre."' 
		WHERE codigo_semestre='".$locate."'"; 
	}
	static public function USUARIO_UP($locate, $nombre_usuario, $pass_usuario){
		return "UPDATE usuario SET 
		nombre_usuario='".$nombre_usuario."', 
		pass_usuario='".$pass_usuario."'
		WHERE codigo_usuario='".$locate."'"; 
	}
}



//Delete registros a las tablas
define("CARRERA_DE","DELETE FROM carrera WHERE codigo_carrera=");
define("DOCENTE_TUTOR_DE","DELETE FROM docente_tutor WHERE codigo_docente=");
define("EMPRESA_DE","DELETE FROM empresa WHERE codigo_empresa=");
define("ESTUDIANTE_DE","DELETE FROM estudiante WHERE codigo_estudiante=");
define("FACULTAD_DE","DELETE FROM facultad WHERE codigo_facultad=");
define("MATERIA_DE","DELETE FROM materia WHERE codigo_materia=");
define("SEMESTRE_DE","DELETE FROM semestre WHERE codigo_semestre=");
define("USUARIO_DE","DELETE FROM usuario WHERE codigo_usuario=");

 ?>