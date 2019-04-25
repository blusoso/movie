<template>
    <div class="list-box">
      <h4><b>MY LIST</b></h4>
      <div class="my-list">
        <div class="container">
          <div class="row">
          <div class="box" v-for="movie in movies" data-toggle="collapse" v-bind:href="'#collapseMov-fav' + movie.id"  v-bind:aria-controls="'#collapseMov-fav' + movie.id">
            <div v-html="movie.img"></div>
            <div v-bind:id="'collapseMov-fav' + movie.id" class="collapse collapseMov">
              <div class="card">
                <div class="card-body">
                  <ul>
                    <li>Name: {{movie.Name}}<br>Time: {{movie.hr}} hrs. {{movie.min}} mins.<br>Description: {{movie.desc}}</li>
                  </ul>
                  <button class="btn btn-danger" v-on:click="delList(movie)">Remove {{movie.Name}} to my list</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
    export default {
    props:['movies'],
        data() {
          return {
          }
        },
        methods: {
          delList: function(del_movie) {
              var fav_list = this.movies;
              console.log(fav_list);
              console.log(del_movie.id);
              for (var i = 0; i <= fav_list.length - 1; i++) {
                  if (fav_list[i].id == del_movie.id) {
                      fav_list.splice(i,1);
                  }
              }

          }
        }
    }
</script>
