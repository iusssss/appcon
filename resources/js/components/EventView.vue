<template>
	<div class="container my-3">
		<div class="row">
			<div class="col">
				<h1 class="mb-0">{{ event.title }}</h1>
				<p class="text-muted m-0">{{ event.location }}</p>
			</div>
			<div class="col col-date">
				<div class="d-flex align-items-end justify-content-end">
					<p class="text-muted m-0">{{ startDate }} - {{ endDate }}</p>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-9">
				<p>
					{{ event.description }}
				</p>
			</div>
			<div class="col-md-3">
				<p>
					<i class="fas fa-money-bill-wave text-success"></i> &#8369; {{ formatPrice(event.donation.cash) }} <br>
					<i class="fas fa-box-open text-muted"></i> {{ formatReadable(event.donation.goods) }} boxes <br>
					<i class="fas fa-tshirt text-warning"></i> {{ formatReadable(event.donation.clothing) }} tons
				</p>
				<button class="btn btn-success btn-sm">Donate</button>
			</div>
		</div>
		<hr>
		<div class="gallery">
			Gallery TODO
		</div>
	</div>
</template>
<script>
	import moment from 'moment';
	export default {
		data() {
			return {
				id: null,
				event: {
					id: 1,
					title: "Taal Volcano Eruption",
					date_start: "--",
					date_end: "--",
					status: "Open",
					location: "Taal, Batangas",
					description: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita corrupti mollitia dolorem quae excepturi exercitationem tempore corporis qui fuga nesciunt odio amet, ratione! Aspernatur corporis delectus veniam totam soluta expedita, recusandae atque. Consequuntur quos delectus nemo enim autem, quas harum.",
					thumbnail: "/images/thumbnails/taal.jpg",
					donation: {
						cash: 245350,
						goods: 85,
						clothing: 10
					},
				}
			}
		},
		created() {
			this.id = this.$route.params.id;
		},
		methods: {
			formatPrice(value) {
		        let val = (value/1).toFixed(2)
		        return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
		    },
		    formatReadable(value) {
		    	return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
		    }
		},
		computed: {
			startDate() {
				return moment(this.event.date_start).format("MMM. DD, YYYY");
			},
			endDate() {
				return moment(this.event.date_end).format("MMM. DD, YYYY");
			}
		}
	}
</script>
<style scoped>
	.col-date div {
		height: 100%;
	}
</style>