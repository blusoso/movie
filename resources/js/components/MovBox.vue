<template>
    <div class="container">
      <div class="row">
        <div class="box" v-for="movie in movies" data-toggle="collapse" v-bind:href="'#collapseMov' + movie.id"  v-bind:aria-controls="'#collapseMov' + movie.id">
          <div v-html="movie.img"></div>
          <div v-bind:id="'collapseMov' + movie.id" class="collapse collapseMov">
            <div class="card">
              <div class="card-body">
                <ul>
                  <li>Name: {{movie.Name}}<br>Time: {{movie.hr}} hrs. {{movie.min}} mins.<br>Description: {{movie.desc}}</li>
                </ul>
                <button class="btn btn-danger mov-collapse" v-on:click="saveList(movie)">+ "{{movie.Name}}" to my list</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


</template>

<script>
    export default {
        data() {
          return {
          movies:[{
            id: 1,
            Name: 'Bird Box',
            hr: 2,
            min: 4,
            desc: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            show: false,
            img: '<img src="images/movie/01.jpg">'
          },
          {
            id: 2,
            Name: "To All The Boy I've Loved Before",
            hr: 1,
            min: 39,
            desc: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            show: false,
            img: '<img src="images/movie/02.jpg">'
          },
          {
            id: 3,
            Name: 'Annihilation',
            hr: 1,
            min: 55,
            desc: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            show: false,
            img: '<img src="images/movie/03.jpg">'
          },
          {
            id: 4,
            Name: 'A Christmas Prince',
            hr: 1,
            min: 32,
            desc: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            show: false,
            img: '<img src="images/movie/04.jpg">'
          },
          {
            id: 5,
            Name: 'SPF-18',
            hr: 1,
            min: 15,
            desc: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            show: false,
            img: '<img src="images/movie/05.jpg">'
          },
          {
            id: 6,
            Name: 'Before We Go',
            hr: 1,
            min: 15,
            desc: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            show: false,
            img: '<img src="images/movie/06.jpg">'
          }],
          fav_list: []
          }
        },
        methods: {
          saveList: function(movie) {
            var i = 1;
            var fav_list = this.fav_list;
            var check_dup_mov =[];
            $.each( fav_list, function( index, value ) {
              // console.log(index + ":" + value.Name);
              // console.log(movie.Name);

              if(movie.Name != value.Name) {
                 // console.log(fav_list);
                 check_dup_mov[index] = 'save';
               } else {
                 check_dup_mov[index] = 'duplicate';
                 alert("You've added '" + movie.Name + "'. Please check in your list!");
               }
            });
            // console.log(check_dup_mov);
            // console.log(check_dup_mov.includes('duplicate'));
            this.fav_list.push(movie);
            if(check_dup_mov.includes('duplicate') == true) {
              this.fav_list.pop(movie);
            }
            this.$emit('save-list',this.fav_list);
          }
        }

    }
</script>
