
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Back'Stage</title>
	<link rel="stylesheet" type="text/css" href="page_acceuil.css">
    
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
	
</head>
<body>

	<div class="lignes">
        <div class="l1"></div>
        <div class="l2"></div>


    </div>

    <div class="container-first">
        <h1><span>Back</span><span>' Stage</span></h1>
     
        <div class="container-btns">
            

       
          <button class="btn-first b1"> ➜ Back'Stage pour Etudiant</button>
      
          
          <button class="btn-first b2"> ➜ Back'Stage pour Pilote</button>
      

          <button class="btn-first b3"> ➜ Back'Stage pour Délégué</button>

       
          <button class="btn-first b4"> ➜ Back'Stage pour Administrateur</button>
      

  
        </div>

    </div>

    <img src="https://cdn.discordapp.com/attachments/764020482559049730/824578406573932564/unknown.png" class="logo" alt="">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

    <script type="text/javascript">
	const titreSpans = document.querySelectorAll('h1 span');
const btns = document.querySelectorAll('.btn-first');
const logo = document.querySelector('.logo');

const l1 = document.querySelector('.l1');
const l2 = document.querySelector('.l2');

window.addEventListener('load', () => {

    const TL = gsap.timeline({paused: true});

    TL
    .staggerFrom(titreSpans, 1, {top: -50, opacity: 0, ease: "power2.out"}, 0.3)
    .staggerFrom(btns, 1, {opacity: 0, ease: "power2.out"}, 0.3, '-=1')
    .from(l1, 1, {width: 0, ease: "power2.out"}, '-=2')
    .from(l2, 1, {width: 0, ease: "power2.out"}, '-=2')
    .from(logo, 0.4, {transform: "scale(0)", ease: "power2.out"}, '-=2')
    

    
    

    TL.play();
})


</script>





    <script src="page_acceuil.js"></script>

</body>
</html>