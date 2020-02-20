<template>
	<div>
		<div class="card card-event my-3">
			<div class="row row-event">
				<div class="col-3 card-img">
					<img :src="event.thumbnail" alt="">
				</div>
				<div class="col card-desc">
					<div class="row">
						<div class="col-md-8">
							<h4 class="text-primary">
								<a href="#">{{ event.title }}</a>
							</h4>
						</div>
						<div class="col-md-4 text-right">
							<small class="text-muted">{{ startDate }} - {{ endDate }}</small>
						</div>
						<div class="col-4">
							<p>
								<span class="text-success">{{ event.status }}</span><br>
								{{ event.location }}
							</p>
						</div>
						<div class="col-4">
							<p>
								<i class="fas fa-money-bill-wave text-success"></i> &#8369; {{ formatPrice(event.donation.cash) }} <br>
								<i class="fas fa-box-open text-muted"></i> {{ formatReadable(event.donation.goods) }} boxes <br>
								<i class="fas fa-tshirt text-warning"></i> {{ formatReadable(event.donation.clothing) }} tons
							</p>
						</div>
						<div class="col-4 d-flex align-items-end justify-content-end">
							<a :href="'/event/' + event.id" class="btn btn-outline-success">Details</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
	import moment from 'moment';
	export default {
		props: ['event'],
		data() {
			return {
				
			}
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
	.row {
		margin: 0;
	}
	.row-event {
		height: 160px;
	}
	.card-img {
		padding: 0;
		height: 100%;
	}
	.card-img img {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
	.card-desc {
		padding: 15px 0;
		height: 100%;
		overflow-y: auto;
	}
	.card-desc h3 {
		font-size: calc(.8em + 1vw);
	}
	.card-desc p {
		font-size: calc(.5em + .6vw);
	}
	@media screen and (max-width: 575px) {
		.card-img {
			display: none;
		}
	}
</style>