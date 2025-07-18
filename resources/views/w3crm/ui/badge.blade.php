@extends('layouts.default')
@section('content')
<div class="page-titles">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item ps-0"><a href="#">Bootstrap</a></li>
        <li class="breadcrumb-item active" aria-current="page">Badge</li>
    </ol>
    </nav>
</div>
<div class="container-fluid">
    <div class="row ">
        <div class="col-xl-12">
        </div>
    </div>
    <!--element-area-->
    <div class="element-area">
        <div class="demo-view">
            <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card dz-card" id="badges-size">
                        <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                            <div>
                                <h4 class="card-title">Badges Size</h4>
                                <p class="mb-0 subtitle">Default Bootstrap Badges</p>
                            </div>
                            <ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#BadgesSize" type="button" role="tab"  aria-selected="true">Preview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#BadgesSize-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="BadgesSize" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card-body pt-0">
                                    <div class="bootstrap-badge">
                                        <span class="badge badge-xs light badge-primary">Primary</span>
                                        <span class="badge badge-sm light badge-primary">Primary</span>
                                        <span class="badge light badge-secondary">Secondary</span>
                                        <span class="badge badge-lg light badge-danger">Danger</span>
                                        <span class="badge badge-xl light badge-warning">Warning</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="BadgesSize-html" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">
&lt;div class="bootstrap-badge"&gt;
&lt;span class="badge badge-xs light badge-primary"&gt;Primary&lt;/span&gt;
&lt;span class="badge badge-sm light badge-primary"&gt;Primary&lt;/span&gt;
&lt;span class="badge light badge-secondary"&gt;Secondary&lt;/span&gt;
&lt;span class="badge badge-lg light badge-danger"&gt;Danger&lt;/span&gt;
&lt;span class="badge badge-xl light badge-warning"&gt;Warning&lt;/span&gt;
&lt;/div&gt; </code></pre>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card dz-card" id="badges-light">
                        <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                            <div>
                                <h4 class="card-title">Badges Light</h4>
                                <p class="mb-0 subtitle">Default Bootstrap Badges</p>
                            </div>
                            <ul class="nav nav-tabs dzm-tabs" id="myTab-1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active " id="home-tab-1" data-bs-toggle="tab" data-bs-target="#BadgesLight" type="button" role="tab"  aria-selected="true">Preview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="profile-tab-1" data-bs-toggle="tab" data-bs-target="#BadgesLight-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent-1">
                            <div class="tab-pane fade show active" id="BadgesLight" role="tabpanel" aria-labelledby="home-tab-1">
                                <div class="card-body pt-0">
                                    <div class="bootstrap-badge">
                                        <span class="badge light badge-primary">Primary</span>
                                        <span class="badge light badge-secondary">Secondary</span>
                                        <span class="badge light badge-success">Success</span>
                                        <span class="badge light badge-danger">Danger</span>
                                        <span class="badge light badge-warning">Warning</span>
                                        <span class="badge light badge-info">Info</span>
                                        <span class="badge light badge-light">Light</span>
                                        <span class="badge light badge-dark">Dark</span>
                                    </div>
                                    <div class="bootstrap-badge">
                                        <span class="badge light badge-primary">1</span>
                                        <span class="badge light badge-secondary">2</span>
                                        <span class="badge light badge-success">3</span>
                                        <span class="badge light badge-danger">4</span>
                                        <span class="badge light badge-warning">5</span>
                                        <span class="badge light badge-info">6</span>
                                        <span class="badge light badge-light">7</span>
                                        <span class="badge light badge-dark">8</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="BadgesLight-html" role="tabpanel" aria-labelledby="home-tab-1">
                                <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">
&lt;div class="bootstrap-badge"&gt;
&lt;span class="badge light badge-primary"&gt;Primary&lt;/span&gt;
&lt;span class="badge light badge-secondary"&gt;Secondary&lt;/span&gt;
&lt;span class="badge light badge-success"&gt;Success&lt;/span&gt;
&lt;span class="badge light badge-danger"&gt;Danger&lt;/span&gt;
&lt;span class="badge light badge-warning"&gt;Warning&lt;/span&gt;
&lt;span class="badge light badge-info"&gt;Info&lt;/span&gt;
&lt;span class="badge light badge-light"&gt;Light&lt;/span&gt;
&lt;span class="badge light badge-dark"&gt;Dark&lt;/span&gt;
&lt;/div&gt;
&lt;div class="bootstrap-badge"&gt;
&lt;span class="badge light badge-primary"&gt;1&lt;/span&gt;
&lt;span class="badge light badge-secondary"&gt;2&lt;/span&gt;
&lt;span class="badge light badge-success"&gt;3&lt;/span&gt;
&lt;span class="badge light badge-danger"&gt;4&lt;/span&gt;
&lt;span class="badge light badge-warning"&gt;5&lt;/span&gt;
&lt;span class="badge light badge-info"&gt;6&lt;/span&gt;
&lt;span class="badge light badge-light"&gt;7&lt;/span&gt;
&lt;span class="badge light badge-dark"&gt;8&lt;/span&gt;
&lt;/div&gt;
</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card dz-card" id="badges">
                        <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                            <div>
                                <h4 class="card-title">Badges </h4>
                                <p class="mb-0 subtitle">Default Bootstrap Badges</p>
                            </div>
                            <ul class="nav nav-tabs dzm-tabs" id="myTab-2" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active " id="home-tab-2" data-bs-toggle="tab" data-bs-target="#Badges" type="button" role="tab" aria-selected="true">Preview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="profile-tab-2" data-bs-toggle="tab" data-bs-target="#Badges-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent-2">
                            <div class="tab-pane fade show active" id="Badges" role="tabpanel" aria-labelledby="home-tab-2">
                                <div class="card-body pt-0">
                                    <div class="bootstrap-badge">
                                        <span class="badge badge-primary">Primary</span>
                                        <span class="badge badge-secondary">Secondary</span>
                                        <span class="badge badge-success">Success</span>
                                        <span class="badge badge-danger">Danger</span>
                                        <span class="badge badge-warning">Warning</span>
                                        <span class="badge badge-info">Info</span>
                                        <span class="badge badge-light">Light</span>
                                        <span class="badge badge-dark">Dark</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="Badges-html" role="tabpanel" aria-labelledby="home-tab-2">
                                <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="bootstrap-badge"&gt;
&lt;span class="badge badge-primary"&gt;Primary&lt;/span&gt;
&lt;span class="badge badge-secondary"&gt;Secondary&lt;/span&gt;
&lt;span class="badge badge-success"&gt;Success&lt;/span&gt;
&lt;span class="badge badge-danger"&gt;Danger&lt;/span&gt;
&lt;span class="badge badge-warning"&gt;Warning&lt;/span&gt;
&lt;span class="badge badge-info"&gt;Info&lt;/span&gt;
&lt;span class="badge badge-light"&gt;Light&lt;/span&gt;
&lt;span class="badge badge-dark"&gt;Dark&lt;/span&gt;
&lt;/div&gt;</code></pre>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card dz-card"  id="pill-badge">
                        <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                            <div>
                                <h4 class="card-title">Pill Badge </h4>
                                <p class="mb-0 subtitle">add <code>.badge-pill</code> to change the style</p>
                            </div>
                            <ul class="nav nav-tabs dzm-tabs" id="myTab-3" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active " id="home-tab-3" data-bs-toggle="tab" data-bs-target="#PillBadge" type="button" role="tab"  aria-selected="true">Preview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="profile-tab-3" data-bs-toggle="tab" data-bs-target="#PillBadge-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent-3">
                            <div class="tab-pane fade show active" id="PillBadge" role="tabpanel" aria-labelledby="home-tab-3">
                                <div class="card-body pt-0">
                                    <div class="bootstrap-badge">
                                        <span class="badge badge-pill badge-primary">Pill badge</span>
                                        <span class="badge badge-pill badge-secondary">Pill badge</span>
                                        <span class="badge badge-pill badge-success">Pill badge</span>
                                        <span class="badge badge-pill badge-danger">Pill badge</span>
                                        <span class="badge badge-pill badge-warning">Pill badge</span>
                                        <span class="badge badge-pill badge-info">Pill badge</span>
                                        <span class="badge badge-pill badge-light">Pill badge</span>
                                        <span class="badge badge-pill badge-dark">Pill badge</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="PillBadge-html" role="tabpanel" aria-labelledby="home-tab-3">
                                <div class="card-body p-0 code-area">
<pre class="m-0"> <code class="language-html">
&lt;div class="bootstrap-badge"&gt;
&lt;span class="badge badge-pill badge-primary"&gt;Pill badge&lt;/span&gt;
&lt;span class="badge badge-pill badge-secondary"&gt;Pill badge&lt;/span&gt;
&lt;span class="badge badge-pill badge-success"&gt;Pill badge&lt;/span&gt;
&lt;span class="badge badge-pill badge-danger"&gt;Pill badge&lt;/span&gt;
&lt;span class="badge badge-pill badge-warning"&gt;Pill badge&lt;/span&gt;
&lt;span class="badge badge-pill badge-info"&gt;Pill badge&lt;/span&gt;
&lt;span class="badge badge-pill badge-light"&gt;Pill badge&lt;/span&gt;
&lt;span class="badge badge-pill badge-dark"&gt;Pill badge&lt;/span&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card dz-card" id="link-badge">
                        <div class="card-header flex-wrap d-flex justify-content-between border-0  ">
                            <div>
                                <h4 class="card-title">Link Badge </h4>
                                <p class="mb-0 subtitle">Link badge add in anchor tag</p>
                            </div>
                            <ul class="nav nav-tabs dzm-tabs" id="myTab-4" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active " id="home-tab-4" data-bs-toggle="tab" data-bs-target="#LinkBadge" type="button" role="tab"  aria-selected="true">Preview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="profile-tab-4" data-bs-toggle="tab" data-bs-target="#LinkBadge-html" type="button" role="tab" aria-selected="false">HTML</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent-4">
                            <div class="tab-pane fade show active" id="LinkBadge" role="tabpanel" aria-labelledby="home-tab-4">
                                <div class="card-body pt-0">
                                    <div class="bootstrap-badge">
                                        <a href="javascript:void(0)" class="badge badge-primary">Links</a>
                                        <a href="javascript:void(0)" class="badge badge-secondary">Links</a>
                                        <a href="javascript:void(0)" class="badge badge-success">Links</a>
                                        <a href="javascript:void(0)" class="badge badge-danger">Links</a>
                                        <a href="javascript:void(0)" class="badge badge-warning">Links</a>
                                        <a href="javascript:void(0)" class="badge badge-info">Links</a>
                                        <a href="javascript:void(0)" class="badge badge-light">Links</a>
                                        <a href="javascript:void(0)" class="badge badge-dark">Links</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="LinkBadge-html" role="tabpanel" aria-labelledby="home-tab-4">
                                <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="bootstrap-badge"&gt;
&lt;a href="javascript:void(0)" class="badge badge-primary"&gt;Links&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-secondary"&gt;Links&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-success"&gt;Links&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-danger"&gt;Links&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-warning"&gt;Links&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-info"&gt;Links&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-light"&gt;Links&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-dark"&gt;Links&lt;/a&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card dz-card" id="rounded-badge">
                        <div class="card-header flex-wrap d-flex justify-content-between">
                            <div>
                                <h4 class="card-title">Rounded Badge </h4>
                                <p class="mb-0 subtitle">add <code>.badge-rounded</code> to change the style</p>
                            </div>
                            <ul class="nav nav-tabs dzm-tabs" id="myTab-5" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active " id="home-tab-6" data-bs-toggle="tab" data-bs-target="#RoundedBadge" type="button" role="tab"  aria-selected="true">Preview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="profile-tab-6" data-bs-toggle="tab" data-bs-target="#RoundedBadge-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent-6">
                            <div class="tab-pane fade show active" id="RoundedBadge" role="tabpanel" aria-labelledby="home-tab-6">
                                <div class="card-body">
                                <div class="bootstrap-badge">
                                    <a href="javascript:void(0)" class="badge badge-rounded badge-primary">Rounded</a>
                                    <a href="javascript:void(0)" class="badge badge-rounded badge-secondary">Rounded</a>
                                    <a href="javascript:void(0)" class="badge badge-rounded badge-success">Rounded</a>
                                    <a href="javascript:void(0)" class="badge badge-rounded badge-danger">Rounded</a>
                                    <a href="javascript:void(0)" class="badge badge-rounded badge-warning">Rounded</a>
                                    <a href="javascript:void(0)" class="badge badge-rounded badge-info">Rounded</a>
                                    <a href="javascript:void(0)" class="badge badge-rounded badge-light">Rounded</a>
                                    <a href="javascript:void(0)" class="badge badge-rounded badge-dark">Rounded</a>
                                </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="RoundedBadge-html" role="tabpanel" aria-labelledby="home-tab-6">
                                <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="bootstrap-badge"&gt;
&lt;a href="javascript:void(0)" class="badge badge-rounded badge-primary"&gt;Rounded&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-rounded badge-secondary"&gt;Rounded&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-rounded badge-success"&gt;Rounded&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-rounded badge-danger"&gt;Rounded&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-rounded badge-warning"&gt;Rounded&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-rounded badge-info"&gt;Rounded&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-rounded badge-light"&gt;Rounded&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-rounded badge-dark"&gt;Rounded&lt;/a&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card dz-card" id="rounded-outline">
                        <div class="card-header flex-wrap d-flex justify-content-between ">
                            <div>
                                <h4 class="card-title">Rounded Outline Badge</h4>
                                <p class="mb-0 subtitle">add <code>.badge-rounded</code> to change the style</p>
                            </div>
                            <ul class="nav nav-tabs dzm-tabs" id="myTab-7" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active " id="home-tab-7" data-bs-toggle="tab" data-bs-target="#OutlineBadge" type="button" role="tab" aria-selected="true">Preview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="profile-tab-7" data-bs-toggle="tab" data-bs-target="#OutlineBadge-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent-7">
                            <div class="tab-pane fade show active" id="OutlineBadge" role="tabpanel" aria-labelledby="home-tab-7">
                                <div class="card-body">
                                    <div class="bootstrap-badge">
                                        <a href="javascript:void(0)" class="badge badge-rounded badge-outline-primary">Rounded</a>
                                        <a href="javascript:void(0)" class="badge badge-rounded badge-outline-secondary">Rounded</a>
                                        <a href="javascript:void(0)" class="badge badge-rounded badge-outline-success">Rounded</a>
                                        <a href="javascript:void(0)" class="badge badge-rounded badge-outline-danger">Rounded</a>
                                        <a href="javascript:void(0)" class="badge badge-rounded badge-outline-warning">Rounded</a>
                                        <a href="javascript:void(0)" class="badge badge-rounded badge-outline-info">Rounded</a>
                                        <a href="javascript:void(0)" class="badge badge-rounded badge-outline-light">Rounded</a>
                                        <a href="javascript:void(0)" class="badge badge-rounded badge-outline-dark">Rounded</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="OutlineBadge-html" role="tabpanel" aria-labelledby="home-tab-7">
                                <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="bootstrap-badge"&gt;
&lt;a href="javascript:void(0)" class="badge badge-rounded badge-outline-primary"&gt;Rounded&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-rounded badge-outline-secondary"&gt;Rounded&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-rounded badge-outline-success"&gt;Rounded&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-rounded badge-outline-danger"&gt;Rounded&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-rounded badge-outline-warning"&gt;Rounded&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-rounded badge-outline-info"&gt;Rounded&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-rounded badge-outline-light"&gt;Rounded&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-rounded badge-outline-dark"&gt;Rounded&lt;/a&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card dz-card" id="outline-circle">
                        <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                            <div >
                                <h4 class="card-title">Outline Circle Badge</h4>
                                <p class="mb-0 subtitle">add <code>.badge-circle</code> to change the style</p>
                            </div>
                            <ul class="nav nav-tabs dzm-tabs" id="myTab-8" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active " id="home-tab-8" data-bs-toggle="tab" data-bs-target="#OutlineCircle" type="button" role="tab"  aria-selected="true">Preview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="profile-tab-8" data-bs-toggle="tab" data-bs-target="#OutlineCircle-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent-8">
                            <div class="tab-pane fade show active" id="OutlineCircle" role="tabpanel" aria-labelledby="home-tab-8">
                                <div class="card-body pt-0">
                                    <div class="bootstrap-badge">
                                        <a href="javascript:void(0)" class="badge badge-circle badge-outline-primary">1</a>
                                        <a href="javascript:void(0)" class="badge badge-circle badge-outline-secondary">2</a>
                                        <a href="javascript:void(0)" class="badge badge-circle badge-outline-success">3</a>
                                        <a href="javascript:void(0)" class="badge badge-circle badge-outline-danger">4</a>
                                        <a href="javascript:void(0)" class="badge badge-circle badge-outline-warning">5</a>
                                        <a href="javascript:void(0)" class="badge badge-circle badge-outline-info">6</a>
                                        <a href="javascript:void(0)" class="badge badge-circle badge-outline-light">7</a>
                                        <a href="javascript:void(0)" class="badge badge-circle badge-outline-dark">8</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="OutlineCircle-html" role="tabpanel" aria-labelledby="home-tab-8">
                                <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="bootstrap-badge"&gt;
&lt;a href="javascript:void(0)" class="badge badge-circle badge-outline-primary"&gt;1&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-circle badge-outline-secondary"&gt;2&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-circle badge-outline-success"&gt;3&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-circle badge-outline-danger"&gt;4&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-circle badge-outline-warning"&gt;5&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-circle badge-outline-info"&gt;6&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-circle badge-outline-light"&gt;7&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-circle badge-outline-dark"&gt;8&lt;/a&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card dz-card" id="circle-badge">
                        <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                            <div>
                            <h4 class="card-title">Circle Badge</h4>
                            <p class="mb-0 subtitle">add <code>.badge-circle</code> to change the style</p>
                            </div>
                            <ul class="nav nav-tabs dzm-tabs" id="myTab-9" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active " id="home-tab-9" data-bs-toggle="tab" data-bs-target="#CircleBadge" type="button" role="tab"  aria-selected="true">Preview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="profile-tab-9" data-bs-toggle="tab" data-bs-target="#CircleBadge-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent-9">
                            <div class="tab-pane fade show active" id="CircleBadge" role="tabpanel" aria-labelledby="home-tab-9">
                                <div class="card-body pt-0">
                                    <div class="bootstrap-badge">
                                        <a href="javascript:void(0)" class="badge badge-circle badge-primary">1</a>
                                        <a href="javascript:void(0)" class="badge badge-circle badge-secondary">2</a>
                                        <a href="javascript:void(0)" class="badge badge-circle badge-success">3</a>
                                        <a href="javascript:void(0)" class="badge badge-circle badge-danger">4</a>
                                        <a href="javascript:void(0)" class="badge badge-circle badge-warning">5</a>
                                        <a href="javascript:void(0)" class="badge badge-circle badge-info">6</a>
                                        <a href="javascript:void(0)" class="badge badge-circle badge-light">7</a>
                                        <a href="javascript:void(0)" class="badge badge-circle badge-dark">8</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="CircleBadge-html" role="tabpanel" aria-labelledby="home-tab-9">
                                <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">
&lt;div class="bootstrap-badge"&gt;
&lt;a href="javascript:void(0)" class="badge badge-circle badge-primary"&gt;1&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-circle badge-secondary"&gt;2&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-circle badge-success"&gt;3&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-circle badge-danger"&gt;4&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-circle badge-warning"&gt;5&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-circle badge-info"&gt;6&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-circle badge-light"&gt;7&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-circle badge-dark"&gt;8&lt;/a&gt;
&lt;/div&gt;</code></pre>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card dz-card" id="circle-badge-default">
                        <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                            <div>
                                <h4 class="card-title">Circle Badge Default </h4>
                                <p class="mb-0 subtitle">Default bootstrap outline baadge</p>
                            </div>
                            <ul class="nav nav-tabs dzm-tabs" id="myTab-10" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active " id="home-tab-10" data-bs-toggle="tab" data-bs-target="#BadgeDefault" type="button" role="tab"  aria-selected="true">Preview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="profile-tab-10" data-bs-toggle="tab" data-bs-target="#BadgeDefault-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent-10">
                            <div class="tab-pane fade show active" id="BadgeDefault" role="tabpanel" aria-labelledby="home-tab-10">
                                <div class="card-body pt-0">
                                    <div class="bootstrap-badge">
                                        <a href="javascript:void(0)" class="badge badge-outline-primary">1</a>
                                        <a href="javascript:void(0)" class="badge badge-outline-secondary">2</a>
                                        <a href="javascript:void(0)" class="badge badge-outline-success">3</a>
                                        <a href="javascript:void(0)" class="badge badge-outline-danger">4</a>
                                        <a href="javascript:void(0)" class="badge badge-outline-warning">5</a>
                                        <a href="javascript:void(0)" class="badge badge-outline-info">6</a>
                                        <a href="javascript:void(0)" class="badge badge-outline-light">7</a>
                                        <a href="javascript:void(0)" class="badge badge-outline-dark">8</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="BadgeDefault-html" role="tabpanel" aria-labelledby="home-tab-10">
                                <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="bootstrap-badge"&gt;
&lt;a href="javascript:void(0)" class="badge badge-outline-primary"&gt;1&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-outline-secondary"&gt;2&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-outline-success"&gt;3&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-outline-danger"&gt;4&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-outline-warning"&gt;5&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-outline-info"&gt;6&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-outline-light"&gt;7&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-outline-dark"&gt;8&lt;/a&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card dz-card" id="number-badge">
                        <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                            <div>
                            <h4 class="card-title">Number Badge</h4>
                            <p class="mb-0 subtitle">Default bootstrap outline baadge</p>
                            </div>
                            <ul class="nav nav-tabs dzm-tabs" id="myTab-11" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active " id="home-tab-11" data-bs-toggle="tab" data-bs-target="#NumberBadge" type="button" role="tab"  aria-selected="true">Preview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="profile-tab-11" data-bs-toggle="tab" data-bs-target="#NumberBadge-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent-11">
                            <div class="tab-pane fade show active " id="NumberBadge" role="tabpanel" aria-labelledby="home-tab-11">
                                <div class="card-body pt-0">
                                    <div class="bootstrap-badge">
                                        <a href="javascript:void(0)" class="badge badge-primary">1</a>
                                        <a href="javascript:void(0)" class="badge badge-secondary">2</a>
                                        <a href="javascript:void(0)" class="badge badge-success">3</a>
                                        <a href="javascript:void(0)" class="badge badge-danger">4</a>
                                        <a href="javascript:void(0)" class="badge badge-warning">5</a>
                                        <a href="javascript:void(0)" class="badge badge-info">6</a>
                                        <a href="javascript:void(0)" class="badge badge-light">7</a>
                                        <a href="javascript:void(0)" class="badge badge-dark">8</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="NumberBadge-html" role="tabpanel" aria-labelledby="home-tab-11">
                                <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">
&lt;div class="card-body"&gt;
&lt;div class="bootstrap-badge"&gt;
&lt;a href="javascript:void(0)" class="badge badge-primary"&gt;1&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-secondary"&gt;2&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-success"&gt;3&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-danger"&gt;4&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-warning"&gt;5&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-info"&gt;6&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-light"&gt;7&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-dark"&gt;8&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card dz-card" id="badge-sizes">
                        <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                            <div>
                                <h4 class="card-title">Badge Sizes </h4>
                                <p class="mb-0 subtitle">add <code>.badge-xs .badge-sm .badge-md .badge-lg
                                        .badge-xl</code> to change the style</p>
                            </div>
                            <ul class="nav nav-tabs dzm-tabs" id="myTab-12" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active " id="home-tab-12" data-bs-toggle="tab" data-bs-target="#BadgeSizes" type="button" role="tab"  aria-selected="true">Preview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="profile-tab-12" data-bs-toggle="tab" data-bs-target="#BadgeSizes-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent-12">
                            <div class="tab-pane fade show active " id="BadgeSizes" role="tabpanel" aria-labelledby="home-tab-12">
                                <div class="card-body pt-0">
                                    <div class="bootstrap-badge">
                                        <a href="javascript:void(0)" class="badge badge-xs badge-primary">xs</a>
                                        <a href="javascript:void(0)" class="badge badge-sm badge-secondary">sm</a>
                                        <a href="javascript:void(0)" class="badge badge-md badge-success">md</a>
                                        <a href="javascript:void(0)" class="badge badge-lg badge-danger">lg</a>
                                        <a href="javascript:void(0)" class="badge badge-xl badge-warning">xl</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade  " id="BadgeSizes-html" role="tabpanel" aria-labelledby="home-tab-12">
                                <div class="card-body p-0 code-area">
                                    <pre class="m-0"><code class="language-html">
&lt;div class="bootstrap-badge"&gt;
&lt;a href="javascript:void(0)" class="badge badge-xs badge-primary"&gt;xs&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-sm badge-secondary"&gt;sm&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-md badge-success"&gt;md&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-lg badge-danger"&gt;lg&lt;/a&gt;
&lt;a href="javascript:void(0)" class="badge badge-xl badge-warning"&gt;xl&lt;/a&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column  -->
                <!-- /Column  -->
            </div>
            </div>
        </div>
        <div class="demo-right ">
            <div class="demo-right-inner dz-scroll " id="right-sidebar">
                <h4 class="title">Badge</h4>
                <div class="dz-scroll demo-right-tabs" id="rightSidebarScroll">
                    <ul class="navbar-nav" id="menu-bar">
                        <li><a href="#badges-size" class="scroll">Badges Size</a></li>
                        <li><a href="#badges-light" class="scroll">Badges Light</a></li>
                        <li><a href="#badges" class="scroll">Badges</a></li>
                        <li><a href="#pill-badge" class="scroll">Pill Badge</a></li>
                        <li><a href="#link-badge" class="scroll">Link Badge</a></li>
                        <li><a href="#rounded-badge" class="scroll">Rounded Badge</a></li>
                        <li><a href="#rounded-outline" class="scroll">Rounded Outline Badge </a></li>
                        <li><a href="#outline-circle" class="scroll">Outline Circle Badge </a></li>
                        <li><a href="#circle-badge" class="scroll">Circle Badge</a></li>
                        <li><a href="#circle-badge-default" class="scroll">Circle Badge Default</a></li>
                        <li><a href="#number-badge" class="scroll">Number Badge</a></li>
                        <li><a href="#badge-sizes" class="scroll">Badge Sizes</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/element-area-->
    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    hljs.highlightAll();
    hljs.configure({ ignoreUnescapedHTML: true })

    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('pre code').forEach((el) => {
            hljs.highlightElement(el);
        });
        });
</script>
@endpush
