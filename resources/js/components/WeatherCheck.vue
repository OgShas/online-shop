<template>
    <section class="mb-5">
        <h2 class="text-center mb-4">Check Weather by Country</h2>
        <div class="d-flex justify-content-center">
            <input type="text" v-model="city" placeholder="Enter country or city"
                   class="form-control w-50 me-2">
            <button @click="checkWeather" class="btn btn-primary">Check Weather</button>
        </div>
    </section>
</template>

<script>
export default {
    name: 'WeatherCheck',
    data() {
        return {
            city: ''
        }
    },
    methods: {
        checkWeather() {
            if (this.city.trim() === '') {
                alert('Please enter a city or country');
                return;
            }
            window.location.href = `/weather/${encodeURIComponent(this.city)}`;
        }
    }
}
</script>
