@extends('student-main.layouts.default')
@section('content')


<div class="container-fluid p-2">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="panel">
                            <div class="panel-body">
                                <h3>My Exam Stats</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td><strong>Total Exam Given : </strong><strong class="text-success">12</strong></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Absent Exams : </strong><strong class="text-danger">0</strong></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Best Score in : </strong><strong class="text-success">FON QUIZ 1 (bed sore)</strong></td>
                                            </tr>
                                            <tr>
                                                <td><strong>On : </strong><strong class="text-info">01-02-2025 04:50 PM</strong></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Failed in : </strong><strong class="text-danger">12Exam</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Average Percentage : </strong><strong class="text-info">1.24%</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Your Rank : </strong><strong class="text-info">3003</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="panel">
                            <div class="panel-body">
                                <h3>Month Wise Performance</h3>
                                <div class="chart">
                                    <div id="mywrapperdl" data-highcharts-chart="0">
                                        <div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 658px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Signika, serif; background: url(&quot;/app/webroot/img/sand.png&quot;);"><svg version="1.1" style="font-family:Signika, serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="658" height="400">
                                                <desc>Created with Highcharts 4.1.8-modified</desc>
                                                <defs>
                                                    <clipPath id="highcharts-1">
                                                        <rect x="0" y="0" width="582" height="316"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g class="highcharts-grid" zIndex="1"></g>
                                                <g class="highcharts-grid" zIndex="1">
                                                    <path fill="none" d="M 66 326.5 L 648 326.5" stroke="#D8D8D8" stroke-width="1" zIndex="1" opacity="1"></path>
                                                    <path fill="none" d="M 66 9.5 L 648 9.5" stroke="#D8D8D8" stroke-width="1" zIndex="1" opacity="1"></path>
                                                    <path fill="none" d="M 66 247.5 L 648 247.5" stroke="#D8D8D8" stroke-width="1" zIndex="1" opacity="1"></path>
                                                    <path fill="none" d="M 66 168.5 L 648 168.5" stroke="#D8D8D8" stroke-width="1" zIndex="1" opacity="1"></path>
                                                    <path fill="none" d="M 66 89.5 L 648 89.5" stroke="#D8D8D8" stroke-width="1" zIndex="1" opacity="1"></path>
                                                </g>
                                                <g class="highcharts-axis" zIndex="2">
                                                    <path fill="none" d="M 148.5 326 L 148.5 336" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                                                    <path fill="none" d="M 231.5 326 L 231.5 336" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                                                    <path fill="none" d="M 314.5 326 L 314.5 336" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                                                    <path fill="none" d="M 398.5 326 L 398.5 336" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                                                    <path fill="none" d="M 481.5 326 L 481.5 336" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                                                    <path fill="none" d="M 564.5 326 L 564.5 336" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                                                    <path fill="none" d="M 648.5 326 L 648.5 336" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                                                    <path fill="none" d="M 65.5 326 L 65.5 336" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                                                    <path fill="none" d="M 66 326.5 L 648 326.5" stroke="#C0D0E0" stroke-width="1" zIndex="7" visibility="visible"></path>
                                                </g>
                                                <g class="highcharts-axis" zIndex="2"><text x="24" zIndex="7" text-anchor="middle" transform="translate(0,0) rotate(270 24 168)" class=" highcharts-yaxis-title" style="color:#707070;fill:#707070;" visibility="visible" y="168">Percentage</text></g>
                                                <g class="highcharts-series-group" zIndex="3">
                                                    <path fill="rgba(244,91,91,0.25)" d="M 0 0"></path>
                                                    <g class="highcharts-series highcharts-series-0" visibility="visible" zIndex="0.1" transform="translate(66,10) scale(1 1)" clip-path="url(#highcharts-1)">
                                                        <path fill="none" d="M 41.57142857142857 316 C 41.57142857142857 316 91.45714285714284 311.8288 124.71428571428571 311.8288 C 157.97142857142856 311.8288 174.59999999999997 316 207.85714285714283 316 C 241.1142857142857 316 257.74285714285713 316 291 316 C 324.25714285714287 316 340.88571428571424 316 374.1428571428571 316 C 407.4 316 424.02857142857135 316 457.2857142857142 316 C 490.5428571428571 316 540.4285714285714 313.3772 540.4285714285714 313.3772" stroke="black" stroke-width="5" zIndex="1" stroke-linejoin="round" stroke-linecap="round" isShadow="true" stroke-opacity="0.049999999999999996" transform="translate(1, 1)"></path>
                                                        <path fill="none" d="M 41.57142857142857 316 C 41.57142857142857 316 91.45714285714284 311.8288 124.71428571428571 311.8288 C 157.97142857142856 311.8288 174.59999999999997 316 207.85714285714283 316 C 241.1142857142857 316 257.74285714285713 316 291 316 C 324.25714285714287 316 340.88571428571424 316 374.1428571428571 316 C 407.4 316 424.02857142857135 316 457.2857142857142 316 C 490.5428571428571 316 540.4285714285714 313.3772 540.4285714285714 313.3772" stroke="black" stroke-width="3" zIndex="1" stroke-linejoin="round" stroke-linecap="round" isShadow="true" stroke-opacity="0.09999999999999999" transform="translate(1, 1)"></path>
                                                        <path fill="none" d="M 41.57142857142857 316 C 41.57142857142857 316 91.45714285714284 311.8288 124.71428571428571 311.8288 C 157.97142857142856 311.8288 174.59999999999997 316 207.85714285714283 316 C 241.1142857142857 316 257.74285714285713 316 291 316 C 324.25714285714287 316 340.88571428571424 316 374.1428571428571 316 C 407.4 316 424.02857142857135 316 457.2857142857142 316 C 490.5428571428571 316 540.4285714285714 313.3772 540.4285714285714 313.3772" stroke="black" stroke-width="1" zIndex="1" stroke-linejoin="round" stroke-linecap="round" isShadow="true" stroke-opacity="0.15" transform="translate(1, 1)"></path>
                                                        <path fill="none" d="M 41.57142857142857 316 C 41.57142857142857 316 91.45714285714284 311.8288 124.71428571428571 311.8288 C 157.97142857142856 311.8288 174.59999999999997 316 207.85714285714283 316 C 241.1142857142857 316 257.74285714285713 316 291 316 C 324.25714285714287 316 340.88571428571424 316 374.1428571428571 316 C 407.4 316 424.02857142857135 316 457.2857142857142 316 C 490.5428571428571 316 540.4285714285714 313.3772 540.4285714285714 313.3772" stroke="#f45b5b" stroke-width="2" zIndex="1" stroke-linejoin="round" stroke-linecap="round"></path>
                                                        <path fill="none" d="M 31.57142857142857 316 L 41.57142857142857 316 C 41.57142857142857 316 91.45714285714284 311.8288 124.71428571428571 311.8288 C 157.97142857142856 311.8288 174.59999999999997 316 207.85714285714283 316 C 241.1142857142857 316 257.74285714285713 316 291 316 C 324.25714285714287 316 340.88571428571424 316 374.1428571428571 316 C 407.4 316 424.02857142857135 316 457.2857142857142 316 C 490.5428571428571 316 540.4285714285714 313.3772 540.4285714285714 313.3772 L 550.4285714285714 313.3772" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="22" zIndex="2" class=" highcharts-tracker" style=""></path>
                                                    </g>
                                                    <g class="highcharts-markers highcharts-series-0 highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(66,10) scale(1 1)" clip-path="url(#highcharts-2)" style="">
                                                        <path fill="#f45b5b" d="M 540 309.3772 C 545.328 309.3772 545.328 317.3772 540 317.3772 C 534.672 317.3772 534.672 309.3772 540 309.3772 Z"></path>
                                                        <path fill="#f45b5b" d="M 457 312 C 462.328 312 462.328 320 457 320 C 451.672 320 451.672 312 457 312 Z"></path>
                                                        <path fill="#f45b5b" d="M 374 312 C 379.328 312 379.328 320 374 320 C 368.672 320 368.672 312 374 312 Z"></path>
                                                        <path fill="#f45b5b" d="M 291 312 C 296.328 312 296.328 320 291 320 C 285.672 320 285.672 312 291 312 Z" stroke-width="1"></path>
                                                        <path fill="#f45b5b" d="M 207 312 C 212.328 312 212.328 320 207 320 C 201.672 320 201.672 312 207 312 Z" stroke-width="1"></path>
                                                        <path fill="#f45b5b" d="M 124 307.8288 C 129.328 307.8288 129.328 315.8288 124 315.8288 C 118.672 315.8288 118.672 307.8288 124 307.8288 Z" stroke-width="1"></path>
                                                        <path fill="#f45b5b" d="M 41 312 C 46.328 312 46.328 320 41 320 C 35.672 320 35.672 312 41 312 Z" stroke-width="1"></path>
                                                    </g>
                                                </g>
                                                <g class="highcharts-legend" zIndex="7" transform="translate(291,359)">
                                                    <g zIndex="1">
                                                        <g>
                                                            <g class="highcharts-legend-item" zIndex="1" transform="translate(8,3)">
                                                                <path fill="none" d="M 0 12 L 16 12" stroke="#f45b5b" stroke-width="2"></path>
                                                                <path fill="#f45b5b" d="M 8 8 C 13.328 8 13.328 16 8 16 C 2.6719999999999997 16 2.6719999999999997 8 8 8 Z"></path><text x="21" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2" y="16">Month</text>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g class="highcharts-axis-labels highcharts-xaxis-labels" zIndex="7"><text x="107.57142857142857" style="color:#6e6e70;cursor:default;font-size:11px;fill:#6e6e70;width:73px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="345" opacity="1">Jan</text><text x="190.71428571428572" style="color:#6e6e70;cursor:default;font-size:11px;fill:#6e6e70;width:73px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="345" opacity="1">Feb</text><text x="273.85714285714283" style="color:#6e6e70;cursor:default;font-size:11px;fill:#6e6e70;width:73px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="345" opacity="1">Mar</text><text x="357" style="color:#6e6e70;cursor:default;font-size:11px;fill:#6e6e70;width:73px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="345" opacity="1">Apr</text><text x="440.1428571428571" style="color:#6e6e70;cursor:default;font-size:11px;fill:#6e6e70;width:73px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="345" opacity="1">May</text><text x="523.2857142857143" style="color:#6e6e70;cursor:default;font-size:11px;fill:#6e6e70;width:73px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="345" opacity="1">Jun</text><text x="606.4285714285714" style="color:#6e6e70;cursor:default;font-size:11px;fill:#6e6e70;width:73px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="345" opacity="1">Jul</text></g>
                                                <g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7"><text x="51" style="color:#6e6e70;cursor:default;font-size:11px;fill:#6e6e70;width:207px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="331" opacity="1">0</text><text x="51" style="color:#6e6e70;cursor:default;font-size:11px;fill:#6e6e70;width:207px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="15" opacity="1">100</text><text x="51" style="color:#6e6e70;cursor:default;font-size:11px;fill:#6e6e70;width:207px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="252" opacity="1">25</text><text x="51" style="color:#6e6e70;cursor:default;font-size:11px;fill:#6e6e70;width:207px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="173" opacity="1">50</text><text x="51" style="color:#6e6e70;cursor:default;font-size:11px;fill:#6e6e70;width:207px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="94" opacity="1">75</text></g>
                                                <g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;pointer-events:none;white-space:nowrap;" transform="translate(79,-9999)" opacity="0" visibility="visible">
                                                    <path fill="none" d="M 3 0 L 55 0 C 58 0 58 0 58 3 L 58 43 C 58 46 58 46 55 46 L 35 46 29 52 23 46 3 46 C 0 46 0 46 0 43 L 0 3 C 0 0 0 0 3 0" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)" width="58" height="46"></path>
                                                    <path fill="none" d="M 3 0 L 55 0 C 58 0 58 0 58 3 L 58 43 C 58 46 58 46 55 46 L 35 46 29 52 23 46 3 46 C 0 46 0 46 0 43 L 0 3 C 0 0 0 0 3 0" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)" width="58" height="46"></path>
                                                    <path fill="none" d="M 3 0 L 55 0 C 58 0 58 0 58 3 L 58 43 C 58 46 58 46 55 46 L 35 46 29 52 23 46 3 46 C 0 46 0 46 0 43 L 0 3 C 0 0 0 0 3 0" isShadow="true" stroke="black" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)" width="58" height="46"></path>
                                                    <path fill="none" d="M 3 0 L 55 0 C 58 0 58 0 58 3 L 58 43 C 58 46 58 46 55 46 L 35 46 29 52 23 46 3 46 C 0 46 0 46 0 43 L 0 3 C 0 0 0 0 3 0"></path><text x="8" zIndex="1" style="font-size:12px;color:#333333;fill:#333333;" y="20">
                                                        <tspan style="font-weight:bold">Month</tspan>
                                                        <tspan x="8" dy="15">Jan: 0%</tspan>
                                                    </text>
                                                </g>
                                            </svg></div>
                                    </div>
                                    <script type="text/javascript">
                                        //<![CDATA[
                                        $(document).ready(function() {
                                            // HIGHROLLER - HIGHCHARTS UTC OPTIONS 
                                            Highcharts.setOptions({
                                                "global": {
                                                    "useUTC": true
                                                }
                                            });
                                            // HIGHROLLER - HIGHCHARTS '' spline chart

                                            var mywrapperdl = new Highcharts.Chart({
                                                "chart": {
                                                    "renderTo": "mywrapperdl"
                                                    , "type": "spline"
                                                }
                                                , "title": {
                                                    "text": null
                                                    , "align": "center"
                                                }
                                                , "series": [{
                                                    "name": "Month"
                                                    , "data": [0, 1.32, 0, 0, 0, 0, 0.83]
                                                }]
                                                , "tooltip": {
                                                    "backgroundColor": {}
                                                    , "enabled": true
                                                    , "formatter": function() {
                                                        return '<b>' + this.series.name + '<\/b><br\/>' + this.x + ': ' + this.y + '%';
                                                    }
                                                }
                                                , "plotOptions": {
                                                    "series": {
                                                        "series": {
                                                            "dataLabels": {
                                                                "style": {}
                                                            }
                                                        }
                                                        , "spline": null
                                                        , "showInLegend": true
                                                    }
                                                }
                                                , "xAxis": {
                                                    "categories": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
                                                }
                                                , "labels": {
                                                    "formatter": {
                                                        "formatter": ""
                                                    }
                                                }
                                                , "dataLabels": {
                                                    "formatter": {
                                                        "formatter": ""
                                                    }
                                                }
                                                , "yAxis": {
                                                    "max": 100
                                                    , "title": {
                                                        "text": "Percentage"
                                                    }
                                                }
                                                , "credits": {
                                                    "enabled": false
                                                }
                                            });

                                            //for column drilldown
                                            function setChart(name, categories, data, color) {
                                                mywrapperdl.xAxis[0].setCategories(categories);
                                                mywrapperdl.series[0].remove();
                                                mywrapperdl.addSeries({
                                                    name: name
                                                    , data: data
                                                    , color: color || 'white'
                                                });
                                            }
                                        });
                                        //]]>

                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

</div>
@endsection
