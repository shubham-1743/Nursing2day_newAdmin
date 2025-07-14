@extends('admin-main.layouts.default')

@section('content')
<div class="page-title">
    <div class="title-env">
        <h1 class="title">Sales Report</h1>
    </div>
</div>
<div class="panel">
    <div class="panel-body">
        {{-- <div class="row mrg">
            <div class="col-sm-offset-2 col-md-3">
                <div>
                    <button class="btn btn-primary" type="button">Total Sales Count this month <span class="badge">235</span>
                        <br /><br />Total Earning this month <span class="badge"><img src="/img/currencies/537f17a76864d11438d25ff5af7641a5.gif"> 595,029</span>
                    </button>
                </div>
            </div>
            <div class="col-sm-offset-1 col-md-3">
                <div>
                    <button class="btn btn-primary" type="button">Total Sales Count <span class="badge">78532</span>
                        <br /><br />Total Earning <span class="badge"><img src="/img/currencies/537f17a76864d11438d25ff5af7641a5.gif"> 78,465,300</span>
                    </button>
                </div>
            </div>
        </div> --}}
        <form action="" name="searchfrm" id="SalesreportIndexForm" method="post" accept-charset="utf-8"  style=" margin-left: 15%;">
            
            <div class="row mrg ">
                <div class="col-md-3">
                    <select name="data[Salesreport][package_id]" class="form-control" id="SalesreportPackageId">
                        <option value="">All</option>

                    </select> </div>
                <div class="col-md-3">
                    <select name="data[Salesreport][date][year]" class="form-control" id="SalesreportDateYear">
                        <option value="">All</option>

                    </select> </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-success"><span class="fa fa-search"></span> Search</button>
                    <a href="#" class="btn btn-warning"><span class="fa fa-refresh"></span>&nbsp;Reset</a> </div>
            </div>
        </form>
        <div class="chart">
            <div id="mywrapperdl">
                {{-- chart --}}
            </div>
        </div>
    </div><br><br><br><br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <tr>
                <th>Month</th>
                <th>Sales Count</th>
                <th>Earning</th>
            </tr>
            <tr>
                <td>August 2024</td>
                <td>493</td>
                <td>1,466,773</td>
            </tr>
            <tr>
                <td>September 2024</td>
                <td>251</td>
                <td> 652,846</td>
            </tr>
            <tr>
                <td>October 2024</td>
                <td>276</td>
                <td>839,956</td>
            </tr>
            <tr>
                <td>November 2024</td>
                <td>284</td>
                <td>729,576</td>
            </tr>
            <tr>
                <td>December 2024</td>
                <td>373</td>
                <td>826,816</td>
            </tr>
            <tr>
                <td>January 2025</td>
                <td>1048</td>
                <td> 1,988,121</td>
            </tr>
            <tr>
                <td>February 2025</td>
                <td>899</td>
                <td>1,296,935</td>
            </tr>
            <tr>
                <td>March 2025</td>
                <td>793</td>
                <td> 950,312</td>
            </tr>
            <tr>
                <td>April 2025</td>
                <td>988</td>
                <td> 433,351</td>
            </tr>
            <tr>
                <td>May 2025</td>
                <td>4583</td>
                <td>477,797</td>
            </tr>
            <tr>
                <td>June 2025</td>
                <td>347</td>
                <td> 607,739</td>
            </tr>
            <tr>
                <td>July 2025</td>
                <td>235</td>
                <td>595,029</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>10570</strong></td>
                <td><strong>10,865,251</strong></td>
            </tr>
        </table>
    </div>
</div>
</div>
@endsection
