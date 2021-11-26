const menuBtn = document.querySelector('.header__ham');
  const mainMenu = document.querySelector('.header__menu');


  
  let menuOpen = false;
  
  const menu = () => {
      if (!menuOpen) {
          menuBtn.classList.add('open');
          mainMenu.classList.add('open');
          menuOpen = true;
      } else {
          menuBtn.classList.remove('open');
          mainMenu.classList.remove('open');
          menuOpen = false;
      }
  }
  
  menuBtn.addEventListener('click', menu);

window.onscroll = function() {myFunction()};

const header = document.querySelector(".header");
const appWrapper = document.querySelector('.app-container')

// Get the offset position of the navbar
const sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    appWrapper.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
    appWrapper.classList.remove("sticky");
  }
}

const pageTypeProjects= document.querySelector('.page-type.projects'); 

if (pageTypeProjects) {

const invChoice= document.querySelector('.newestinv__postschoice-item');

const invChoiceBeraus = document.querySelector('.newestinv__postschoice-item.inwestycje-biurowe');

const invChoiceFlats = document.querySelector('.newestinv__postschoice-item.inwestycje-mieszkaniowe');

const invChoiceAll = document.querySelector('.newestinv__postschoice-item.all');

const invPostsBerau = document.querySelectorAll('.newestinv__posts-item.inwestycje-biurowe')

const invPostsFlats = document.querySelectorAll('.newestinv__posts-item.inwestycje-mieszkaniowe')

const invPostsAll = document.querySelectorAll('.newestinv__posts-item.single-content')



  if (invChoice.dataset.link == "http://localhost/wordpress/projekty/?inv=inwestycje-biurowe") {
 invChoiceBeraus.classList.add('active');
 invPostsFlats.forEach((flat) => {
  flat.style.display = 'none';
  invChoiceFlats.addEventListener('click', () => {
    flat.style.display = 'block';
  })
  invPostsAll.forEach((all) => {
    invChoiceAll.addEventListener('click', () => {
      all.style.display = 'block';
    })
  });
});
} else if (invChoice.dataset.link == "http://localhost/wordpress/projekty/?inv=inwestycje-mieszkaniowe") {
  invChoiceFlats.classList.add('active');
  invPostsBerau.forEach((berau) => {
    berau.style.display = 'none';
    invChoiceBeraus.addEventListener('click', () => {
      berau.style.display = 'block';
    })
  });
  invPostsAll.forEach((all) => {
    invChoiceAll.addEventListener('click', () => {
      all.style.display = 'block';
    })
  });
  
} else {
  invChoiceAll.classList.add('active');
  invPostsAll.forEach((all) => {
    all.style.display = 'block';
    invChoiceAll.addEventListener('click', () => {
      all.style.display = 'block';
    })
  });
}
}

const pageTypeAboutus= document.querySelector('.page-type.aboutus'); 

if (pageTypeAboutus) {

const aboutUsProfile = document.querySelector('.aboutustemp__postschoice-item.profile');
const aboutUsHistory = document.querySelector('.aboutustemp__postschoice-item.history');
const aboutUsClients = document.querySelector('.aboutustemp__postschoice-item.invclients');
const invProfile = document.querySelector('.invprofile');
const invClients = document.querySelector('section.invclients');
const invHistory = document.querySelector('section.history');


  
  const profile = () => {
        invProfile.classList.add('active');
        invClients.classList.remove('active');
        invHistory.classList.remove('active');
        aboutUsProfile.classList.add('active');
        aboutUsClients.classList.remove('active');
        aboutUsHistory.classList.remove('active');
  }

  aboutUsProfile.addEventListener('click', profile);

  const historya = () => {
    invProfile.classList.remove('active');
    invClients.classList.remove('active');
    invHistory.classList.add('active');
    aboutUsProfile.classList.remove('active');
    aboutUsClients.classList.remove('active');
    aboutUsHistory.classList.add('active');
}

aboutUsHistory.addEventListener('click', historya);

  const clienta = () => {
    invProfile.classList.remove('active');
    invClients.classList.add('active');
    invHistory.classList.remove('active');
    aboutUsProfile.classList.remove('active');
    aboutUsClients.classList.add('active');
    aboutUsHistory.classList.remove('active');
}

aboutUsClients.addEventListener('click', clienta);
 
}


