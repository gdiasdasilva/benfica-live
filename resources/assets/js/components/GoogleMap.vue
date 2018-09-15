<template>
  <gmap-map
    :center="center"
    :zoom="17"
    style="width: 100%; height: 450px"
  >
    <gmap-marker
      :key="index"
      v-for="(m, index) in markers"
      :position="m.position"
      :clickable="true"
      :draggable="false"
      @click="center=m.position"
    ></gmap-marker>
  </gmap-map>
</template>

<script>
    export default {
        props: ['lat', 'lng'],
        data: function() {
            return {
                center: {},
                markers: []
            }
        },
        mounted() {
            this.center = {lat: parseFloat(this.lat), lng: parseFloat(this.lng)};
            this.markers = [{ position: {lat: parseFloat(this.lat), lng: parseFloat(this.lng)} }];
        }
    }
</script>
