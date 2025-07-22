@extends('student-main.layouts.default')
@section('content')
<div class="container-fluid">
    <h3>Help
    </h3>
    <div class="panel-body">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" href="#collapse1"><strong>Help 1</strong></a>
                    </h4>
                </div>
                <div id="collapse1" class="collapsein">
                    <div class="panel-body">
                        <p>Suspendisse mattis magna augue, sed pretium lacus pellentesque nec. Nullam tincidunt lacinia urna sit amet tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras consequat justo ac diam aliquet adipiscing. Ut orci nibh, viverra quis luctus id, lacinia quis purus. Vestibulum pharetra diam non nulla pretium scelerisque. Fusce posuere tellus vel mollis auctor.</p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" href="#collapse2"><strong>Help2</strong></a>
                    </h4>
                </div>
                <div id="collapse2" class="collapse">
                    <div class="panel-body">
                        <p>Aenean pretium nunc lectus, quis viverra metus accumsan vestibulum. Mauris vulputate urna nec leo viverra, at dictum nulla suscipit. Sed id pretium lectus, vitae egestas turpis. Quisque metus tortor, tristique in diam sit amet, suscipit facilisis augue. Nunc vel leo vitae ligula auctor tristique ut nec tortor. Aliquam nibh ligula, tristique non pharetra in, congue ac sem. Donec odio nulla, lobortis vitae risus in, porttitor pretium mauris. Nullam fringilla tortor eu quam luctus, eget bibendum lectus eleifend. Nam facilisis libero tempor rhoncus consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>





</div>

@endsection
