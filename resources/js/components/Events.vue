<template>
	<div class="">
		<div class="row">
			<div class="col-md-12">
				<ul class="nav nav-tabs">
					<li class="nav-item w-25">
						<a class="nav-link active" href="#">Latest</a>
					</li>
					<li class="nav-item w-25">
						<a class="nav-link" href="#">Closed</a>
					</li>
					<div class="w-50 d-flex justify-content-end">
						<div class="w-50">
							<select name="sort-events" class="form-control">
								<option value="">Sort</option>
								<!-- <option value="">Sort</option> -->
							</select>
						</div>
					</div>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="tab-content p-3">
					<div v-for="event in events">
						<event :event="event" :key="event.id" />
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
	import Event from './Event.vue'
	export default {
		props: [],
		components: { Event },
		data() {
			return {
				events: []
			}
		},
		mounted() {
			this.initEvents();
		},
		methods: {
			initEvents() {
				this.events.push(
				{
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
				},
				{
					id: 2,
					title: "Typhoon Yolanda",
					date_start: new Date("November 3 2013"),
					date_end: new Date("November 11 2013"),
					status: "Open",
					location: "Tacloban City",
					description: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nemo inventore nesciunt, temporibus, atque quibusdam expedita natus ipsa dolore nam a nostrum repellat, architecto! Soluta excepturi voluptate deserunt doloribus minima, expedita ex. Culpa obcaecati repellendus debitis dolores ducimus deserunt molestias!",
					thumbnail: "/images/thumbnails/yolanda.jpg",
					donation: {
						cash: 2098045492,
						goods: 2504,
						clothing: 634
					},
				},
				)
			}
		}
	}
</script>
<style scoped>
	.tab-content {
		border: 1px solid #dee2e6;
		border-top: 0;
	}
</style>