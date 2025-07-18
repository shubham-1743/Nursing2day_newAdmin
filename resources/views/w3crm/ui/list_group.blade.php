@extends('layouts.default')
@section('content')
			<div class="page-titles">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item ps-0"><a href="#">Bootstrap</a></li>
					<li class="breadcrumb-item active" aria-current="page">List Group</li>
				  </ol>
				</nav>
			</div>
            <div class="container-fluid">
                 <!--element-area-->
				<div class="element-area">
                    <div class="demo-view">
                        <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
							<!-- row -->

                                <!-- Column  -->
								<div class="col-xl-12">
									<div class="card dz-card" id="basic-list">
										<div class="card-header d-flex justify-content-between ">
											<h4 class="card-title">Basic List Group</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#BasicList" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#BasicList-html" type="button" role="tab" aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show active" id="BasicList" role="tabpanel" aria-labelledby="home-tab">
												<div class="card-body">
													<div class="basic-list-group">
														<ul class="list-group">
															<li class="list-group-item">Cras justo odio</li>
															<li class="list-group-item">Dapibus ac facilisis in</li>
															<li class="list-group-item">Morbi leo risus</li>
															<li class="list-group-item">Porta ac consectetur ac</li>
															<li class="list-group-item">Vestibulum at eros</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="BasicList-html" role="tabpanel" aria-labelledby="home-tab">
												<div class="card-body p-0 code-area">
	<pre class="m-0"><code class="language-html">&lt;div class="basic-list-group"&gt;
		&lt;ul class="list-group"&gt;
			&lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
			&lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
			&lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
			&lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;
			&lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Column  -->
								<!-- Column  -->
								<div class="col-xl-12">
									<div class="card dz-card" id="list-active">
										<div class="card-header flex-wrap d-flex justify-content-between le" >
											<h4 class="card-title">List Active items</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab1" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab1" data-bs-toggle="tab" data-bs-target="#ListActive" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab1" data-bs-toggle="tab" data-bs-target="#ListActive-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent1">
											<div class="tab-pane fade show active" id="ListActive" role="tabpanel" aria-labelledby="home-tab1">
												<div class="card-body">
													<div class="basic-list-group">
														<ul class="list-group">
															<li class="list-group-item active">Cras justo odio</li>
															<li class="list-group-item">Dapibus ac facilisis in</li>
															<li class="list-group-item">Morbi leo risus</li>
															<li class="list-group-item">Porta ac consectetur ac</li>
															<li class="list-group-item">Vestibulum at eros</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="ListActive-html" role="tabpanel" aria-labelledby="home-tab1">
												<div class="card-body p-0 code-area">
	<pre class="m-0"><code class="language-html">&lt;div class="basic-list-group"&gt;
	&lt;ul class="list-group"&gt;
		&lt;li class="list-group-item active"&gt;Cras justo odio&lt;/li&gt;
		&lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
		&lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
		&lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;
		&lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
	&lt;/ul&gt;
	&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Column  -->
								<!-- Column  -->
								<div class="col-xl-12">
									<div class="card dz-card" id="list-disabled">
										<div class="card-header flex-wrap d-flex justify-content-between le">
											<h4 class="card-title">List Disabled items</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab8" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab8" data-bs-toggle="tab" data-bs-target="#ListDisabled" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab8" data-bs-toggle="tab" data-bs-target="#ListDisabled-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent8">
											<div class="tab-pane fade show active" id="ListDisabled" role="tabpanel" aria-labelledby="home-tab8">
												<div class="card-body">
													<div class="basic-list-group">
														<ul class="list-group">
															<li class="list-group-item disabled">Cras justo odio</li>
															<li class="list-group-item">Dapibus ac facilisis in</li>
															<li class="list-group-item">Morbi leo risus</li>
															<li class="list-group-item">Porta ac consectetur ac</li>
															<li class="list-group-item">Vestibulum at eros</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="ListDisabled-html" role="tabpanel" aria-labelledby="home-tab8">
												<div class="card-body p-0 code-area">
	<pre class="m-0"><code class="language-html">&lt;div class="basic-list-group"&gt;
		&lt;ul class="list-group"&gt;
			&lt;li class="list-group-item disabled"&gt;Cras justo odio&lt;/li&gt;
			&lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
			&lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
			&lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;
			&lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Column  -->
								<!-- Column  -->
								<div class="col-xl-12">
									<div class="card dz-card" id="link-button">
										<div class="card-header flex-wrap d-flex justify-content-between le">
											<h4 class="card-title">Links and buttons items</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab2" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab2" data-bs-toggle="tab" data-bs-target="#LinksButtons" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab2" data-bs-toggle="tab" data-bs-target="#LinksButtons-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent2">
											<div class="tab-pane fade show active" id="LinksButtons" role="tabpanel" aria-labelledby="home-tab2">
												<div class="card-body">
													<div class="basic-list-group">
														<div class="list-group"><a href="javascript:void(0);" class="list-group-item list-group-item-action active">Cras
																justo odio </a><a href="javascript:void(0);" class="list-group-item list-group-item-action">Dapibus
																ac facilisis in</a> <a href="javascript:void(0);" class="list-group-item list-group-item-action">Morbi
																leo risus</a>
															<a href="javascript:void(0);" class="list-group-item list-group-item-action">Porta
																ac consectetur
																ac</a> <a href="javascript:void(0);" class="list-group-item list-group-item-action disabled">Vestibulum
																at eros</a>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="LinksButtons-html" role="tabpanel" aria-labelledby="home-tab2">
												<div class="card-body p-0 code-area">
	<pre class="m-0"><code class="language-html">&lt;div class="basic-list-group"&gt;
	&lt;div class="list-group"&gt;&lt;a href="javascript:void(0);" class="list-group-item list-group-item-action active"&gt;Cras
			justo odio &lt;/a&gt;&lt;a href="javascript:void(0);" class="list-group-item list-group-item-action"&gt;Dapibus
			ac facilisis in&lt;/a&gt; &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action"&gt;Morbi
			leo risus&lt;/a&gt;
		&lt;a href="javascript:void(0);" class="list-group-item list-group-item-action"&gt;Porta
			ac consectetur
			ac&lt;/a&gt; &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action disabled"&gt;Vestibulum
			at eros&lt;/a&gt;
	&lt;/div&gt;
	&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Column  -->
								<!-- Column  -->
								<div class="col-xl-12">
									<div class="card dz-card" id="flush">
										<div class="card-header flex-wrap d-flex justify-content-between le">
											<h4 class="card-title">Flush</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab3" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab3" data-bs-toggle="tab" data-bs-target="#Flush" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab3" data-bs-toggle="tab" data-bs-target="#Flush-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent3">
											<div class="tab-pane fade show active" id="Flush" role="tabpanel" aria-labelledby="home-tab3">
												<div class="card-body">
													<div class="basic-list-group">
														<ul class="list-group list-group-flush">
															<li class="list-group-item">Cras justo odio</li>
															<li class="list-group-item">Dapibus ac facilisis in</li>
															<li class="list-group-item">Morbi leo risus</li>
															<li class="list-group-item">Porta ac consectetur ac</li>
															<li class="list-group-item">Vestibulum at eros</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="Flush-html" role="tabpanel" aria-labelledby="home-tab3">
												<div class="card-body p-0 code-area">
	<pre class="m-0"><code class="language-html">&lt;div class="basic-list-group"&gt;
		&lt;ul class="list-group list-group-flush"&gt;
			&lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
			&lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
			&lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
			&lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;
			&lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Column  -->
								<!-- Column  -->
								<div class="col-xl-12" >
									<div class="card dz-card" id="with-badges">
										<div class="card-header flex-wrap d-flex justify-content-between le">
											<h4 class="card-title">With badges</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab4" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab4" data-bs-toggle="tab" data-bs-target="#WithBadges" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab4" data-bs-toggle="tab" data-bs-target="#WithBadges-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>

										<div class="tab-content" id="myTabContent4">
											<div class="tab-pane fade show active" id="WithBadges" role="tabpanel" aria-labelledby="home-tab4">
												<div class="card-body">
													<div class="basic-list-group">
														<ul class="list-group">
															<li class="list-group-item d-flex justify-content-between align-items-center">
																Cras justo odio <span class="badge badge-primary badge-pill">14</span>
															</li>
															<li class="list-group-item d-flex justify-content-between align-items-center">
																Dapibus ac facilisis in <span class="badge badge-primary badge-pill">2</span>
															</li>
															<li class="list-group-item d-flex justify-content-between align-items-center">
																Cras justo odio <span class="badge badge-primary badge-pill">14</span>
															</li>
															<li class="list-group-item d-flex justify-content-between align-items-center">
																Morbi leo risus <span class="badge badge-primary badge-pill">1</span>
															</li>
															<li class="list-group-item d-flex justify-content-between align-items-center">
																Morbi leo risus <span class="badge badge-primary badge-pill">1</span>
															</li>
														</ul>
													</div>
												</div>
											</div>

											<div class="tab-pane fade " id="WithBadges-html" role="tabpanel" aria-labelledby="home-tab4">
												<div class="card-body p-0 code-area">
	<pre class="m-0"><code class="language-html">&lt;div class="basic-list-group"&gt;
	&lt;ul class="list-group"&gt;
	&lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;
	Cras justo odio &lt;span class="badge badge-primary badge-pill"&gt;14&lt;/span&gt;
	&lt;/li&gt;
	&lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;
	Dapibus ac facilisis in &lt;span class="badge badge-primary badge-pill"&gt;2&lt;/span&gt;
	&lt;/li&gt;
	&lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;
	Cras justo odio &lt;span class="badge badge-primary badge-pill"&gt;14&lt;/span&gt;
	&lt;/li&gt;
	&lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;
	Morbi leo risus &lt;span class="badge badge-primary badge-pill"&gt;1&lt;/span&gt;
	&lt;/li&gt;
	&lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;
	Morbi leo risus &lt;span class="badge badge-primary badge-pill"&gt;1&lt;/span&gt;
	&lt;/li&gt;
	&lt;/ul&gt;
	&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Column  -->
								<!-- Column  -->
								<div class="col-xl-12">
									<div class="card dz-card" id="custom-content">
										<div class="card-header flex-wrap d-flex justify-content-between le">
											<h4 class="card-title">Custom content</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab5" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab5" data-bs-toggle="tab" data-bs-target="#CustomContent" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab5" data-bs-toggle="tab" data-bs-target="#CustomContent-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent5">
											<div class="tab-pane fade show active" id="CustomContent" role="tabpanel" aria-labelledby="home-tab5">
												<div class="card-body">
													<div class="basic-list-group">
														<div class="list-group">
															<a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start active">
																<div class="d-flex w-100 justify-content-between">
																	<h5 class="mb-3 text-white">List group item heading</h5><small>3 days
																		ago</small>
																</div>
																<p class="mb-1 text-white">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small>Donec id elit non mi
																	porta.</small>
															</a>
															<a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start">
																<div class="d-flex w-100 justify-content-between">
																	<h5 class="mb-3">List group item heading</h5><small class="text-muted">3
																		days ago</small>
																</div>
																<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small class="text-muted">Donec
																	id elit non mi porta.</small>
															</a>
															<a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start">
																<div class="d-flex w-100 justify-content-between">
																	<h5 class="mb-3">List group item heading</h5><small class="text-muted">3
																		days ago</small>
																</div>
																<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small class="text-muted">Donec
																	id elit non mi porta.</small>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="CustomContent-html" role="tabpanel" aria-labelledby="home-tab5">
												<div class="card-body code-area">
	<pre class="m-0"><code class="language-html">&lt;div class="basic-list-group"&gt;
		&lt;div class="list-group"&gt;
			&lt;a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start active"&gt;
				&lt;div class="d-flex w-100 justify-content-between"&gt;
					&lt;h5 class="mb-3 text-white"&gt;List group item heading&lt;/h5&gt;&lt;small&gt;3 days
						ago&lt;/small&gt;
				&lt;/div&gt;
				&lt;p class="mb-1"&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;&lt;small&gt;Donec id elit non mi
					porta.&lt;/small&gt;
			&lt;/a&gt;
			&lt;a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start"&gt;
				&lt;div class="d-flex w-100 justify-content-between"&gt;
					&lt;h5 class="mb-3"&gt;List group item heading&lt;/h5&gt;&lt;small class="text-muted"&gt;3
						days ago&lt;/small&gt;
				&lt;/div&gt;
				&lt;p class="mb-1"&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;&lt;small class="text-muted"&gt;Donec
					id elit non mi porta.&lt;/small&gt;
			&lt;/a&gt;
			&lt;a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start"&gt;
				&lt;div class="d-flex w-100 justify-content-between"&gt;
					&lt;h5 class="mb-3"&gt;List group item heading&lt;/h5&gt;&lt;small class="text-muted"&gt;3
						days ago&lt;/small&gt;
				&lt;/div&gt;
				&lt;p class="mb-1"&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;&lt;small class="text-muted"&gt;Donec
					id elit non mi porta.&lt;/small&gt;
			&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Column  -->
								<!-- Column  -->
								<div class="col-xl-12">
									<div class="card dz-card" id="contextual">
										<div class="card-header flex-wrap d-flex justify-content-between le">
											<h4 class="card-title">Contextual</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab6" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab6" data-bs-toggle="tab" data-bs-target="#Contextual" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab6" data-bs-toggle="tab" data-bs-target="#Contextual-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent6">
											<div class="tab-pane fade show active" id="Contextual" role="tabpanel" aria-labelledby="home-tab6">
												<div class="card-body">
													<div class="basic-list-group">
														<ul class="list-group">
															<li class="list-group-item">Dapibus ac facilisis in</li>
															<li class="list-group-item list-group-item-primary">This is a primary list group item</li>
															<li class="list-group-item list-group-item-secondary">This is a secondary list group item</li>
															<li class="list-group-item list-group-item-success">This is a success list group item</li>
															<li class="list-group-item list-group-item-danger">This is a danger list group item
															</li>
															<li class="list-group-item list-group-item-warning">This is a warning list group item</li>
															<li class="list-group-item list-group-item-info">This is a info list group item
															</li>
															<li class="list-group-item list-group-item-light">This is a light list group item
															</li>
															<li class="list-group-item list-group-item-dark">This is a dark list group item
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="Contextual-html" role="tabpanel" aria-labelledby="home-tab6">
									<div class="card" id="contextual1">
											<div class="card-body p-0 code-area">
			<pre class="m-0"> <code class="language-html">&lt;div class="basic-list-group"&gt;
				&lt;ul class="list-group"&gt;
					&lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
					&lt;li class="list-group-item list-group-item-primary"&gt;This is a primary list group item&lt;/li&gt;
					&lt;li class="list-group-item list-group-item-secondary"&gt;This is a secondary list group item&lt;/li&gt;
					&lt;li class="list-group-item list-group-item-success"&gt;This is a success list group item&lt;/li&gt;
					&lt;li class="list-group-item list-group-item-danger"&gt;This is a danger list group item
					&lt;/li&gt;
					&lt;li class="list-group-item list-group-item-warning"&gt;This is a warning list group item&lt;/li&gt;
					&lt;li class="list-group-item list-group-item-info"&gt;This is a info list group item
					&lt;/li&gt;
					&lt;li class="list-group-item list-group-item-light"&gt;This is a light list group item
					&lt;/li&gt;
					&lt;li class="list-group-item list-group-item-dark"&gt;This is a dark list group item
					&lt;/li&gt;
				&lt;/ul&gt;</code></pre>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Column  -->
							</div>
							<div class="row">
								<!-- Column  -->
								<div class="col-lg-12">
									<div class="card dz-card" id="list-tab">
										<div class="card-header flex-wrap d-flex justify-content-between le">
											<h4 class="card-title">List Tab</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab7" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab7" data-bs-toggle="tab" data-bs-target="#ListTab" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab7" data-bs-toggle="tab" data-bs-target="#ListTab-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent7">
											<div class="tab-pane fade show active" id="ListTab" role="tabpanel" aria-labelledby="home-tab7">
												<div class="card-body">
													<div class="basic-list-group">
														<div class="row">
															<div class="col-lg-6 col-xl-2 col-xxl-3">
																<div class="list-group mb-4 " id="list-tab1" role="tablist"><a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab">Home</a> <a class="list-group-item list-group-item-action" id="list-profile-list"
																		data-bs-toggle="list" href="#list-profile" role="tab">Profile</a> <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab">Messages</a>
																	<a
																		class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab">Settings</a>
																</div>
															</div>
															<div class="col-lg-6 col-xl-10 col-xxl-9">
																<div class="tab-content" id="nav-tabContent">
																	<div class="tab-pane fade show active" id="list-home">
																		<h4 class="mb-4">Home Tab Content</h4>
																		<p>Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit
																			occaecat nisi ad non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in
																			cupidatat nisi enim eu nostrud do aliquip veniam minim.</p>
																	</div>
																	<div class="tab-pane fade" id="list-profile" role="tabpanel">
																		<h4 class="mb-4">Profile Tab Content</h4>
																		<p>Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim
																			incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa
																			commodo veniam incididunt veniam ad.</p>
																	</div>
																	<div class="tab-pane fade" id="list-messages">
																		<h4 class="mb-4">Message Tab Content</h4>
																		<p>Ut ut do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit aute ipsum voluptate. Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit consequat
																			enim tempor. Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure. Ipsum id Lorem sit sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt.
																			Consectetur et fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur cillum.</p>
																	</div>
																	<div class="tab-pane fade" id="list-settings">
																		<h4 class="mb-4">Settings Tab Content</h4>
																		<p>Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim cillum occaecat aute
																			est cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit dolor ut exercitation irure commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui aute irure eu. Magna
																			labore dolor quis ex labore id nostrud deserunt dolor eiusmod eu pariatur culpa mollit in irure.</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="ListTab-html" role="tabpanel" aria-labelledby="home-tab7">
												<div class="card-body p-0 code-area">
	<pre class="m-0"><code class="language-html">&lt;div class="basic-list-group"&gt;
	&lt;div class="row"&gt;
		&lt;div class="col-lg-6 col-xl-2"&gt;
			&lt;div class="list-group mb-4 " id="list-tab" role="tablist"&gt;&lt;a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab"&gt;Home&lt;/a&gt; &lt;a class="list-group-item list-group-item-action" id="list-profile-list"
					data-bs-toggle="list" href="#list-profile" role="tab"&gt;Profile&lt;/a&gt; &lt;a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab"&gt;Messages&lt;/a&gt;
				&lt;a
					class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab"&gt;Settings&lt;/a&gt;
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class="col-lg-6 col-xl-10"&gt;
			&lt;div class="tab-content" id="nav-tabContent"&gt;
				&lt;div class="tab-pane fade show active" id="list-home"&gt;
					&lt;h4 class="mb-4"&gt;Home Tab Content&lt;/h4&gt;
					&lt;p&gt;Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit
						occaecat nisi ad non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in
						cupidatat nisi enim eu nostrud do aliquip veniam minim.&lt;/p&gt;
				&lt;/div&gt;
				&lt;div class="tab-pane fade" id="list-profile" role="tabpanel"&gt;
					&lt;h4 class="mb-4"&gt;Profile Tab Content&lt;/h4&gt;
					&lt;p&gt;Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim
						incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa
						commodo veniam incididunt veniam ad.&lt;/p&gt;
				&lt;/div&gt;
				&lt;div class="tab-pane fade" id="list-messages"&gt;
					&lt;h4 class="mb-4"&gt;Message Tab Content&lt;/h4&gt;
					&lt;p&gt;Ut ut do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit aute ipsum voluptate. Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit consequat
						enim tempor. Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure. Ipsum id Lorem sit sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt.
						Consectetur et fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur cillum.&lt;/p&gt;
				&lt;/div&gt;
				&lt;div class="tab-pane fade" id="list-settings"&gt;
					&lt;h4 class="mb-4"&gt;Settings Tab Content&lt;/h4&gt;
					&lt;p&gt;Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim cillum occaecat aute
						est cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit dolor ut exercitation irure commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui aute irure eu. Magna
						labore dolor quis ex labore id nostrud deserunt dolor eiusmod eu pariatur culpa mollit in irure.&lt;/p&gt;
				&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;/div&gt;</code></pre>

												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Column  -->
							</div>
								<!-- /Column  -->

						</div>
					</div>
					<div class="demo-right ">
						<div class="demo-right-inner dz-scroll " id="right-sidebar">
							<h4 class="title">List Group</h4>
							<div class="dz-scroll demo-right-tabs" id="rightSidebarScroll">
								<ul class="navbar-nav" id="menu-bar">
									<li><a href="#basic-list" class="scroll">Basic List Group</a></li>
									<li><a href="#list-active" class="scroll">List Active items</a></li>
									<li><a href="#list-disabled" class="scroll">List Disabled Item</a></li>
									<li><a href="#link-button" class="scroll">Link And Button Item</a></li>
									<li><a href="#flush" class="scroll">Flush</a></li>
									<li><a href="#with-badges" class="scroll">With Badges</a></li>
									<li><a href="#custom-content" class="scroll">Custom Content</a></li>
									<li><a href="#contextual" class="scroll">Contextual</a></li>
									<li><a href="#list-tab" class="scroll">List-Tab</a></li>

								</ul>
							</div>
						</div>
					</div>
				</div>
@endsection
