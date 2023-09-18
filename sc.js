function calcAge(birthday){

    var birthdayy = new Date(birthday);
    var date = new Date();

    var calc = date - birthdayy;

    var age = Math.floor(calc / 31536000000)

    return age
}

var brithday = "2003-03-21";
var age = calcAge(brithday);

document.getElementById("mosha").innerHTML = age;

//////////////////////////!


document.addEventListener("DOMContentLoaded", function() {
    const div1 = document.getElementById("div1");
    const div2 = document.getElementById("div2");
    const div3 = document.getElementById("div3");

    const images1 = ["./assets/img/phplogo.png", "./assets/img/laravel.png"];
    const images2 = ["./assets/img/java.png", "./assets/img/spring.png"];
    const images3 = ["./assets/img/python.png", "./assets/img/djago.png"];

    let currentIndex1 = 0;
    let currentIndex2 = 0;
    let currentIndex3 = 0;
    

    function changeImage1() {
        div1.querySelector("img").src = images1[currentIndex1];
        currentIndex1 = (currentIndex1 + 1) % images1.length;
        if(currentIndex1 === 0){
            div1.querySelector("p").innerHTML = 'Laravel'
            div1.querySelector("p").style = 'color:#fb503b'
        }
        if(currentIndex1 === 1){
            div1.querySelector("p").innerHTML = 'PHP'
            div1.querySelector("p").style = 'color:#000'
        }
        setTimeout(changeImage2, 2000); // Ndryshoni fotot çdo 2 sekonda
    }
    
    function changeImage2() {
        div2.querySelector("img").src = images2[currentIndex2];
        currentIndex2 = (currentIndex2 + 1) % images2.length;
        if(currentIndex2 === 0){
            div2.querySelector("p").innerHTML = 'Spring'
            div2.querySelector("p").style = 'color:#25B747'
        }
        if(currentIndex2 === 1){
            div2.querySelector("p").innerHTML = 'Java'
            div2.querySelector("p").style = 'color:#000'
        }
        setTimeout(changeImage3, 2000); 
    }

    function changeImage3() {
        div3.querySelector("img").src = images3[currentIndex3];
        currentIndex3 = (currentIndex3 + 1) % images3.length;
        if(currentIndex3 === 0){
            div3.querySelector("p").innerHTML = ''
            div3.querySelector("img").style = 'width:60px;height:20px'
        }
        if(currentIndex3 === 1){
            div3.querySelector("p").innerHTML = 'Python'
            div3.querySelector("p").style = 'color:#000'
            div3.querySelector("img").style = 'width:23px;height:20px'
        }
        setTimeout(changeImage1, 2000); 
    }

    changeImage1();


    const d1v = document.getElementById("d1v");
    const d2v = document.getElementById("d2v");

    const image1 = ["./assets/img/css.png", "./assets/img/sass.png", "./assets/img/bootstrap.png"];
    const image2 = ["./assets/img/js.png", "./assets/img/react.png"];

    let current1ndex = 0;
    let current2ndex = 0;


    function change1mage() {
        d1v.querySelector("img").src = image1[current1ndex];
        current1ndex = (current1ndex + 1) % image1.length;
        if(current1ndex === 0){
            d1v.querySelector("p").innerHTML = ''
            d1v.querySelector("img").style = 'width:60px;height:20px'
        }
        if(current1ndex === 2){
            d1v.querySelector("p").innerHTML = ''
            d1v.querySelector("img").style = 'width:30px;height:20px'
        }
        if(current1ndex === 1){
            d1v.querySelector("p").innerHTML = 'CSS'
            d1v.querySelector("p").style = 'color:#000'
            d1v.querySelector("img").style = 'width:20px;height:20px'
        }
        setTimeout(change2mage, 2000); 
    }
    
    function change2mage() {
        d2v.querySelector("img").src = image2[current2ndex];
        current2ndex = (current2ndex + 1) % image2.length;
        if(current2ndex === 0){
            d2v.querySelector("p").innerHTML = 'React JS'
            d2v.querySelector("p").style = 'color:#36dff8'
        }
        if(current2ndex === 1){
            d2v.querySelector("p").innerHTML = 'Javascript'
            d2v.querySelector("p").style = 'color:#000'
        }
        setTimeout(change1mage, 2000); 
    }
    
    change1mage(); 
});