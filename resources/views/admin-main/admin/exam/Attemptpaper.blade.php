@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">

    <div class="mb-3">
        <a href="{{url('admin/exams')}}" class="btn btn-primary btn-sm"><span class="fa fa-arrow-left"></span> Back To Exam</a>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="widget">
                <h4 class="widget-title">Attempted Papers of <span>YODDHA TEST SERIES PAPER - 03</span></h4>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>Omkar Mundhe</td>
                        <td>Email</td>
                        <td>mundheo180@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Total Marks</td>
                        <td>100.00</td>
                        <td>Obtained Marks</td>
                        <td>56.04</td>
                    </tr>
                    <tr>
                        <td>Result Finalized</td>
                        <td><span class="label label-success">PASSED</span></td>
                        <td>Finalized By</td>
                        <td>Administrator</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="panel-body">
            <div class="col-md-13">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a data-toggle="collapse" href="#collapse1" class="collapsed" aria-expanded="false">
                                <span class="text-success"> <strong>Question No .1 &nbsp;(Objective )</strong></span>
                            </a>
                        </div>
                        <div id="collapse1" class="collapsein collapse" aria-expanded="false" style="height: 0px;">
                            <div class="table-responsive">
                                <table class="table table-bordered">

                                    <tbody>
                                        <tr>
                                            <td colspan="4">A nurse is caring for a client in labor. The nurse determines that the client is beginning in the 2nd stage of labor when which of the following assessments is noted?
                                            </td>
                                        </tr>
                                        <tr class="text-left">
                                            <td>
                                                <strong class="text-warning">Option1</strong>
                                            </td>
                                            <td colspan="3">The client begins to expel clear vaginal fluid
                                            </td>
                                        </tr>
                                        <tr class="text-left">
                                            <td>
                                                <strong class="text-warning">Option2 </strong>
                                            </td>
                                            <td colspan="3">The contractions are regular
                                            </td>
                                        </tr>
                                        <tr class="text-left">
                                            <td>
                                                <strong class="text-warning">Option3</strong>
                                            </td>
                                            <td colspan="3">The membranes have ruptured
                                            </td>
                                        </tr>
                                        <tr class="text-left">
                                            <td>
                                                <strong class="text-warning">Option4</strong>
                                            </td>
                                            <td colspan="3">The cervix is dilated completely
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Marked Answer : The cervix is dilated completely
                                            </td>
                                            <td colspan="2"><span class="text-success">Correct Answer : The cervix is dilated completely
                                                </span></td>
                                        </tr>
                                        <tr>
                                            <td>Time Taken : Not Attempted</td>
                                            <td>Marks : 1.00</td>
                                            <td>Marks Obtained : 1.00</td>
                                            <td>Checked by : System</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <hr>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



    @endsection
    @push('scripts')

    


    @endpush
