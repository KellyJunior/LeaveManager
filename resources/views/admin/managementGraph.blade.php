@extends('admin.footer')



@section('pageContent')
<script>
    window.onload = function() {

    var chart = new CanvasJS.Chart("chartContainer", {
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        exportEnabled: true,
        animationEnabled: true,
        title: {
            text: "Graphical Details about Management development Department"
        },
        data: [{
            type: "pie",
            startAngle: 25,
            toolTipContent: "<b>{label}</b>: {y}%",
            showInLegend: "true",
            legendText: "{label}",
            indexLabelFontSize: 16,
            indexLabel: "{label} - {y}%",
            dataPoints: [
                { y:{{$managMen}}, label: "Men" },

                { y: {{$managWomen}}, label: "Women" },
                { y: 10.62, label: "Requested Leave" },
                { y: 5.02, label: "Leave on hold" },
                { y: 4.07, label: "Accepted Leave" },
                { y: 1.22, label: "Refused Leave" },
                { y: 0.44, label: "Over enterprise Employees" }
            ]
        }]
    });
    chart.render();

    }
    </script>


<!-- Charts Start-->
<div class="charts-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="charts-single-pro mg-t-30">
                    <div class="alert-title">
                        <h2>Radar Chart</h2>
                        <p>A bar chart provides a way of showing data values. It is sometimes used to show trend data. we create a bar chart for a single dataset and render that in our page.</p>
                    </div>
                    <div id="radar-chart">
                        <canvas id="radarchart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="charts-single-pro mg-t-30">
                    <div class="alert-title">
                        <h2>Doughnut Chart</h2>
                        <p>A bar chart provides a way of showing data values. It is sometimes used to show trend data. we create a bar chart for a single dataset and render that in our page.</p>
                    </div>
                    <div id="doughnut-chart">
                        <canvas id="Doughnutchart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Charts End-->



@endsection
