@extends('layouts.default')
@section('title', 'Location')
@section('location_menu', 'side-dropdown show')
@section('location', 'active')
@section('view_location', 'active')
@section('content')

<div class="container-fluid dashboard">
    <div class="content-header">
        <h1>Location</h1>
        <p></p>
    </div>
    <div class="row">

<div class="row">
<div class="col-xl-4 col-md-6 col-sm-12">
					<div class="card">
						<div class="card-content">
							<div class="card-body">
								<h4 class="card-title">Card With Header And Footer</h4>
								<p class="card-text">
									Gummies bonbon apple pie fruitcake icing biscuit apple pie jelly-o sweet roll. Toffee
									sugar plum sugar plum jelly-o jujubes bonbon dessert carrot cake.
								</p>
							</div>
							<img class="img-fluid w-100" src="assets/images/card/banana.jpg" alt="Card image cap">
						</div>
						<div class="card-footer d-flex justify-content-between">
							<span>Card Footer</span>
							<button class="btn btn-light-primary">Read More</button>
						</div>
					</div>
					<div class="card collapse-icon accordion-icon-rotate">
						<div class="card-header">
							<h1 class="card-title pl-1">Accordion</h1>
						</div>
						<div class="card-content">
							<div class="card-body">
								<div class="accordion" id="cardAccordion">
										<div class="card-header" id="headingOne" data-bs-toggle="collapse"
											data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"
											role="button">
											<span class="collapsed collapse-title">Accordion Item 1</span>
										</div>
										<div id="collapseOne" class="collapse pt-1" aria-labelledby="headingOne"
											data-parent="#cardAccordion">
											<div class="card-body">
												Cheesecake muffin cupcake dragée lemon drops tiramisu cake gummies chocolate
												cake. Marshmallow tart
												croissant. Tart dessert tiramisu marzipan lollipop lemon drops.
											</div>
										</div>
									<div class=" collapse-header">
										<div class="card-header" id="headingTwo" data-bs-toggle="collapse"
											data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
											role="button">
											<span class="collapsed collapse-title">Accordion Item 2</span>
										</div>
										<div id="collapseTwo" class="collapse pt-1" aria-labelledby="headingTwo"
											data-parent="#cardAccordion">
											<div class="card-text">
												Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly
												beans
												gummi bears sweet
												roll bonbon muffin liquorice. Wafer lollipop sesame snaps.
											</div>
										</div>
									</div>
									<div class=" open">
										<div class="card-header" id="headingThree" data-bs-toggle="collapse"
											data-bs-target="#collapseThree" aria-expanded="true"
											aria-controls="collapseThree" role="button">
											<span class="collapsed collapse-title">Accordion Item 3</span>
										</div>
										<div id="collapseThree" class="collapse show pt-1" aria-labelledby="headingThree"
											data-parent="#cardAccordion">
											<div class="card-text">
												Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping
												fruitcake. Caramels
												liquorice biscuit ice cream fruitcake cotton candy tart.
											</div>
										</div>
									</div>
										<div class="card-header" id="headingFour" data-bs-toggle="collapse"
											data-bs-target="#collapseFour" aria-expanded="false"
											aria-controls="collapseFour" role="button">
											<span class="collapsed  collapse-title">Accordion Item 4</span>
										</div>
										<div id="collapseFour" class="collapse pt-1" aria-labelledby="headingFour"
											data-parent="#cardAccordion">
											<div class="card-text">
												Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping
												fruitcake. Caramels
												liquorice biscuit ice cream fruitcake cotton candy tart.
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

@section('footerScripts')

    <script>

    </script>

@endsection