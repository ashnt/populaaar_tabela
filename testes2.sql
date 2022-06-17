select count(Id), Usuario
from usuarios
group by Usuario;

truncate table usuarios;

select * from usuarios
order by Id desc;