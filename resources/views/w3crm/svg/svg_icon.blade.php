@extends('layouts.default')
@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">Dashboard</h5></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Home </a>
        </li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">SVG Icons</a></li>
    </ol>
</div>
            <!-- row -->
<div class="container-fluid">
    <div class="row">
        <div class="card-body svg-area card">
        <div class="card-header"> SVG Icons</div>
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                    <div class="svg-icons-ov">
                        <div class="svg-icons-prev">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.59151 15.2068C13.2805 15.2068 16.4335 15.7658 16.4335 17.9988C16.4335 20.2318 13.3015 20.8068 9.59151 20.8068C5.90151 20.8068 2.74951 20.2528 2.74951 18.0188C2.74951 15.7848 5.88051 15.2068 9.59151 15.2068Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.59157 12.0198C7.16957 12.0198 5.20557 10.0568 5.20557 7.63482C5.20557 5.21282 7.16957 3.24982 9.59157 3.24982C12.0126 3.24982 13.9766 5.21282 13.9766 7.63482C13.9856 10.0478 12.0356 12.0108 9.62257 12.0198H9.59157Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.4829 10.8816C18.0839 10.6566 19.3169 9.28265 19.3199 7.61965C19.3199 5.98065 18.1249 4.62065 16.5579 4.36365" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M18.5952 14.7322C20.1462 14.9632 21.2292 15.5072 21.2292 16.6272C21.2292 17.3982 20.7192 17.8982 19.8952 18.2112" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                        </div>
                        <div class="svg-classname">2-User.svg</div>
                        <div class="svg-icon-popup">
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>

                        </div>
                        <div class="modal fade" id="svg_img_Brassieresvg" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_img_label_Brassieresvg">2-User.svg</h5>
                                        <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;img src="{{asset('images/iconly/light/2-User.svg')}}"/&gt;</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="svg_inline_Brassieresvg" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_inline_label_Brassieresvg">2-User.svg</h5>
                                        <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M9.59151 15.2068C13.2805 15.2068 16.4335 15.7658 16.4335 17.9988C16.4335 20.2318 13.3015 20.8068 9.59151 20.8068C5.90151 20.8068 2.74951 20.2528 2.74951 18.0188C2.74951 15.7848 5.88051 15.2068 9.59151 15.2068Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M9.59157 12.0198C7.16957 12.0198 5.20557 10.0568 5.20557 7.63482C5.20557 5.21282 7.16957 3.24982 9.59157 3.24982C12.0126 3.24982 13.9766 5.21282 13.9766 7.63482C13.9856 10.0478 12.0356 12.0108 9.62257 12.0198H9.59157Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M16.4829 10.8816C18.0839 10.6566 19.3169 9.28265 19.3199 7.61965C19.3199 5.98065 18.1249 4.62065 16.5579 4.36365" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M18.5952 14.7322C20.1462 14.9632 21.2292 15.5072 21.2292 16.6272C21.2292 17.3982 20.7192 17.8982 19.8952 18.2112" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                    <div class="svg-icons-ov">
                        <div class="svg-icons-prev">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.8877 10.8967C19.2827 10.7007 20.3567 9.50467 20.3597 8.05567C20.3597 6.62767 19.3187 5.44367 17.9537 5.21967" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19.7285 14.2503C21.0795 14.4523 22.0225 14.9253 22.0225 15.9003C22.0225 16.5713 21.5785 17.0073 20.8605 17.2813" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8867 14.6638C8.67273 14.6638 5.92773 15.1508 5.92773 17.0958C5.92773 19.0398 8.65573 19.5408 11.8867 19.5408C15.1007 19.5408 17.8447 19.0588 17.8447 17.1128C17.8447 15.1668 15.1177 14.6638 11.8867 14.6638Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8869 11.8879C13.9959 11.8879 15.7059 10.1789 15.7059 8.06888C15.7059 5.95988 13.9959 4.24988 11.8869 4.24988C9.7779 4.24988 8.0679 5.95988 8.0679 8.06888C8.0599 10.1709 9.7569 11.8809 11.8589 11.8879H11.8869Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5.88509 10.8967C4.48909 10.7007 3.41609 9.50467 3.41309 8.05567C3.41309 6.62767 4.45409 5.44367 5.81909 5.21967" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.044 14.2503C2.693 14.4523 1.75 14.9253 1.75 15.9003C1.75 16.5713 2.194 17.0073 2.912 17.2813" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                        </div>
                        <div class="svg-classname">3-User.svg</div>
                        <div class="svg-icon-popup">
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-1" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-1" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>

                        </div>
                        <div class="modal fade" id="svg_img_Brassieresvg-1" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-1">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_img_label_Brassieresvg-1">3-User.svg</h5>
                                        <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;img src="{{asset('images/iconly/light/3-User.svg')}}"/&gt;</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="svg_inline_Brassieresvg-1" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-1">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-1">3-User.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M17.8877 10.8967C19.2827 10.7007 20.3567 9.50467 20.3597 8.05567C20.3597 6.62767 19.3187 5.44367 17.9537 5.21967" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M19.7285 14.2503C21.0795 14.4523 22.0225 14.9253 22.0225 15.9003C22.0225 16.5713 21.5785 17.0073 20.8605 17.2813" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M11.8867 14.6638C8.67273 14.6638 5.92773 15.1508 5.92773 17.0958C5.92773 19.0398 8.65573 19.5408 11.8867 19.5408C15.1007 19.5408 17.8447 19.0588 17.8447 17.1128C17.8447 15.1668 15.1177 14.6638 11.8867 14.6638Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M11.8869 11.8879C13.9959 11.8879 15.7059 10.1789 15.7059 8.06888C15.7059 5.95988 13.9959 4.24988 11.8869 4.24988C9.7779 4.24988 8.0679 5.95988 8.0679 8.06888C8.0599 10.1709 9.7569 11.8809 11.8589 11.8879H11.8869Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M5.88509 10.8967C4.48909 10.7007 3.41609 9.50467 3.41309 8.05567C3.41309 6.62767 4.45409 5.44367 5.81909 5.21967" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M4.044 14.2503C2.693 14.4523 1.75 14.9253 1.75 15.9003C1.75 16.5713 2.194 17.0073 2.912 17.2813" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;


</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- start -->
                <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                    <div class="svg-icons-ov">
                        <div class="svg-icons-prev">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.24463 14.7815L10.2378 10.8913L13.652 13.5732L16.581 9.79291" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="19.9954" cy="4.20021" r="1.9222" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.9243 3.12012H7.65655C4.64511 3.12012 2.77783 5.25284 2.77783 8.26428V16.3467C2.77783 19.3581 4.6085 21.4817 7.65655 21.4817H16.2607C19.2721 21.4817 21.1394 19.3581 21.1394 16.3467V9.30776" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                        </div>
                        <div class="svg-classname">Activity.svg</div>
                        <div class="svg-icon-popup">
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-2" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-2" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                        </div>
                        <div class="modal fade" id="svg_img_Brassieresvg-2" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-2">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_img_label_Brassieresvg-2">Activity.svg</h5>
                                        <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;img src="{{asset('images/iconly/light/Activity.svg')}}"/&gt;</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="svg_inline_Brassieresvg-2" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-2">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-2">Activity.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre> &lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M7.24463 14.7815L10.2378 10.8913L13.652 13.5732L16.581 9.79291" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;circle cx="19.9954" cy="4.20021" r="1.9222" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M14.9243 3.12012H7.65655C4.64511 3.12012 2.77783 5.25284 2.77783 8.26428V16.3467C2.77783 19.3581 4.6085 21.4817 7.65655 21.4817H16.2607C19.2721 21.4817 21.1394 19.3581 21.1394 16.3467V9.30776" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                    <div class="svg-icons-ov">
                        <div class="svg-icons-prev">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.87651 15.2062C6.03251 15.2062 2.74951 15.7872 2.74951 18.1152C2.74951 20.4432 6.01251 21.0452 9.87651 21.0452C13.7215 21.0452 17.0035 20.4632 17.0035 18.1362C17.0035 15.8092 13.7415 15.2062 9.87651 15.2062Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.8766 11.8859C12.3996 11.8859 14.4446 9.84088 14.4446 7.31788C14.4446 4.79488 12.3996 2.74988 9.8766 2.74988C7.3546 2.74988 5.3096 4.79488 5.3096 7.31788C5.3006 9.83188 7.3306 11.8769 9.8456 11.8859H9.8766Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19.2036 8.66907V12.6791" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21.2497 10.674H17.1597" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                        </div>
                        <div class="svg-classname">Add-User.svg</div>
                        <div class="svg-icon-popup">
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-23" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-23" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                        </div>
                        <div class="modal fade" id="svg_img_Brassieresvg-23" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-23">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_img_label_Brassieresvg-23">Add-User.svg</h5>
                                        <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;img src="{{asset('images/iconly/light/Add-User.svg')}}"/&gt;</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="svg_inline_Brassieresvg-23" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-23">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_inline_label_Brassieresvg-23">Add-User.svg</h5>
                                        <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M9.87651 15.2062C6.03251 15.2062 2.74951 15.7872 2.74951 18.1152C2.74951 20.4432 6.01251 21.0452 9.87651 21.0452C13.7215 21.0452 17.0035 20.4632 17.0035 18.1362C17.0035 15.8092 13.7415 15.2062 9.87651 15.2062Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M9.8766 11.8859C12.3996 11.8859 14.4446 9.84088 14.4446 7.31788C14.4446 4.79488 12.3996 2.74988 9.8766 2.74988C7.3546 2.74988 5.3096 4.79488 5.3096 7.31788C5.3006 9.83188 7.3306 11.8769 9.8456 11.8859H9.8766Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M19.2036 8.66907V12.6791" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M21.2497 10.674H17.1597" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5139 21.5H8.16604C5.09968 21.5 2.74727 20.3925 3.41547 15.9348L4.1935 9.89363C4.6054 7.66937 6.02416 6.81812 7.26901 6.81812H17.4475C18.7107 6.81812 20.047 7.73345 20.523 9.89363L21.3011 15.9348C21.8686 19.8891 19.5802 21.5 16.5139 21.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16.6512 6.59842C16.6512 4.21235 14.7169 2.27805 12.3309 2.27805V2.27805C11.1819 2.27319 10.0782 2.72622 9.26406 3.53697C8.44987 4.34772 7.99218 5.44941 7.99219 6.59842H7.99219" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.2965 11.1018H15.2507" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9.4659 11.1018H9.42013" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Bag.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-34" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-34" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-34" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-34">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-34">Bag.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Bag.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-34" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-34">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-34">Bag.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M16.5139 21.5H8.16604C5.09968 21.5 2.74727 20.3925 3.41547 15.9348L4.1935 9.89363C4.6054 7.66937 6.02416 6.81812 7.26901 6.81812H17.4475C18.7107 6.81812 20.047 7.73345 20.523 9.89363L21.3011 15.9348C21.8686 19.8891 19.5802 21.5 16.5139 21.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M16.6512 6.59842C16.6512 4.21235 14.7169 2.27805 12.3309 2.27805V2.27805C11.1819 2.27319 10.0782 2.72622 9.26406 3.53697C8.44987 4.34772 7.99218 5.44941 7.99219 6.59842H7.99219" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M15.2965 11.1018H15.2507" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M9.4659 11.1018H9.42013" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.7729 9.30504V6.27304C15.7729 4.18904 14.0839 2.50004 12.0009 2.50004C9.91694 2.49104 8.21994 4.17204 8.21094 6.25604V6.27304V9.30504" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7422 21.0004H7.25778C4.90569 21.0004 3 19.0954 3 16.7454V11.2294C3 8.87937 4.90569 6.97437 7.25778 6.97437H16.7422C19.0943 6.97437 21 8.87937 21 11.2294V16.7454C21 19.0954 19.0943 21.0004 16.7422 21.0004Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Bag-3.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-35" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-35" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-35" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-35">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-35">Bag-3.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Bag-3.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-35" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-35">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-35">Bag-3.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M15.7729 9.30504V6.27304C15.7729 4.18904 14.0839 2.50004 12.0009 2.50004C9.91694 2.49104 8.21994 4.17204 8.21094 6.25604V6.27304V9.30504" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M16.7422 21.0004H7.25778C4.90569 21.0004 3 19.0954 3 16.7454V11.2294C3 8.87937 4.90569 6.97437 7.25778 6.97437H16.7422C19.0943 6.97437 21 8.87937 21 11.2294V16.7454C21 19.0954 19.0943 21.0004 16.7422 21.0004Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.739 6.15362C19.739 3.40274 17.8583 2.29999 15.1506 2.29999H8.79167C6.16711 2.29999 4.2002 3.32756 4.2002 5.97016V20.694C4.2002 21.4198 4.98115 21.8769 5.61373 21.522L11.9957 17.9421L18.3225 21.516C18.9561 21.8729 19.739 21.4158 19.739 20.689V6.15362Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8.27148 9.02799H15.5898" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Bookmark.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-36" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-36" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-36" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-36">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-36">Bookmark.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Bookmark.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-36" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-36">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-36">Bookmark.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M19.739 6.15362C19.739 3.40274 17.8583 2.29999 15.1506 2.29999H8.79167C6.16711 2.29999 4.2002 3.32756 4.2002 5.97016V20.694C4.2002 21.4198 4.98115 21.8769 5.61373 21.522L11.9957 17.9421L18.3225 21.516C18.9561 21.8729 19.739 21.4158 19.739 20.689V6.15362Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M8.27148 9.02799H15.5898" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.75 3.24988L4.83 3.60988L5.793 15.0829C5.87 16.0199 6.653 16.7389 7.593 16.7359H18.502C19.399 16.7379 20.16 16.0779 20.287 15.1899L21.236 8.63188C21.342 7.89888 20.833 7.21888 20.101 7.11288C20.037 7.10388 5.164 7.09888 5.164 7.09888" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.125 10.7948H16.898" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.15435 20.2025C7.45535 20.2025 7.69835 20.4465 7.69835 20.7465C7.69835 21.0475 7.45535 21.2915 7.15435 21.2915C6.85335 21.2915 6.61035 21.0475 6.61035 20.7465C6.61035 20.4465 6.85335 20.2025 7.15435 20.2025Z" fill="#130F26" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.4346 20.2025C18.7356 20.2025 18.9796 20.4465 18.9796 20.7465C18.9796 21.0475 18.7356 21.2915 18.4346 21.2915C18.1336 21.2915 17.8906 21.0475 17.8906 20.7465C17.8906 20.4465 18.1336 20.2025 18.4346 20.2025Z" fill="#130F26" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Buy.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-37" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-37" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-37" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-37">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-37">Buy.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Buy.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-37" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-37">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-37">Buy.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M2.75 3.24988L4.83 3.60988L5.793 15.0829C5.87 16.0199 6.653 16.7389 7.593 16.7359H18.502C19.399 16.7379 20.16 16.0779 20.287 15.1899L21.236 8.63188C21.342 7.89888 20.833 7.21888 20.101 7.11288C20.037 7.10388 5.164 7.09888 5.164 7.09888" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M14.125 10.7948H16.898" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M7.15435 20.2025C7.45535 20.2025 7.69835 20.4465 7.69835 20.7465C7.69835 21.0475 7.45535 21.2915 7.15435 21.2915C6.85335 21.2915 6.61035 21.0475 6.61035 20.7465C6.61035 20.4465 6.85335 20.2025 7.15435 20.2025Z" fill="#130F26" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M18.4346 20.2025C18.7356 20.2025 18.9796 20.4465 18.9796 20.7465C18.9796 21.0475 18.7356 21.2915 18.4346 21.2915C18.1336 21.2915 17.8906 21.0475 17.8906 20.7465C17.8906 20.4465 18.1336 20.2025 18.4346 20.2025Z" fill="#130F26" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.09277 9.40427H20.9167" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16.442 13.3097H16.4512" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.0045 13.3097H12.0137" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.55769 13.3097H7.56695" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16.442 17.1962H16.4512" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.0045 17.1962H12.0137" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.55769 17.1962H7.56695" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16.0438 2V5.29078" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.96564 2V5.29078" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2383 3.57922H7.77096C4.83427 3.57922 3 5.21516 3 8.22225V17.2719C3 20.3263 4.83427 22 7.77096 22H16.229C19.175 22 21 20.3546 21 17.3475V8.22225C21.0092 5.21516 19.1842 3.57922 16.2383 3.57922Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Calendar.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-38" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-38" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-38" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-38">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-38">Calendar.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Calendar.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-38" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-38">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-38">Calendar.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M3.09277 9.40427H20.9167" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M16.442 13.3097H16.4512" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M12.0045 13.3097H12.0137" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M7.55769 13.3097H7.56695" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M16.442 17.1962H16.4512" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M12.0045 17.1962H12.0137" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M7.55769 17.1962H7.56695" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M16.0438 2V5.29078" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M7.96564 2V5.29078" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M16.2383 3.57922H7.77096C4.83427 3.57922 3 5.21516 3 8.22225V17.2719C3 20.3263 4.83427 22 7.77096 22H16.229C19.175 22 21 20.3546 21 17.3475V8.22225C21.0092 5.21516 19.1842 3.57922 16.2383 3.57922Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5317 12.4724C15.5208 16.4604 16.4258 11.8467 18.9656 14.3848C21.4143 16.8328 22.8216 17.3232 19.7192 20.4247C19.3306 20.737 16.8616 24.4943 8.1846 15.8197C-0.493478 7.144 3.26158 4.67244 3.57397 4.28395C6.68387 1.17385 7.16586 2.58938 9.61449 5.03733C12.1544 7.5765 7.54266 8.48441 11.5317 12.4724Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Call.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-39" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-39" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-39" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-39">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-39">Call.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Call.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-39" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-39">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-39">Call.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M11.5317 12.4724C15.5208 16.4604 16.4258 11.8467 18.9656 14.3848C21.4143 16.8328 22.8216 17.3232 19.7192 20.4247C19.3306 20.737 16.8616 24.4943 8.1846 15.8197C-0.493478 7.144 3.26158 4.67244 3.57397 4.28395C6.68387 1.17385 7.16586 2.58938 9.61449 5.03733C12.1544 7.5765 7.54266 8.48441 11.5317 12.4724Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.353 2.5C18.054 2.911 20.978 5.831 21.393 9.532" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.353 6.04303C16.124 6.38703 17.508 7.77203 17.853 9.54303" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0315 12.4724C15.0205 16.4604 15.9254 11.8467 18.4653 14.3848C20.9138 16.8328 22.3222 17.3232 19.2188 20.4247C18.8302 20.737 16.3613 24.4943 7.68447 15.8197C-0.993406 7.144 2.76157 4.67244 3.07394 4.28395C6.18377 1.17385 6.66682 2.58938 9.11539 5.03733C11.6541 7.5765 7.04254 8.48441 11.0315 12.4724Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Calling.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-40" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-40" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-40" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-40">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-40">Calling.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Calling.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-40" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-40">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-40">Discovery.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M14.353 2.5C18.054 2.911 20.978 5.831 21.393 9.532" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M14.353 6.04303C16.124 6.38703 17.508 7.77203 17.853 9.54303" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M11.0315 12.4724C15.0205 16.4604 15.9254 11.8467 18.4653 14.3848C20.9138 16.8328 22.3222 17.3232 19.2188 20.4247C18.8302 20.737 16.3613 24.4943 7.68447 15.8197C-0.993406 7.144 2.76157 4.67244 3.07394 4.28395C6.18377 1.17385 6.66682 2.58938 9.11539 5.03733C11.6541 7.5765 7.04254 8.48441 11.0315 12.4724Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.3149 3.74988L15.3149 9.74988" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.3149 3.74988L21.3149 9.74988" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0315 12.4724C15.0205 16.4604 15.9254 11.8467 18.4653 14.3848C20.9138 16.8328 22.3222 17.3232 19.2188 20.4247C18.8302 20.737 16.3613 24.4943 7.68447 15.8197C-0.993406 7.144 2.76157 4.67244 3.07394 4.28395C6.18377 1.17385 6.66682 2.58938 9.11539 5.03733C11.6541 7.5765 7.04254 8.48441 11.0315 12.4724Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </div>
                    <div class="svg-classname">Call-Missed.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-41" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-41" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-41" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-41">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-41">Call-Missed.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Call-Missed.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-41" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-41">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-41">Call-Missed.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M21.3149 3.74988L15.3149 9.74988" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M15.3149 3.74988L21.3149 9.74988" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M11.0315 12.4724C15.0205 16.4604 15.9254 11.8467 18.4653 14.3848C20.9138 16.8328 22.3222 17.3232 19.2188 20.4247C18.8302 20.737 16.3613 24.4943 7.68447 15.8197C-0.993406 7.144 2.76157 4.67244 3.07394 4.28395C6.18377 1.17385 6.66682 2.58938 9.11539 5.03733C11.6541 7.5765 7.04254 8.48441 11.0315 12.4724Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.58532 14.2053C0.153838 6.91814 3.36958 4.73951 3.65413 4.38535C6.72284 1.27303 7.19885 2.68967 9.6096 5.1366C11.6406 7.20791 9.00771 8.19527 10.0867 10.6529" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12.4904 13.3824C15.7706 16.0762 16.6957 12.2233 19.0192 14.5844C21.4162 17.0313 22.7945 17.525 19.7551 20.6266C19.3977 20.9378 17.0952 24.4687 9.19971 16.7415" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.49988 21.5L19.4999 5.49996" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Call-Silent.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-42" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-42" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-42" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-42">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-42">Call-Silent.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Call-Silent.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-42" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-42">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-42">Call-Silent.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M6.58532 14.2053C0.153838 6.91814 3.36958 4.73951 3.65413 4.38535C6.72284 1.27303 7.19885 2.68967 9.6096 5.1366C11.6406 7.20791 9.00771 8.19527 10.0867 10.6529" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M12.4904 13.3824C15.7706 16.0762 16.6957 12.2233 19.0192 14.5844C21.4162 17.0313 22.7945 17.525 19.7551 20.6266C19.3977 20.9378 17.0952 24.4687 9.19971 16.7415" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M4.49988 21.5L19.4999 5.49996" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.04 4.05132C16.05 4.45332 16.359 5.85332 16.772 6.30332C17.185 6.75332 17.776 6.90632 18.103 6.90632C19.841 6.90632 21.25 8.31532 21.25 10.0523V15.8473C21.25 18.1773 19.36 20.0673 17.03 20.0673H6.97C4.639 20.0673 2.75 18.1773 2.75 15.8473V10.0523C2.75 8.31532 4.159 6.90632 5.897 6.90632C6.223 6.90632 6.814 6.75332 7.228 6.30332C7.641 5.85332 7.949 4.45332 8.959 4.05132C9.97 3.64932 14.03 3.64932 15.04 4.05132Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.4955 9.5H17.5045" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.1788 13.128C15.1788 11.372 13.7558 9.94904 11.9998 9.94904C10.2438 9.94904 8.8208 11.372 8.8208 13.128C8.8208 14.884 10.2438 16.307 11.9998 16.307C13.7558 16.307 15.1788 14.884 15.1788 13.128Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Camera.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-43" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-43" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-43" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-43">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-43">Camera.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Camera.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-43" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-43">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-43">Camera.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M15.04 4.05132C16.05 4.45332 16.359 5.85332 16.772 6.30332C17.185 6.75332 17.776 6.90632 18.103 6.90632C19.841 6.90632 21.25 8.31532 21.25 10.0523V15.8473C21.25 18.1773 19.36 20.0673 17.03 20.0673H6.97C4.639 20.0673 2.75 18.1773 2.75 15.8473V10.0523C2.75 8.31532 4.159 6.90632 5.897 6.90632C6.223 6.90632 6.814 6.75332 7.228 6.30332C7.641 5.85332 7.949 4.45332 8.959 4.05132C9.97 3.64932 14.03 3.64932 15.04 4.05132Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M17.4955 9.5H17.5045" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M15.1788 13.128C15.1788 11.372 13.7558 9.94904 11.9998 9.94904C10.2438 9.94904 8.8208 11.372 8.8208 13.128C8.8208 14.884 10.2438 16.307 11.9998 16.307C13.7558 16.307 15.1788 14.884 15.1788 13.128Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3 6.5C3 3.87479 3.02811 3 6.5 3C9.97189 3 10 3.87479 10 6.5C10 9.12521 10.0111 10 6.5 10C2.98893 10 3 9.12521 3 6.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14 6.5C14 3.87479 14.0281 3 17.5 3C20.9719 3 21 3.87479 21 6.5C21 9.12521 21.0111 10 17.5 10C13.9889 10 14 9.12521 14 6.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3 17.5C3 14.8748 3.02811 14 6.5 14C9.97189 14 10 14.8748 10 17.5C10 20.1252 10.0111 21 6.5 21C2.98893 21 3 20.1252 3 17.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14 17.5C14 14.8748 14.0281 14 17.5 14C20.9719 14 21 14.8748 21 17.5C21 20.1252 21.0111 21 17.5 21C13.9889 21 14 20.1252 14 17.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Category.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-44" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-44" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-44" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-44">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-44">Category.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Category.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-44" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-44">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-44">Category.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M3 6.5C3 3.87479 3.02811 3 6.5 3C9.97189 3 10 3.87479 10 6.5C10 9.12521 10.0111 10 6.5 10C2.98893 10 3 9.12521 3 6.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M14 6.5C14 3.87479 14.0281 3 17.5 3C20.9719 3 21 3.87479 21 6.5C21 9.12521 21.0111 10 17.5 10C13.9889 10 14 9.12521 14 6.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M3 17.5C3 14.8748 3.02811 14 6.5 14C9.97189 14 10 14.8748 10 17.5C10 20.1252 10.0111 21 6.5 21C2.98893 21 3 20.1252 3 17.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M14 17.5C14 14.8748 14.0281 14 17.5 14C20.9719 14 21 14.8748 21 17.5C21 20.1252 21.0111 21 17.5 21C13.9889 21 14 20.1252 14 17.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.37121 10.2017V17.0619" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.0382 6.91913V17.0618" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16.6285 13.8268V17.0619" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Chart.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-45" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-45" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-45" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-45">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-45">Chart.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Chart.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-45" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-45">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-45">Chart.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M7.37121 10.2017V17.0619" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M12.0382 6.91913V17.0618" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M16.6285 13.8268V17.0619" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.0714 19.0699C16.0152 22.1263 11.4898 22.7867 7.78642 21.074C7.23971 20.8539 6.79148 20.676 6.36537 20.676C5.17849 20.683 3.70117 21.8339 2.93336 21.067C2.16555 20.2991 3.31726 18.8206 3.31726 17.6266C3.31726 17.2004 3.14642 16.7602 2.92632 16.2124C1.21283 12.5096 1.87411 7.98269 4.93026 4.92721C8.8316 1.02443 15.17 1.02443 19.0714 4.9262C22.9797 8.83501 22.9727 15.1681 19.0714 19.0699Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.9393 12.413H15.9483" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.9306 12.413H11.9396" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M7.92128 12.413H7.93028" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>


                    </div>
                    <div class="svg-classname">Chat.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-46" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-46" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-46" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-46">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-46">Chat.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Chat.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-46" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-46">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-46">Chat.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M19.0714 19.0699C16.0152 22.1263 11.4898 22.7867 7.78642 21.074C7.23971 20.8539 6.79148 20.676 6.36537 20.676C5.17849 20.683 3.70117 21.8339 2.93336 21.067C2.16555 20.2991 3.31726 18.8206 3.31726 17.6266C3.31726 17.2004 3.14642 16.7602 2.92632 16.2124C1.21283 12.5096 1.87411 7.98269 4.93026 4.92721C8.8316 1.02443 15.17 1.02443 19.0714 4.9262C22.9797 8.83501 22.9727 15.1681 19.0714 19.0699Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M15.9393 12.413H15.9483" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M11.9306 12.413H11.9396" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M7.92128 12.413H7.93028" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.3955 9.59491L9.60352 14.3869" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.3971 14.3898L9.60107 9.59277" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3345 2.75018H7.66549C4.64449 2.75018 2.75049 4.88918 2.75049 7.91618V16.0842C2.75049 19.1112 4.63549 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91618C21.2505 4.88918 19.3645 2.75018 16.3345 2.75018Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Close-Square.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-47" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-47" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-47" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-47">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-47">Close-Square.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Close-Square.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-47" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-47">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-47">Close-Square.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M14.3955 9.59491L9.60352 14.3869" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M14.3971 14.3898L9.60107 9.59277" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M16.3345 2.75018H7.66549C4.64449 2.75018 2.75049 4.88918 2.75049 7.91618V16.0842C2.75049 19.1112 4.63549 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91618C21.2505 4.88918 19.3645 2.75018 16.3345 2.75018Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.75012C17.108 2.75012 21.25 6.89112 21.25 12.0001C21.25 17.1081 17.108 21.2501 12 21.2501C6.891 21.2501 2.75 17.1081 2.75 12.0001C2.75 6.89112 6.891 2.75012 12 2.75012Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.9951 8.20422V12.6232" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.995 15.7961H12.005" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Danger-Circle.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-48" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-48" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-48" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-48">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-48">Danger-Circle.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Danger-Circle.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-48" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-48">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-48">Danger-Circle.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.75012C17.108 2.75012 21.25 6.89112 21.25 12.0001C21.25 17.1081 17.108 21.2501 12 21.2501C6.891 21.2501 2.75 17.1081 2.75 12.0001C2.75 6.89112 6.891 2.75012 12 2.75012Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M11.9951 8.20422V12.6232" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M11.995 15.7961H12.005" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.81409 20.4368H19.1971C20.7791 20.4368 21.7721 18.7268 20.9861 17.3528L13.8001 4.78781C13.0091 3.40481 11.0151 3.40381 10.2231 4.78681L3.02509 17.3518C2.23909 18.7258 3.23109 20.4368 4.81409 20.4368Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12.0024 13.4148V10.3148" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.995 16.5H12.005" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Danger-Triangle.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-49" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-49" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-49" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-49">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-49">Danger-Triangle.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Danger-Triangle.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-49" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-49">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-49">Danger-Triangle.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M4.81409 20.4368H19.1971C20.7791 20.4368 21.7721 18.7268 20.9861 17.3528L13.8001 4.78781C13.0091 3.40481 11.0151 3.40381 10.2231 4.78681L3.02509 17.3518C2.23909 18.7258 3.23109 20.4368 4.81409 20.4368Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M12.0024 13.4148V10.3148" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M11.995 16.5H12.005" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.3248 9.4682C19.3248 9.4682 18.7818 16.2032 18.4668 19.0402C18.3168 20.3952 17.4798 21.1892 16.1088 21.2142C13.4998 21.2612 10.8878 21.2642 8.27979 21.2092C6.96079 21.1822 6.13779 20.3782 5.99079 19.0472C5.67379 16.1852 5.13379 9.4682 5.13379 9.4682" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20.708 6.23969H3.75" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.4406 6.23967C16.6556 6.23967 15.9796 5.68467 15.8256 4.91567L15.5826 3.69967C15.4326 3.13867 14.9246 2.75067 14.3456 2.75067H10.1126C9.53358 2.75067 9.02558 3.13867 8.87558 3.69967L8.63258 4.91567C8.47858 5.68467 7.80258 6.23967 7.01758 6.23967" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Delete.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-50" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-50" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-50" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-50">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-50">Delete.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Delete.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-50" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-50">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-50">Delete.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M19.3248 9.4682C19.3248 9.4682 18.7818 16.2032 18.4668 19.0402C18.3168 20.3952 17.4798 21.1892 16.1088 21.2142C13.4998 21.2612 10.8878 21.2642 8.27979 21.2092C6.96079 21.1822 6.13779 20.3782 5.99079 19.0472C5.67379 16.1852 5.13379 9.4682 5.13379 9.4682" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M20.708 6.23969H3.75" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M17.4406 6.23967C16.6556 6.23967 15.9796 5.68467 15.8256 4.91567L15.5826 3.69967C15.4326 3.13867 14.9246 2.75067 14.3456 2.75067H10.1126C9.53358 2.75067 9.02558 3.13867 8.87558 3.69967L8.63258 4.91567C8.47858 5.68467 7.80258 6.23967 7.01758 6.23967" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.79476 7.05601C4.79476 5.80701 5.80676 4.79501 7.05576 4.79401H8.08476C8.68176 4.79401 9.25376 4.55701 9.67776 4.13701L10.3968 3.41701C11.2778 2.53101 12.7098 2.52701 13.5958 3.40801L13.5968 3.40901L13.6058 3.41701L14.3258 4.13701C14.7498 4.55801 15.3218 4.79401 15.9188 4.79401H16.9468C18.1958 4.79401 19.2088 5.80601 19.2088 7.05601V8.08301C19.2088 8.68001 19.4448 9.25301 19.8658 9.67701L20.5858 10.397C21.4718 11.278 21.4768 12.71 20.5958 13.596L20.5948 13.597L20.5858 13.606L19.8658 14.326C19.4448 14.749 19.2088 15.321 19.2088 15.918V16.947C19.2088 18.196 18.1968 19.208 16.9478 19.208H16.9468H15.9168C15.3198 19.208 14.7468 19.445 14.3238 19.866L13.6038 20.585C12.7238 21.471 11.2928 21.476 10.4068 20.597C10.4058 20.596 10.4048 20.595 10.4038 20.594L10.3948 20.585L9.67576 19.866C9.25276 19.445 8.67976 19.209 8.08276 19.208H7.05576C5.80676 19.208 4.79476 18.196 4.79476 16.947V15.916C4.79476 15.319 4.55776 14.747 4.13676 14.324L3.41776 13.604C2.53176 12.724 2.52676 11.293 3.40676 10.407C3.40676 10.406 3.40776 10.405 3.40876 10.404L3.41776 10.395L4.13676 9.67501C4.55776 9.25101 4.79476 8.67901 4.79476 8.08101V7.05601" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.43164 14.5717L14.5716 9.4317" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.4955 14.5H14.5045" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.4955 9.5H9.5045" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Discount.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-51" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-51" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-51" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-51">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-51">Discount.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Discount.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-51" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-51">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-51">Discount.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M4.79476 7.05601C4.79476 5.80701 5.80676 4.79501 7.05576 4.79401H8.08476C8.68176 4.79401 9.25376 4.55701 9.67776 4.13701L10.3968 3.41701C11.2778 2.53101 12.7098 2.52701 13.5958 3.40801L13.5968 3.40901L13.6058 3.41701L14.3258 4.13701C14.7498 4.55801 15.3218 4.79401 15.9188 4.79401H16.9468C18.1958 4.79401 19.2088 5.80601 19.2088 7.05601V8.08301C19.2088 8.68001 19.4448 9.25301 19.8658 9.67701L20.5858 10.397C21.4718 11.278 21.4768 12.71 20.5958 13.596L20.5948 13.597L20.5858 13.606L19.8658 14.326C19.4448 14.749 19.2088 15.321 19.2088 15.918V16.947C19.2088 18.196 18.1968 19.208 16.9478 19.208H16.9468H15.9168C15.3198 19.208 14.7468 19.445 14.3238 19.866L13.6038 20.585C12.7238 21.471 11.2928 21.476 10.4068 20.597C10.4058 20.596 10.4048 20.595 10.4038 20.594L10.3948 20.585L9.67576 19.866C9.25276 19.445 8.67976 19.209 8.08276 19.208H7.05576C5.80676 19.208 4.79476 18.196 4.79476 16.947V15.916C4.79476 15.319 4.55776 14.747 4.13676 14.324L3.41776 13.604C2.53176 12.724 2.52676 11.293 3.40676 10.407C3.40676 10.406 3.40776 10.405 3.40876 10.404L3.41776 10.395L4.13676 9.67501C4.55776 9.25101 4.79476 8.67901 4.79476 8.08101V7.05601" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M9.43164 14.5717L14.5716 9.4317" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M14.4955 14.5H14.5045" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M9.4955 9.5H9.5045" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.27002 14.9519L9.8627 9.8627L14.9519 8.27002L13.3593 13.3593L8.27002 14.9519Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle cx="11.611" cy="11.611" r="9.61098" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Discovery.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-52" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-52" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-52" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-52">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-52">Discovery.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Discovery.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-52" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-52">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-52">Discovery.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M8.27002 14.9519L9.8627 9.8627L14.9519 8.27002L13.3593 13.3593L8.27002 14.9519Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;circle cx="11.611" cy="11.611" r="9.61098" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.7161 16.2234H8.49609" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.7161 12.0369H8.49609" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.2511 7.86011H8.49609" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9085 2.74982C15.9085 2.74982 8.23149 2.75382 8.21949 2.75382C5.45949 2.77082 3.75049 4.58682 3.75049 7.35682V16.5528C3.75049 19.3368 5.47249 21.1598 8.25649 21.1598C8.25649 21.1598 15.9325 21.1568 15.9455 21.1568C18.7055 21.1398 20.4155 19.3228 20.4155 16.5528V7.35682C20.4155 4.57282 18.6925 2.74982 15.9085 2.74982Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Document.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-53" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-53" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-53" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-53">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-53">Document.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Document.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-53" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-53">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-53">Document.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M15.7161 16.2234H8.49609" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M15.7161 12.0369H8.49609" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M11.2511 7.86011H8.49609" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M15.9085 2.74982C15.9085 2.74982 8.23149 2.75382 8.21949 2.75382C5.45949 2.77082 3.75049 4.58682 3.75049 7.35682V16.5528C3.75049 19.3368 5.47249 21.1598 8.25649 21.1598C8.25649 21.1598 15.9325 21.1568 15.9455 21.1568C18.7055 21.1398 20.4155 19.3228 20.4155 16.5528V7.35682C20.4155 4.57282 18.6925 2.74982 15.9085 2.74982Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.1221 15.4361L12.1221 3.39508" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.0381 12.5084L12.1221 15.4364L9.20609 12.5084" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.7551 8.12799H17.6881C19.7231 8.12799 21.3721 9.77699 21.3721 11.813V16.697C21.3721 18.727 19.7271 20.372 17.6971 20.372L6.55707 20.372C4.52207 20.372 2.87207 18.722 2.87207 16.687V11.802C2.87207 9.77299 4.51807 8.12799 6.54707 8.12799L7.48907 8.12799" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Download.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-54" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-54" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-54" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-54">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-54">Download.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Download.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-54" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-54">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-54">Download.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M12.1221 15.4361L12.1221 3.39508" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M15.0381 12.5084L12.1221 15.4364L9.20609 12.5084" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M16.7551 8.12799H17.6881C19.7231 8.12799 21.3721 9.77699 21.3721 11.813V16.697C21.3721 18.727 19.7271 20.372 17.6971 20.372L6.55707 20.372C4.52207 20.372 2.87207 18.722 2.87207 16.687V11.802C2.87207 9.77299 4.51807 8.12799 6.54707 8.12799L7.48907 8.12799" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.7476 20.4429H21.0002" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.021 6.00092L16.4732 10.188" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Edit.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-55" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-55" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-55" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-55">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-55">Edit.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Edit.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-55" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-55">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-55">Edit.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M13.7476 20.4429H21.0002" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M11.021 6.00092L16.4732 10.188" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.4925 2.789H7.75349C4.67849 2.789 2.75049 4.966 2.75049 8.048V16.362C2.75049 19.444 4.66949 21.621 7.75349 21.621H16.5775C19.6625 21.621 21.5815 19.444 21.5815 16.362V12.334" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.9209L16.3011 3.44793C17.2321 2.51793 18.7411 2.51793 19.6721 3.44793L20.8891 4.66493C21.8201 5.59593 21.8201 7.10593 20.8891 8.03593L13.3801 15.5449C12.9731 15.9519 12.4211 16.1809 11.8451 16.1809H8.09912L8.19312 12.4009C8.20712 11.8449 8.43412 11.3149 8.82812 10.9209Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.1655 4.60254L19.7315 9.16854" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Edit-Square.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-56" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-56" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-56" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-56">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-56">Edit-Square.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Edit-Square.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-56" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-56">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-56">Edit-Square.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M11.4925 2.789H7.75349C4.67849 2.789 2.75049 4.966 2.75049 8.048V16.362C2.75049 19.444 4.66949 21.621 7.75349 21.621H16.5775C19.6625 21.621 21.5815 19.444 21.5815 16.362V12.334" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.9209L16.3011 3.44793C17.2321 2.51793 18.7411 2.51793 19.6721 3.44793L20.8891 4.66493C21.8201 5.59593 21.8201 7.10593 20.8891 8.03593L13.3801 15.5449C12.9731 15.9519 12.4211 16.1809 11.8451 16.1809H8.09912L8.19312 12.4009C8.20712 11.8449 8.43412 11.3149 8.82812 10.9209Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M15.1655 4.60254L19.7315 9.16854" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.33 16.5929H4.0293" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.1406 6.90036H19.4413" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.72629 6.84625C8.72629 5.5506 7.66813 4.5 6.36314 4.5C5.05816 4.5 4 5.5506 4 6.84625C4 8.14191 5.05816 9.19251 6.36314 9.19251C7.66813 9.19251 8.72629 8.14191 8.72629 6.84625Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.0002 16.5538C20.0002 15.2581 18.9429 14.2075 17.6379 14.2075C16.3321 14.2075 15.2739 15.2581 15.2739 16.5538C15.2739 17.8494 16.3321 18.9 17.6379 18.9C18.9429 18.9 20.0002 17.8494 20.0002 16.5538Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Filter.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-57" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-57" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-57" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-57">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-57">Filter.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Filter.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-57" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-57">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-57">Filter.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M10.33 16.5929H4.0293" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M13.1406 6.90036H19.4413" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M8.72629 6.84625C8.72629 5.5506 7.66813 4.5 6.36314 4.5C5.05816 4.5 4 5.5506 4 6.84625C4 8.14191 5.05816 9.19251 6.36314 9.19251C7.66813 9.19251 8.72629 8.14191 8.72629 6.84625Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M20.0002 16.5538C20.0002 15.2581 18.9429 14.2075 17.6379 14.2075C16.3321 14.2075 15.2739 15.2581 15.2739 16.5538C15.2739 17.8494 16.3321 18.9 17.6379 18.9C18.9429 18.9 20.0002 17.8494 20.0002 16.5538Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.56517 3C3.70108 3 3 3.71286 3 4.5904V5.52644C3 6.17647 3.24719 6.80158 3.68936 7.27177L8.5351 12.4243L8.53723 12.4211C9.47271 13.3788 9.99905 14.6734 9.99905 16.0233V20.5952C9.99905 20.9007 10.3187 21.0957 10.584 20.9516L13.3436 19.4479C13.7602 19.2204 14.0201 18.7784 14.0201 18.2984V16.0114C14.0201 14.6691 14.539 13.3799 15.466 12.4243L20.3117 7.27177C20.7528 6.80158 21 6.17647 21 5.52644V4.5904C21 3.71286 20.3 3 19.4359 3H4.56517Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Filter-3.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-58" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-58" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-58" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-58">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-58">Filter-3.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Filter-3.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-58" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-58">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-58">Filter-3.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M4.56517 3C3.70108 3 3 3.71286 3 4.5904V5.52644C3 6.17647 3.24719 6.80158 3.68936 7.27177L8.5351 12.4243L8.53723 12.4211C9.47271 13.3788 9.99905 14.6734 9.99905 16.0233V20.5952C9.99905 20.9007 10.3187 21.0957 10.584 20.9516L13.3436 19.4479C13.7602 19.2204 14.0201 18.7784 14.0201 18.2984V16.0114C14.0201 14.6691 14.539 13.3799 15.466 12.4243L20.3117 7.27177C20.7528 6.80158 21 6.17647 21 5.52644V4.5904C21 3.71286 20.3 3 19.4359 3H4.56517Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.419 15.7321C21.419 19.3101 19.31 21.4191 15.732 21.4191H7.95C4.363 21.4191 2.25 19.3101 2.25 15.7321V7.93212C2.25 4.35912 3.564 2.25012 7.143 2.25012H9.143C9.861 2.25112 10.537 2.58812 10.967 3.16312L11.88 4.37712C12.312 4.95112 12.988 5.28912 13.706 5.29012H16.536C20.123 5.29012 21.447 7.11612 21.447 10.7671L21.419 15.7321Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.48096 14.463H16.216" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Folder.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-60" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-60" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-60" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-60">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-60">Folder.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Folder.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-60" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-60">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-60">Folder.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M21.419 15.7321C21.419 19.3101 19.31 21.4191 15.732 21.4191H7.95C4.363 21.4191 2.25 19.3101 2.25 15.7321V7.93212C2.25 4.35912 3.564 2.25012 7.143 2.25012H9.143C9.861 2.25112 10.537 2.58812 10.967 3.16312L11.88 4.37712C12.312 4.95112 12.988 5.28912 13.706 5.29012H16.536C20.123 5.29012 21.447 7.11612 21.447 10.7671L21.419 15.7321Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M7.48096 14.463H16.216" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.84819 12.314V16.059" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.7591 14.1867H6.93799" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.3661 12.428H15.259" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.1795 16.0026H17.0725" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.07227 2C8.07227 2.74048 8.68475 3.34076 9.44029 3.34076H10.4968C11.6624 3.34492 12.6065 4.27026 12.6118 5.41266V6.08771" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4283 21.9626C13.4231 22.0135 10.473 22.0114 7.57275 21.9626C4.3535 21.9626 2 19.6664 2 16.5113V11.8617C2 8.70664 4.3535 6.41041 7.57275 6.41041C10.4889 6.36056 13.4411 6.3616 16.4283 6.41041C19.6476 6.41041 22 8.70767 22 11.8617V16.5113C22 19.6664 19.6476 21.9626 16.4283 21.9626Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Game.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-61" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-61" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-61" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-61">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-61">Game.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Game.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-61" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-61">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-61">Game.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M8.84819 12.314V16.059" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M10.7591 14.1867H6.93799" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M15.3661 12.428H15.259" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M17.1795 16.0026H17.0725" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M8.07227 2C8.07227 2.74048 8.68475 3.34076 9.44029 3.34076H10.4968C11.6624 3.34492 12.6065 4.27026 12.6118 5.41266V6.08771" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M16.4283 21.9626C13.4231 22.0135 10.473 22.0114 7.57275 21.9626C4.3535 21.9626 2 19.6664 2 16.5113V11.8617C2 8.70664 4.3535 6.41041 7.57275 6.41041C10.4889 6.36056 13.4411 6.3616 16.4283 6.41041C19.6476 6.41041 22 8.70767 22 11.8617V16.5113C22 19.6664 19.6476 21.9626 16.4283 21.9626Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2777 13.8891C17.9524 13.8891 18.5188 14.446 18.4156 15.1123C17.8103 19.0323 14.4545 21.9428 10.4072 21.9428C5.92928 21.9428 2.2998 18.3134 2.2998 13.8365C2.2998 10.1481 5.10191 6.7123 8.25665 5.93546C8.93454 5.76809 9.62928 6.24493 9.62928 6.94283C9.62928 11.6712 9.78823 12.8944 10.6861 13.5597C11.584 14.2249 12.6398 13.8891 17.2777 13.8891Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.6921 9.95157C21.7458 6.91368 18.0142 2.01684 13.4669 2.10105C13.1132 2.10736 12.83 2.4021 12.8142 2.75473C12.6995 5.25263 12.8542 8.48947 12.9406 9.95684C12.9669 10.4137 13.3258 10.7726 13.7816 10.7989C15.29 10.8853 18.6448 11.0032 21.1069 10.6305C21.4416 10.58 21.6869 10.2895 21.6921 9.95157Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Graph.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-62" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-62" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-62" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-62">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-62">Graph.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Graph.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-62" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-62">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-62">Graph.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M17.2777 13.8891C17.9524 13.8891 18.5188 14.446 18.4156 15.1123C17.8103 19.0323 14.4545 21.9428 10.4072 21.9428C5.92928 21.9428 2.2998 18.3134 2.2998 13.8365C2.2998 10.1481 5.10191 6.7123 8.25665 5.93546C8.93454 5.76809 9.62928 6.24493 9.62928 6.94283C9.62928 11.6712 9.78823 12.8944 10.6861 13.5597C11.584 14.2249 12.6398 13.8891 17.2777 13.8891Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M21.6921 9.95157C21.7458 6.91368 18.0142 2.01684 13.4669 2.10105C13.1132 2.10736 12.83 2.4021 12.8142 2.75473C12.6995 5.25263 12.8542 8.48947 12.9406 9.95684C12.9669 10.4137 13.3258 10.7726 13.7816 10.7989C15.29 10.8853 18.6448 11.0032 21.1069 10.6305C21.4416 10.58 21.6869 10.2895 21.6921 9.95157Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.87187 11.5983C1.79887 8.24832 3.05287 4.41932 6.56987 3.28632C8.41987 2.68932 10.4619 3.04132 11.9999 4.19832C13.4549 3.07332 15.5719 2.69332 17.4199 3.28632C20.9369 4.41932 22.1989 8.24832 21.1269 11.5983C19.4569 16.9083 11.9999 20.9983 11.9999 20.9983C11.9999 20.9983 4.59787 16.9703 2.87187 11.5983Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 6.70001C17.07 7.04601 17.826 8.00101 17.917 9.12201" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Heart.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-63" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-63" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-63" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-63">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-63">Heart.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Heart.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-63" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-63">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-63">Heart.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M2.87187 11.5983C1.79887 8.24832 3.05287 4.41932 6.56987 3.28632C8.41987 2.68932 10.4619 3.04132 11.9999 4.19832C13.4549 3.07332 15.5719 2.69332 17.4199 3.28632C20.9369 4.41932 22.1989 8.24832 21.1269 11.5983C19.4569 16.9083 11.9999 20.9983 11.9999 20.9983C11.9999 20.9983 4.59787 16.9703 2.87187 11.5983Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M16 6.70001C17.07 7.04601 17.826 8.00101 17.917 9.12201" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.76045 14.3668C9.18545 13.7928 8.83545 13.0128 8.83545 12.1378C8.83545 10.3848 10.2474 8.9718 11.9994 8.9718C12.8664 8.9718 13.6644 9.3228 14.2294 9.8968" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.1049 12.6989C14.8729 13.9889 13.8569 15.0069 12.5679 15.2409" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6.65451 17.4723C5.06751 16.2263 3.72351 14.4063 2.74951 12.1373C3.73351 9.85829 5.08651 8.02829 6.68351 6.77229C8.27051 5.51629 10.1015 4.83429 11.9995 4.83429C13.9085 4.83429 15.7385 5.52629 17.3355 6.79129" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19.4473 8.99078C20.1353 9.90478 20.7403 10.9598 21.2493 12.1368C19.2823 16.6938 15.8063 19.4388 11.9993 19.4388C11.1363 19.4388 10.2853 19.2988 9.46729 19.0258" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19.8868 4.24957L4.11279 20.0236" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Hide.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-64" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-64" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-64" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-64">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-64">Hide.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Hide.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-64" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-64">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-64">Hide.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M9.76045 14.3668C9.18545 13.7928 8.83545 13.0128 8.83545 12.1378C8.83545 10.3848 10.2474 8.9718 11.9994 8.9718C12.8664 8.9718 13.6644 9.3228 14.2294 9.8968" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M15.1049 12.6989C14.8729 13.9889 13.8569 15.0069 12.5679 15.2409" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M6.65451 17.4723C5.06751 16.2263 3.72351 14.4063 2.74951 12.1373C3.73351 9.85829 5.08651 8.02829 6.68351 6.77229C8.27051 5.51629 10.1015 4.83429 11.9995 4.83429C13.9085 4.83429 15.7385 5.52629 17.3355 6.79129" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M19.4473 8.99078C20.1353 9.90478 20.7403 10.9598 21.2493 12.1368C19.2823 16.6938 15.8063 19.4388 11.9993 19.4388C11.1363 19.4388 10.2853 19.2988 9.46729 19.0258" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M19.8868 4.24957L4.11279 20.0236" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.15722 20.7714V17.7047C9.1572 16.9246 9.79312 16.2908 10.581 16.2856H13.4671C14.2587 16.2856 14.9005 16.9209 14.9005 17.7047V17.7047V20.7809C14.9003 21.4432 15.4343 21.9845 16.103 22H18.0271C19.9451 22 21.5 20.4607 21.5 18.5618V18.5618V9.83784C21.4898 9.09083 21.1355 8.38935 20.538 7.93303L13.9577 2.6853C12.8049 1.77157 11.1662 1.77157 10.0134 2.6853L3.46203 7.94256C2.86226 8.39702 2.50739 9.09967 2.5 9.84736V18.5618C2.5 20.4607 4.05488 22 5.97291 22H7.89696C8.58235 22 9.13797 21.4499 9.13797 20.7714V20.7714" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Home.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-65" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-65" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-65" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-65">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-65">Home.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Home.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-65" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-65">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-65">Home.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M9.15722 20.7714V17.7047C9.1572 16.9246 9.79312 16.2908 10.581 16.2856H13.4671C14.2587 16.2856 14.9005 16.9209 14.9005 17.7047V17.7047V20.7809C14.9003 21.4432 15.4343 21.9845 16.103 22H18.0271C19.9451 22 21.5 20.4607 21.5 18.5618V18.5618V9.83784C21.4898 9.09083 21.1355 8.38935 20.538 7.93303L13.9577 2.6853C12.8049 1.77157 11.1662 1.77157 10.0134 2.6853L3.46203 7.94256C2.86226 8.39702 2.50739 9.09967 2.5 9.84736V18.5618C2.5 20.4607 4.05488 22 5.97291 22H7.89696C8.58235 22 9.13797 21.4499 9.13797 20.7714V20.7714" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.21 7.89918V16.0502C21.21 19.0702 19.32 21.2002 16.3 21.2002H7.65C4.63 21.2002 2.75 19.0702 2.75 16.0502V7.89918C2.75 4.87918 4.64 2.75018 7.65 2.75018H16.3C19.32 2.75018 21.21 4.87918 21.21 7.89918Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5.28125 16.4309L6.80925 14.8179C7.34025 14.2549 8.22525 14.2279 8.78925 14.7579C8.80625 14.7749 9.72625 15.7099 9.72625 15.7099C10.2813 16.2749 11.1883 16.2839 11.7533 15.7299C11.7903 15.6939 14.0872 12.9079 14.0872 12.9079C14.6792 12.1889 15.7422 12.0859 16.4622 12.6789C16.5102 12.7189 18.6803 14.9459 18.6803 14.9459" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3127 9.13309C10.3127 10.1021 9.52769 10.8871 8.55869 10.8871C7.58969 10.8871 6.80469 10.1021 6.80469 9.13309C6.80469 8.16409 7.58969 7.37909 8.55869 7.37909C9.52769 7.38009 10.3127 8.16409 10.3127 9.13309Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Image.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-66" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-66" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-66" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-66">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-66">Image.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Image.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-66" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-66">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-66">Image.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M21.21 7.89918V16.0502C21.21 19.0702 19.32 21.2002 16.3 21.2002H7.65C4.63 21.2002 2.75 19.0702 2.75 16.0502V7.89918C2.75 4.87918 4.64 2.75018 7.65 2.75018H16.3C19.32 2.75018 21.21 4.87918 21.21 7.89918Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M5.28125 16.4309L6.80925 14.8179C7.34025 14.2549 8.22525 14.2279 8.78925 14.7579C8.80625 14.7749 9.72625 15.7099 9.72625 15.7099C10.2813 16.2749 11.1883 16.2839 11.7533 15.7299C11.7903 15.6939 14.0872 12.9079 14.0872 12.9079C14.6792 12.1889 15.7422 12.0859 16.4622 12.6789C16.5102 12.7189 18.6803 14.9459 18.6803 14.9459" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M10.3127 9.13309C10.3127 10.1021 9.52769 10.8871 8.55869 10.8871C7.58969 10.8871 6.80469 10.1021 6.80469 9.13309C6.80469 8.16409 7.58969 7.37909 8.55869 7.37909C9.52769 7.38009 10.3127 8.16409 10.3127 9.13309Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3025 2.74982H7.65051C4.63851 2.74982 2.74951 4.88382 2.74951 7.90382V16.0498C2.74951 19.0698 4.63051 21.2038 7.65051 21.2038H16.2975C19.3225 21.2038 21.2025 19.0698 21.2025 16.0498V7.90382C21.2065 4.88382 19.3255 2.74982 16.3025 2.74982Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.7027 8.78503C10.7027 9.80503 9.87674 10.631 8.85674 10.631C7.83774 10.631 7.01074 9.80503 7.01074 8.78503C7.01074 7.76503 7.83774 6.93903 8.85674 6.93903C9.87574 6.94003 10.7017 7.76603 10.7027 8.78503Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21.207 14.951C20.284 14.001 18.509 12.082 16.579 12.082C14.648 12.082 13.535 16.315 11.678 16.315C9.821 16.315 8.134 14.401 6.646 15.628C5.158 16.854 3.75 19.361 3.75 19.361" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Image-3.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-67" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-67" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-67" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-67">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-67">Image-3.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Image-3.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-67" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-67">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-67">Image-3.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M16.3025 2.74982H7.65051C4.63851 2.74982 2.74951 4.88382 2.74951 7.90382V16.0498C2.74951 19.0698 4.63051 21.2038 7.65051 21.2038H16.2975C19.3225 21.2038 21.2025 19.0698 21.2025 16.0498V7.90382C21.2065 4.88382 19.3255 2.74982 16.3025 2.74982Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M10.7027 8.78503C10.7027 9.80503 9.87674 10.631 8.85674 10.631C7.83774 10.631 7.01074 9.80503 7.01074 8.78503C7.01074 7.76503 7.83774 6.93903 8.85674 6.93903C9.87574 6.94003 10.7017 7.76603 10.7027 8.78503Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M21.207 14.951C20.284 14.001 18.509 12.082 16.579 12.082C14.648 12.082 13.535 16.315 11.678 16.315C9.821 16.315 8.134 14.401 6.646 15.628C5.158 16.854 3.75 19.361 3.75 19.361" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.334 2.75012H7.665C4.644 2.75012 2.75 4.88912 2.75 7.91612V16.0841C2.75 19.1111 4.635 21.2501 7.665 21.2501H16.333C19.364 21.2501 21.25 19.1111 21.25 16.0841V7.91612C21.25 4.88912 19.364 2.75012 16.334 2.75012Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.9946 16.0001V12.0001" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.9896 8.20435H11.9996" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Info-Square.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-68" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-68" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-68" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-68">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-68">Info-Square.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Info-Square.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-68" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-68">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-68">Info-Square.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M16.334 2.75012H7.665C4.644 2.75012 2.75 4.88912 2.75 7.91612V16.0841C2.75 19.1111 4.635 21.2501 7.665 21.2501H16.333C19.364 21.2501 21.25 19.1111 21.25 16.0841V7.91612C21.25 4.88912 19.364 2.75012 16.334 2.75012Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M11.9946 16.0001V12.0001" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M11.9896 8.20435H11.9996" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 10.5005C14.5 9.11924 13.3808 8 12.0005 8C10.6192 8 9.5 9.11924 9.5 10.5005C9.5 11.8808 10.6192 13 12.0005 13C13.3808 13 14.5 11.8808 14.5 10.5005Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9995 21C10.801 21 4.5 15.8984 4.5 10.5633C4.5 6.38664 7.8571 3 11.9995 3C16.1419 3 19.5 6.38664 19.5 10.5633C19.5 15.8984 13.198 21 11.9995 21Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Location.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-69" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-69" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-69" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-69">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-69">Location.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Location.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-69" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-69">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-69">Location.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 10.5005C14.5 9.11924 13.3808 8 12.0005 8C10.6192 8 9.5 9.11924 9.5 10.5005C9.5 11.8808 10.6192 13 12.0005 13C13.3808 13 14.5 11.8808 14.5 10.5005Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M11.9995 21C10.801 21 4.5 15.8984 4.5 10.5633C4.5 6.38664 7.8571 3 11.9995 3C16.1419 3 19.5 6.38664 19.5 10.5633C19.5 15.8984 13.198 21 11.9995 21Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.4232 9.4478V7.3008C16.4232 4.7878 14.3852 2.7498 11.8722 2.7498C9.35925 2.7388 7.31325 4.7668 7.30225 7.2808V7.3008V9.4478" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.683 21.2496H8.042C5.948 21.2496 4.25 19.5526 4.25 17.4576V13.1686C4.25 11.0736 5.948 9.37659 8.042 9.37659H15.683C17.777 9.37659 19.475 11.0736 19.475 13.1686V17.4576C19.475 19.5526 17.777 21.2496 15.683 21.2496Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.8628 14.2027V16.4237" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Lock.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-70" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-70" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-70" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-70">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-70">Lock.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Lock.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-70" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-70">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-70">Lock.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M16.4232 9.4478V7.3008C16.4232 4.7878 14.3852 2.7498 11.8722 2.7498C9.35925 2.7388 7.31325 4.7668 7.30225 7.2808V7.3008V9.4478" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M15.683 21.2496H8.042C5.948 21.2496 4.25 19.5526 4.25 17.4576V13.1686C4.25 11.0736 5.948 9.37659 8.042 9.37659H15.683C17.777 9.37659 19.475 11.0736 19.475 13.1686V17.4576C19.475 19.5526 17.777 21.2496 15.683 21.2496Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M11.8628 14.2027V16.4237" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.8125 12.0218H3.77148" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.8848 9.10577L15.8128 12.0218L12.8848 14.9378" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8.50439 7.38897V6.45597C8.50439 4.42097 10.1534 2.77197 12.1894 2.77197H17.0734C19.1034 2.77197 20.7484 4.41697 20.7484 6.44697V17.587C20.7484 19.622 19.0984 21.272 17.0634 21.272H12.1784C10.1494 21.272 8.50439 19.626 8.50439 17.597V16.655" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Login.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-71" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-71" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-71" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-71">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-71">Login.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Login.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-71" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-71">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-71">Login.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M15.8125 12.0218H3.77148" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M12.8848 9.10577L15.8128 12.0218L12.8848 14.9378" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M8.50439 7.38897V6.45597C8.50439 4.42097 10.1534 2.77197 12.1894 2.77197H17.0734C19.1034 2.77197 20.7484 4.41697 20.7484 6.44697V17.587C20.7484 19.622 19.0984 21.272 17.0634 21.272H12.1784C10.1494 21.272 8.50439 19.626 8.50439 17.597V16.655" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.016 7.38948V6.45648C15.016 4.42148 13.366 2.77148 11.331 2.77148H6.45597C4.42197 2.77148 2.77197 4.42148 2.77197 6.45648V17.5865C2.77197 19.6215 4.42197 21.2715 6.45597 21.2715H11.341C13.37 21.2715 15.016 19.6265 15.016 17.5975V16.6545" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21.8096 12.0214H9.76855" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.8813 9.10626L21.8093 12.0213L18.8813 14.9373" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Logout.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-72" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-72" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-72" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-72">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-72">Logout.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Logout.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-72" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-72">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-72">Logout.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M15.016 7.38948V6.45648C15.016 4.42148 13.366 2.77148 11.331 2.77148H6.45597C4.42197 2.77148 2.77197 4.42148 2.77197 6.45648V17.5865C2.77197 19.6215 4.42197 21.2715 6.45597 21.2715H11.341C13.37 21.2715 15.016 19.6265 15.016 17.5975V16.6545" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M21.8096 12.0214H9.76855" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M18.8813 9.10626L21.8093 12.0213L18.8813 14.9373" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9028 8.85114L13.4596 12.4642C12.6201 13.1302 11.4389 13.1302 10.5994 12.4642L6.11865 8.85114" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9089 21C19.9502 21.0084 22 18.5095 22 15.4384V8.57001C22 5.49883 19.9502 3 16.9089 3H7.09114C4.04979 3 2 5.49883 2 8.57001V15.4384C2 18.5095 4.04979 21.0084 7.09114 21H16.9089Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Message.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-73" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-73" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-73" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-73">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-73">Message.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Message.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-73" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-73">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-73">Message.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M17.9028 8.85114L13.4596 12.4642C12.6201 13.1302 11.4389 13.1302 10.5994 12.4642L6.11865 8.85114" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M16.9089 21C19.9502 21.0084 22 18.5095 22 15.4384V8.57001C22 5.49883 19.9502 3 16.9089 3H7.09114C4.04979 3 2 5.49883 2 8.57001V15.4384C2 18.5095 4.04979 21.0084 7.09114 21H16.9089Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.75012C17.108 2.75012 21.25 6.89112 21.25 12.0001C21.25 17.1081 17.108 21.2501 12 21.2501C6.891 21.2501 2.75 17.1081 2.75 12.0001C2.75 6.89212 6.892 2.75012 12 2.75012Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.9393 12.013H15.9483" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.9301 12.013H11.9391" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.92128 12.013H7.93028" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">More-Circle.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-74" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-74" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-74" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-74">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-74">More-Circle.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/More-Circle.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-74" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-74">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-74">More-Circle.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.75012C17.108 2.75012 21.25 6.89112 21.25 12.0001C21.25 17.1081 17.108 21.2501 12 21.2501C6.891 21.2501 2.75 17.1081 2.75 12.0001C2.75 6.89212 6.892 2.75012 12 2.75012Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M15.9393 12.013H15.9483" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M11.9301 12.013H11.9391" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M7.92128 12.013H7.93028" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.334 2.75012H7.665C4.644 2.75012 2.75 4.88912 2.75 7.91612V16.0841C2.75 19.1111 4.634 21.2501 7.665 21.2501H16.333C19.364 21.2501 21.25 19.1111 21.25 16.0841V7.91612C21.25 4.88912 19.364 2.75012 16.334 2.75012Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.9393 12.013H15.9483" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.9301 12.013H11.9391" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.92128 12.013H7.93028" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">More-Square.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-75" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-75" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-75" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-75">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-75">More-Square.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/More-Square.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-75" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-75">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-75">More-Square.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M16.334 2.75012H7.665C4.644 2.75012 2.75 4.88912 2.75 7.91612V16.0841C2.75 19.1111 4.634 21.2501 7.665 21.2501H16.333C19.364 21.2501 21.25 19.1111 21.25 16.0841V7.91612C21.25 4.88912 19.364 2.75012 16.334 2.75012Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M15.9393 12.013H15.9483" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M11.9301 12.013H11.9391" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M7.92128 12.013H7.93028" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 17.8476C17.6392 17.8476 20.2481 17.1242 20.5 14.2205C20.5 11.3188 18.6812 11.5054 18.6812 7.94511C18.6812 5.16414 16.0452 2 12 2C7.95477 2 5.31885 5.16414 5.31885 7.94511C5.31885 11.5054 3.5 11.3188 3.5 14.2205C3.75295 17.1352 6.36177 17.8476 12 17.8476Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.3889 20.8572C13.0247 22.372 10.8967 22.3899 9.51953 20.8572" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                    </div>
                    <div class="svg-classname">Notification.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-76" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-76" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-76" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-76">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-76">Notification.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Notification.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-76" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-76">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-76">Notification.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M12 17.8476C17.6392 17.8476 20.2481 17.1242 20.5 14.2205C20.5 11.3188 18.6812 11.5054 18.6812 7.94511C18.6812 5.16414 16.0452 2 12 2C7.95477 2 5.31885 5.16414 5.31885 7.94511C5.31885 11.5054 3.5 11.3188 3.5 14.2205C3.75295 17.1352 6.36177 17.8476 12 17.8476Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M14.3889 20.8572C13.0247 22.372 10.8967 22.3899 9.51953 20.8572" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7379 2.76181H8.08493C6.00493 2.75381 4.29993 4.41181 4.25093 6.49081V17.2038C4.20493 19.3168 5.87993 21.0678 7.99293 21.1148C8.02393 21.1148 8.05393 21.1158 8.08493 21.1148H16.0739C18.1679 21.0298 19.8179 19.2998 19.8029 17.2038V8.03781L14.7379 2.76181Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.4751 2.75V5.659C14.4751 7.079 15.6231 8.23 17.0431 8.234H19.7981" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.2882 15.3585H8.88818" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12.2432 11.606H8.88721" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                    </div>
                    <div class="svg-classname">Paper.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-77" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-77" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-77" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-77">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-77">Paper.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Paper.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-77" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-77">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-77">Paper.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M14.7379 2.76181H8.08493C6.00493 2.75381 4.29993 4.41181 4.25093 6.49081V17.2038C4.20493 19.3168 5.87993 21.0678 7.99293 21.1148C8.02393 21.1148 8.05393 21.1158 8.08493 21.1148H16.0739C18.1679 21.0298 19.8179 19.2998 19.8029 17.2038V8.03781L14.7379 2.76181Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M14.4751 2.75V5.659C14.4751 7.079 15.6231 8.23 17.0431 8.234H19.7981" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M14.2882 15.3585H8.88818" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M12.2432 11.606H8.88721" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7369 2.76181H8.08489C6.00489 2.75381 4.30089 4.41081 4.25089 6.49081V17.2278C4.20589 19.3298 5.87389 21.0698 7.97489 21.1148C8.01189 21.1148 8.04889 21.1158 8.08489 21.1148H16.0729C18.1629 21.0408 19.8149 19.3188 19.8029 17.2278V8.03781L14.7369 2.76181Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.4751 2.75012V5.65912C14.4751 7.07912 15.6241 8.23012 17.0441 8.23412H19.7981" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.6421 15.9498V9.90881" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.29639 13.5944L11.6414 15.9494L13.9864 13.5944" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Paper-Download.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-78" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-78" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-78" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-78">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-78">Paper-Download.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Paper-Download.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-78" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-78">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-78">Paper-Download.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M14.7369 2.76181H8.08489C6.00489 2.75381 4.30089 4.41081 4.25089 6.49081V17.2278C4.20589 19.3298 5.87389 21.0698 7.97489 21.1148C8.01189 21.1148 8.04889 21.1158 8.08489 21.1148H16.0729C18.1629 21.0408 19.8149 19.3188 19.8029 17.2278V8.03781L14.7369 2.76181Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M14.4751 2.75012V5.65912C14.4751 7.07912 15.6241 8.23012 17.0441 8.23412H19.7981" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M11.6421 15.9498V9.90881" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M9.29639 13.5944L11.6414 15.9494L13.9864 13.5944" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.737 2.7619H7.979C5.919 2.7619 4.25 4.4319 4.25 6.4909V17.3399C4.262 19.4389 5.973 21.1299 8.072 21.1169C8.112 21.1169 8.151 21.1159 8.19 21.1149H16.073C18.141 21.0939 19.806 19.4089 19.802 17.3399V8.0399L14.737 2.7619Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.4736 2.75018V5.65918C14.4736 7.07918 15.6216 8.23018 17.0416 8.23418H19.7966" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13.5759 14.6481L10.1099 11.1821" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.1108 14.6481L13.5768 11.1821" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Paper-Fail.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-79" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-79" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-79" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-79">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-79">Paper-Fail.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Paper-Fail.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-79" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-79">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-79">Paper-Fail.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M14.737 2.7619H7.979C5.919 2.7619 4.25 4.4319 4.25 6.4909V17.3399C4.262 19.4389 5.973 21.1299 8.072 21.1169C8.112 21.1169 8.151 21.1159 8.19 21.1149H16.073C18.141 21.0939 19.806 19.4089 19.802 17.3399V8.0399L14.737 2.7619Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M14.4736 2.75018V5.65918C14.4736 7.07918 15.6216 8.23018 17.0416 8.23418H19.7966" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M13.5759 14.6481L10.1099 11.1821" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M10.1108 14.6481L13.5768 11.1821" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7366 2.76194H8.08455C6.00455 2.75294 4.29955 4.41094 4.25055 6.49094V17.3399C4.21555 19.3899 5.84855 21.0809 7.89955 21.1169C7.96055 21.1169 8.02255 21.1169 8.08455 21.1149H16.0726C18.1416 21.0939 19.8056 19.4089 19.8026 17.3399V8.03994L14.7366 2.76194Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.4731 2.75012V5.65912C14.4731 7.07912 15.6221 8.23012 17.0421 8.23412H19.7961" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.2926 13.7472H9.39258" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Paper-Negative.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-80" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-80" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-80" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-80">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-80">Paper-Negative.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Paper-Negative.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-80" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-80">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-80">Paper-Negative.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M14.7366 2.76194H8.08455C6.00455 2.75294 4.29955 4.41094 4.25055 6.49094V17.3399C4.21555 19.3899 5.84855 21.0809 7.89955 21.1169C7.96055 21.1169 8.02255 21.1169 8.08455 21.1149H16.0726C18.1416 21.0939 19.8056 19.4089 19.8026 17.3399V8.03994L14.7366 2.76194Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M14.4731 2.75012V5.65912C14.4731 7.07912 15.6221 8.23012 17.0421 8.23412H19.7961" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M14.2926 13.7472H9.39258" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7366 2.76193H8.08455C6.00455 2.75393 4.29955 4.41093 4.25055 6.49093V17.3399C4.21555 19.3899 5.84855 21.0809 7.89955 21.1169C7.96055 21.1169 8.02255 21.1169 8.08455 21.1149H16.0726C18.1416 21.0939 19.8056 19.4089 19.8026 17.3399V8.03993L14.7366 2.76193Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.4741 2.75012V5.65912C14.4741 7.07912 15.6231 8.23012 17.0431 8.23412H19.7971" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.2936 12.9142H9.39355" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.8442 15.3639V10.4639" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Paper-Plus.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-81" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-81" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-81" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-81">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-81">Paper-Plus.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Paper-Plus.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-81" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-81">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-81">Paper-Plus.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M14.7366 2.76193H8.08455C6.00455 2.75393 4.29955 4.41093 4.25055 6.49093V17.3399C4.21555 19.3899 5.84855 21.0809 7.89955 21.1169C7.96055 21.1169 8.02255 21.1169 8.08455 21.1149H16.0726C18.1416 21.0939 19.8056 19.4089 19.8026 17.3399V8.03993L14.7366 2.76193Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M14.4741 2.75012V5.65912C14.4741 7.07912 15.6231 8.23012 17.0431 8.23412H19.7971" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M14.2936 12.9142H9.39355" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M11.8442 15.3639V10.4639" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7364 2.76181H8.0844C6.0044 2.75381 4.3004 4.41081 4.2504 6.49081V17.2278C4.2054 19.3298 5.8734 21.0698 7.9744 21.1148C8.0114 21.1148 8.0484 21.1158 8.0844 21.1148H16.0724C18.1624 21.0408 19.8144 19.3188 19.8024 17.2278V8.03781L14.7364 2.76181Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.4746 2.75012V5.65912C14.4746 7.07912 15.6236 8.23012 17.0436 8.23412H19.7976" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.6406 9.90881V15.9498" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.9864 12.2643L11.6414 9.9093L9.29639 12.2643" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Paper-Upload.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-82" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-82" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-82" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-82">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-82">Paper-Upload.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Paper-Upload.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-82" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-82">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-82">Paper-Upload.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M14.7364 2.76181H8.0844C6.0044 2.75381 4.3004 4.41081 4.2504 6.49081V17.2278C4.2054 19.3298 5.8734 21.0698 7.9744 21.1148C8.0114 21.1148 8.0484 21.1158 8.0844 21.1148H16.0724C18.1624 21.0408 19.8144 19.3188 19.8024 17.2278V8.03781L14.7364 2.76181Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M14.4746 2.75012V5.65912C14.4746 7.07912 15.6236 8.23012 17.0436 8.23412H19.7976" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M11.6406 9.90881V15.9498" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M13.9864 12.2643L11.6414 9.9093L9.29639 12.2643" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.334 2.75012H7.665C4.644 2.75012 2.75 4.88912 2.75 7.91612V16.0841C2.75 19.1111 4.635 21.2501 7.665 21.2501H16.333C19.364 21.2501 21.25 19.1111 21.25 16.0841V7.91612C21.25 4.88912 19.364 2.75012 16.334 2.75012Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.6889 12.0001C10.6889 13.0231 9.85986 13.8521 8.83686 13.8521C7.81386 13.8521 6.98486 13.0231 6.98486 12.0001C6.98486 10.9771 7.81386 10.1481 8.83686 10.1481H8.83986C9.86086 10.1491 10.6889 10.9781 10.6889 12.0001Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.6919 12.0001H17.0099V13.8521" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.1816 13.8522V12.0002" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Password.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-83" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-83" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-83" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-83">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-83">Password.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Password.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-83" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-83">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-83">Password.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M16.334 2.75012H7.665C4.644 2.75012 2.75 4.88912 2.75 7.91612V16.0841C2.75 19.1111 4.635 21.2501 7.665 21.2501H16.333C19.364 21.2501 21.25 19.1111 21.25 16.0841V7.91612C21.25 4.88912 19.364 2.75012 16.334 2.75012Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M10.6889 12.0001C10.6889 13.0231 9.85986 13.8521 8.83686 13.8521C7.81386 13.8521 6.98486 13.0231 6.98486 12.0001C6.98486 10.9771 7.81386 10.1481 8.83686 10.1481H8.83986C9.86086 10.1491 10.6889 10.9781 10.6889 12.0001Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M10.6919 12.0001H17.0099V13.8521" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M14.1816 13.8522V12.0002" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.5C17.2459 2.5 21.5 6.75315 21.5 12C21.5 17.2469 17.2459 21.5 12 21.5C6.75315 21.5 2.5 17.2469 2.5 12C2.5 6.75315 6.75315 2.5 12 2.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15 11.9951C15 11.184 10.8425 8.58912 10.3709 9.0557C9.8993 9.52228 9.85395 14.424 10.3709 14.9346C10.8879 15.4469 15 12.8063 15 11.9951Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                    </div>
                    <div class="svg-classname">Play.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-84" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-84" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-84" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-84">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-84">Play.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Play.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-84" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-84">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-84">Play.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.5C17.2459 2.5 21.5 6.75315 21.5 12C21.5 17.2469 17.2459 21.5 12 21.5C6.75315 21.5 2.5 17.2469 2.5 12C2.5 6.75315 6.75315 2.5 12 2.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M15 11.9951C15 11.184 10.8425 8.58912 10.3709 9.0557C9.8993 9.52228 9.85395 14.424 10.3709 14.9346C10.8879 15.4469 15 12.8063 15 11.9951Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.0001 8.32733V15.6537" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.6668 11.9905H8.3335" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Plus.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-85" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-85" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-85" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-85">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-85">Plus.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Plus.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-85" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-85">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-85">Plus.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M12.0001 8.32733V15.6537" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M15.6668 11.9905H8.3335" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9849 15.3462C8.11731 15.3462 4.81445 15.931 4.81445 18.2729C4.81445 20.6148 8.09636 21.2205 11.9849 21.2205C15.8525 21.2205 19.1545 20.6348 19.1545 18.2938C19.1545 15.9529 15.8735 15.3462 11.9849 15.3462Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9849 12.0059C14.523 12.0059 16.5801 9.94779 16.5801 7.40969C16.5801 4.8716 14.523 2.81445 11.9849 2.81445C9.44679 2.81445 7.3887 4.8716 7.3887 7.40969C7.38013 9.93922 9.42394 11.9973 11.9525 12.0059H11.9849Z" stroke="#130F26" stroke-width="1.42857" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Profile.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-86" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-86" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-86" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-86">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-86">Profile.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Profile.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-86" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-86">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-86">Profile.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M11.9849 15.3462C8.11731 15.3462 4.81445 15.931 4.81445 18.2729C4.81445 20.6148 8.09636 21.2205 11.9849 21.2205C15.8525 21.2205 19.1545 20.6348 19.1545 18.2938C19.1545 15.9529 15.8735 15.3462 11.9849 15.3462Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M11.9849 12.0059C14.523 12.0059 16.5801 9.94779 16.5801 7.40969C16.5801 4.8716 14.523 2.81445 11.9849 2.81445C9.44679 2.81445 7.3887 4.8716 7.3887 7.40969C7.38013 9.93922 9.42394 11.9973 11.9525 12.0059H11.9849Z" stroke="#130F26" stroke-width="1.42857" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.5 12.8056H1.5" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20.6299 8.5951V7.0821C20.6299 5.0211 18.9589 3.3501 16.8969 3.3501H15.6919" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3.37012 8.5951V7.0821C3.37012 5.0211 5.04112 3.3501 7.10312 3.3501H8.33912" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20.6299 12.8046V16.8786C20.6299 18.9406 18.9589 20.6116 16.8969 20.6116H15.6919" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3.37012 12.8046V16.8786C3.37012 18.9406 5.04112 20.6116 7.10312 20.6116H8.33912" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Scan.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-87" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-87" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-87" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-87">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-87">Scan.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Scan.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-87" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-87">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-87">Scan.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M22.5 12.8056H1.5" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M20.6299 8.5951V7.0821C20.6299 5.0211 18.9589 3.3501 16.8969 3.3501H15.6919" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M3.37012 8.5951V7.0821C3.37012 5.0211 5.04112 3.3501 7.10312 3.3501H8.33912" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M20.6299 12.8046V16.8786C20.6299 18.9406 18.9589 20.6116 16.8969 20.6116H15.6919" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M3.37012 12.8046V16.8786C3.37012 18.9406 5.04112 20.6116 7.10312 20.6116H8.33912" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="11.7664" cy="11.7666" r="8.98856" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.0181 18.4851L21.5421 22" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Search.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-88" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-88" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-88" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-88">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-88">Search.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Search.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-88" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-88">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-88">Search.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;circle cx="11.7664" cy="11.7666" r="8.98856" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M18.0181 18.4851L21.5421 22" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.8325 8.17463L10.109 13.9592L3.59944 9.88767C2.66675 9.30414 2.86077 7.88744 3.91572 7.57893L19.3712 3.05277C20.3373 2.76963 21.2326 3.67283 20.9456 4.642L16.3731 20.0868C16.0598 21.1432 14.6512 21.332 14.0732 20.3953L10.106 13.9602" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Send.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-89" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-89" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-89" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-89">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-89">Send.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Send.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-89" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-89">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-89">Send.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M15.8325 8.17463L10.109 13.9592L3.59944 9.88767C2.66675 9.30414 2.86077 7.88744 3.91572 7.57893L19.3712 3.05277C20.3373 2.76963 21.2326 3.67283 20.9456 4.642L16.3731 20.0868C16.0598 21.1432 14.6512 21.332 14.0732 20.3953L10.106 13.9602" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8064 7.62355L20.184 6.54346C19.6574 5.62954 18.4905 5.31426 17.5753 5.83866V5.83866C17.1397 6.09528 16.6198 6.16809 16.1305 6.04103C15.6411 5.91396 15.2224 5.59746 14.9666 5.16131C14.8021 4.88409 14.7137 4.56833 14.7103 4.24598V4.24598C14.7251 3.72916 14.5302 3.22834 14.1698 2.85761C13.8094 2.48688 13.3143 2.2778 12.7973 2.27802H11.5433C11.0367 2.27801 10.5511 2.47985 10.1938 2.83888C9.83644 3.19791 9.63693 3.68453 9.63937 4.19106V4.19106C9.62435 5.23686 8.77224 6.07675 7.72632 6.07664C7.40397 6.07329 7.08821 5.98488 6.81099 5.82035V5.82035C5.89582 5.29595 4.72887 5.61123 4.20229 6.52516L3.5341 7.62355C3.00817 8.53633 3.31916 9.70255 4.22975 10.2322V10.2322C4.82166 10.574 5.18629 11.2055 5.18629 11.889C5.18629 12.5725 4.82166 13.204 4.22975 13.5457V13.5457C3.32031 14.0719 3.00898 15.2353 3.5341 16.1453V16.1453L4.16568 17.2345C4.4124 17.6797 4.82636 18.0082 5.31595 18.1474C5.80554 18.2865 6.3304 18.2248 6.77438 17.976V17.976C7.21084 17.7213 7.73094 17.6515 8.2191 17.7821C8.70725 17.9128 9.12299 18.233 9.37392 18.6716C9.53845 18.9488 9.62686 19.2646 9.63021 19.5869V19.5869C9.63021 20.6435 10.4867 21.5 11.5433 21.5H12.7973C13.8502 21.5 14.7053 20.6491 14.7103 19.5961V19.5961C14.7079 19.088 14.9086 18.6 15.2679 18.2407C15.6272 17.8814 16.1152 17.6806 16.6233 17.6831C16.9449 17.6917 17.2594 17.7797 17.5387 17.9393V17.9393C18.4515 18.4653 19.6177 18.1543 20.1474 17.2437V17.2437L20.8064 16.1453C21.0615 15.7074 21.1315 15.1859 21.001 14.6963C20.8704 14.2067 20.55 13.7893 20.1108 13.5366V13.5366C19.6715 13.2839 19.3511 12.8665 19.2206 12.3769C19.09 11.8872 19.16 11.3658 19.4151 10.9279C19.581 10.6383 19.8211 10.3981 20.1108 10.2322V10.2322C21.0159 9.70283 21.3262 8.54343 20.8064 7.63271V7.63271V7.62355Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <circle cx="12.1747" cy="11.889" r="2.63616" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    </div>
                    <div class="svg-classname">Setting.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-90" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-90" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-90" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-90">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-90">Setting.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Setting.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-90" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-90">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-90">Setting.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M20.8064 7.62355L20.184 6.54346C19.6574 5.62954 18.4905 5.31426 17.5753 5.83866V5.83866C17.1397 6.09528 16.6198 6.16809 16.1305 6.04103C15.6411 5.91396 15.2224 5.59746 14.9666 5.16131C14.8021 4.88409 14.7137 4.56833 14.7103 4.24598V4.24598C14.7251 3.72916 14.5302 3.22834 14.1698 2.85761C13.8094 2.48688 13.3143 2.2778 12.7973 2.27802H11.5433C11.0367 2.27801 10.5511 2.47985 10.1938 2.83888C9.83644 3.19791 9.63693 3.68453 9.63937 4.19106V4.19106C9.62435 5.23686 8.77224 6.07675 7.72632 6.07664C7.40397 6.07329 7.08821 5.98488 6.81099 5.82035V5.82035C5.89582 5.29595 4.72887 5.61123 4.20229 6.52516L3.5341 7.62355C3.00817 8.53633 3.31916 9.70255 4.22975 10.2322V10.2322C4.82166 10.574 5.18629 11.2055 5.18629 11.889C5.18629 12.5725 4.82166 13.204 4.22975 13.5457V13.5457C3.32031 14.0719 3.00898 15.2353 3.5341 16.1453V16.1453L4.16568 17.2345C4.4124 17.6797 4.82636 18.0082 5.31595 18.1474C5.80554 18.2865 6.3304 18.2248 6.77438 17.976V17.976C7.21084 17.7213 7.73094 17.6515 8.2191 17.7821C8.70725 17.9128 9.12299 18.233 9.37392 18.6716C9.53845 18.9488 9.62686 19.2646 9.63021 19.5869V19.5869C9.63021 20.6435 10.4867 21.5 11.5433 21.5H12.7973C13.8502 21.5 14.7053 20.6491 14.7103 19.5961V19.5961C14.7079 19.088 14.9086 18.6 15.2679 18.2407C15.6272 17.8814 16.1152 17.6806 16.6233 17.6831C16.9449 17.6917 17.2594 17.7797 17.5387 17.9393V17.9393C18.4515 18.4653 19.6177 18.1543 20.1474 17.2437V17.2437L20.8064 16.1453C21.0615 15.7074 21.1315 15.1859 21.001 14.6963C20.8704 14.2067 20.55 13.7893 20.1108 13.5366V13.5366C19.6715 13.2839 19.3511 12.8665 19.2206 12.3769C19.09 11.8872 19.16 11.3658 19.4151 10.9279C19.581 10.6383 19.8211 10.3981 20.1108 10.2322V10.2322C21.0159 9.70283 21.3262 8.54343 20.8064 7.63271V7.63271V7.62355Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;circle cx="12.1747" cy="11.889" r="2.63616" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9846 21.606C11.9846 21.606 19.6566 19.283 19.6566 12.879C19.6566 6.474 19.9346 5.974 19.3196 5.358C18.7036 4.742 12.9906 2.75 11.9846 2.75C10.9786 2.75 5.26557 4.742 4.65057 5.358C4.03457 5.974 4.31257 6.474 4.31257 12.879C4.31257 19.283 11.9846 21.606 11.9846 21.606Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9.38574 11.8746L11.2777 13.7696L15.1757 9.86963" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Shield-Done.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-91" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-91" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-91" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-91">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-91">Shield-Done.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Shield-Done.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-91" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-91">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-91">Shield-Done.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M11.9846 21.606C11.9846 21.606 19.6566 19.283 19.6566 12.879C19.6566 6.474 19.9346 5.974 19.3196 5.358C18.7036 4.742 12.9906 2.75 11.9846 2.75C10.9786 2.75 5.26557 4.742 4.65057 5.358C4.03457 5.974 4.31257 6.474 4.31257 12.879C4.31257 19.283 11.9846 21.606 11.9846 21.606Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M9.38574 11.8746L11.2777 13.7696L15.1757 9.86963" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9852 21.606C11.9852 21.606 19.6572 19.283 19.6572 12.879C19.6572 6.474 19.9352 5.974 19.3192 5.358C18.7042 4.742 12.9912 2.75 11.9852 2.75C10.9792 2.75 5.26616 4.742 4.65016 5.358C4.03516 5.974 4.31316 6.474 4.31316 12.879C4.31316 19.283 11.9852 21.606 11.9852 21.606Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13.864 13.8248L10.106 10.0668" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.106 13.8248L13.864 10.0668" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Shield-Fail.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-92" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-92" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-92" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-92">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-92">Shield-Fail.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Shield-Fail.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-92" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-92">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-92">Shield-Fail.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M11.9852 21.606C11.9852 21.606 19.6572 19.283 19.6572 12.879C19.6572 6.474 19.9352 5.974 19.3192 5.358C18.7042 4.742 12.9912 2.75 11.9852 2.75C10.9792 2.75 5.26616 4.742 4.65016 5.358C4.03516 5.974 4.31316 6.474 4.31316 12.879C4.31316 19.283 11.9852 21.606 11.9852 21.606Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M13.864 13.8248L10.106 10.0668" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M10.106 13.8248L13.864 10.0668" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.1614 12.0531C15.1614 13.7991 13.7454 15.2141 11.9994 15.2141C10.2534 15.2141 8.83838 13.7991 8.83838 12.0531C8.83838 10.3061 10.2534 8.89111 11.9994 8.89111C13.7454 8.89111 15.1614 10.3061 15.1614 12.0531Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.998 19.3549C15.806 19.3549 19.289 16.6169 21.25 12.0529C19.289 7.48892 15.806 4.75092 11.998 4.75092H12.002C8.194 4.75092 4.711 7.48892 2.75 12.0529C4.711 16.6169 8.194 19.3549 12.002 19.3549H11.998Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Show.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-93" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-93" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-93" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-93">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-93">Show.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Show.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-93" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-93">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-93">Show.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M15.1614 12.0531C15.1614 13.7991 13.7454 15.2141 11.9994 15.2141C10.2534 15.2141 8.83838 13.7991 8.83838 12.0531C8.83838 10.3061 10.2534 8.89111 11.9994 8.89111C13.7454 8.89111 15.1614 10.3061 15.1614 12.0531Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M11.998 19.3549C15.806 19.3549 19.289 16.6169 21.25 12.0529C19.289 7.48892 15.806 4.75092 11.998 4.75092H12.002C8.194 4.75092 4.711 7.48892 2.75 12.0529C4.711 16.6169 8.194 19.3549 12.002 19.3549H11.998Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Star.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-94" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-94" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-94" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-94">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-94">Star.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Star.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-94" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-94">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-94">Star.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.8397 20.1642V6.54645" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20.9173 16.0681L16.8395 20.1648L12.7617 16.0681" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6.91102 3.83289V17.4507" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2.8335 7.929L6.91127 3.83234L10.9891 7.929" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Swap.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-95" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-95" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-95" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-95">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-95">Swap.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Swap.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-95" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-95">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-95">Swap.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M16.8397 20.1642V6.54645" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M20.9173 16.0681L16.8395 20.1648L12.7617 16.0681" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M6.91102 3.83289V17.4507" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M2.8335 7.929L6.91127 3.83234L10.9891 7.929" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.8496 4.25031V6.67031" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13.8496 17.7601V19.7841" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13.8496 14.3246V9.5036" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7021 20C20.5242 20 22 18.5426 22 16.7431V14.1506C20.7943 14.1506 19.8233 13.1917 19.8233 12.001C19.8233 10.8104 20.7943 9.85039 22 9.85039L21.999 7.25686C21.999 5.45745 20.5221 4 18.7011 4H5.29892C3.47789 4 2.00104 5.45745 2.00104 7.25686L2 9.93485C3.20567 9.93485 4.17668 10.8104 4.17668 12.001C4.17668 13.1917 3.20567 14.1506 2 14.1506V16.7431C2 18.5426 3.4758 20 5.29787 20H18.7021Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Ticket.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-96" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-96" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-96" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-96">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-96">Ticket.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Ticket.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-96" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-96">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-96">Ticket.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M13.8496 4.25031V6.67031" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M13.8496 17.7601V19.7841" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M13.8496 14.3246V9.5036" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M18.7021 20C20.5242 20 22 18.5426 22 16.7431V14.1506C20.7943 14.1506 19.8233 13.1917 19.8233 12.001C19.8233 10.8104 20.7943 9.85039 22 9.85039L21.999 7.25686C21.999 5.45745 20.5221 4 18.7011 4H5.29892C3.47789 4 2.00104 5.45745 2.00104 7.25686L2 9.93485C3.20567 9.93485 4.17668 10.8104 4.17668 12.001C4.17668 13.1917 3.20567 14.1506 2 14.1506V16.7431C2 18.5426 3.4758 20 5.29787 20H18.7021Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.857 20.4171C19.73 20.4171 21.249 18.8991 21.25 17.0261V17.0241V14.3241C20.013 14.3241 19.011 13.3221 19.01 12.0851C19.01 10.8491 20.012 9.84612 21.249 9.84612H21.25V7.14612C21.252 5.27212 19.735 3.75212 17.862 3.75012H17.856H6.144C4.27 3.75012 2.751 5.26812 2.75 7.14212V7.14312V9.93312C3.944 9.89112 4.945 10.8251 4.987 12.0191C4.988 12.0411 4.989 12.0631 4.989 12.0851C4.99 13.3201 3.991 14.3221 2.756 14.3241H2.75V17.0241C2.749 18.8971 4.268 20.4171 6.141 20.4171H6.142H17.857Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3711 9.06309L12.9871 10.3101C13.0471 10.4321 13.1631 10.5171 13.2981 10.5371L14.6751 10.7381C15.0161 10.7881 15.1511 11.2061 14.9051 11.4451L13.9091 12.4151C13.8111 12.5101 13.7671 12.6471 13.7891 12.7821L14.0241 14.1521C14.0821 14.4911 13.7271 14.7491 13.4231 14.5891L12.1921 13.9421C12.0711 13.8781 11.9271 13.8781 11.8061 13.9421L10.5761 14.5891C10.2711 14.7491 9.91609 14.4911 9.97409 14.1521L10.2091 12.7821C10.2321 12.6471 10.1871 12.5101 10.0891 12.4151L9.09409 11.4451C8.84809 11.2061 8.98309 10.7881 9.32309 10.7381L10.7001 10.5371C10.8351 10.5171 10.9521 10.4321 11.0121 10.3101L11.6271 9.06309C11.7791 8.75509 12.2191 8.75509 12.3711 9.06309Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Ticket-Star.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-97" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-97" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-97" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-97">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-97">Ticket-Star.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Ticket-Star.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-97" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-97">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-97">Ticket-Star.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M17.857 20.4171C19.73 20.4171 21.249 18.8991 21.25 17.0261V17.0241V14.3241C20.013 14.3241 19.011 13.3221 19.01 12.0851C19.01 10.8491 20.012 9.84612 21.249 9.84612H21.25V7.14612C21.252 5.27212 19.735 3.75212 17.862 3.75012H17.856H6.144C4.27 3.75012 2.751 5.26812 2.75 7.14212V7.14312V9.93312C3.944 9.89112 4.945 10.8251 4.987 12.0191C4.988 12.0411 4.989 12.0631 4.989 12.0851C4.99 13.3201 3.991 14.3221 2.756 14.3241H2.75V17.0241C2.749 18.8971 4.268 20.4171 6.141 20.4171H6.142H17.857Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M12.3711 9.06309L12.9871 10.3101C13.0471 10.4321 13.1631 10.5171 13.2981 10.5371L14.6751 10.7381C15.0161 10.7881 15.1511 11.2061 14.9051 11.4451L13.9091 12.4151C13.8111 12.5101 13.7671 12.6471 13.7891 12.7821L14.0241 14.1521C14.0821 14.4911 13.7271 14.7491 13.4231 14.5891L12.1921 13.9421C12.0711 13.8781 11.9271 13.8781 11.8061 13.9421L10.5761 14.5891C10.2711 14.7491 9.91609 14.4911 9.97409 14.1521L10.2091 12.7821C10.2321 12.6471 10.1871 12.5101 10.0891 12.4151L9.09409 11.4451C8.84809 11.2061 8.98309 10.7881 9.32309 10.7381L10.7001 10.5371C10.8351 10.5171 10.9521 10.4321 11.0121 10.3101L11.6271 9.06309C11.7791 8.75509 12.2191 8.75509 12.3711 9.06309Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3345 2.75018H7.66549C4.64449 2.75018 2.75049 4.88918 2.75049 7.91618V16.0842C2.75049 19.1112 4.63549 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91618C21.2505 4.88918 19.3645 2.75018 16.3345 2.75018Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8.43994 12.0002L10.8139 14.3732L15.5599 9.6272" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Tick-Square.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-98" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-98" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-98" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-98">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-98">Tick-Square.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Tick-Square.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-98" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-98">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-98">Tick-Square.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M16.3345 2.75018H7.66549C4.64449 2.75018 2.75049 4.88918 2.75049 7.91618V16.0842C2.75049 19.1112 4.63549 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91618C21.2505 4.88918 19.3645 2.75018 16.3345 2.75018Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M8.43994 12.0002L10.8139 14.3732L15.5599 9.6272" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.25 12.0005C21.25 17.1095 17.109 21.2505 12 21.2505C6.891 21.2505 2.75 17.1095 2.75 12.0005C2.75 6.89149 6.891 2.75049 12 2.75049C17.109 2.75049 21.25 6.89149 21.25 12.0005Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.4316 14.9429L11.6616 12.6939V7.84686" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Time-Circle.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-99" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-99" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-99" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-99">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-99">Time-Circle.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Time-Circle.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-99" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-99">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-99">Time-Circle.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M21.25 12.0005C21.25 17.1095 17.109 21.2505 12 21.2505C6.891 21.2505 2.75 17.1095 2.75 12.0005C2.75 6.89149 6.891 2.75049 12 2.75049C17.109 2.75049 21.25 6.89149 21.25 12.0005Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M15.4316 14.9429L11.6616 12.6939V7.84686" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3345 2.75018H7.66549C4.64449 2.75018 2.75049 4.88918 2.75049 7.91618V16.0842C2.75049 19.1112 4.63449 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91618C21.2505 4.88918 19.3645 2.75018 16.3345 2.75018Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.391 14.0177L12 11.9947V7.63367" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Time-Square.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-100" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-100" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-100" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-100">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-100">Time-Square.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Time-Square.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-100" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-100">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-100">Time-Square.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M16.3345 2.75018H7.66549C4.64449 2.75018 2.75049 4.88918 2.75049 7.91618V16.0842C2.75049 19.1112 4.63449 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91618C21.2505 4.88918 19.3645 2.75018 16.3345 2.75018Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M15.391 14.0177L12 11.9947V7.63367" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.4242 5.56204C15.8072 3.78004 14.1142 2.50004 12.1222 2.50004C9.60925 2.49004 7.56325 4.51804 7.55225 7.03104V7.05104V9.19804" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.933 21.0005H8.292C6.198 21.0005 4.5 19.3025 4.5 17.2075V12.9195C4.5 10.8245 6.198 9.12646 8.292 9.12646H15.933C18.027 9.12646 19.725 10.8245 19.725 12.9195V17.2075C19.725 19.3025 18.027 21.0005 15.933 21.0005Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.1128 13.9526V16.1746" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Unlock.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-101" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-101" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-101" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-101">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-101">Unlock.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Unlock.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-101" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-101">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-101">Unlock.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M16.4242 5.56204C15.8072 3.78004 14.1142 2.50004 12.1222 2.50004C9.60925 2.49004 7.56325 4.51804 7.55225 7.03104V7.05104V9.19804" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M15.933 21.0005H8.292C6.198 21.0005 4.5 19.3025 4.5 17.2075V12.9195C4.5 10.8245 6.198 9.12646 8.292 9.12646H15.933C18.027 9.12646 19.725 10.8245 19.725 12.9195V17.2075C19.725 19.3025 18.027 21.0005 15.933 21.0005Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M12.1128 13.9526V16.1746" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.38948 8.98403H6.45648C4.42148 8.98403 2.77148 10.634 2.77148 12.669V17.544C2.77148 19.578 4.42148 21.228 6.45648 21.228H17.5865C19.6215 21.228 21.2715 19.578 21.2715 17.544V12.659C21.2715 10.63 19.6265 8.98403 17.5975 8.98403L16.6545 8.98403" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.0215 2.19051V14.2315" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9.10645 5.11884L12.0214 2.19084L14.9374 5.11884" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Upload.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-102" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-102" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-102" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-102">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-102">Upload.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Upload.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-102" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-102">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-102">Upload.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M7.38948 8.98403H6.45648C4.42148 8.98403 2.77148 10.634 2.77148 12.669V17.544C2.77148 19.578 4.42148 21.228 6.45648 21.228H17.5865C19.6215 21.228 21.2715 19.578 21.2715 17.544V12.659C21.2715 10.63 19.6265 8.98403 17.5975 8.98403L16.6545 8.98403" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M12.0215 2.19051V14.2315" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M9.10645 5.11884L12.0214 2.19084L14.9374 5.11884" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2966 15.5383C16.3775 17.3704 14.8989 18.9196 12.9944 18.9975C12.8541 19.0034 6.01507 18.9896 6.01507 18.9896C4.11972 19.1335 2.46091 17.7715 2.31141 15.9463C2.30014 15.8103 2.30322 8.47219 2.30322 8.47219C2.21925 6.63815 3.6958 5.08499 5.60139 5.00418C5.74372 4.99728 12.5735 5.01009 12.5735 5.01009C14.4781 4.86818 16.142 6.24001 16.2895 8.07405C16.2997 8.2061 16.2966 15.5383 16.2966 15.5383Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16.2998 9.97984L19.5928 7.28484C20.4088 6.61684 21.6328 7.19884 21.6318 8.25184L21.6198 15.6008C21.6188 16.6538 20.3938 17.2308 19.5798 16.5628L16.2998 13.8678" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Video.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-103" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-103" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-103" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-103">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-103">Video.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Video.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-103" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-103">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-103">Video.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M16.2966 15.5383C16.3775 17.3704 14.8989 18.9196 12.9944 18.9975C12.8541 19.0034 6.01507 18.9896 6.01507 18.9896C4.11972 19.1335 2.46091 17.7715 2.31141 15.9463C2.30014 15.8103 2.30322 8.47219 2.30322 8.47219C2.21925 6.63815 3.6958 5.08499 5.60139 5.00418C5.74372 4.99728 12.5735 5.01009 12.5735 5.01009C14.4781 4.86818 16.142 6.24001 16.2895 8.07405C16.2997 8.2061 16.2966 15.5383 16.2966 15.5383Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M16.2998 9.97984L19.5928 7.28484C20.4088 6.61684 21.6328 7.19884 21.6318 8.25184L21.6198 15.6008C21.6188 16.6538 20.3938 17.2308 19.5798 16.5628L16.2998 13.8678" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.9999 22V18.8391" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9996 14.8481V14.8481C9.75637 14.8481 7.9375 13.0218 7.9375 10.7682V6.08095C7.9375 3.82732 9.75637 2 11.9996 2C14.2438 2 16.0617 3.82732 16.0617 6.08095V10.7682C16.0617 13.0218 14.2438 14.8481 11.9996 14.8481Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 10.8006C20 15.2394 16.4188 18.8383 11.9995 18.8383C7.58117 18.8383 4 15.2394 4 10.8006" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Voice.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-104" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-104" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-104" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-104">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-104">Voice.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Voice.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-104" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-104">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-104">Voice.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M11.9999 22V18.8391" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M11.9996 14.8481V14.8481C9.75637 14.8481 7.9375 13.0218 7.9375 10.7682V6.08095C7.9375 3.82732 9.75637 2 11.9996 2C14.2438 2 16.0617 3.82732 16.0617 6.08095V10.7682C16.0617 13.0218 14.2438 14.8481 11.9996 14.8481Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M20 10.8006C20 15.2394 16.4188 18.8383 11.9995 18.8383C7.58117 18.8383 4 15.2394 4 10.8006" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.0004 22V18.8391" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0003 14.8481V14.8481C9.75618 14.8481 7.93848 13.0218 7.93848 10.7682V6.08095C7.93848 3.82732 9.75618 2 12.0003 2C14.2433 2 16.0611 3.82732 16.0611 6.08095V10.7682C16.0611 13.0218 14.2433 14.8481 12.0003 14.8481Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 10.8006C20 15.2394 16.418 18.8383 12 18.8383C7.58093 18.8383 4 15.2394 4 10.8006" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.0688 6.75579H16.0584" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13.0703 10.0934H16.0604" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Voice-3.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-105" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-105" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-105" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-105">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-105">Voice-3.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Voice-3.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-105" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-105">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-105">Voice-3.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M12.0004 22V18.8391" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M12.0003 14.8481V14.8481C9.75618 14.8481 7.93848 13.0218 7.93848 10.7682V6.08095C7.93848 3.82732 9.75618 2 12.0003 2C14.2433 2 16.0611 3.82732 16.0611 6.08095V10.7682C16.0611 13.0218 14.2433 14.8481 12.0003 14.8481Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M20 10.8006C20 15.2394 16.418 18.8383 12 18.8383C7.58093 18.8383 4 15.2394 4 10.8006" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M14.0688 6.75579H16.0584" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M13.0703 10.0934H16.0604" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.00185 12.0001C3.99906 13.2298 3.94419 14.907 4.70494 15.5339C5.41453 16.1187 5.91395 15.968 7.20945 16.0631C8.50587 16.1591 11.242 19.97 13.3512 18.7646C14.4393 17.9089 14.5202 16.1151 14.5202 12.0001C14.5202 7.88515 14.4393 6.09135 13.3512 5.23571C11.242 4.02938 8.50587 7.84121 7.20945 7.93717C5.91395 8.03225 5.41453 7.88157 4.70494 8.46635C3.94419 9.09328 3.99906 10.7705 4.00185 12.0001Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.5811 8.31439C19.8924 10.6051 19.8924 13.4025 18.5811 15.686" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Volume-Down.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-106" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-106" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-106" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-106">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-106">Volume-Down.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Volume-Down.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-106" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-106">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-106">Volume-Down.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M4.00185 12.0001C3.99906 13.2298 3.94419 14.907 4.70494 15.5339C5.41453 16.1187 5.91395 15.968 7.20945 16.0631C8.50587 16.1591 11.242 19.97 13.3512 18.7646C14.4393 17.9089 14.5202 16.1151 14.5202 12.0001C14.5202 7.88515 14.4393 6.09135 13.3512 5.23571C11.242 4.02938 8.50587 7.84121 7.20945 7.93717C5.91395 8.03225 5.41453 7.88157 4.70494 8.46635C3.94419 9.09328 3.99906 10.7705 4.00185 12.0001Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M18.5811 8.31439C19.8924 10.6051 19.8924 13.4025 18.5811 15.686" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5331 9.46704L7.71375 16.2869C7.53651 16.1842 7.36859 16.1189 7.21933 16.1096C5.92263 16.0163 5.41888 16.1656 4.7099 15.5592C3.94494 14.9061 4.00091 13.1615 4.00091 11.8834C4.00091 10.6052 3.94494 8.86063 4.7099 8.20757C5.41888 7.60115 5.92263 7.75975 7.21933 7.65713C8.51603 7.55451 11.2587 3.59882 13.3763 4.84897C14.2345 5.54868 14.4678 6.8548 14.5331 9.46704Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.5329 13.9172C14.4956 16.7906 14.2717 18.1901 13.3762 18.9178C12.3966 19.4962 11.2865 18.9644 10.2417 18.2087" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M4.00146 20L7.71431 16.2869L14.5336 9.46706L20.0003 4" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Volume-Off.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-107" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-107" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-107" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-107">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-107">Volume-Off.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Volume-Off.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-107" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-107">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-107">Volume-Off.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M14.5331 9.46704L7.71375 16.2869C7.53651 16.1842 7.36859 16.1189 7.21933 16.1096C5.92263 16.0163 5.41888 16.1656 4.7099 15.5592C3.94494 14.9061 4.00091 13.1615 4.00091 11.8834C4.00091 10.6052 3.94494 8.86063 4.7099 8.20757C5.41888 7.60115 5.92263 7.75975 7.21933 7.65713C8.51603 7.55451 11.2587 3.59882 13.3763 4.84897C14.2345 5.54868 14.4678 6.8548 14.5331 9.46704Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M14.5329 13.9172C14.4956 16.7906 14.2717 18.1901 13.3762 18.9178C12.3966 19.4962 11.2865 18.9644 10.2417 18.2087" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M4.00146 20L7.71431 16.2869L14.5336 9.46706L20.0003 4" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.50185 12.0001C2.49906 13.2298 2.44419 14.907 3.20494 15.5339C3.91453 16.1187 4.41395 15.968 5.70945 16.0631C7.00587 16.1591 9.74195 19.97 11.8512 18.7646C12.9393 17.9089 13.0202 16.1151 13.0202 12.0001C13.0202 7.88515 12.9393 6.09135 11.8512 5.23571C9.74195 4.02938 7.00587 7.84121 5.70945 7.93717C4.41395 8.03225 3.91453 7.88157 3.20494 8.46635C2.44419 9.09328 2.49906 10.7705 2.50185 12.0001Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M19.5845 5.90399C22.1345 9.57501 22.1429 14.4174 19.5845 18.0956" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.0811 8.31439C18.3924 10.6051 18.3924 13.4025 17.0811 15.686" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Volume-Up.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-108" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-108" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-108" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-108">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-108">Volume-Up.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Volume-Up.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-108" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-108">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-108">Volume-Up.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M2.50185 12.0001C2.49906 13.2298 2.44419 14.907 3.20494 15.5339C3.91453 16.1187 4.41395 15.968 5.70945 16.0631C7.00587 16.1591 9.74195 19.97 11.8512 18.7646C12.9393 17.9089 13.0202 16.1151 13.0202 12.0001C13.0202 7.88515 12.9393 6.09135 11.8512 5.23571C9.74195 4.02938 7.00587 7.84121 5.70945 7.93717C4.41395 8.03225 3.91453 7.88157 3.20494 8.46635C2.44419 9.09328 2.49906 10.7705 2.50185 12.0001Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M19.5845 5.90399C22.1345 9.57501 22.1429 14.4174 19.5845 18.0956" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M17.0811 8.31439C18.3924 10.6051 18.3924 13.4025 17.0811 15.686" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.6389 14.3958H17.5906C16.1042 14.3949 14.8993 13.191 14.8984 11.7045C14.8984 10.2181 16.1042 9.01416 17.5906 9.01324H21.6389" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.0485 11.6429H17.7369" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.74766 3H16.3911C19.2892 3 21.6388 5.34951 21.6388 8.24766V15.4247C21.6388 18.3229 19.2892 20.6724 16.3911 20.6724H7.74766C4.84951 20.6724 2.5 18.3229 2.5 15.4247V8.24766C2.5 5.34951 4.84951 3 7.74766 3Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.03564 7.53814H12.4346" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Wallet.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-109" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-109" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-109" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-109">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-109">Wallet.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Wallet.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-109" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-109">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-109">Wallet.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M21.6389 14.3958H17.5906C16.1042 14.3949 14.8993 13.191 14.8984 11.7045C14.8984 10.2181 16.1042 9.01416 17.5906 9.01324H21.6389" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M18.0485 11.6429H17.7369" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M7.74766 3H16.3911C19.2892 3 21.6388 5.34951 21.6388 8.24766V15.4247C21.6388 18.3229 19.2892 20.6724 16.3911 20.6724H7.74766C4.84951 20.6724 2.5 18.3229 2.5 15.4247V8.24766C2.5 5.34951 4.84951 3 7.74766 3Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M7.03564 7.53814H12.4346" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.9951 16.6768V14.1398" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.19 5.3302C19.88 5.3302 21.24 6.7002 21.24 8.3902V11.8302C18.78 13.2702 15.53 14.1402 11.99 14.1402C8.45 14.1402 5.21 13.2702 2.75 11.8302V8.3802C2.75 6.6902 4.12 5.3302 5.81 5.3302H18.19Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.4951 5.32582V4.95982C15.4951 3.73982 14.5051 2.74982 13.2851 2.74982H10.7051C9.48512 2.74982 8.49512 3.73982 8.49512 4.95982V5.32582" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2.77441 15.483L2.96341 17.992C3.09141 19.683 4.50041 20.99 6.19541 20.99H17.7944C19.4894 20.99 20.8984 19.683 21.0264 17.992L21.2154 15.483" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </div>
                    <div class="svg-classname">Work.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-110" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-110" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-110" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-110">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-110">Work.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Work.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-110" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-110">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-110">Work.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M11.9951 16.6768V14.1398" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M18.19 5.3302C19.88 5.3302 21.24 6.7002 21.24 8.3902V11.8302C18.78 13.2702 15.53 14.1402 11.99 14.1402C8.45 14.1402 5.21 13.2702 2.75 11.8302V8.3802C2.75 6.6902 4.12 5.3302 5.81 5.3302H18.19Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M15.4951 5.32582V4.95982C15.4951 3.73982 14.5051 2.74982 13.2851 2.74982H10.7051C9.48512 2.74982 8.49512 3.73982 8.49512 4.95982V5.32582" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M2.77441 15.483L2.96341 17.992C3.09141 19.683 4.50041 20.99 6.19541 20.99H17.7944C19.4894 20.99 20.8984 19.683 21.0264 17.992L21.2154 15.483" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-header"><h3 class="h-title">Direction Icons</h3></div>
        <div class="row">
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                    <div class="svg-icons-ov">
                        <div class="svg-icons-prev">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.2739 19.75V4.75" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.2985 13.7002L12.2745 19.7502L6.24951 13.7002" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </div>
                        <div class="svg-classname">Arrow-Down.svg</div>
                        <div class="svg-icon-popup">
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-24" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-24" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                        </div>
                        <div class="modal fade" id="svg_img_Brassieresvg-24" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-24">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_img_label_Brassieresvg-24">Arrow-Down.svg</h5>
                                        <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;img src="{{asset('images/iconly/light/Arrow-Down.svg')}}"/&gt;</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="svg_inline_Brassieresvg-24" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-24">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-24">Arrow-Down.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M12.2739 19.75V4.75" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M18.2985 13.7002L12.2745 19.7502L6.24951 13.7002" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                    <div class="svg-icons-ov">
                        <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 8.5L12 15.5L5 8.5" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        </div>
                        <div class="svg-classname">Arrow-Down-2.svg</div>
                        <div class="svg-icon-popup">
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-25" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-25" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                        </div>
                        <div class="modal fade" id="svg_img_Brassieresvg-25" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-25">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_img_label_Brassieresvg-25">Arrow-Down-2.svg</h5>
                                        <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                            <pre>&lt;img src="{{asset('images/iconly/light/Arrow-Down-2.svg')}}"/&gt;</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="svg_inline_Brassieresvg-25" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-25">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-25">Arrow-Down-2.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M19 8.5L12 15.5L5 8.5" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                    <div class="svg-icons-ov">
                        <div class="svg-icons-prev">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.2515 12.6998V3.74982" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25049 12.6998L12.2515 20.6368L17.2525 12.6998H7.25049Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </div>
                        <div class="svg-classname">Arrow-Down-3.svg</div>
                        <div class="svg-icon-popup">
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-26" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-26" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                        </div>
                        <div class="modal fade" id="svg_img_Brassieresvg-26" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-26">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_img_label_Brassieresvg-26">Arrow-Down-3.svg</h5>
                                        <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;img src="{{asset('images/iconly/light/Arrow-Down-3.svg')}}"/&gt;</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="svg_inline_Brassieresvg-26" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-26">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_inline_label_Brassieresvg-26">Arrow-Down-3.svg</h5>
                                        <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M12.2515 12.6998V3.74982" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M7.25049 12.6998L12.2515 20.6368L17.2525 12.6998H7.25049Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                    <div class="svg-icons-ov">
                        <div class="svg-icons-prev">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 12C2.75 17.108 6.891 21.25 12 21.25C17.108 21.25 21.25 17.108 21.25 12C21.25 6.892 17.108 2.75 12 2.75C6.891 2.75 2.75 6.892 2.75 12Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.52881 10.5577L11.9998 14.0437L15.4708 10.5577" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </div>
                        <div class="svg-classname">Arrow-Down-Circle.svg</div>
                        <div class="svg-icon-popup">
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-27" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-27" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>

                        </div>
                        <div class="modal fade" id="svg_img_Brassieresvg-27" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-27">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_img_label_Brassieresvg-27">Arrow-Down-Circle.svg</h5>
                                        <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;img src="{{asset('images/iconly/light/Arrow-Down-Circle.svg')}}"/&gt;</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="svg_inline_Brassieresvg-27" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-27">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_inline_label_Brassieresvg-27">Arrow-Down-Circle.svg</h5>
                                        <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 12C2.75 17.108 6.891 21.25 12 21.25C17.108 21.25 21.25 17.108 21.25 12C21.25 6.892 17.108 2.75 12 2.75C6.891 2.75 2.75 6.892 2.75 12Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M8.52881 10.5577L11.9998 14.0437L15.4708 10.5577" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                    <div class="svg-icons-ov">
                        <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.666 21.25H16.335C19.355 21.25 21.25 19.111 21.25 16.084V7.916C21.25 4.889 19.365 2.75 16.335 2.75H7.666C4.636 2.75 2.75 4.889 2.75 7.916V16.084C2.75 19.111 4.636 21.25 7.666 21.25Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 16.086V7.914" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.748 12.3223L12 16.0863L8.25195 12.3223" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </div>
                        <div class="svg-classname">Arrow-Down-Square.svg</div>
                        <div class="svg-icon-popup">
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-28" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-28" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                        </div>
                        <div class="modal fade" id="svg_img_Brassieresvg-28" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-28">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_img_label_Brassieresvg-28">Arrow-Down-Square.svg</h5>
                                        <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;img src="{{asset('images/iconly/light/Arrow-Down-Square.SVG')}}"/&gt;</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="svg_inline_Brassieresvg-28" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-28">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_inline_label_Brassieresvg-28">Arrow-Down-Square</h5>
                                        <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M7.666 21.25H16.335C19.355 21.25 21.25 19.111 21.25 16.084V7.916C21.25 4.889 19.365 2.75 16.335 2.75H7.666C4.636 2.75 2.75 4.889 2.75 7.916V16.084C2.75 19.111 4.636 21.25 7.666 21.25Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M12 16.086V7.914" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M15.748 12.3223L12 16.0863L8.25195 12.3223" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                    <div class="svg-icons-ov">
                        <div class="svg-icons-prev">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.25 12.2743L19.25 12.2743" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.2998 18.2987L4.2498 12.2747L10.2998 6.24969" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </div>
                        <div class="svg-classname">Arrow-Left.svg</div>
                        <div class="svg-icon-popup">
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-29" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-29" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                        </div>
                        <div class="modal fade" id="svg_img_Brassieresvg-29" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-29">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_img_label_Brassieresvg-29">Arrow-Left.svg</h5>
                                        <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;img src="{{asset('images/iconly/light/Arrow-Left.svg')}}"/&gt;</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="svg_inline_Brassieresvg-29" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-29">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_inline_label_Brassieresvg-29">Arrow-Left.svg</h5>
                                        <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M4.25 12.2743L19.25 12.2743" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M10.2998 18.2987L4.2498 12.2747L10.2998 6.24969" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                    <div class="svg-icons-ov">
                        <div class="svg-icons-prev">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.5 19L8.5 12L15.5 5" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="svg-classname">Arrow-Left-2.svg</div>
                        <div class="svg-icon-popup">
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-30" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-30" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                        </div>
                        <div class="modal fade" id="svg_img_Brassieresvg-30" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-30">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_img_label_Brassieresvg-30">Arrow-Left-2.svg</h5>
                                        <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;img src="{{asset('images/iconly/light/Arrow-Left-2.svg')}}"/&gt;</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="svg_inline_Brassieresvg-30" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-30">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_inline_label_Brassieresvg-30">Arrow-Left-2.svg</h5>
                                        <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M15.5 19L8.5 12L15.5 5" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                    <div class="svg-icons-ov">
                        <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3 12.2513L20.25 12.2513" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2998 7.25031L3.3628 12.2513L11.2998 17.2523L11.2998 7.25031Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        </div>
                        <div class="svg-classname">Arrow-Left-3.svg</div>
                        <div class="svg-icon-popup">
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-31" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-31" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                        </div>
                        <div class="modal fade" id="svg_img_Brassieresvg-31" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-31">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_img_label_Brassieresvg-31">Arrow-Left-3.svg</h5>
                                        <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;img src="{{asset('images/iconly/light/Arrow-Left-3.svg')}}"/&gt;</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="svg_inline_Brassieresvg-31" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-31">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_inline_label_Brassieresvg-31">Arrow-Left-3.svg</h5>
                                        <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M11.3 12.2513L20.25 12.2513" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M11.2998 7.25031L3.3628 12.2513L11.2998 17.2523L11.2998 7.25031Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                    <div class="svg-icons-ov">
                        <div class="svg-icons-prev">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.75018C6.892 2.75018 2.75 6.89118 2.75 12.0002C2.75 17.1082 6.892 21.2502 12 21.2502C17.108 21.2502 21.25 17.1082 21.25 12.0002C21.25 6.89118 17.108 2.75018 12 2.75018Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.4424 8.52899L9.95638 12L13.4424 15.471" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                        </div>
                        <div class="svg-classname">Arrow-Left-Circle.svg</div>
                        <div class="svg-icon-popup">
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-32" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-32" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                        </div>
                        <div class="modal fade" id="svg_img_Brassieresvg-32" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-32">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_img_label_Brassieresvg-32">Arrow-Left-Circle.svg</h5>
                                        <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;img src="{{asset('images/iconly/light/Arrow-Left-Circle.svg')}}"/&gt;</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="svg_inline_Brassieresvg-32" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-32">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_inline_label_Brassieresvg-32">Arrow-Left-Circle.svg</h5>
                                        <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.75018C6.892 2.75018 2.75 6.89118 2.75 12.0002C2.75 17.1082 6.892 21.2502 12 21.2502C17.108 21.2502 21.25 17.1082 21.25 12.0002C21.25 6.89118 17.108 2.75018 12 2.75018Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M13.4424 8.52899L9.95638 12L13.4424 15.471" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                    <div class="svg-icons-ov">
                        <div class="svg-icons-prev">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 7.66588L2.75 16.3349C2.75 19.3549 4.889 21.2499 7.916 21.2499L16.084 21.2499C19.111 21.2499 21.25 19.3649 21.25 16.3349L21.25 7.66588C21.25 4.63588 19.111 2.74988 16.084 2.74988L7.916 2.74988C4.889 2.74988 2.75 4.63588 2.75 7.66588Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.91394 11.9999L16.0859 11.9999" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.6777 15.7479L7.91373 11.9999L11.6777 8.25189" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                        </div>
                        <div class="svg-classname">Arrow-Left-Square.svg</div>
                        <div class="svg-icon-popup">
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-33" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-33" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                        </div>
                        <div class="modal fade" id="svg_img_Brassieresvg-33" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-33">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_img_label_Brassieresvg-33">Arrow-Left-Square.svg</h5>
                                        <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;img src="{{asset('images/iconly/light/Arrow-Left-Square.svg')}}"/&gt;</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="svg_inline_Brassieresvg-33" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-33">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="svg_inline_label_Brassieresvg-33">Arrow-Left-Square.svg</h5>
                                        <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 7.66588L2.75 16.3349C2.75 19.3549 4.889 21.2499 7.916 21.2499L16.084 21.2499C19.111 21.2499 21.25 19.3649 21.25 16.3349L21.25 7.66588C21.25 4.63588 19.111 2.74988 16.084 2.74988L7.916 2.74988C4.889 2.74988 2.75 4.63588 2.75 7.66588Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M7.91394 11.9999L16.0859 11.9999" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M11.6777 15.7479L7.91373 11.9999L11.6777 8.25189" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.75 11.7257L4.75 11.7257" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13.7002 5.70131L19.7502 11.7253L13.7002 17.7503" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Arrow-Right.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-6" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-6" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-6" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-6">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-6">Arrow-Right.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Arrow-Right.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-6" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-6">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-6">Arrow-Right.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M19.75 11.7257L4.75 11.7257" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M13.7002 5.70131L19.7502 11.7253L13.7002 17.7503" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.5 5L15.5 12L8.5 19" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Arrow-Right-2.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-11" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-11" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-11" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-11">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-11">Arrow-Right-2.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Arrow-Right-2.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-11" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-11">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-11">Arrow-Right-2.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M8.5 5L15.5 12L8.5 19" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89182 17.108 2.74982 12 2.74982C6.892 2.74982 2.75 6.89182 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.5576 15.471L14.0436 12L10.5576 8.52901" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Arrow-Right-Circle.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-16" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-16" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-16" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-16">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-16">Arrow-Right-Circle.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Arrow-Right-Circle.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-16" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-16">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-16">Arrow-Right-Circle.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M12.7 11.7487H3.75" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M12.7002 16.7497L20.6372 11.7487L12.7002 6.74769V16.7497Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.7 11.7487H3.75" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7002 16.7497L20.6372 11.7487L12.7002 6.74769V16.7497Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    </div>
                    <div class="svg-classname">Arrow-Right-3.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-21" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-21" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-21" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-21">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-21">Arrow-Right-3.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Arrow-Right-3.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-21" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-21">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-21">Arrow-Right-3.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89182 17.108 2.74982 12 2.74982C6.892 2.74982 2.75 6.89182 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M10.5576 15.471L14.0436 12L10.5576 8.52901" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.25 16.3341V7.66512C21.25 4.64512 19.111 2.75012 16.084 2.75012H7.916C4.889 2.75012 2.75 4.63512 2.75 7.66512L2.75 16.3341C2.75 19.3641 4.889 21.2501 7.916 21.2501H16.084C19.111 21.2501 21.25 19.3641 21.25 16.3341Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16.0861 12.0001H7.91406" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12.3223 8.25211L16.0863 12.0001L12.3223 15.7481" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </div>
                    <div class="svg-classname">Arrow-Right-Square.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-5" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-5" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-5" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-5">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-5">Arrow-Right-Square.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Arrow-Right-Square.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-5" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-5">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-5">Arrow-Right-Square.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M21.25 16.3341V7.66512C21.25 4.64512 19.111 2.75012 16.084 2.75012H7.916C4.889 2.75012 2.75 4.63512 2.75 7.66512L2.75 16.3341C2.75 19.3641 4.889 21.2501 7.916 21.2501H16.084C19.111 21.2501 21.25 19.3641 21.25 16.3341Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M16.0861 12.0001H7.91406" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M12.3223 8.25211L16.0863 12.0001L12.3223 15.7481" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.7261 4.25L11.7261 19.25" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5.70149 10.2998L11.7255 4.2498L17.7505 10.2998" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Arrow-Up.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-3" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-3" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-3" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-3">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-3">Arrow-Up.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Arrow-Up.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-3" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-3">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-3">Arrow-Up.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M11.7261 4.25L11.7261 19.25" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M5.70149 10.2998L11.7255 4.2498L17.7505 10.2998" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 15.5L12 8.5L19 15.5" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Arrow-Up-2.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-4" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-4" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-4" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-4">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-4">Arrow-Up-2.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Arrow-Up-2.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-4" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-4">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-4">Arrow-Up-2.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M5 15.5L12 8.5L19 15.5" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.7485 11.3002L11.7485 20.2502" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7495 11.3002L11.7485 3.36317L6.74751 11.3002L16.7495 11.3002Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="svg-classname">Arrow-Up-3.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-8" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-8" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-8" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-8">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-8">Arrow-Up-3.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Arrow-Up-3.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-8" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-8">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-8">Arrow-Up-3.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M11.7485 11.3002L11.7485 20.2502" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M16.7495 11.3002L11.7485 3.36317L6.74751 11.3002L16.7495 11.3002Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.25 12C21.25 6.892 17.109 2.75 12 2.75C6.892 2.75 2.75 6.892 2.75 12C2.75 17.108 6.892 21.25 12 21.25C17.109 21.25 21.25 17.108 21.25 12Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.4712 13.4423L12.0002 9.95632L8.52919 13.4423" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <div class="svg-classname">Arrow-Up-Circle.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-9" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-9" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-9" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-9">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-9">Arrow-Up-Circle.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Arrow-Up-Circle.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-9" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-9">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-9">Arrow-Up-Circle.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M21.25 12C21.25 6.892 17.109 2.75 12 2.75C6.892 2.75 2.75 6.892 2.75 12C2.75 17.108 6.892 21.25 12 21.25C17.109 21.25 21.25 17.108 21.25 12Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M15.4712 13.4423L12.0002 9.95632L8.52919 13.4423" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                <div class="svg-icons-ov">
                    <div class="svg-icons-prev">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.334 2.75H7.665C4.645 2.75 2.75 4.889 2.75 7.916V16.084C2.75 19.111 4.635 21.25 7.665 21.25H16.334C19.364 21.25 21.25 19.111 21.25 16.084V7.916C21.25 4.889 19.364 2.75 16.334 2.75Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 7.914L12 16.086" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8.25205 11.6777L12 7.91367L15.748 11.6777" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </div>
                    <div class="svg-classname">Arrow-Up-Square.svg</div>
                    <div class="svg-icon-popup">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-10" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-10" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                    </div>
                    <div class="modal fade" id="svg_img_Brassieresvg-10" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-10">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_img_label_Brassieresvg-10">Arrow-Up-Square.svg</h5>
                                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;img src="{{asset('images/iconly/light/Arrow-Up-Square.svg')}}"/&gt;</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="svg_inline_Brassieresvg-10" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-10">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="svg_inline_label_Brassieresvg-10">Arrow-Up-Square.svg</h5>
                                    <button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M16.334 2.75H7.665C4.645 2.75 2.75 4.889 2.75 7.916V16.084C2.75 19.111 4.635 21.25 7.665 21.25H16.334C19.364 21.25 21.25 19.111 21.25 16.084V7.916C21.25 4.889 19.364 2.75 16.334 2.75Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M12 7.914L12 16.086" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M8.25205 11.6777L12 7.91367L15.748 11.6777" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;
</pre>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
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
