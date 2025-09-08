<?php
// Conectando a la base de datos
$conn = mysqli_connect("localhost", "root", "", "chatbot") or die("Database Error");

// Obteniendo el mensaje del usuario a través de ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);
$getMesg_lower = strtolower($getMesg);

// Verificamos si el usuario quiere consultar el inventario
if (strpos($getMesg_lower, 'inventario') !== false) {
    // Consulta dinámica para obtener todo el inventario
    $query = "SELECT producto, cantidad, descripcion FROM inventario";
    $result = mysqli_query($conn, $query) or die("Error al consultar inventario");

    if (mysqli_num_rows($result) > 0) {
        $response = "Inventario actual:\n";
        while ($row = mysqli_fetch_assoc($result)) {
            $response .= "- " . $row['producto'] . ": " . $row['cantidad'] . " unidades. " . $row['descripcion'] . "\n";
        }
        echo nl2br($response);
    } else {
        echo "El inventario está vacío.";
    }
} else {
    // Buscar respuesta fija en la tabla chatbot usando LIKE para coincidencias parciales
    $check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
    $run_query = mysqli_query($conn, $check_data) or die("Error en la consulta");

    if (mysqli_num_rows($run_query) > 0) {
        $fetch_data = mysqli_fetch_assoc($run_query);
        $replay = $fetch_data['replies'];
        echo nl2br($replay);
    } else {
        echo "¡Lo siento, no puedo ayudarte con este inconveniente!";
    }
}
?>