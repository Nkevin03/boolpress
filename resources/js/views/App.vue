<template>
  <div class="container">

      <div v-if="posts">
          <article class="mb-4" v-for="post in posts" :key="`post-${ post.id }`">
              <h2>{{ post.title }}</h2>
              <div class="mb-4">
                  {{ formatDate(post.created_at) }}
              </div>
              <p>{{ getExcerpt(post.content, 100) }}</p>
          </article>

          <button class="btn btn-primary mr-3" :disable="pagination.current === 1" @click="getPosts(pagination.current - 1)">
              prev
          </button>

          <button v-for="i in pagination.last" :key="`page_${i}`" @click="getPosts(i)" class="mx-2" :class="pagination.current === i ? 'btn-primary' : 'btn-secondary'">
              {{ i }}
          </button>

          <button class="btn btn-primary" :disable="pagination.current === pagination.last" @click="getPosts(pagination.current + 1)">
              next
          </button>
      </div>
      <Loader v-else />
      <!-- <div v-else>
          Loading posts...
      </div> -->
  </div>
</template>

<script>
import axios from 'axios';
import Loader from '../components/Loader';
export default {
    name: 'App',
    components: {
        Loader
    },
    data() {
        return  {
            posts: null,
        }
    },
    created() {
        this.getPosts();
    },
    methods: {
        getPosts(page = 1) {
            console.log('Axios call here');

            axios.get(`http://127.0.0.1:8000/api/posts?page=${page}`)
                .then(res => {
                    console.log(res);
                    // Senza paginazione
                    this.posts = res.data.data;
                    this.pagination = {
                        current: res.data.current_page,
                        last: res.data.last_page
                    }
                });
        },
        getExcerpt(text, maxLength){
             if(text.length > maxLength){
             return text.substr(0, maxLength) + '...';
            }
            return text;
        },
        formatDate(postDate){
            console.log(postDate);
            const date = new Date(postDate);
            console.log(date);

            const formatted = new Intl.DateTimeFormat('it-IT').format(date);
            return formatted;
        }
    }
}
</script>

<style lang="scss">
    div{
        h1{
            text-transform: uppercase;
        }
    }
</style>