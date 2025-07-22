@extends('student-main.layouts.default')
@section('content')
<div class="container-fluid">
    <h3>Your performance compared to your group
    </h3>
    <div class="panel">
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <div class="chart">
                                    <div id="mywrapperdl" data-highcharts-chart="0">
                                        <div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 1002px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Signika, serif; background: url(&quot;/app/webroot/img/sand.png&quot;);"><svg version="1.1" style="font-family:Signika, serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="1002" height="400">
                                                <desc>Created with Highcharts 4.1.8-modified</desc>
                                                <defs>
                                                    <clipPath id="highcharts-1">
                                                        <rect x="0" y="0" width="957" height="336"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g class="highcharts-grid" zIndex="1"></g>
                                                <g class="highcharts-grid" zIndex="1"></g>
                                                <g class="highcharts-axis" zIndex="2">
                                                    <path fill="none" d="M 35 346.5 L 992 346.5" stroke="#C0D0E0" stroke-width="1" zIndex="7" visibility="visible"></path>
                                                </g>
                                                <g class="highcharts-axis" zIndex="2"><text x="25" zIndex="7" text-anchor="middle" transform="translate(0,0) rotate(270 25 178)" class=" highcharts-yaxis-title" style="color:#707070;fill:#707070;" visibility="visible" y="178">Percentage</text></g>
                                                <g class="highcharts-series-group" zIndex="3">
                                                    <g class="highcharts-series highcharts-series-0" visibility="visible" zIndex="0.1" transform="translate(35,10) scale(1 1)" clip-path="url(#highcharts-1)">
                                                        <path fill="none" d="M 0 0" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="22" zIndex="2" class=" highcharts-tracker" style=""></path>
                                                    </g>
                                                    <g class="highcharts-markers highcharts-series-0 highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(35,10) scale(1 1)" clip-path="url(#highcharts-2)" style=""></g>
                                                    <g class="highcharts-series highcharts-series-1" visibility="visible" zIndex="0.1" transform="translate(35,10) scale(1 1)" clip-path="url(#highcharts-1)">
                                                        <path fill="none" d="M 0 0" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="22" zIndex="2" class=" highcharts-tracker" style=""></path>
                                                    </g>
                                                    <g class="highcharts-markers highcharts-series-1 highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(35,10) scale(1 1)" clip-path="url(#highcharts-2)" style=""></g>
                                                </g>
                                                <g class="highcharts-legend" zIndex="7" transform="translate(350,358)">
                                                    <g zIndex="1">
                                                        <g>
                                                            <g class="highcharts-legend-item" zIndex="1" transform="translate(8,3)">
                                                                <path fill="none" d="M 0 12 L 16 12" stroke="#f45b5b" stroke-width="2"></path>
                                                                <path fill="#f45b5b" d="M 8 8 C 13.328 8 13.328 16 8 16 C 2.6719999999999997 16 2.6719999999999997 8 8 8 Z"></path><text x="21" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2" y="16">
                                                                    <tspan>My Group performance</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="highcharts-legend-item" zIndex="1" transform="translate(179.46737670898438,3)">
                                                                <path fill="none" d="M 0 12 L 16 12" stroke="#8085e9" stroke-width="2"></path>
                                                                <path fill="#8085e9" d="M 8 8 L 12 12 8 16 4 12 Z"></path><text x="21" y="16" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">
                                                                    <tspan>My Performance</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g class="highcharts-axis-labels highcharts-xaxis-labels" zIndex="7"></g>
                                                <g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7"></g>
                                                <g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;pointer-events:none;white-space:nowrap;" transform="translate(0,-9999)">
                                                    <path fill="none" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></path>
                                                    <path fill="none" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></path>
                                                    <path fill="none" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0" isShadow="true" stroke="black" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></path>
                                                    <path fill="none" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0"></path><text x="8" zIndex="1" style="font-size:12px;color:#333333;fill:#333333;" y="20"></text>
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
                                            // HIGHROLLER - HIGHCHARTS '' line chart

                                            var mywrapperdl = new Highcharts.Chart({
                                                "chart": {
                                                    "renderTo": "mywrapperdl"
                                                    , "type": "line"
                                                }
                                                , "title": {
                                                    "text": null
                                                    , "align": "center"
                                                }
                                                , "series": [{
                                                    "name": "My Group performance"
                                                    , "data": []
                                                }, {
                                                    "name": "My Performance"
                                                    , "data": []
                                                }]
                                                , "legend": {
                                                    "enabled": true
                                                }
                                                , "tooltip": {
                                                    "backgroundColor": {}
                                                    , "enabled": true
                                                    , "formatter": function() {
                                                        return '<b>' + this.series.name + '<\/b><br\/>' + this.x + ': ' + this.y + '% Marks';
                                                    }
                                                }
                                                , "xAxis": {
                                                    "categories": []
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
                                                    "style": {}
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
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>





</div>

@endsection
