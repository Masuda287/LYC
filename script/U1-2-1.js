new Vue({
    el:'#app',
    data(){
        return{
            book:0,
            manga:0,
            syosetu:0,
            movie:0,
            eiga:0,
            music:0
        };
    },
    methods:{
        move_menu_book(){
            if(this.book==0){
                this.book++;
            }else{
                this.book--;
                if(this.manga==1){
                    this.move_menu_manga();
                }
                if(this.syosetu==1){
                    this.move_menu_syosetu();
                }

        
                
            }
        },
        move_menu_manga(){
            if(this.manga==0){
                this.manga++;
            }else{
                this.manga--;
            }
        },
        move_menu_syosetu(){
            if(this.syosetu==0){
                this.syosetu++;
            }else{
                this.syosetu--;
            }
        },
        move_menu_movie(){
            if(this.movie==0){
                this.movie++;
            }else{
                this.movie--;
            }
        },
        move_menu_eiga(){
            if(this.eiga==0){
                this.eiga++;
            }else{
                this.eiga--;
            }  
        },
        move_menu_music(){
            if(this.music==0){
                this.music++;
            }else{
                this.music--;
            }  
        }
    },
    computed:{
        book_menu(){
            return this.book==1;
        },
        manga_menu(){
            return this.manga==1;
        },
        syosetu_menu(){
            return this.syosetu==1;
        },
        movie_menu(){
            return this.movie==1;
        },
        eiga_menu(){
            return this.eiga==1;
        },
        music_menu(){
            return this.music==1;
        }
    }

})