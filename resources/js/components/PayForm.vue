<template>
	<div id="app">
		<div class="container justify-content-center">
			<form action="/process-payment" method="post">
				@csrf

				<div class="form-group col-md-4 mb-3">
					<input type="text" name="fullname" class="form-control" placeholder="Enter Your Card fullname">
				</div>
				
				<div class="form-group col-md-4 mb-3">
					<input type="text" name="card" class="form-control" placeholder="Enter Your Card Number">
				</div>

				<div class="form-group col-md-4">
					<input type="date" class="form-control" name="" placeholder="Exp Date">
				</div>

				<div class="form-group col-sm-3">
					<input type="text" class="form-control" name="" placeholder="CVV">
				</div>

				<div class="form-group mb-3">
                     <button type="button" class="btn btn-success">Submit</button>
                </div>

			</form>
		</div>
	</div>
</template>

<script>
	export default{


	}	
</script>