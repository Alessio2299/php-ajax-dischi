const app = new Vue({
  el: '#app',
  data: {
    value: "All",
    albums: [],
    listAlbumGenre: []
  },
  computed:{
  listAlbumFiltered(){
    if(this.value == "All"){
      return this.albums
    }else{
        return this.albums.filter(album =>{
        return (album.genre.includes(this.value));
      });
    }
  }
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