
@extends('MasterPage')
@section('content')

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.load('current', {'packages':['gauge']});
      google.charts.load('upcoming', {'packages': ['vegachart']}).then(ville);
      google.charts.setOnLoadCallback(Sex);
      google.charts.setOnLoadCallback(situation_familliale);
      google.charts.setOnLoadCallback(departement);


        function Sex()
        {

          var data = google.visualization.arrayToDataTable([
            ['Salarie', 'Genre'],
            ['Homme',   <?php echo $salaries_Hommes; ?>],
            ['Femme',   <?php echo $salaries_Femmes; ?> ],
          ]);

          var options = {   title: 'Effectif par Genre',is3D: true, };
          var chart = new google.visualization.PieChart(document.getElementById('Genre'));
          chart.draw(data, options);
        }

        function situation_familliale()
        {

          var data = google.visualization.arrayToDataTable([
            ['situation_familliale', 'nbre'],
            ['marie',   <?php echo $marie; ?>],
            ['célibataire',   <?php echo $célibataire; ?> ],
          ]);

          var options = {   title: 'situation_familliale', pieHole: 0.4, };
          var chart = new google.visualization.PieChart(document.getElementById('situation_familliale'));
          chart.draw(data, options);
        }

        function departement() {

            var data = google.visualization.arrayToDataTable([
            ['Label', 'Value'],
            ['Déveleppement', <?php echo $déveleppement; ?>],
            ['Conception', <?php echo $conception; ?>],
            ['RH', <?php echo $RH; ?>]
            ]);

            var options = {
            width: 600, height: 200,
            redFrom: 90, redTo: 100,
            yellowFrom:75, yellowTo: 90,
            greenFrom:50, greenTo: 75,
            minorTicks: 5
            };

            var chart = new google.visualization.Gauge(document.getElementById('departement'));

            chart.draw(data, options);
        }


        function ville() {
        const dataTable = new google.visualization.DataTable();
        dataTable.addColumn({type: 'string', 'id': 'category'});
        dataTable.addColumn({type: 'number', 'id': 'amount'});
        dataTable.addRows([
          <?php echo $salariea_par_villes ?>
        ]);

        const options = {
          "vega": {
            "$schema": "https://vega.github.io/schema/vega/v4.json",
            "width": 500,
            "height": 200,
            "padding": 5,

            'data': [{'name': 'table', 'source': 'datatable'}],

            "signals": [
              {
                "name": "tooltip",
                "value": {},
                "on": [
                  {"events": "rect:mouseover", "update": "datum"},
                  {"events": "rect:mouseout",  "update": "{}"}
                ]
              }
            ],

            "scales": [
              {
                "name": "xscale",
                "type": "band",
                "domain": {"data": "table", "field": "category"},
                "range": "width",
                "padding": 0.05,
                "round": true
              },
              {
                "name": "yscale",
                "domain": {"data": "table", "field": "amount"},
                "nice": true,
                "range": "height"
              }
            ],

            "axes": [
              { "orient": "bottom", "scale": "xscale" },
              { "orient": "left", "scale": "yscale" }
            ],

            "marks": [
              {
                "type": "rect",
                "from": {"data":"table"},
                "encode": {
                  "enter": {
                    "x": {"scale": "xscale", "field": "category"},
                    "width": {"scale": "xscale", "band": 1},
                    "y": {"scale": "yscale", "field": "amount"},
                    "y2": {"scale": "yscale", "value": 0}
                  },
                  "update": {
                    "fill": {"value": "steelblue"}
                  },
                  "hover": {
                    "fill": {"value": "red"}
                  }
                }
              },
              {
                "type": "text",
                "encode": {
                  "enter": {
                    "align": {"value": "center"},
                    "baseline": {"value": "bottom"},
                    "fill": {"value": "#333"}
                  },
                  "update": {
                    "x": {"scale": "xscale", "signal": "tooltip.category", "band": 0.5},
                    "y": {"scale": "yscale", "signal": "tooltip.amount", "offset": -2},
                    "text": {"signal": "tooltip.amount"},
                    "fillOpacity": [
                      {"test": "datum === tooltip", "value": 0},
                      {"value": 1}
                    ]
                  }
                }
              }
            ]
          }
        };

        const chart = new google.visualization.VegaChart(document.getElementById('ville'));
        chart.draw(dataTable, options);
      }
    </script>
  </head>



  <body>
    <div class="row">
        <div class="col-6" id="Genre" ></div>
        <div class="col-6" id="situation_familliale"></div>
        <div class="col-12" id="departement"> </div>
    </div>
    <div class="dep">departements par effectif </div>
    <div id="ville" style="width: 600px; height: 250px;"></div>
    <div class="dep2">salaries par villes </div>

  </body>
</html>


<style>
#departement
{
    margin-left: 200px;
    margin-top: 15px;
    margin-bottom: 0px;
    padding-bottom: 0px;
    width: 700px;
    border-radius: 10px;
    height: 250px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.dep
{
    text-align: center;
    color: yellow;
    text-shadow: 0px 0px 10px black, 0 0 5px #0000FF;
    // color: yellow;
    // text-shadow: -3px 0 black, 0 3px black, 3px 0 black, 0 -3px black?;
    font-size: 30px;
    font-weight: bold;
    float: left;
    margin-left: 478px;
    margin-top: -60px;
}
.dep2
{

    // color: yellow;
    // text-shadow: 0px 0px 2px white, 0 0 5px #0000FF;
    color: yellow;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black?;
    font-size: 30px;
    font-weight: bold;

    margin-left: 400px;
    margin-top: -50px;
    margin-left:270px;
    margin-bottom:20px;
}
img{
    width: 40px;
    height: 40px;
    margin-top: -23px;
}

#ville
{
    background-color: rgb(216, 212, 206);
    // margin: 50px ;
    margin-left: 100px;
    margin-top:30px;
    margin-bottom:50px;
    border-radius: 5px;
    // box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

</style>




@endsection

