@extends('student-main.layouts.default')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <a href="{{route('student.Result')}}" class="btn btn-info"><span class="fa fa-arrow-left"></span>&nbsp;Back</a>
    </ol>
</div>

<!-- Tabs -->
<ul class="nav nav-tabs" id="examTabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="score-tab" data-toggle="tab" href="#score" role="tab">SCORE CARD</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="subject-tab" data-toggle="tab" href="#subject" role="tab">SUBJECT REPORT</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="management-tab" data-toggle="tab" href="#management" role="tab">TIME MANAGEMENT</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="question-tab" data-toggle="tab" href="#question" role="tab">QUESTION REPORT</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="solution-tab" data-toggle="tab" href="#solution" role="tab">SOLUTION</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="compare-tab" data-toggle="tab" href="#compare" role="tab">COMPARE REPORT</a>
    </li>
</ul>

<!-- Tab Content -->
<div class="tab-content mt-3" id="examTabsContent">


    <div class="tab-pane fade show active " id="score" role="tabpanel">

        <div class="rtest_heading">
            <strong>Score Card For </strong>NORCET 2021 MODEL PAPER 1
        </div>
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Total No. of Student</td>
                        <td><strong class="text-primary">1756</strong></td>
                        <td>My Marks</td>
                        <td>
                            <strong class="text-primary">1.67</strong>
                        </td>
                        <td>Correct Question</td>
                        <td><strong class="text-primary">2</strong></td>
                        <td>Incorrect Question</td>
                        <td><strong class="text-danger">1</strong></td>
                    </tr>
                    <tr>
                        <td>Total Marks of Test</td>
                        <td>
                            <strong class="text-primary">100.00</strong>
                        </td>
                        <td>My Percentile</td>
                        <td>
                            <strong class="text-primary">52.51%</strong>
                        </td>
                        <td>Right Marks</td>
                        <td><strong class="text-primary">2.00</strong></td>
                        <td>Negative Marks</td>
                        <td><strong class="text-danger">0.33</strong>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>




    </div>


    <div class="tab-pane fade" id="subject" role="tabpanel">

        <div class="rtest_heading">
            <strong>Subject Report For </strong>NORCET 2021 MODEL PAPER 1 </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <th>Total Questions</th>
                        <th>Correct/<br>Incorrect Question</th>
                        <th>Marks Scored/<br>Negative Marks</th>
                        <th>Unattempted Questions/<br>Marks</th>
                    </tr>
                    <tr>
                        <td class="text-primary">
                            <strong>Mental Health Nursing</strong></td>
                        <td>9</td>
                        <td>
                            <span class="text-success">2</span>/<span class="text-danger">1</span>
                        </td>
                        <td>
                            <span class="text-success">2.00</span>/<span class="text-danger">0.33</span>
                        </td>
                        <td>
                            <span class="text-warning">6</span>/<span class="text-danger">6.00</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-primary">
                            <strong>jodhpur aiims model paper</strong></td>
                        <td>50</td>
                        <td>
                            <span class="text-success">0</span>/<span class="text-danger">0</span>
                        </td>
                        <td>
                            <span class="text-success">0</span>/<span class="text-danger">0</span>
                        </td>
                        <td>
                            <span class="text-warning">50</span>/<span class="text-danger">50.00</span>
                        </td>
                    </tr>




                </tbody>
            </table>
        </div>


    </div>

    <!-- Upcoming Exam -->
    <div class="tab-pane fade" id="management" role="tabpanel">

        <div class="rtest_heading">
            <strong>Time Management For </strong>NORCET 2021 MODEL PAPER 1 </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <th>Total Questions</th>
                        <th>Correct/<br>Incorrect Question</th>
                        <th>Marks Scored/<br>Negative Marks</th>
                        <th>Percentage</th>
                        <th>Unattempted Questions/<br>Marks</th>
                        <th>Total Time</th>
                    </tr>
                    <tr>
                        <td class="text-primary">
                            <strong>Mental Health Nursing</strong></td>
                        <td>9</td>
                        <td>
                            <span class="text-success">2</span>/<span class="text-danger">1</span>
                        </td>
                        <td>
                            <span class="text-success">2.00</span>/<span class="text-danger">0.33</span>
                        </td>
                        <td>18.56%</td>
                        <td>
                            <span class="text-warning">6</span>/<span class="text-danger">6.00</span>
                        </td>
                        <td>486801 Hours 32 Mins 36 Sec</td>
                    </tr>
                    <tr>
                        <td class="text-primary">
                            <strong>jodhpur aiims model paper</strong></td>
                        <td>50</td>
                        <td>
                            <span class="text-success">0</span>/<span class="text-danger">0</span>
                        </td>
                        <td>
                            <span class="text-success">0</span>/<span class="text-danger">0</span>
                        </td>
                        <td>0.00%</td>
                        <td>
                            <span class="text-warning">50</span>/<span class="text-danger">50.00</span>
                        </td>
                        <td>-</td>
                    </tr>




                </tbody>
            </table>
        </div>


    </div>

    <!-- Expired Exam -->
    <div class="tab-pane fade" id="question" role="tabpanel">

        <div class="rtest_heading">
            <strong>Question Report For </strong>NORCET 2021 MODEL PAPER 1 </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Q.No.</th>
                        <th>Question</th>
                        <th>Your Answer</th>
                        <th>Correct Answer</th>
                        <th>Max. Marks</th>
                        <th>Your Score</th>
                        <th>Your Time</th>
                        <th>Level</th>
                    </tr>
                    <tr class="text-success">
                        <td><strong>1</strong></td>
                        <td>
                            <p>Semantic memory includes all except-</p>
                        </td>
                        <td>
                            <p>events</p>
                        </td>
                        <td>
                            <p>events</p>
                        </td>
                        <td>1.00</td>
                        <td>1.00</td>
                        <td>-</td>
                        <td>Easy</td>
                    </tr>
                    <tr class="text-danger">
                        <td><strong>2</strong></td>
                        <td>
                            <p>Rorschach test measures-</p>
                        </td>
                        <td>
                            <p>creativity</p>
                        </td>
                        <td>
                            <p>personality</p>
                        </td>
                        <td>1.00</td>
                        <td>-0.33</td>
                        <td>2 Sec</td>
                        <td>Easy</td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
    <div class="tab-pane fade" id="solution" role="tabpanel">

        <div class="rtest_heading">
            <strong>Solution For </strong>NORCET 2021 MODEL PAPER 1 <span class="exam-ViewIn" style="margin-left: 50px;">View In :<select name="data[lang]" class="examLang" onchange="changeLang(this.value,1)" id="lang">
                    <option value="1">English</option>
                </select></span>
        </div>




    </div>

    <div class="tab-pane fade" id="compare" role="tabpanel">

            <div class="rtest_heading">
                <strong>Compare Report For  </strong>NORCET 2021 MODEL PAPER 1        </div>
            <div class="com-md-12 col-sm-12 col-xs-12">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody><tr>
                                <td>Total Ques.</td>
                                <td><strong>100</strong></td>
                            </tr>
                            <tr>
                                <td>Maximum Marks</td>
                                <td><strong>100.00</strong></td>
                            </tr>
                            <tr>
                                <td>Attempted Ques.</td>
                                <td><strong class="text-success">3</strong></td>
                            </tr>
                            <tr>
                                <td>Unattempted Ques.</td>
                                <td><strong class="text-danger">97</strong></td>
                            </tr>
                            <tr>
                                <td>Correct Ques.</td>
                                <td><strong class="text-success">2</strong></td>
                            </tr>
                            <tr>
                                <td>Incorrect Ques.</td>
                                <td><strong class="text-danger">1</strong></td>
                            </tr>
                        </tbody></table>
                    </div>
                </div>
                
                         
                        
                         
                       
                        
                       
                        
            </div>
           

    </div>



</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush
