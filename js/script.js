var app = new Vue({
  el: "#app",
  data: {
    albums: {},
  },

  methods: {},
  mounted: function() {
    axios.get("http://localhost/php-ajax-dischi/api.php")
      .then((risposta) => {
        this.albums = risposta.data;
      });
  },
});
