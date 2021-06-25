const app = new Vue({
  el: "#app",
  data: {
    dischi: null,
    selected: null,
  },
  methods: {
    filterByGenre() {
      let discs = "";
      axios
        .get("./api/disc_api.php")
        .then((result) => {
          discs = result.data;
        })
        .catch((err) => {});
        
      discs.forEach((element) => {
        console.log(element);
      });
    },
  },
  mounted() {
    axios
      .get("./api/disc_api.php")
      .then((result) => {
        this.dischi = result.data;
      })
      .catch((err) => {});
  },
});
