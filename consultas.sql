-- CAMBIAR LA FECHA X LA INDICADA
SELECT count(*) as CANTIDAD_PEDIDOS_MES FROM `pedidos2` WHERE fecha BETWEEN "2022-11-1" AND "2022-11-31";

-- TODOS LOS PEDIDOS CON SU PRECIO X PRODUCTOS
-- SELECT *, (cantidad_prod*precio) as valor FROM pedidos2 JOIN puente ON puente.id_pedido = pedidos2.id JOIN catalogo ON puente.id_producto = catalogo.nro_producto WHERE fecha BETWEEN "2022-11-1" AND "2022-11-31";
-- LA SUMA DE LO COBRADO EN EL MES
SELECT SUM(cantidad_prod*precio) as valor FROM pedidos2 JOIN puente ON puente.id_pedido = pedidos2.id JOIN catalogo ON puente.id_producto = catalogo.nro_producto WHERE fecha BETWEEN "2022-11-1" AND "2022-11-31";

-- PROD MAS VENDIDO
SELECT *, max(SUMA) as TOTALVENDIDO FROM catalogo JOIN
    (SELECT *, sum(cantidad_prod) as SUMA FROM puente JOIN  
        (SELECT id FROM pedidos2 WHERE fecha BETWEEN "2022-11-1" AND "2022-11-31") A
    ON A.id = puente.id_pedido
    GROUP BY id_producto) B
ON B.id_producto = catalogo.nro_producto;

-- CANTIDAD DE UNIDADES VENDIDAS
SELECT SUM(cantidad_prod) as unidades_totales_mes FROM pedidos2 JOIN puente ON puente.id_pedido = pedidos2.id WHERE fecha BETWEEN "2022-11-1" AND "2022-11-31";


