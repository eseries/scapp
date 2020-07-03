<template>
	<div id="app">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header info">Articles</div>

						<div class="card-body">
							<h3>Posts</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		dat() {
			return {
				Posts: [],
				post: {
					id: '',
					title: '',
					body: 	'',
					image: 	''
				},
				post_id: ''
			}
		}
	}
</script>


