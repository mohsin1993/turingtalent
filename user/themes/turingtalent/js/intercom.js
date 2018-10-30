(function () {
  'use strict';

  var intercom_app_id = 'o2cau4z3';

  function reinitIntercom(email, name, company, website) {
    var user = {
      email: email,
      name: name,
      company: company,
      website: website
    };
    
    localStorage.setItem("intercom_user", JSON.stringify(user));
    window.Intercom('update', {...user, app_id: intercom_app_id});
  }
  
  function initIntercom() {
    var user = localStorage.getItem("intercom_user");
    if (user) {
      user = JSON.parse(user);
      window.Intercom('boot', {app_id: intercom_app_id, ...user});
    } else {
      window.Intercom('boot', {app_id: intercom_app_id});
    } 
  }

  window.reinitIntercom = reinitIntercom;
  window.initIntercom = initIntercom;
})();