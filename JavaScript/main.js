let hashmap = new Map();
hashmap.set("Quandale", "Dingle");
hashmap.set("FujiwaraChoki", "sami");
hashmap.set("GoogTown", "TomatenSuppenSauce");
hashmap.set("ArcadeFortune", "nanimokamokowaretasekaidewakemowakaranaimamanifuretayasashisagamadakowakuteananoaitakokoronosukimaumetekureruhitowakiminanoerandedate a live");
hashmap.set("GiletteAbdi", "123");
hashmap.set("swizzyy", "Kuchen123");

function myFunction() {
    for (let [key, value] of hashmap) {
        if(document.getElementById("username").value == key && document.getElementById("password").value == value) {
            alert("Correct!");
            window.location.href = "https://portfolio-sami-hindi.netlify.app";
        } else {
            console.log("Incorrect Combination was entered.")
        }
    }
}

function register() {
    if(!(document.getElementById("usernameRegister").value in Object.keys(hashmap))) {
        hashmap.set(document.getElementById("usernameRegister").value, document.getElementById("passwordRegister").value);
        alert("Added Account locally.");
    } else {
        console.log("Username already exists.");
    }
}