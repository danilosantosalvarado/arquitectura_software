insert into empleado value('1111111','Carlos','Perez','Cajero','300789456','CL68 65 67','carlosp@gmail.com','Positiva','Famisanar','Porvenir','abc123');
insert into empleado value('2222222','Juan','Cano','Cajero','300789456','CL68 65 67','juanc@gmail.com','Positiva','Cafan Salud','Porvenir','abc123');
insert into empleado value('3333333','Miguel','Castro','Administrador','300789456','CL68 65 67','miguelc@gmail.com','Positiva','Famisanar','Porvenir','abc123');



// ----------------------------------------------------------------
// ----------- Procedimiento almacenado --------
// ----------------------------------------------------------------

use proyectoejemplo;

delimiter //
create procedure palogin(in uname varchar(40), in upass varchar(8))
begin
	select * from empleado where correoEmpleado=uname and claveEmpleado=upass;
end
delimiter ;

CALL palogin('carlosp@gmail.com','abc123');
