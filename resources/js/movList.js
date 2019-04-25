const app = new Vue({
  el: '#movie-1',
  data: {
    movies: []
  },
  computed: {
  },
  methods: {
    DataList: function (movies) {
      this.movies = movies;
    }
  }
})
