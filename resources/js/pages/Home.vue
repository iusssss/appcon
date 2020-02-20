<template>
	<div class="container mt-3">
		<div class="row">
			<div class="col-md-8">
				<events />
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-header">News</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
	import Events from '../components/Events.vue'
	export default {
		components: {Events},
	}
</script>
<style scoped>
	.container {
		max-width: 1600px;
	}
</style>