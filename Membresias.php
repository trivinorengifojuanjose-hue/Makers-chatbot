<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="membresias.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <script src="https://www.paypal.com/sdk/js?client-id=AcVq5P8Wmo7GsOIqvu0vUagF8ryn5_-sll9Cmwbc-ZUnlG8j_aGqU4lsKHR7yXpjzxI2AFsnPvP98ml4&currency=USD"></script>
</head>

<body>
  <img src="logo aplicacion.png" alt="Logo de Modistería" style="width:150px;height:200px;position: fixed;top:20px;left:20px;z-index:9999999">
      
  <div class="wrapper">
    <input type="radio" name="slider" id="tab-1">
    <input type="radio" name="slider" id="tab-2" checked>
    <input type="radio" name="slider" id="tab-3">
    <header>
      <label for="tab-1" class="tab-1">1 mes</label>
      <label for="tab-2" class="tab-2">6 meses</label>
      <label for="tab-3" class="tab-3">1 año</label>
      <div class="slider"></div>
    </header>
    <div class="card-area">
      <div class="cards">
        <div class="row row-1">
          <div class="price-details">
            <span class="price">20000</span>
            <p>Crea el perfil de tu modisteria adquierela ya</p>
          </div>
          <ul class="features">
            <li><i class="fas fa-check"></i><span>Agendar citas a tu local</span></li>
            <li><i class="fas fa-check"></i><span>Visualizacion del local</span></li>
            <li><i class="fas fa-check"></i><span>Los Usuarios podran calificar tu local</span></li>
            <li><i class="fas fa-check"></i><span>Podas crear un perfil a tu local de modisteria</span></li>
          </ul>
        </div>
        <div class="row">
          <div class="price-details">
            <span class="price">80000</span>
            <p>Crea el perfil de tu modisteria adquierela ya</p>
          </div>
          <ul class="features">
            <li><i class="fas fa-check"></i><span>Agendar citas a tu local</span></li>
            <li><i class="fas fa-check"></i><span>Visualizacion del local</span></li>
            <li><i class="fas fa-check"></i><span>Los Usuarios podran calificar tu local</span></li>
            <li><i class="fas fa-check"></i><span>Podas crear un perfil a tu local de modisteria</span></li>
          </ul>
        </div>
        <div class="row">
          <div class="price-details">
            <span class="price">200000</span>
            <p>Crea el perfil de tu modisteria adquierela ya</p>
          </div>
          <ul class="features">
            <li><i class="fas fa-check"></i><span>Agendar citas a tu local</span></li>
            <li><i class="fas fa-check"></i><span>Visualizacion del local</span></li>
            <li><i class="fas fa-check"></i><span>Los Usuarios podran calificar tu local</span></li>
            <li><i class="fas fa-check"></i><span>Podas crear un perfil a tu local de modisteria</span></li>
          </ul>
        </div>
      </div>
    </div>
    <a href="pagos.html">
     
      <div id="paypal-buttons-container"></div>
  </a>
  
  </div>
  <a href="crear cuenta.php" id="atras-btn">atras</a>

  <script>
    paypal.Buttons().render('#paypal-buttons-container');
  </script>
  <style>   
  
  
  
  #atras-btn {
          position: fixed;
          bottom: 20px;
          right: 50px;
          background-color: coral;
          color: white;
          border: none;
          border-radius: 5px;
          padding: 10px 20px;
          font-size: 18px;
          cursor: pointer;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }  #atras-btn:hover {
          background-color: #ff8c00;

        }
        body{
  margin: 0;
      padding: 0;
      background-image: url('membresias.jpg'); 
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
}

    body {
      margin: 0;
      padding: 0;
      background-image: url('membresias.jpg'); 
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    /* Resto de tu estilo CSS aquí */</style>

  
</body>
</html>