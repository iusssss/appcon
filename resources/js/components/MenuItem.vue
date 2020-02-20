<template>
	<router-link tag="li" :to="link" class="custom-link">
		<div>
			<div class="menu-icon">
				<i :class="icon"></i>
			</div>
			<div class="ml-2 menu-text">
				{{ text }}
			</div>
		</div>
	</router-link>
</template>
<script>
	export default {
		props: ['icon', 'text', 'link']
	}
</script>
<style scoped>
	.menu-item div {
		display: inline-block;
	}
	.menu-item .menu-icon {
		margin-left: 10px;
		width: 25px;
	}
	.menu-item:hover {
		position: relative;
		background-color: #4a4a4a;
		cursor: pointer;
	}
	.custom-link {
		color: white;
	}
	.custom-link:hover {
		text-decoration: none;
	}
</style>