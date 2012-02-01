var mygallery=new fadeSlideShow({
	wrapperid: "homeSlideshow", //ID of blank DIV on page to house Slideshow
	dimensions: [330, 220], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [
            ["img/slideshow/01.png"],
            ["img/slideshow/02.png"],
            ["img/slideshow/03.png"],
            ["img/slideshow/04.png"],
            ["img/slideshow/05.png"],
            ["img/slideshow/06.png"],
            ["img/slideshow/07.png"],
            ["img/slideshow/08.png"],
            ["img/slideshow/09.png"],
            ["img/slideshow/10.png"],
            ["img/slideshow/11.png"],
            ["img/slideshow/12.png"],
            ["img/slideshow/13.png"],
            ["img/slideshow/14.png"],
            ["img/slideshow/15.png"],
            ["img/slideshow/16.png"],
            ["img/slideshow/17.png"],
            ["img/slideshow/18.png"],
            ["img/slideshow/19.png"],
            ["img/slideshow/20.png"],
            ["img/slideshow/21.png"],
            ["img/slideshow/22.png"],
            ["img/slideshow/23.png"],
            ["img/slideshow/24.png"],
            ["img/slideshow/25.png"],
            ["img/slideshow/26.png"]
        ],
	displaymode: {type:'auto', pause:2500, cycles:0, wraparound:true, randomize:true},
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 500, //transition duration (milliseconds)
	descreveal: "ondemand",
	togglerid: ""
})
