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


  var getUrl = window.location;
  var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

console.log(baseUrl);

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

const invChoiceBerausEn = document.querySelector('.newestinv__postschoice-item.office-investments');

const invChoiceFlats = document.querySelector('.newestinv__postschoice-item.inwestycje-mieszkaniowe');

const invChoiceFlatsEn = document.querySelector('.newestinv__postschoice-item.flats-investments');

const invChoiceAll = document.querySelector('.newestinv__postschoice-item.all');

const invPostsBerau = document.querySelectorAll('.newestinv__posts-item.inwestycje-biurowe')

const invPostsBerauEn = document.querySelectorAll('.newestinv__posts-item.office-investments')

const invPostsFlats = document.querySelectorAll('.newestinv__posts-item.inwestycje-mieszkaniowe')

const invPostsFlatsEn = document.querySelectorAll('.newestinv__posts-item.flats-investments')

const invPostsAll = document.querySelectorAll('.newestinv__posts-item.single-content')



  if (invChoice.dataset.link == `${baseUrl}/?inv=inwestycje-biurowe` ) {  

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

  } else if (invChoice.dataset.link == `${baseUrl}/projects/?inv=office-investments`){
  invPostsFlatsEn.forEach((flat) => {

    invChoiceBerausEn.classList.add('active');
  flat.style.display = 'none';
  invChoiceFlatsEn.addEventListener('click', () => {
    flat.style.display = 'block';
  })
  invPostsAll.forEach((all) => {
    invChoiceAll.addEventListener('click', () => {
      all.style.display = 'block';
    })
  });

});


} else if (invChoice.dataset.link == `${baseUrl}/?inv=inwestycje-mieszkaniowe`) {
  invChoiceFlats.classList.add('active');
  document.getElementById("#inwestycje-mieszkaniowe").click();
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

}
  else  if (invChoice.dataset.link == `${baseUrl}/projects/?inv=flats-investments`) {
    invChoiceFlatsEn.classList.add('active');
    invPostsBerau.forEach((berau) => {
      berau.style.display = 'none';
      invChoiceBerausEn.addEventListener('click', () => {
        berau.style.display = 'block';
      })
    });
    invPostsAll.forEach((all) => {
      invChoiceAll.addEventListener('click', () => {
        all.style.display = 'block';
      })
    });
  }
 
else {
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
const aboutUsAll = document.querySelector('.aboutustemp__postschoice');
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


if (aboutUsAll.dataset.link == `${baseUrl}/?about=historia` || aboutUsAll.dataset.link == `${baseUrl}/about-us/?about=history`) {
  historya();
} else if (aboutUsAll.dataset.link == `${baseUrl}/?about=klienci` || aboutUsAll.dataset.link == `${baseUrl}/about-us/?about=clients`) {
  clienta();
}

 
}


const pageTypeNews= document.querySelector('.page-type.news'); 

if (pageTypeNews) {

const newsButton = document.querySelector('.news-template__postschoice-item.aktualnosci');

      newsButton.classList.add('active')

}


const frontPageVar= document.querySelector('.frontpage-wrapper');  

if(frontPageVar) {
  


const postsContainer = document.querySelector('.newestinv__posts');


const numberOfInvPosts = document.querySelector('.newestinv__posts').childElementCount;


if(numberOfInvPosts == 1) {
  postsContainer.classList.add('one');
} else if(numberOfInvPosts == 2) {
  postsContainer.classList.add('two');
} else if(numberOfInvPosts == 3) {
  postsContainer.classList.add('three');
} else if(numberOfInvPosts == 4) {
  postsContainer.classList.add('four');
} else if(numberOfInvPosts > 4) {
  postsContainer.classList.add('morethanfour');
}

const newestPostsChoice = document.querySelectorAll('.newestinv__postschoice-item');

newestPostsChoice.forEach((button) => {

button.addEventListener('click', ()=> {
  if(numberOfInvPosts == 1) {
    postsContainer.classList.remove('one');
  } else if(numberOfInvPosts == 2) {
    postsContainer.classList.remove('two');
  } else if(numberOfInvPosts == 3) {
    postsContainer.classList.remove('three');
  } else if(numberOfInvPosts == 4) {
    postsContainer.classList.remove('four');
  }
})
});

}

const contactPage = document.querySelector('.contact-temp');

if (frontPageVar || contactPage) {

const contactButton = document.querySelector('.hidden-button');
const hiddenContact = document.querySelector('.hide-content');


let contactOpen = false;

const contact = () => {
    if (!contactOpen) {
      contactButton.classList.add('open');
      hiddenContact.classList.add('open');
        contactOpen = true;
    } else {
      contactButton.classList.remove('open');
      hiddenContact.classList.remove('open');
        contactOpen = false;
    }
}

contactButton.addEventListener('click', contact);
}