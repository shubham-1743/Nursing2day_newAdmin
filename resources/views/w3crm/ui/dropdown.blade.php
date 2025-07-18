@extends('layouts.default')
@section('content')
			<div class="page-titles">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item ps-0"><a href="#">Bootstrap</a></li>
					<li class="breadcrumb-item active" aria-current="page">Dropdown</li>
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
								<!-- Column  -->
								<div class="col-xl-12">
									<div class="card dz-card" id="basic-dropdown">
										<div class="card-header border-0  flex-wrap">
											<div>
											<h4 class="card-title">Basic Dropdown</h4>
											<p class="m-0 subtitle">A dropdown menu is a toggleable menu that allows the user to choose one value from a predefined list
											</p>
											</div>
											<ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#BasicDropdown" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#BasicDropdown-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show active" id="BasicDropdown" role="tabpanel" aria-labelledby="home-tab">
												<div class="card-body pt-0">
													<div class="basic-dropdown">
														<div class="dropdown">
															<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
																Dropdown button
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="javascript:void(0);">Link 1</a>
																<a class="dropdown-item" href="javascript:void(0);">Link 2</a>
																<a class="dropdown-item" href="javascript:void(0);">Link 3</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="BasicDropdown-html" role="tabpanel" aria-labelledby="home-tab">
												<div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="basic-dropdown"&gt;
	&lt;div class="dropdown"&gt;
		&lt;button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown"&gt;
			Dropdown button
		&lt;/button&gt;
		&lt;div class="dropdown-menu"&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 1&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 2&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 3&lt;/a&gt;
		&lt;/div&gt;
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
									<div class="card dz-card" id="#dropdown-divider">
										<div class="card-header flex-wrap d-flex justify-content-between border-0 ">
											<div>
												<h4 class="card-title">Dropdown Divider</h4>
												<p class="m-0 subtitle">The
													<code>.dropdown-divider</code> class is used to separate links inside the dropdown menu with a thin horizontal border
												</p>
											</div>
											<ul class="nav nav-tabs dzm-tabs" id="myTab1" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab1" data-bs-toggle="tab" data-bs-target="#DropdownDivider" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab1" data-bs-toggle="tab" data-bs-target="#DropdownDivider-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent1">
											<div class="tab-pane fade show active" id="DropdownDivider" role="tabpanel" aria-labelledby="home-tab">
												<div class="card-body pt-0">

													<div class="basic-dropdown">
														<div class="dropdown">
															<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
																Dropdown button
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="javascript:void(0);">Link 1</a>
																<a class="dropdown-item" href="javascript:void(0);">Link 2</a>
																<a class="dropdown-item" href="javascript:void(0);">Link 3</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item"  href="javascript:void(0);">Another link</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="DropdownDivider-html" role="tabpanel" aria-labelledby="home-tab1">
												<div class="card-body p-0 code-area">
<pre class="m-0"> <code class="language-html">&lt;div class="basic-dropdown"&gt;
	&lt;div class="dropdown"&gt;
		&lt;button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown"&gt;
			Dropdown button
		&lt;/button&gt;
		&lt;div class="dropdown-menu"&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 1&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 2&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 3&lt;/a&gt;
			&lt;div class="dropdown-divider"&gt;&lt;/div&gt;
			&lt;a class="dropdown-item"  href="javascript:void(0);"&gt;Another link&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>


									</div>
								</div>
								<!-- /Column  -->
								<!-- Column  -->
								<div class="col-xl-12 ">
									<div class="card dz-card" id="dropdown-header">
										<div class="card-header flex-wrap border-0">
											<div>
												<h4 class="card-title">Dropdown Header</h4>
												<p class="m-0 subtitle">The
													<code>.dropdown-header</code> class is used to add headers inside the dropdown menu
												</p>
											</div>
											<ul class="nav nav-tabs dzm-tabs" id="myTab3" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab3" data-bs-toggle="tab" data-bs-target="#DropdownHeader" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab3" data-bs-toggle="tab" data-bs-target="#DropdownHeader-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent3">
											<div class="tab-pane fade show active" id="DropdownHeader" role="tabpanel" aria-labelledby="home-tab3">
												<div class="card-body pt-0">

													<div class="basic-dropdown">
														<div class="dropdown">
															<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
																Dropdown button
															</button>
															<div class="dropdown-menu">
																<h5 class="dropdown-header">Dropdown header</h5>
																<a class="dropdown-item" href="javascript:void(0);">Link 1</a>
																<a class="dropdown-item" href="javascript:void(0);">Link 2</a>
																<a class="dropdown-item" href="javascript:void(0);">Link 3</a>
																<h5 class="dropdown-header">Dropdown header</h5>
																<a class="dropdown-item" href="javascript:void(0);">Another link</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="DropdownHeader-html" role="tabpanel" aria-labelledby="home-tab3">
												<div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="basic-dropdown"&gt;
	&lt;div class="dropdown"&gt;
		&lt;button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown"&gt;
			Dropdown button
		&lt;/button&gt;
		&lt;div class="dropdown-menu"&gt;
			&lt;h5 class="dropdown-header"&gt;Dropdown header&lt;/h5&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 1&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 2&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 3&lt;/a&gt;
			&lt;h5 class="dropdown-header"&gt;Dropdown header&lt;/h5&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another link&lt;/a&gt;
		&lt;/div&gt;
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
									<div class="card dz-card" id="disable-active">
										<div class="card-header flex-wrap border-0">
											<div>
												<h4 class="card-title">Disable and Active items</h4>
												<p class="m-0 subtitle">The
													<code>.dropdown-header</code> class is used to add headers inside the dropdown menu
												</p>
											</div>
											<ul class="nav nav-tabs dzm-tabs" id="myTab4" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab4" data-bs-toggle="tab" data-bs-target="#DisableActive" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab4" data-bs-toggle="tab" data-bs-target="#DisableActive-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent4">
											<div class="tab-pane fade show active" id="DisableActive" role="tabpanel" aria-labelledby="home-tab4">
												<div class="card-body pt-0">
													<div class="basic-dropdown">
														<div class="dropdown">
															<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
																Dropdown button
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="javascript:void(0);">Normal</a>
																<a class="dropdown-item active" href="javascript:void(0);">Active</a>
																<a class="dropdown-item disabled" href="javascript:void(0);">Disabled</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="DisableActive-html" role="tabpanel" aria-labelledby="home-tab4">
												<div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="basic-dropdown"&gt;
	&lt;div class="dropdown"&gt;
		&lt;button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown"&gt;
			Dropdown button
		&lt;/button&gt;
		&lt;div class="dropdown-menu"&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Normal&lt;/a&gt;
			&lt;a class="dropdown-item active" href="javascript:void(0);"&gt;Active&lt;/a&gt;
			&lt;a class="dropdown-item disabled" href="javascript:void(0);"&gt;Disabled&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>

									</div>
								</div>
								<!-- /Column  -->
								<!-- Column  -->
								<div class="col-xl-12 ">
									<div class="card dz-card" id="align-right">
										<div class="card-header flex-wrap border-0">
											<div>
												<h4 class="card-title">Align Right</h4>
												<p class="m-0 subtitle">To right-align the dropdown, add the
												<code>.dropdown-menu-end</code> class to the element with .dropdown-menu</p>
											</div>
											<ul class="nav nav-tabs dzm-tabs" id="myTab5" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab5" data-bs-toggle="tab" data-bs-target="#AlignRight" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab5" data-bs-toggle="tab" data-bs-target="#AlignRight-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent5">
											<div class="tab-pane fade show active" id="AlignRight" role="tabpanel" aria-labelledby="home-tab5">
												<div class="card-body pt-0">
													<div class="basic-dropdown">
														<div class="dropdown">
															<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
																Dropdown button
															</button>
															<div class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item" href="javascript:void(0);">Link 1</a>
																<a class="dropdown-item" href="javascript:void(0);">Link 2</a>
																<a class="dropdown-item" href="javascript:void(0);">Link 3</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="AlignRight-html" role="tabpanel" aria-labelledby="home-tab5">
												<div class="card-body p-0 code-area">
<pre class="m-0"> <code class="language-html">&lt;div class="basic-dropdown"&gt;
	&lt;div class="dropdown"&gt;
		&lt;button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown"&gt;
			Dropdown button
		&lt;/button&gt;
		&lt;div class="dropdown-menu dropdown-menu-end"&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 1&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 2&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 3&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>

									</div>
								</div>
								<!-- /Column  -->
								<!-- Column  -->
								<div class="col-xl-12 ">
									<div class="card dz-card" id="dropup">
										<div class="card-header flex-wrap border-0">
											<div>
												<h4 class="card-title">Dropup</h4>
												<p class="m-0 subtitle">The
													<code>.dropup</code> class makes the dropdown menu expand upwards instead of downwards
												</p>
											</div>
											<ul class="nav nav-tabs dzm-tabs" id="myTab6" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab6" data-bs-toggle="tab" data-bs-target="#Dropup" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab6" data-bs-toggle="tab" data-bs-target="#Dropup-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent6">
											<div class="tab-pane fade show active" id="Dropup" role="tabpanel" aria-labelledby="home-tab6">
												<div class="card-body pt-0">

													<div class="basic-dropdown">
														<!-- Default dropup button -->
														<div class="btn-group dropup mb-1">
															<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
																Dropup
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="javascript:void(0);">Link 1</a>
																<a class="dropdown-item" href="javascript:void(0);">Link 2</a>
																<a class="dropdown-item" href="javascript:void(0);">Link 3</a>
															</div>
														</div>
														<!-- Split dropup button -->
														<div class="btn-group dropup mb-1">
															<button type="button" class="btn btn-primary">
																Split dropup
															</button>
															<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
																<span class="sr-only">Toggle Dropdown</span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="javascript:void(0);">Link 1</a>
																<a class="dropdown-item" href="javascript:void(0);">Link 2</a>
																<a class="dropdown-item" href="javascript:void(0);">Link 3</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="Dropup-html" role="tabpanel" aria-labelledby="home-tab6">
												<div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="basic-dropdown"&gt;
	&lt;!-- Default dropup button --&gt;
	&lt;div class="btn-group dropup mb-1"&gt;
		&lt;button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown"&gt;
			Dropup
		&lt;/button&gt;
		&lt;div class="dropdown-menu"&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 1&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 2&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 3&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;javascript:void(0);
	&lt;!-- Split dropup button --&gt;
	&lt;div class="btn-group dropup mb-1"&gt;
		&lt;button type="button" class="btn btn-primary"&gt;
			Split dropup
		&lt;/button&gt;
		&lt;button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"&gt;
			&lt;span class="sr-only"&gt;Toggle Dropdown&lt;/span&gt;
		&lt;/button&gt;
		&lt;div class="dropdown-menu"&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 1&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 2&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 3&lt;/a&gt;
		&lt;/div&gt;
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
									<div class="card dz-card" id="dropright">
										<div class="card-header flex-wrap border-0">
											<div>
												<h4 class="card-title">Dropright</h4>
												<p class="m-0 subtitle">Trigger dropdown menus at the right of the elements by adding
													<code>.dropend</code> to the parent element</p>
											</div>
											<ul class="nav nav-tabs dzm-tabs" id="myTab7" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab7" data-bs-toggle="tab" data-bs-target="#Dropright" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab7" data-bs-toggle="tab" data-bs-target="#Dropright-html" type="button" role="tab" aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent7">
											<div class="tab-pane fade show active" id="Dropright" role="tabpanel" aria-labelledby="home-tab7">
												<div class="card-body pt-0">

													<div class="basic-dropdown">
														<!-- Default dropright button -->
														<div class="btn-group dropend mb-1">
															<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
																Dropright
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="javascript:void(0);">Link 1</a>
																<a class="dropdown-item" href="javascript:void(0);">Link 2</a>
																<a class="dropdown-item" href="javascript:void(0);">Link 3</a>
															</div>
														</div>

														<!-- Split dropright button -->
														<div class="btn-group dropend mb-1">
															<button type="button" class="btn btn-primary">
																Split dropright
															</button>
															<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
																<span class="sr-only">Toggle Dropright</span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="javascript:void(0);">Link 1</a>
																<a class="dropdown-item" href="javascript:void(0);">Link 2</a>
																<a class="dropdown-item" href="javascript:void(0);">Link 3</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="Dropright-html" role="tabpanel" aria-labelledby="home-tab7">
												<div class="card-body p-0 code-area">
<pre class="m-0"> <code class="language-html">&lt;div class="basic-dropdown"&gt;
	&lt;!-- Default dropright button --&gt;
	&lt;div class="btn-group dropend mb-1"&gt;
		&lt;button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"&gt;
			Dropright
		&lt;/button&gt;
		&lt;div class="dropdown-menu"&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 1&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 2&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 3&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;

	&lt;!-- Split dropright button --&gt;
	&lt;div class="btn-group dropend mb-1"&gt;
		&lt;button type="button" class="btn btn-primary"&gt;
			Split dropright
		&lt;/button&gt;
		&lt;button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"&gt;
			&lt;span class="sr-only"&gt;Toggle Dropright&lt;/span&gt;
		&lt;/button&gt;
		&lt;div class="dropdown-menu"&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 1&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 2&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 3&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>

									</div>
								</div>
								<!-- /Column  -->
								<!-- Column  -->
								<div class="col-xl-12 ">
									<div class="card dz-card" id="dropstart">
										<div class="card-header flex-wrap border-0">
											<div>
												<h4 class="card-title">dropstart </h4>
												<p class="m-0 subtitle">Trigger dropdown menus at the right of the elements by adding
													<code>.dropstart </code> to the parent element</p>
											</div>
											<ul class="nav nav-tabs dzm-tabs" id="myTab8" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab8" data-bs-toggle="tab" data-bs-target="#Dropstart" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab8" data-bs-toggle="tab" data-bs-target="#Dropstart-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent8">
											<div class="tab-pane fade show active" id="Dropstart" role="tabpanel" aria-labelledby="home-tab8">
												<div class="card-body pt-0">
													<div class="basic-dropdown">
														<!-- Default dropstart button -->
														<div class="btn-group dropstart mb-1">
															<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
																dropstart
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="javascript:void(0);">Link 1</a>
																<a class="dropdown-item" href="javascript:void(0);">Link 2</a>
																<a class="dropdown-item" href="javascript:void(0);">Link 3</a>
															</div>
														</div>

														<!-- Split dropstart button -->
														<div class="btn-group mb-1">
															<div class="btn-group dropstart " role="group">
																<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
																	<span class="sr-only">Toggle dropstart</span>
																</button>
																<div class="dropdown-menu">
																	<a class="dropdown-item" href="javascript:void(0);">Link 1</a>
																	<a class="dropdown-item" href="javascript:void(0);">Link 2</a>
																	<a class="dropdown-item" href="javascript:void(0);">Link 3</a>
																</div>
															</div>
															<button type="button" class="btn btn-primary">
																Split dropstart
															</button>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="Dropstart-html" role="tabpanel" aria-labelledby="home-tab8">
												<div class="card-body p-0 code-area">
<pre class="m-0"> <code class="language-html">&lt;div class="basic-dropdown"&gt;
	&lt;!-- Default dropstart button --&gt;
	&lt;div class="btn-group dropstart mb-1"&gt;
		&lt;button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"&gt;
			dropstart
		&lt;/button&gt;
		&lt;div class="dropdown-menu"&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 1&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 2&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 3&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;

	&lt;!-- Split dropstart button --&gt;
	&lt;div class="btn-group mb-1"&gt;
		&lt;div class="btn-group dropstart " role="group"&gt;
			&lt;button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"&gt;
				&lt;span class="sr-only"&gt;Toggle dropstart&lt;/span&gt;
			&lt;/button&gt;
			&lt;div class="dropdown-menu"&gt;
				&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 1&lt;/a&gt;
				&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 2&lt;/a&gt;
				&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Link 3&lt;/a&gt;
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;button type="button" class="btn btn-primary"&gt;
			Split dropstart
		&lt;/button&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Column  -->


								<!-- Column  -->
								<div class="col-xl-12" id="button-dropdowns">
									<div class="card dz-card">
										<div class="card-header flex-wrap border-0">
											<h4 class="card-title">Button Dropdowns</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab9" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab9" data-bs-toggle="tab" data-bs-target="#ButtonDropdowns" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab9" data-bs-toggle="tab" data-bs-target="#ButtonDropdowns-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent9">
											<div class="tab-pane fade show active" id="ButtonDropdowns" role="tabpanel" aria-labelledby="home-tab9">
												<div class="card-body pt-0">
													<div class="button-dropdown">
														<div class="btn-group mb-1">
															<button type="button" class="btn btn-primary">Primary</button>
															<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="javascript:void(0);">Action</a>
																<a class="dropdown-item" href="javascript:void(0);">Another action</a>
																<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
															</div>
														</div>
														<div class="btn-group mb-1">
															<button type="button" class="btn btn-secondary">Secondary</button>
															<button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="javascript:void(0);">Action</a>
																<a class="dropdown-item" href="javascript:void(0);">Another action</a>
																<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
															</div>
														</div>

														<div class="btn-group mb-1">
															<button type="button" class="btn btn-success">Success</button>
															<button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="javascript:void(0);">Action</a>
																<a class="dropdown-item" href="javascript:void(0);">Another action</a>
																<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
															</div>
														</div>

														<div class="btn-group mb-1">
															<button type="button" class="btn btn-info">Info</button>
															<button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="javascript:void(0);">Action</a>
																<a class="dropdown-item" href="javascript:void(0);">Another action</a>
																<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
															</div>
														</div>

														<div class="btn-group mb-1">
															<button type="button" class="btn btn-warning">Warning</button>
															<button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="javascript:void(0);">Action</a>
																<a class="dropdown-item" href="javascript:void(0);">Another action</a>
																<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
															</div>
														</div>

														<div class="btn-group mb-1">
															<button type="button" class="btn btn-danger">Danger</button>
															<button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="javascript:void(0);">Action</a>
																<a class="dropdown-item" href="javascript:void(0);">Another action</a>
																<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="ButtonDropdowns-html" role="tabpanel" aria-labelledby="home-tab9">
												<div class="card-body p-0 code-area">
<pre class="m-0"> <code class="language-html">&lt;div class="button-dropdown"&gt;
&lt;div class="btn-group mb-1"&gt;
	&lt;button type="button" class="btn btn-primary"&gt;Primary&lt;/button&gt;
	&lt;button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"&gt;
	&lt;/button&gt;
	&lt;div class="dropdown-menu"&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;
		&lt;div class="dropdown-divider"&gt;&lt;/div&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;
	&lt;/div&gt;
&lt;/div&gt;javascript:void(0);
&lt;div class="btn-group mb-1"&gt;
	&lt;button type="button" class="btn btn-secondary"&gt;Secondary&lt;/button&gt;
	&lt;button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"&gt;
	&lt;/button&gt;
	&lt;div class="dropdown-menu"&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;
		&lt;div class="dropdown-divider"&gt;&lt;/div&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;
	&lt;/div&gt;
&lt;/div&gt;

&lt;div class="btn-group mb-1"&gt;
	&lt;button type="button" class="btn btn-success"&gt;Success&lt;/button&gt;
	&lt;button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"&gt;
	&lt;/button&gt;
	&lt;div class="dropdown-menu"&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;
		&lt;div class="dropdown-divider"&gt;&lt;/div&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;
	&lt;/div&gt;
&lt;/div&gt;

&lt;div class="btn-group mb-1"&gt;
	&lt;button type="button" class="btn btn-info"&gt;Info&lt;/button&gt;
	&lt;button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"&gt;
	&lt;/button&gt;
	&lt;div class="dropdown-menu"&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;
		&lt;div class="dropdown-divider"&gt;&lt;/div&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;
	&lt;/div&gt;
&lt;/div&gt;

&lt;div class="btn-group mb-1"&gt;
	&lt;button type="button" class="btn btn-warning"&gt;Warning&lt;/button&gt;
	&lt;button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"&gt;
	&lt;/button&gt;
	&lt;div class="dropdown-menu"&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;
		&lt;div class="dropdown-divider"&gt;&lt;/div&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;
	&lt;/div&gt;
&lt;/div&gt;

&lt;div class="btn-group mb-1"&gt;
	&lt;button type="button" class="btn btn-danger"&gt;Danger&lt;/button&gt;
	&lt;button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"&gt;
	&lt;/button&gt;
	&lt;div class="dropdown-menu"&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;
		&lt;div class="dropdown-divider"&gt;&lt;/div&gt;
		&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;
	&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Column  -->


								<!-- Column  -->
								<div class="col-xl-12 ">
									<div class="card dz-card" id="sizing">
										<div class="card-header flex-wrap border-0">
											<div>
												<h4 class="card-title">Sizing</h4>
												<p class="m-0 subtitle">Button dropdowns work with buttons of all sizes, including default and split dropdown buttons.</p>
											</div>
											<ul class="nav nav-tabs dzm-tabs" id="myTab10" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab10" data-bs-toggle="tab" data-bs-target="#Sizing" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab10" data-bs-toggle="tab" data-bs-target="#Sizing-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent10">
											<div class="tab-pane fade show active" id="Sizing" role="tabpanel" aria-labelledby="home-tab10">
												<div class="card-body pt-0">
													<div class="dropdown-size">
														<!-- Large button groups (default and split) -->
														<div class="btn-group mb-1">
															<button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown">
																Large button
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="javascript:void(0);">Action</a>
																<a class="dropdown-item" href="javascript:void(0);">Another action</a>
																<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
															</div>
														</div>
														<div class="btn-group mb-1">
															<button class="btn btn-primary btn-lg" type="button">
																Large split button
															</button>
															<button type="button" class="btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<span class="sr-only">Toggle Dropdown</span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="javascript:void(0);">Action</a>
																<a class="dropdown-item" href="javascript:void(0);">Another action</a>
																<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
															</div>
														</div>

														<!-- Small button groups (default and split) -->
														<div class="btn-group mb-1">
															<button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
																Small button
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="javascript:void(0);">Action</a>
																<a class="dropdown-item" href="javascript:void(0);">Another action</a>
																<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
															</div>
														</div>
														<div class="btn-group mb-1">
															<button class="btn btn-primary btn-sm" type="button">
																Small split button
															</button>
															<button type="button" class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<span class="sr-only">Toggle Dropdown</span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="javascript:void(0);">Action</a>
																<a class="dropdown-item" href="javascript:void(0);">Another action</a>
																<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="Sizing-html" role="tabpanel" aria-labelledby="home-tab10">
												<div class="card-body p-0 code-area">
<pre class="m-0"> <code class="language-html">&lt;div class="dropdown-size"&gt;
	&lt;!-- Large button groups (default and split) --&gt;
	&lt;div class="btn-group mb-1"&gt;
		&lt;button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown"&gt;
			Large button
		&lt;/button&gt;
		&lt;div class="dropdown-menu"&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;
			&lt;div class="dropdown-divider"&gt;&lt;/div&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="btn-group mb-1"&gt;
		&lt;button class="btn btn-primary btn-lg" type="button"&gt;
			Large split button
		&lt;/button&gt;
		&lt;button type="button" class="btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
			&lt;span class="sr-only"&gt;Toggle Dropdown&lt;/span&gt;
		&lt;/button&gt;
		&lt;div class="dropdown-menu"&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;
			&lt;div class="dropdown-divider"&gt;&lt;/div&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;

	&lt;!-- Small button groups (default and split) --&gt;
	&lt;div class="btn-group mb-1"&gt;
		&lt;button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"&gt;
			Small button
		&lt;/button&gt;
		&lt;div class="dropdown-menu"&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;
			&lt;div class="dropdown-divider"&gt;&lt;/div&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="btn-group mb-1"&gt;
		&lt;button class="btn btn-primary btn-sm" type="button"&gt;
			Small split button
		&lt;/button&gt;
		&lt;button type="button" class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
			&lt;span class="sr-only"&gt;Toggle Dropdown&lt;/span&gt;
		&lt;/button&gt;
		&lt;div class="dropdown-menu"&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;
			&lt;div class="dropdown-divider"&gt;&lt;/div&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>

									</div>
								</div>
								<!-- /Column  -->
								<!-- Column  -->
								<div class="col-lg-12">
									<div class="card dz-card" id="custom-style">
										<div class="card-header flex-wrap border-0">
											<div>
											<h4 class="card-title">Custom style</h4>
											<p class="m-0 subtitle">Use
												<code>.custom-dropdown</code> this class for this style</p>
											</div>
											<ul class="nav nav-tabs dzm-tabs" id="myTab11" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab11" data-bs-toggle="tab" data-bs-target="#CustomStyle" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab11" data-bs-toggle="tab" data-bs-target="#CustomStyle-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent11">
											<div class="tab-pane fade show active" id="CustomStyle" role="tabpanel" aria-labelledby="home-tab11">
												<div class="card-body pt-0">
													<div class="row">
														<div class="col-xl-3 col-md-3 col-sm-4 col-6 ">
															<div class="dropdown custom-dropdown">
																<div data-bs-toggle="dropdown">Last 7 days
																	<i class="fa fa-angle-down ms-3"></i>
																</div>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item" href="javascript:void(0);">Last 1 Month</a>
																	<a class="dropdown-item" href="javascript:void(0);">Last 6 Month</a>
																	<a class="dropdown-item" href="javascript:void(0);">Last 10 Month</a>
																</div>
															</div>
														</div>

														<div class="col-xl-3 col-md-3 mb-3 col-sm-4 col-6">
															<div class="dropdown custom-dropdown">
																<button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="dropdown">Last 7 days
																	<i class="fa fa-angle-down ms-3"></i>
																</button>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item" href="javascript:void(0);">Last 1 Month</a>
																	<a class="dropdown-item" href="javascript:void(0);">Last 6 Month</a>
																	<a class="dropdown-item" href="javascript:void(0);">Last 10 Month</a>
																</div>
															</div>
														</div>

														<div class="col-xl-3 col-md-3 col-sm-4 col-6 mb-3 mb-sm-0">
															<div class="dropdown custom-dropdown">
																<button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="dropdown">Last 1 Hour
																	<i class="fa fa-angle-down ms-3"></i>
																</button>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item" href="javascript:void(0);">Last 1 hour</a>
																	<a class="dropdown-item" href="javascript:void(0);">Last 2 hour</a>
																	<a class="dropdown-item" href="javascript:void(0);">Last 3 hour</a>
																</div>
															</div>
														</div>

														<div class="col-xl-3 col-md-3 col-sm-4 col-6 mb-3 mb-sm-0">
															<div class="dropdown custom-dropdown">
																<button type="button" class="btn btn-sm btn-primary" data-bs-toggle="dropdown">Last 7 days
																	<i class="fa fa-angle-down ms-3"></i>
																</button>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item"  href="javascript:void(0);">Last 1 Month</a>
																	<a class="dropdown-item"  href="javascript:void(0);">Last 6 Month</a>
																	<a class="dropdown-item"  href="javascript:void(0);">Last 10 Month</a>
																</div>
															</div>
														</div>

														<div class="col-xl-3 col-md-3 col-sm-4 col-6 mb-3 mb-sm-0">
															<div class="dropdown custom-dropdown">
																<button type="button" class="btn btn-sm btn-primary d-flex align-items-center" data-bs-toggle="dropdown">
																	<i class="ti-search me-2 mt-1"></i> 3 AM
																	<i class="fa fa-angle-down ms-3"></i>
																</button>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item"  href="javascript:void(0);">6 AM</a>
																	<a class="dropdown-item"  href="javascript:void(0);">9 AM</a>
																	<a class="dropdown-item"  href="javascript:void(0);">12 AM</a>
																</div>
															</div>
														</div>

														<div class="col-xl-3 col-md-3 col-sm-4 col-6 mb-3 mb-sm-0">
															<div class="dropdown custom-dropdown">
																<button type="button" class="btn btn-sm btn-primary flex-wrap" data-bs-toggle="dropdown">
																	<i class="ti-calendar me-3"></i> March 20, 2018 &nbsp; To &nbsp;April
																	20, 2018
																	<i class="fa fa-angle-down ms-3"></i>
																</button>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item"  href="javascript:void(0);">May 20, 2018 &nbsp; To &nbsp; June 20,
																		2018</a>
																	<a class="dropdown-item"  href="javascript:void(0);">July 20, 2018 &nbsp; To &nbsp; August
																		20, 2018</a>
																</div>
															</div>
														</div>
														<div class="col-xl-3 col-md-3 col-sm-4 col-6">
															<div class="dropdown custom-dropdown ">
																<div class="btn sharp btn-primary tp-btn  ms-3" data-bs-toggle="dropdown">
																	<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M13.5202 17.4167C13.5202 18.81 12.3927 19.9375 10.9994 19.9375C9.60601 19.9375 8.47852 18.81 8.47852 17.4167C8.47852 16.0233 9.60601 14.8958 10.9994 14.8958C12.3927 14.8958 13.5202 16.0233 13.5202 17.4167ZM9.85352 17.4167C9.85352 18.0492 10.3669 18.5625 10.9994 18.5625C11.6319 18.5625 12.1452 18.0492 12.1452 17.4167C12.1452 16.7842 11.6319 16.2708 10.9994 16.2708C10.3669 16.2708 9.85352 16.7842 9.85352 17.4167Z" fill="#2696FD"/>
																	<path d="M13.5202 4.58369C13.5202 5.97699 12.3927 7.10449 10.9994 7.10449C9.60601 7.10449 8.47852 5.97699 8.47852 4.58369C8.47852 3.19029 9.60601 2.06279 10.9994 2.06279C12.3927 2.06279 13.5202 3.19029 13.5202 4.58369ZM9.85352 4.58369C9.85352 5.21619 10.3669 5.72949 10.9994 5.72949C11.6319 5.72949 12.1452 5.21619 12.1452 4.58369C12.1452 3.95119 11.6319 3.43779 10.9994 3.43779C10.3669 3.43779 9.85352 3.95119 9.85352 4.58369Z" fill="#2696FD"/>
																	<path d="M13.5202 10.9997C13.5202 12.393 12.3927 13.5205 10.9994 13.5205C9.60601 13.5205 8.47852 12.393 8.47852 10.9997C8.47852 9.6063 9.60601 8.4788 10.9994 8.4788C12.3927 8.4788 13.5202 9.6063 13.5202 10.9997ZM9.85352 10.9997C9.85352 11.6322 10.3669 12.1455 10.9994 12.1455C11.6319 12.1455 12.1452 11.6322 12.1452 10.9997C12.1452 10.3672 11.6319 9.8538 10.9994 9.8538C10.3669 9.8538 9.85352 10.3672 9.85352 10.9997Z" fill="#2696FD"/>
																	</svg>

																</div>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item"  href="javascript:void(0);">Option 1</a>
																	<a class="dropdown-item"  href="javascript:void(0);">Option 2</a>
																	<a class="dropdown-item"  href="javascript:void(0);">Option 3</a>
																</div>
															</div>
														</div>

														<div class="col-xl-3 col-md-3 col-sm-4 col-6">
															<div class="dropdown custom-dropdown">
																<div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
																	<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M13.5202 17.4167C13.5202 18.81 12.3927 19.9375 10.9994 19.9375C9.60601 19.9375 8.47852 18.81 8.47852 17.4167C8.47852 16.0233 9.60601 14.8958 10.9994 14.8958C12.3927 14.8958 13.5202 16.0233 13.5202 17.4167ZM9.85352 17.4167C9.85352 18.0492 10.3669 18.5625 10.9994 18.5625C11.6319 18.5625 12.1452 18.0492 12.1452 17.4167C12.1452 16.7842 11.6319 16.2708 10.9994 16.2708C10.3669 16.2708 9.85352 16.7842 9.85352 17.4167Z" fill="#2696FD"/>
																	<path d="M13.5202 4.58369C13.5202 5.97699 12.3927 7.10449 10.9994 7.10449C9.60601 7.10449 8.47852 5.97699 8.47852 4.58369C8.47852 3.19029 9.60601 2.06279 10.9994 2.06279C12.3927 2.06279 13.5202 3.19029 13.5202 4.58369ZM9.85352 4.58369C9.85352 5.21619 10.3669 5.72949 10.9994 5.72949C11.6319 5.72949 12.1452 5.21619 12.1452 4.58369C12.1452 3.95119 11.6319 3.43779 10.9994 3.43779C10.3669 3.43779 9.85352 3.95119 9.85352 4.58369Z" fill="#2696FD"/>
																	<path d="M13.5202 10.9997C13.5202 12.393 12.3927 13.5205 10.9994 13.5205C9.60601 13.5205 8.47852 12.393 8.47852 10.9997C8.47852 9.6063 9.60601 8.4788 10.9994 8.4788C12.3927 8.4788 13.5202 9.6063 13.5202 10.9997ZM9.85352 10.9997C9.85352 11.6322 10.3669 12.1455 10.9994 12.1455C11.6319 12.1455 12.1452 11.6322 12.1452 10.9997C12.1452 10.3672 11.6319 9.8538 10.9994 9.8538C10.3669 9.8538 9.85352 10.3672 9.85352 10.9997Z" fill="#2696FD"/>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item"  href="javascript:void(0);">Option 1</a>
																	<a class="dropdown-item"  href="javascript:void(0);">Option 2</a>
																	<a class="dropdown-item"  href="javascript:void(0);">Option 3</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="CustomStyle-html" role="tabpanel" aria-labelledby="home-tab11">
												<div class="card-body p-0 code-area">
<pre class="m-0"> <code class="language-html">&lt;div class="row"&gt;
&lt;div class="col-xl-3"&gt;
	&lt;div class="dropdown custom-dropdown"&gt;
		&lt;div data-bs-toggle="dropdown"&gt;Last 7 days
			&lt;i class="fa fa-angle-down ms-3"&gt;&lt;/i&gt;
		&lt;/div&gt;
		&lt;div class="dropdown-menu dropdown-menu-end"&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Last 1 Month&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Last 6 Month&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Last 10 Month&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;

&lt;div class="col-xl-3"&gt;
	&lt;div class="dropdown custom-dropdown"&gt;
		&lt;button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="dropdown"&gt;Last 7 days
			&lt;i class="fa fa-angle-down ms-3"&gt;&lt;/i&gt;
		&lt;/button&gt;
		&lt;div class="dropdown-menu dropdown-menu-end"&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Last 1 Month&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Last 6 Month&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Last 10 Month&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;

&lt;div class="col-xl-3"&gt;
	&lt;div class="dropdown custom-dropdown"&gt;
		&lt;button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="dropdown"&gt;Last 1 Hour
			&lt;i class="fa fa-angle-down ms-3"&gt;&lt;/i&gt;
		&lt;/button&gt;
		&lt;div class="dropdown-menu dropdown-menu-end"&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Last 1 hour&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Last 2 hour&lt;/a&gt;
			&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Last 3 hour&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;

&lt;div class="col-xl-3"&gt;
	&lt;div class="dropdown custom-dropdown"&gt;
		&lt;button type="button" class="btn btn-sm btn-primary" data-bs-toggle="dropdown"&gt;Last 7 days
			&lt;i class="fa fa-angle-down ms-3"&gt;&lt;/i&gt;
		&lt;/button&gt;
		&lt;div class="dropdown-menu dropdown-menu-end"&gt;
			&lt;a class="dropdown-item"  href="javascript:void(0);"&gt;Last 1 Month&lt;/a&gt;
			&lt;a class="dropdown-item"  href="javascript:void(0);"&gt;Last 6 Month&lt;/a&gt;
			&lt;a class="dropdown-item"  href="javascript:void(0);"&gt;Last 10 Month&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;

&lt;div class="col-xl-3"&gt;
	&lt;div class="dropdown custom-dropdown"&gt;
		&lt;button type="button" class="btn btn-sm btn-primary" data-bs-toggle="dropdown"&gt;
			&lt;i class="ti-search mr-3"&gt;&lt;/i&gt; 3 AM
			&lt;i class="fa fa-angle-down ms-3"&gt;&lt;/i&gt;
		&lt;/button&gt;
		&lt;div class="dropdown-menu dropdown-menu-end"&gt;
			&lt;a class="dropdown-item"  href="javascript:void(0);"&gt;6 AM&lt;/a&gt;
			&lt;a class="dropdown-item"  href="javascript:void(0);"&gt;9 AM&lt;/a&gt;
			&lt;a class="dropdown-item"  href="javascript:void(0);"&gt;12 AM&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;

&lt;div class="col-xl-3"&gt;
	&lt;div class="dropdown custom-dropdown"&gt;
		&lt;button type="button" class="btn btn-sm btn-primary" data-bs-toggle="dropdown"&gt;
			&lt;i class="ti-calendar m-r-5"&gt;&lt;/i&gt; March 20, 2018 &nbsp; To &nbsp;April
			20, 2018
			&lt;i class="fa fa-angle-down ms-3"&gt;&lt;/i&gt;
		&lt;/button&gt;
		&lt;div class="dropdown-menu dropdown-menu-end"&gt;
			&lt;a class="dropdown-item"  href="javascript:void(0);"&gt;May 20, 2018 &nbsp; To &nbsp; June 20,
				2018&lt;/a&gt;
			&lt;a class="dropdown-item"  href="javascript:void(0);"&gt;July 20, 2018 &nbsp; To &nbsp; August
				20, 2018&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-3"&gt;
	&lt;div class="dropdown custom-dropdown"&gt;
		&lt;div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown"&gt;
			&lt;svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"&gt;&lt;g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"&gt;&lt;rect x="0" y="0" width="24" height="24"/&gt;&lt;circle fill="#000000" cx="12" cy="5" r="2"/&gt;&lt;circle fill="#000000" cx="12" cy="12" r="2"/&gt;&lt;circle fill="#000000" cx="12" cy="19" r="2"/&gt;&lt;/g&gt;&lt;/svg&gt;
		&lt;/div&gt;
		&lt;div class="dropdown-menu dropdown-menu-end"&gt;
			&lt;a class="dropdown-item"  href="javascript:void(0);"&gt;Option 1&lt;/a&gt;
			&lt;a class="dropdown-item"  href="javascript:void(0);"&gt;Option 2&lt;/a&gt;
			&lt;a class="dropdown-item"  href="javascript:void(0);"&gt;Option 3&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;

&lt;div class="col-xl-3"&gt;
	&lt;div class="dropdown custom-dropdown"&gt;
		&lt;div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown"&gt;
			&lt;svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"&gt;&lt;g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"&gt;&lt;rect x="0" y="0" width="24" height="24"/&gt;&lt;circle fill="#000000" cx="12" cy="5" r="2"/&gt;&lt;circle fill="#000000" cx="12" cy="12" r="2"/&gt;&lt;circle fill="#000000" cx="12" cy="19" r="2"/&gt;&lt;/g&gt;&lt;/svg&gt;
		&lt;/div&gt;
		&lt;div class="dropdown-menu dropdown-menu-end"&gt;
			&lt;a class="dropdown-item"  href="javascript:void(0);"&gt;Option 1&lt;/a&gt;
			&lt;a class="dropdown-item"  href="javascript:void(0);"&gt;Option 2&lt;/a&gt;
			&lt;a class="dropdown-item"  href="javascript:void(0);"&gt;Option 3&lt;/a&gt;
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
							<!-- /row -->
						</div>
					</div>
					<div class="demo-right ">
                        <div class="demo-right-inner dz-scroll " id="right-sidebar">
                            <h4 class="title">Dropdown</h4>
							<div class="dz-scroll demo-right-tabs" id="rightSidebarScroll">
								<ul class="navbar-nav" id="menu-bar">
									<li><a href="#basic-dropdown" class="scroll">Basic Dropdown</a></li>
									<li><a href="#dropdown-divider" class="scroll">Dropdown Divider</a></li>
									<li><a href="#dropdown-header" class="scroll">Dropdown Header</a></li>
									<li><a href="#align-right" class="scroll">Align Right</a></li>
									<li><a href="#dropright" class="scroll">Dropright</a></li>
									<li><a href="#dropstart" class="scroll">Dropstart</a></li>
									<li><a href="#button-dropdowns" class="scroll">Button Dropdowns</a></li>
									<li><a href="#sizing" class="scroll">Sizing</a></li>
									<li><a href="#custom-style" class="scroll">Custom Style</a></li>
								</ul>
							</div>
                        </div>
                    </div>
				</div>
				<!--/element-area-->

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

