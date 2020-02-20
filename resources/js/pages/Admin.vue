<template>
	<div class="wrapper">
		<div class="row">
			<div class="col-2 col-side-menu">
				<div class="side-menu d-flex align-items-center justify-content-end">
					<ul class="">
						<menuItem :icon="'fas fa-user'" :text="'User'" :link="'/admin/user'" @click.native="test" class="menu-item" />
						<menuItem :icon="'fas fa-cloud-sun'" :text="'Event'" :link="'/admin/event'" @click.native="test" class="active menu-item" />
						<menuItem :icon="'fas fa-newspaper'" :text="'News'" :link="'/admin/news'" @click.native="test" class="menu-item" />
					</ul>
				</div>
			</div>
			<div class="col">
				<router-view></router-view>
			</div>
		</div>
	</div>
</template>
<script>
	import MenuItem from '../components/MenuItem.vue';
	export default {
		components: { MenuItem },
		data() {
			return {
				activeMenu: "Event"
			}
		},
		mounted() {
			this.switchActiveMenu();
		},
		methods: {
			test() {
				console.log("test");
			},
			switchActiveMenu() {
				let menus = this.$el.querySelectorAll(".menu-item")
				for (let i = 0; i < menus.length; i++) {
					menus[i].addEventListener('click', () => {
						for (let j = 0; j < menus.length; j++) {
							menus[j].classList.remove('active');
						}
						menus[i].classList.add('active');
					})
				}
			}
		}
	}
</script>
<style scoped>
	.wrapper, .row {
		height: 95vh;
		margin: 0;
	}
	.col-side-menu {
		height: 100%;
		background-color: #404040;
		padding: 0;
		padding-left: 10px;
	}
	.side-menu {
		height: 100%;
		color: white;
	}
	.side-menu ul {
		padding: 0;
		width: 100%;
		list-style: none;
	}
	.side-menu ul li {
		font-size: 1.1em;
		padding: 10px 0;
	}
	.menu-item:active {
		background-color: #525252;
	}
	.menu-item div {
		display: inline-block;
	}
	.active {
		position: relative;
		background-color: #4a4a4a;
		overflow: hidden;
	}
	.active:after {
		content: " ";
		position: absolute;
		top: 0;
		right: 0;
		width: 15px;
		height: 100%;
		background-color: #ff6464;
		animation: indicator 500ms ease-in-out;
	}
	@keyframes indicator {
		from { opacity: 0; right: -15px; }
		to { opacity: 1; right: 0; }
	}
</style>