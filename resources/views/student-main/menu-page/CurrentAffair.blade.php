@extends('student-main.layouts.default')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li>
            <h5 class="bc-title">All Current Affair</h5>
        </li>
    </ol>
</div><br>



<div id="products" class="row list-group">

    <div class="item  col-md-12">
        <div class="thumbnail mycontainer item_img" style="padding: 5px">

            <div class="caption">

                <div class="row">

                    <div class="col-md-3">
                        <a href="javascript:void(0);">
                            <img src="{{asset('images/avatar/2.jpg')}}" alt="Image" class="group list-group-image PackageImg"> </a>
                    </div>
                    <div class="col-md-9">
                        <a href="javascript:void(0);">
                            <h4 class="group inner list-group-item-heading package-name-list"><strong>Delhi Government launched Operation SHIELD in Hotspot areas</strong></h4>
                        </a>

                        <p>Delhi Government on April 9, 2020 launched Operation Shield in the 21 COVID-19 hotspot areas to scan and contain the spread of novel Coronavirus. Delhi Chief Minister Arvind Kejriwal, while announcing the operation, appealed to people living in the hotspot areas to cooperate during the operation. The CM warned that strict action will be taken against those who misbehave with doctors, nurses and healthcare personnel.</p>
                    </div>


                </div>


            </div>
        </div>
    </div>

    <div class="item  col-md-12">
        <div class="thumbnail mycontainer item_img" style="padding: 5px">

            <div class="caption">

                <div class="row">

                    <div class="col-md-3">
                        <a href="javascript:void(0);">
                            <img src="{{asset('images/avatar/2.jpg')}}" alt="Image" class="group list-group-image PackageImg"> </a>
                    </div>
                    <div class="col-md-9">
                        <a href="javascript:void(0);">
                            <h4 class="group inner list-group-item-heading package-name-list"><strong>Punjab extends COVID-19 lockdown till 1st May</strong></h4>
                        </a>

                        <p>Punjab Government on April 10, 2020 extended the lockdown in the state until May 1, 2020. Punjab became the second Indian state to extend the COVID-19 lockdown imposed by PM Narendra Modi after Odisha. Earlier, the extension of lockdown was hinted by Punjab Chief Minister Amarinder Singh.</p>
                    </div>


                </div>


            </div>
        </div>
    </div>

    <div class="item  col-md-12">
        <div class="thumbnail mycontainer item_img" style="padding: 5px">
        
            <div class="caption">
                
                <div class="row">
                    
                    <div class="col-md-3">
                        <a href="javascript:void(0);">
                            <img src="{{asset('images/avatar/2.jpg')}}" alt="Image" class="group list-group-image PackageImg">										</a>
                    </div>
                    <div class="col-md-9">
                        <a href="javascript:void(0);">
                            <h4 class="group inner list-group-item-heading package-name-list"><strong>What is Convalescent Plasma Therapy &amp; how does it work?</strong></h4>
                        </a>
                        
                        <p>The Indian Council of Medical Research (ICMR) has approved the clinical trials of Convalescent Plasma Therapy to treat the severe cases of COVID-19. Under the plasma therapy, the patients infected with the deadly Coronavirus are infused with blood plasma of the person who has recovered from the virus.</p>
                    </div>
                    
                    
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
