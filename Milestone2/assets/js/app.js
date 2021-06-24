const app = new Vue({
  el: "#app",
  data: {
    dischi: null,
  },
  methods: {},
  mounted() {
    axios
      .get("./api/disc_api.php")
      .then((result) => {
        console.log(result);
        this.dischi = result.data;
      })
      .catch((err) => {});
  },
});
