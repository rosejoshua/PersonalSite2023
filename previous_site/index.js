window.onload = function () {
  let transitionTime = 200;
  fadeOut(document.getElementById('loader'), transitionTime);
  setTimeout(() => {hideElem(document.getElementById('loader'))}, transitionTime);
  setTimeout(() => {displayElem(document.getElementById('content'))}, transitionTime);
  setTimeout(() => {fadeIn(document.getElementById('content'), transitionTime)}, transitionTime);
};
const navigateTo = url => {
  history.pushState(null, null, url);
  router();
};

const router = async () => {
  const routes = [
    { path: "/"},
    { path: "/dev"},
    { path: "/else"},
    { path: "/about"},
    { path: "/contact"},
    { path: "/contact.php"},
  ];

  //Test each route for match
  const potentialMatches = routes.map(route => {
    return {
      route: route,
      isMatch: location.pathname === route.path
    };
  });

  let match = potentialMatches.find(potentialMatch => potentialMatch.isMatch);
  //todo: 404 here maybe? or temp page that redirects
  if(!match) {
    match = {
      route: routes[0],
      isMatch: true
    };
  }

  if (match.route === routes[0] || match.route === routes[1] || match.route === routes[2]) {
    document.getElementById('home_content').style.display = 'block';
    document.getElementById('footer').style.width = '75%';

    if (location.pathname.substring(1) !=="" && document.getElementById(location.pathname.substring(1))) {
      let postsArr = document.getElementsByClassName('cat');
      for (let i=0; i<postsArr.length; i++){
        postsArr[i].style.display = 'none';
      }
      document.getElementById(location.pathname.substring(1) + '-preview').style.display = 'none';
      document.getElementById(location.pathname.substring(1) + '-body').style.display = 'block';
      document.getElementById(location.pathname.substring(1) + '-button').style.display = 'none';
      document.getElementById(location.pathname.substring(1)).style.display = 'block';
    }
    else {
      let postsArr = document.getElementsByClassName('readMoreDiv');
      for (let i=0; i<postsArr.length; i++){
        postsArr[i].style.display = 'block';
      }
      postsArr = document.getElementsByClassName('cat');
      for (let i=0; i<postsArr.length; i++){
        postsArr[i].style.display = 'block';
      }
      postsArr = document.getElementsByClassName('preview_text');
      for (let i=0; i<postsArr.length; i++){
        postsArr[i].style.display = 'block';
      }
      postsArr = document.getElementsByClassName('full_text');
      for (let i=0; i<postsArr.length; i++){
        postsArr[i].style.display = 'none';
      }

      if (match.route === routes[1]) {
        postsArr = document.getElementsByClassName('cat-2');
        for (let i=0; i<postsArr.length; i++){
          postsArr[i].style.display = 'none';
        }
      }
      else if (match.route === routes[2]) {
        let postsArr = document.getElementsByClassName('cat-1');
        for (let i=0; i<postsArr.length; i++){
          postsArr[i].style.display = 'none';
        }
      }
    }
  }

  if (match.route === routes[3]) {
    document.getElementById('home_content').style.display = 'none';
    document.getElementById('footer').style.width = '100%';
    document.getElementById('about').style.display = 'block';
  }
  else {
    document.getElementById('about').style.display = 'none';
  }

  if (match.route === routes[4]) {
    document.getElementById('home_content').style.display = 'none';
    document.getElementById('footer').style.width = '100%';
    document.getElementById('about').style.display = 'none';
    document.getElementById('contact').style.display = 'block';
  }
  else {
    document.getElementById('contact').style.display = 'none';
  }
};

window.addEventListener("popstate", router);

document.addEventListener("DOMContentLoaded", () => {
  document.body.addEventListener("click", e => {
    if (e.target.matches("[data-link]")) {
      e.preventDefault();
      navigateTo(e.target.href);
    }
  });
  router();
});


function hideElem( elem ){
  if( ! elem )
    return;

  elem.style.display = 'none';
}

function displayElem( elem ){
  if( ! elem )
    return;

  elem.style.display = 'block';
}

function fadeIn( elem, ms ) {
  if( ! elem )
    return;

  elem.style.opacity = 0;
  elem.style.filter = "alpha(opacity=0)";
  elem.style.display = "inline-block";
  elem.style.visibility = "visible";

  if( ms )
  {
    var opacity = 0;
    var timer = setInterval( function() {
      opacity += 50 / ms;
      if( opacity >= 1 )
      {
        clearInterval(timer);
        opacity = 1;
      }
      elem.style.opacity = opacity;
      elem.style.filter = "alpha(opacity=" + opacity * 100 + ")";
    }, 50 );
  }
  else
  {
    elem.style.opacity = 1;
    elem.style.filter = "alpha(opacity=1)";
  }
}

function fadeOut( elem, ms ) {
  if( ! elem )
    return;

  if( ms )
  {
    var opacity = 1;
    var timer = setInterval( function() {
      opacity -= 50 / ms;
      if( opacity <= 0 )
      {
        clearInterval(timer);
        opacity = 0;
        elem.style.display = "none";
        elem.style.visibility = "hidden";
      }
      elem.style.opacity = opacity;
      elem.style.filter = "alpha(opacity=" + opacity * 100 + ")";
    }, 50 );
  }
  else
  {
    elem.style.opacity = 0;
    elem.style.filter = "alpha(opacity=0)";
    elem.style.display = "none";
    elem.style.visibility = "hidden";
  }
}
