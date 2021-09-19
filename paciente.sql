create DATABASE cadastro_paciente;

use cadastro_paciente;



create table tbl_paciente(

	id_paciente INT(5) not null primary KEY AUTO_INCREMENT,

	nome varchar(45),

	rua varchar(45),

	logradouro varchar(45),

	num int(5),

	complemento varchar(45),

	bairro varchar(45),

	cep int(11),

	email varchar(45),

	tl_fixo int(8),

	cel int(9),

	tl_sec int(8),

	assist char (1),

	a_data date

);