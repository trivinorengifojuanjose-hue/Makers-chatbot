<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard de Inventario - Tecnología</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap');

    body {
      font-family: 'Orbitron', sans-serif;
      margin: 0;
      background: #0f111a;
      color: #cfd8dc;
    }
    header {
      background: linear-gradient(90deg, #0d47a1, #1976d2);
      color: #e3f2fd;
      padding: 1.5rem 2rem;
      text-align: center;
      box-shadow: 0 4px 10px rgba(25, 118, 210, 0.7);
      letter-spacing: 2px;
      text-transform: uppercase;
      font-size: 1.8rem;
    }
    .container {
      max-width: 1200px;
      margin: 2rem auto;
      padding: 0 1rem;
    }
    .indicators {
      display: flex;
      justify-content: space-around;
      margin-bottom: 2.5rem;
      gap: 1rem;
      flex-wrap: wrap;
    }
    .indicator {
      background: #1c2331;
      padding: 2rem 2.5rem;
      border-radius: 12px;
      box-shadow: 0 0 15px #1976d2;
      flex: 1 1 250px;
      text-align: center;
      transition: box-shadow 0.3s ease;
      cursor: default;
    }
    .indicator:hover {
      box-shadow: 0 0 25px #42a5f5;
    }
    .indicator h2 {
      font-size: 3rem;
      margin: 0;
      color: #42a5f5;
      text-shadow: 0 0 8px #42a5f5;
    }
    .indicator p {
      margin: 0.7rem 0 0;
      font-weight: 600;
      color: #90caf9;
      letter-spacing: 1px;
    }
    .charts {
      display: flex;
      justify-content: space-around;
      gap: 2rem;
      flex-wrap: wrap;
    }
    .chart {
      background: #1c2331;
      padding: 1.5rem 1.8rem;
      border-radius: 12px;
      box-shadow: 0 0 15px #1976d2;
      flex: 1 1 45%;
      min-width: 320px;
      color: #cfd8dc;
    }
    .chart h3 {
      margin-top: 0;
      margin-bottom: 1rem;
      font-weight: 700;
      color: #42a5f5;
      text-shadow: 0 0 6px #42a5f5;
      letter-spacing: 1.2px;
    }
    canvas {
      max-width: 100%;
      height: 320px;
    }
  </style>
</head>
<body>
  <header>
    Dashboard de Inventario - Tecnología
  </header>
  <div class="container">
    <section class="indicators">
      <div class="indicator">
        <h2 id="total-products">1500</h2>
        <p>Total de productos</p>
      </div>
      <div class="indicator">
        <h2 id="out-of-stock">120</h2>
        <p>Productos agotados</p>
      </div>
      <div class="indicator">
        <h2 id="in-stock">1380</h2>
        <p>Productos en stock</p>
      </div>
    </section>
    <section class="charts">
      <div class="chart">
        <h3>Cantidad por Categoría</h3>
        <canvas id="barChart"></canvas>
      </div>
      <div class="chart">
        <h3>Estado de Productos</h3>
        <canvas id="pieChart"></canvas>
      </div>
    </section>
  </div>

  <!-- Librería Chart.js para gráficas -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    // Datos simulados con categorías tecnológicas
    const categories = ['Hardware', 'Software', 'Redes', 'IoT', 'AI'];
    const quantities = [450, 350, 300, 200, 200];

    const ctxBar = document.getElementById('barChart').getContext('2d');
    const barChart = new Chart(ctxBar, {
      type: 'bar',
      data: {
        labels: categories,
        datasets: [{
          label: 'Cantidad',
          data: quantities,
          backgroundColor: 'rgba(66, 165, 245, 0.8)',
          borderColor: 'rgba(66, 165, 245, 1)',
          borderWidth: 1,
          borderRadius: 6
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
            ticks: { stepSize: 50 },
            grid: {
              color: '#37474f'
            }
          },
          x: {
            grid: {
              color: '#37474f'
            }
          }
        },
        plugins: {
          legend: { display: false },
          tooltip: {
            backgroundColor: '#263238',
            titleColor: '#42a5f5',
            bodyColor: '#cfd8dc'
          }
        }
      }
    });

    const ctxPie = document.getElementById('pieChart').getContext('2d');
    const pieChart = new Chart(ctxPie, {
      type: 'doughnut',
      data: {
        labels: ['En stock', 'Agotados'],
        datasets: [{
          data: [1380, 120],
          backgroundColor: ['#42a5f5', '#ef5350'],
          hoverOffset: 30
        }]
      },
      options: {
        cutout: '70%',
        plugins: {
          legend: {
            position: 'bottom',
            labels: {
              color: '#cfd8dc',
              font: { weight: 'bold' }
            }
          },
          tooltip: {
            backgroundColor: '#263238',
            titleColor: '#42a5f5',
            bodyColor: '#cfd8dc'
          }
        }
      }
    });
  </script>
</body>
</html>