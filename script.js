const app = new Vue({
  el: '#app',
  data: {
    valueOptionGenre: "All",
    albums: [],
    listAlbumGenre: []
  },
  computed:{

  },
  mounted(){
    this.getAlbum();
    this.addGenre();
  },
  methods:{
    getAlbum(){
      axios.get('http://localhost/php-ajax-dischi/server.php')
      .then((response) => {
        this.albums = response.data;
        this.addGenre()
      })
    },
    addGenre(){
      this.albums.forEach(album => {
        if(!this.listAlbumGenre.includes(album.genre)){
          this.listAlbumGenre.push(album.genre)
        }
      });
    }
  }
})