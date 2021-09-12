const APIController = (function() {
    
    const clientId = '8346ce6eaa4c4f5caad6199bc563682f';
    const clientSecret = '2c793f70e09846689a8f2f29cc9e11dd';

    // private methods
    const _getToken = async () => {

        const result = await fetch('https://accounts.spotify.com/api/token', {
            method: 'POST',
            headers: {
                'Content-Type' : 'application/x-www-form-urlencoded', 
                'Authorization' : 'Basic ' + btoa(clientId + ':' + clientSecret)
            },
            body: 'grant_type=client_credentials'
        });

        const data = await result.json();
        return data.access_token;
    }
    
    const _getGenres = async (token) => {

        const result = await fetch(`https://api.spotify.com/v1/browse/categories?locale=sv_US`, {
            method: 'GET',
            headers: { 'Authorization' : 'Bearer ' + token}
        });

        const data = await result.json();
        return data.categories.items;
    }

    const _getPlaylistByGenre = async (token, genreId) => {

        const limit = 10;
        
        const result = await fetch(`https://api.spotify.com/v1/browse/categories/${genreId}/playlists?limit=${limit}`, {
            method: 'GET',
            headers: { 'Authorization' : 'Bearer ' + token}
        });

        const data = await result.json();
        return data.playlists.items;
    }

    const _getTracks = async (token, tracksEndPoint) => {

        const limit = 10;

        const result = await fetch(`${tracksEndPoint}?limit=${limit}`, {
            method: 'GET',
            headers: { 'Authorization' : 'Bearer ' + token}
        });

        const data = await result.json();
        return data.items;
    }

    const _getTrack = async (token, trackEndPoint) => {

        const result = await fetch(`${trackEndPoint}`, {
            method: 'GET',
            headers: { 'Authorization' : 'Bearer ' + token}
        });

        const data = await result.json();
        return data;
    }

    return {
        getToken() {
            return _getToken();
        },
        getGenres(token) {
            return _getGenres(token);
        },
        getPlaylistByGenre(token, genreId) {
            return _getPlaylistByGenre(token, genreId);
        },
        getTracks(token, tracksEndPoint) {
            return _getTracks(token, tracksEndPoint);
        },
        getTrack(token, trackEndPoint) {
            return _getTrack(token, trackEndPoint);
        }
    }
})();


// UI Module
const UIController = (function() {

    //object to hold references to html selectors
    const DOMElements = {
        selectGenre: '#select_genre',
        selectPlaylist: '#select_playlist',
        buttonSubmit: '#btn_submit',
        divSongDetail: '#song-detail',
        hfToken: '#hidden_token',
        divSonglist: '.song-list'
    }

    //public methods
    return {

        //method to get input fields
        inputField() {
            return {
                genre: document.querySelector(DOMElements.selectGenre),
                playlist: document.querySelector(DOMElements.selectPlaylist),
                tracks: document.querySelector(DOMElements.divSonglist),
                submit: document.querySelector(DOMElements.buttonSubmit),
                songDetail: document.querySelector(DOMElements.divSongDetail)
            }
        },

        // need methods to create select list option
        createGenre(text, value) {
            const html = `<option value="${value}">${text}</option>`;
            document.querySelector(DOMElements.selectGenre).insertAdjacentHTML('beforeend', html);
        }, 

        createPlaylist(text, value) {
            const html = `<option value="${value}">${text}</option>`;
            document.querySelector(DOMElements.selectPlaylist).insertAdjacentHTML('beforeend', html);
        },

        // need method to create a track list group item 
        createTrack(id, name) {
            const html = `<a href="#" class="list-group-item list-group-item-action list-group-item-light" id="${id}">${name}</a>`;
            document.querySelector(DOMElements.divSonglist).insertAdjacentHTML('beforeend', html);
        },

        // need method to create the song detail
        createTrackDetail(img, title, artist) {

            const detailDiv = document.querySelector(DOMElements.divSongDetail);
            // any time user clicks a new song, we need to clear out the song detail div
            detailDiv.innerHTML = '';

            const html = 
            `
			<style>
			input[type="submit"]{
				/* change these properties to whatever you want */
				background-color: #32CD32;
				color: #fff;
				border-radius: 10px;
			}
			</style>
			<div class="row col-sm-12 px-0">
							<img src="${img}" alt="">        
						</div>
						<div class="row col-sm-12 px-0" style="text-align:center;color:white">
							<label for="Genre" class="form-label col-sm-12">${title}:</label>
						</div>
						<div class="row col-sm-12 px-0" style="text-align:center;color:white">
							<label for="artist" class="form-label col-sm-12">By ${artist}:</label>
						</div> 

			<form action="phpForm.php" method="post">
			  <label for="state">Choose a state:</label>
			  <select name="state" id="state">
				<option value="Texas">Texas</option>
<option value="Washington">Washington</option>
<option value="Wisconsin">Wisconsin</option>
<option value="Florida">Florida</option>
<option value="West Virginia">West Virginia</option>
<option value="South Dakota">South Dakota</option>
<option value="Rhode Island">Rhode Island</option>
<option value="Oregon">Oregon</option>
<option value="New York">New York</option>
<option value="New Hampshire">New Hampshire</option>
<option value="Nebraska">Nebraska</option>
<option value="Kansas">Kansas</option>
<option value="Mississippi">Mississippi</option>
<option value="Illinois">Illinois</option>
<option value="Delaware">Delaware</option>
<option value="Connecticut">Connecticut</option>
<option value="Arkansas">Arkansas</option>
<option value="Indiana">Indiana</option>
<option value="Missouri">Missouri</option>
<option value="Nevada">Nevada</option>
<option value="Maine">Maine</option>
<option value="Michigan">Michigan</option>
<option value="Georgia">Georgia</option>
<option value="Hawaii">Hawaii</option>
<option value="Alaska">Alaska</option>
<option value="Tennessee">Tennessee</option>
<option value="Virginia">Virginia</option>
<option value="New Jersy">New Jersy</option>
<option value="Kenturcky">Kenturcky</option>
<option value="North Dakota">North Dakota</option>
<option value="Minnesota">Minnesota</option>
<option value="Oklahoma">Oklahoma</option>
<option value="Montana">Montana</option>
<option value="Utah">Utah</option>
<option value="Colorado">Colorado</option>
<option value="Ohio">Ohio</option>
<option value="Alabama">Alabama</option>
<option value="Iowa">Iowa</option>
<option value="New Mexico">New Mexico</option>
<option value="South Carolina">South Carolina</option>
<option value="Pennsylvania">Pennsylvania</option>
<option value="Arizona">Arizona</option>
<option value="Maryland">Maryland</option>
<option value="Massachusetts">Massachusetts</option>
<option value="Califonia">Califonia</option>
<option value="Idaho">Idaho</option>
<option value="Wyoming">Wyoming</option>
<option value="North Carolina">North Carolina</option>
<option value="Louisiana">Louisiana</option>
			  </select>
			  <br><br>
			<input type='hidden' name='title' value=${title}> 
			<input type='hidden' name='artist' value=${artist}> 
			<input type='hidden' name='img' value=${img}> 
			  <input id="btn_submit" type="submit" value="Vote Ur Music" name="sub">
			</form>
			



            
			
            `;

            detailDiv.insertAdjacentHTML('beforeend', html)
        },

        resetTrackDetail() {
            this.inputField().songDetail.innerHTML = '';
        },

        resetTracks() {
            this.inputField().tracks.innerHTML = '';
            this.resetTrackDetail();
        },

        resetPlaylist() {
            this.inputField().playlist.innerHTML = '';
            this.resetTracks();
        },
        
        storeToken(value) {
            document.querySelector(DOMElements.hfToken).value = value;
        },

        getStoredToken() {
            return {
                token: document.querySelector(DOMElements.hfToken).value
            }
        }
    }

})();

const APPController = (function(UICtrl, APICtrl) {

    // get input field object ref
    const DOMInputs = UICtrl.inputField();

    // get genres on page load
    const loadGenres = async () => {
        //get the token
        const token = await APICtrl.getToken();           
        //store the token onto the page
        UICtrl.storeToken(token);
        //get the genres
        const genres = await APICtrl.getGenres(token);
        //populate our genres select element
        genres.forEach(element => UICtrl.createGenre(element.name, element.id));
    }

    // create genre change event listener
    DOMInputs.genre.addEventListener('change', async () => {
        //reset the playlist
        UICtrl.resetPlaylist();
        //get the token that's stored on the page
        const token = UICtrl.getStoredToken().token;        
        // get the genre select field
        const genreSelect = UICtrl.inputField().genre;       
        // get the genre id associated with the selected genre
        const genreId = genreSelect.options[genreSelect.selectedIndex].value;             
        // ge the playlist based on a genre
        const playlist = await APICtrl.getPlaylistByGenre(token, genreId);       
        // create a playlist list item for every playlist returned
        playlist.forEach(p => UICtrl.createPlaylist(p.name, p.tracks.href));
    });
     

    // create submit button click event listener
    DOMInputs.submit.addEventListener('click', async (e) => {
        // prevent page reset
        e.preventDefault();
        // clear tracks
        UICtrl.resetTracks();
        //get the token
        const token = UICtrl.getStoredToken().token;        
        // get the playlist field
        const playlistSelect = UICtrl.inputField().playlist;
        // get track endpoint based on the selected playlist
        const tracksEndPoint = playlistSelect.options[playlistSelect.selectedIndex].value;
        // get the list of tracks
        const tracks = await APICtrl.getTracks(token, tracksEndPoint);
        // create a track list item
        tracks.forEach(el => UICtrl.createTrack(el.track.href, el.track.name))
        
    });

    // create song selection click event listener
    DOMInputs.tracks.addEventListener('click', async (e) => {
        // prevent page reset
        e.preventDefault();
        UICtrl.resetTrackDetail();
        // get the token
        const token = UICtrl.getStoredToken().token;
        // get the track endpoint
        const trackEndpoint = e.target.id;
        //get the track object
        const track = await APICtrl.getTrack(token, trackEndpoint);
        // load the track details
        UICtrl.createTrackDetail(track.album.images[2].url, track.name, track.artists[0].name);
    });    

    return {
        init() {
            console.log('App is starting');
            loadGenres();
        }
    }

})(UIController, APIController);

// will need to call a method to load the genres on page load
APPController.init();