-- verificando se não houve repetições de registros --

select count(Id), Usuario
from usuarios
group by Usuario;


-- verificando o ultimo id inserido --
select * from usuarios
order by Id desc;
