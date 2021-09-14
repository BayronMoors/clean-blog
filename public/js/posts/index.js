/**
 * 
 *  ./public/js/posts/index.js
 * 
 */

    const older = document.getElementById('olderPosts');
    const more = document.getElementById('more');
    let offset = 0;
    older.onclick = (e) => {
        e.preventDefault();
        offset += 10;
        axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
        axios.get(`?more=${offset}`, {
            offset,
          })
          .then(function(res) {
            let ajaxRes = document.createElement('div')
            ajaxRes.innerHTML = res.data
            more.append(ajaxRes);
          })
          .catch((err) => {
            console.log(err);
          })
    }