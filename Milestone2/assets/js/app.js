const app = new Vue({
  el: "#app",
  data: {
    dischi: [],
  },
  methods: {},
  mounted() {
    axios
      .get("/api/disc_api.php")
      .then((result) => {
        this.dischi = result.data;
        /*  console.log(this.dischi); */
      })
      .catch((err) => {});
  },
});
