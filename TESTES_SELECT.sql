SELECT * FROM usuarios;
TRUNCATE TABLE usuarios;
SELECT DISTINCT COUNT(Usuario) 
FROM usuarios;
SELECT count(Id), Usuario 
FROM usuarios
GROUP BY Usuario;

