<style type="text/css">
  .title-label{
    color: black;
    background-color: #dee2e6;
    padding: 10px 30px 10px 30px;
  }

  .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: transparent;
    background-clip: border-box;
    border: 1px solid black;
    border-radius: 0px;
    width: 300px;
    height: 250px;
  }
</style>

<div class="container-fluid mt--7">
  <div class="row">
    <div class="col-12">
      <h2 style="color: white">&nbsp;&nbsp;&nbsp;&nbsp;TRACKING</h2>
      <h2 style="color: white">CHANNELS ID : 1111</h2>
      <br>
    </div>
  </div>

  <div class="row" style="text-align: -webkit-center;">
    <div class="col-3">
    </div>
    <div class="col-6">
      <div class="card card-stats mb-4 mb-xl-0">
        <div class="card-body">
          <div class="row">
            <div class="col">

            </div>
            <div class="col-auto">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-3">
    </div>
  </div>
  <br>


  <div class="row"  style="text-align: -webkit-center;">
    <div class="col-4">
      <label class="title-label">Temperature</label>
      <div class="card card-stats mb-4 mb-xl-0">
        <div class="card-body">
          <div class="row">
            <div class="col">
            </div>
            <div class="col-auto">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-4">
      <label class="title-label">Humidity</label>
      <div class="card card-stats mb-4 mb-xl-0">
        <div class="card-body">
          <div class="row">
            <div class="col">
            </div>
            <div class="col-auto">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-4">
      <label class="title-label">Altitude</label>
      <div class="card card-stats mb-4 mb-xl-0">
        <div class="card-body">
          <div class="row">
            <div class="col">
            </div>
            <div class="col-auto">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>

  <div class="row" style="text-align: -webkit-center;">
    <div class="col-3">
    </div>
    <div class="col-6">
      <label class="title-label">Temperature Result Card</label>
      <div class="card card-stats mb-4 mb-xl-0">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <canvas id="a" width="100" height="100"></canvas>
            </div>
            <div class="col-auto">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-3">
    </div>
  </div>
  <br>

  <div class="row" style="text-align: -webkit-center;">
    <div class="col-3">
    </div>
    <div class="col-6">
      <label class="title-label">Humidity Result Card</label>
      <div class="card card-stats mb-4 mb-xl-0">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <canvas id="b" width="100" height="100"></canvas>
            </div>
            <div class="col-auto">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-3">
    </div>
  </div>
  <br>

  <div class="row" style="text-align: -webkit-center;">
    <div class="col-3">
    </div>
    <div class="col-6">
      <label class="title-label">Altitude Result Card</label>
      <div class="card card-stats mb-4 mb-xl-0">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <canvas id="c" width="100" height="100"></canvas>
            </div>
            <div class="col-auto">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-3">
    </div>
  </div>
  <br>



  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
  <script>
    var ctx = document.getElementById('a');
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>

  <script>
    var ctx = document.getElementById('b');
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>

  <script>
    var ctx = document.getElementById('c');
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>
