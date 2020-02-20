<template>
	<div>
		<navbar />
		<router-view></router-view>
	</div>
</template>
<script>
	import Navbar from '../layouts/Navbar.vue'
	export default {
		components: {Navbar}
	}
</script>
<style>
	.nav-link {
		cursor: pointer;
	}
</style>