<?php 
try{
    throw new Exception("Error en la aplicación");  
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "Finalizando";
}